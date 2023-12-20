<?php
$dsn = 'mysql:host=localhost;dbname=chat_sequence3';
$user = 'user';
$password = 'vps$Clement$19';

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    die($e->getMessage());
}

$sql = 'SELECT pseudo, message FROM chat ORDER BY id DESC LIMIT 10';
$stmt = $pdo->prepare($sql);
$stmt->execute();
$row = array_reverse($stmt->fetchAll());

?>

<html>

<head>
    <meta charset="UTF-8">
    <title>Chat jQuery</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        $(document).ready(function() {
            $('form').submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: 'dire.php',
                    data: $('form').serialize(),
                    success: function(response) {
                        $('#messages').prepend(response);
                        $('#pseudo, #message').val('');
                    }
                });
            });
        });
    </script>
</head>

<body>
    <main>
        <div id="content-box">

            <div id="top">
                <h1>Chat Jquery</h1>
            </div>

            <div id="old-msg">
                <?php
                foreach ($row as $value) {
                    echo '<div class="msg-ct"> <p id="aff-psd">' . $value['pseudo'] . '</p> <p id="aff-msg">' . $value['message'] . '</p> </div>';
                }
                ?>
            </div>
            <div id="messages">

            </div>

            <form>
                <input name="pseudo" type="text" id="pseudo" placeholder="Pseudo" required>
                <input name="message" type="text" id="message" placeholder="Message" required>
                <input type="submit" id="envoyer" value="Envoyer">
            </form>


        </div>
    </main>

    <script>
        var elements = document.querySelectorAll('#aff-psd');

        elements.forEach(function(element) {
            var premiereLettre = element.textContent.charAt(0);
            element.textContent = premiereLettre;
        });
    </script>
</body>

</html>