<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include('head.php'); ?>
    <title>Accueil</title>
</head>

<body>

    <?php include("nav-burger.php"); ?>


    <main class="main-ac">
        <div class="hero-ac">
            <h1><a href="#about-ac">CLEMENT DE ROBERTI</a></h1>
            <h4>Communication digitale</h4>
            <h5> <a target="_blank" href="book-page/index.html">>> Recruteurs, suivez ce lien ! </a></h5>
        </div>

        <div class="about-ac" id="about-ac">
            <div class="about" id="about">
                <div class="about-ac-des">
                    <h4>about me</h4>
                    <hr>
                    <p>
                        Natif de Chambéry je suis actuellement étudiant en BUT Métiers du
                        Multimédia et de l'Internet à l'IUT de Troyes. Depuis plusieurs
                        années maintenant, je me forme aux métiers de la communication digitale dans un cadre scolaire mais aussi personnel.
                        Je mène à bien des projets divers et variés seul et en équipe. Vous pourrez retrouver toutes
                        mes créations via les différents liens présents sur ce site.
                    </p>
                </div>
                <img src="img/IMG_1242.jpeg" alt="Clement">
            </div>
        </div>
    </main>


    <?php include 'footer.php'; ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const h1 = document.querySelector(".hero-ac h1");
            const h4 = document.querySelector(".hero-ac h4");
            const h5 = document.querySelector(".hero-ac h5");


            function addClassWithDelay(element, className, delay) {
                setTimeout(function() {
                    element.classList.add(className);
                }, delay);
            }

            addClassWithDelay(h1, "active", 0);
            addClassWithDelay(h4, "active", 500);
            addClassWithDelay(h5, "active", 1000);

        });

        function showDivOnScroll() {
            const aboutDiv = document.getElementById("about");
            const rect = aboutDiv.getBoundingClientRect();
            const windowHeight = window.innerHeight;

            const isDivVisible = rect.top <= windowHeight && rect.bottom >= 0;

            aboutDiv.classList.toggle("visible", isDivVisible);
        }

        window.addEventListener("scroll", showDivOnScroll);

        const aboutDiv = document.getElementById("about");
        aboutDiv.classList.remove("visible");
    </script>
</body>

</html>