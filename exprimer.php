<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include('head.php'); ?>
    <title>Exprimer</title>
</head>

<body>

    <?php include("nav-burger.php"); ?>


    <main id="main-ue">
        <div id="ue-title" class="comp">
            <a href="portfolio.php"><img src="img/retour.svg" alt="retour"> </a>
            <h1 class="comp">EXPRIMER</h1>
        </div>

        <div id="description-ue" class="comp">
            <h5> Objectif : </h5>
            <p>Exprimer un message avec les médias numériques pour informer et communiquer.</p>

            <hr>
        </div>
        <div class="ue-content-box comp">
            <button id="projet1">SAE 104 : Produire un contenu audio et vidéo</button>
            <hr>
            <div class="ue-content projet1">
                <div class="projet-sub">
                    <h6>Sujet : </h6>
                    <p>Réaliser une interview professionnelle sur une thématique choisie par les étudiants. </p>
                </div>
                <div class="projet-sub-img">
                    <img src="portfolio-img/sae104-3.jpg" alt="sae104">
                    <img src="portfolio-img/sae104-4.jpg" alt="sae104">
                    <img src="portfolio-img/sae104-5.jpg" alt="sae104">
                    <img src="portfolio-img/sae104-6.jpg" alt="sae104">
                    <img src="portfolio-img/sae104-7.jpg" alt="sae104">

                </div>
                <div class="projet-sub">
                    <h6>Mon rôle : </h6>
                    <p>- Réalisateur. <br>
                        - Cadreur. <br>
                        - Monteur.
                    </p>
                </div>
                <div class="projet-sub">
                    <h6>Ce que j'ai appris : </h6>
                    <p>- Participer à la rédaction d'un dossier de production. <br>
                        - Mettre en place un plateau de tournage. <br>
                        - Réaliser des plans de coupe et d'insert. <br>
                        - Préparer et effectuer un montage vidéo rythmé.

                    </p>
                </div>
                <div class="projet-sub">

                    <a href="https://www.youtube.com/watch?v=m9rEOx-6fNw&t=43s" target="_blank">Lien vers le projet </a>
                </div>
            </div>
        </div>

        <div class="ue-content-box comp">
            <button id="projet2">SAE 103 : Design graphique</button>
            <hr>
            <div class="ue-content projet2">
                <div class="projet-sub">
                    <h6>Sujet : </h6>
                    <p>Réaliser la refonte graphique d'une marque. </p>
                </div>
                <div class="projet-sub-img">
                    <img src="portfolio-img/sae103.jpg" alt="sae103">
                    <img src="portfolio-img/sae103-2.jpg" alt="sae103">
                    <img src="portfolio-img/sae103-3.jpg" alt="sae103">


                </div>
                <div class="projet-sub">
                    <h6>Mon rôle : </h6>
                    <p>- Créer un nouveau logo. <br>
                        - Élaborer une charte graphique.
                    </p>
                </div>
                <div class="projet-sub">
                    <h6>Ce que j'ai appris : </h6>
                    <p>- Utiliser des logiciels de graphisme : Adobe Illustrator / Abobe InDesign. <br>
                        - Réunir des idées et les assembler dans une moodboard. <br>
                        - Créer des esquisses sur papier. <br>
                        - Élaborer une charte graphique pour présenter tous les éléments du projet.

                    </p>
                </div>
                <div class="projet-sub">

                    <a href="sae/SAE103_TPD_deroberti_CharteGraphique.pdf" target="_blank">Lien vers le projet </a>
                </div>
            </div>
        </div>



        <div class="ue-content-box comp">
            <button id="projet3">YouTube : Partager et se former en autodidacte</button>
            <hr>
            <div class="ue-content projet3">
                <div class="projet-sub">
                    <h6>Sujet : </h6>
                    <p>À travers différents formats audiovisuels (cinéma, animations, vlogs, projets scolaires), partager l'évolution de mon apprentissage des métiers de l'image. </p>
                </div>
                <div class="projet-sub-img">
                    <img src="portfolio-img/chaine-youtube.png" alt="chaine-youtube">
                    <img src="portfolio-img/danny-web.png" alt="danny-web">
                    <img src="portfolio-img/formation-montage.png" alt="formation-montage">
                </div>
                <div class="projet-sub">
                    <h6>Mon rôle : </h6>
                    <p>- Réfléchir à différents scénario. <br>
                        - Produire du contenu de la meilleure qualité possible. <br>

                        - Me former aux différentes techniques de montage vidéo, adaptés à chaque formats audiovisuels. <br>
                        - Me former à la prise de vue pour différents type de contenus.
                    </p>
                </div>
                <div class="projet-sub">
                    <h6>Ce que j'apprends : </h6>
                    <p>- Utiliser des logiciels de montage : DaVinci Resolve / Abobe Première Pro. <br>
                        - Utiliser un logiciel de motion design : Adobe After Effects. <br>
                        - Réaliser des prises de vues professionnelles. <br>
                        - Transmettre un message à travers différents formats audiovisuels.
                    </p>
                </div>
                <div class="projet-sub">
                    <h6>Mes inspirations : </h6>
                    <p>- Danny Gevirtz : réalisateur, chef opérateur, créateur de contenu. Il partage du contnue sur YouTube au format cinéma le plus souvent, mais aussi et surtout les "Behind The Scene".<br>
                        - Anil : créateur de contenu sur YouTube. Il publie des vidéos autour du voyage, de la technologie, de la mode. <br>
                        - Charles Schiele : réalisateur, créateur de contenu. Il publie des vidéos pour apprendre les techniques de réalisation, de prise de vue. Il partage aussi son quotidien professionnel lors de tournages avec des clients. <br>

                    </p>
                </div>
                <div class="projet-sub">

                    <a href="https://youtube.com/@cleementdr?si=DWVAZxyOdo8LY_zX" target="_blank">Lien vers le projet </a>
                </div>
            </div>
        </div>


    </main>


    <?php include 'footer.php'; ?>
    <script>
        const buttons = document.querySelectorAll('.ue-content-box button');

        buttons.forEach(button => {
            button.addEventListener('click', () => {
                const parentDiv = button.parentElement;
                const targetDiv = parentDiv.querySelector('.ue-content');
                const isOpen = parentDiv.classList.contains('open');

                if (isOpen) {
                    parentDiv.classList.remove('open');
                } else {
                    parentDiv.classList.add('open');
                }
            });
        });

        ///

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