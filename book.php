<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include('head.php'); ?>
    <title>Book</title>
</head>

<body>

    <?php include("nav-burger.php"); ?>


    <main class="main-bo">
        <h1 class="comp">EN TRAVAUX...</h1>
    </main>


    <?php include 'footer.php'; ?>
    <script>
        const compElements = document.querySelectorAll('.comp');

        window.addEventListener('load', () => {
            compElements.forEach((element, index) => {
                setTimeout(() => {
                    element.classList.add('visible');
                }, index * 300);
            });
        });
    </script>
</body>

</html>