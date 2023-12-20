<?php
$dsn = 'mysql:host=localhost;dbname=chat_sequence3';
$user = 'user';
$password = 'vps$Clement$19';

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    die($e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pseudo = $_POST['pseudo'];
    $message = $_POST['message'];

    $sql = 'INSERT INTO chat (pseudo, message) VALUES (:pseudo, :message)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['pseudo' => $pseudo, 'message' => $message]);

    echo '<div class="msg-ct"> <p id="aff-psd">' . $pseudo . '</p> <p id="aff-msg">' . $message . '</p> </div>';
} else {
    echo 'Erreur : Accès non autorisé.';
}
