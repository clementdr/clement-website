<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include('head.php'); ?>
    <title>Développer</title>
</head>

<body>

    <?php include("nav-burger.php"); ?>


    <main id="main-ue">
        <h1 class="comp">DÉVELOPPER</h1>

        <div id="description-ue" class="comp">
            <h5> Objectif : </h5>
            <p>Développer pour le web et les médias numériques.</p>

            <hr>
        </div>
        <div class="ue-content-box comp">
            <button id="projet1">SAE 105 : Produire un site web</button>
            <hr>
            <div class="ue-content projet1">
                <div class="projet-sub">
                    <h6>Sujet : </h6>
                    <p>Produire un site web avec des données stockées dans un fichier. </p>
                </div>
                <div class="projet-sub-img">
                    <img src="portfolio-img/sae105.jpg" alt="sae105">
                    <img src="portfolio-img/sae105-2.jpg" alt="sae105">
                </div>


                <div class="projet-sub">
                    <h6>Mon rôle : </h6>
                    <p>- Développer un site web simple. <br>
                    </p>
                </div>
                <div class="projet-sub">
                    <h6>Ce que j'ai appris : </h6>
                    <p>- Utiliser plusieurs langages de programmation : HTML et CSS. <br>
                        - Rassembler des données dans un fichier JSON. <br>
                        - Faire afficher les données sur un site web et permettre des interactions avec celles-ci.</p>
                </div>
                <div class="projet-sub">

                    <a href="http://mmi22d04.sae105.ovh" target="_blank">Lien vers le projet </a>
                </div>
            </div>
        </div>

        <div class="ue-content-box comp">
            <button id="projet2">SAE 203 : Concevoir un site web avec une source de données</button>
            <hr>
            <div class="ue-content projet2">
                <div class="projet-sub">
                    <h6>Sujet : </h6>
                    <p>Produire un site web avec des données stockées dans une base de données. </p>
                </div>
                <div class="projet-sub-img">
                    <img src="portfolio-img/sae203.jpg" alt="sae203">
                    <img src="portfolio-img/sae203-2.jpg" alt="sae203">
                    <img src="portfolio-img/sae203-3.jpg" alt="sae203">

                </div>
                <div class="projet-sub">
                    <h6>Mon rôle : </h6>
                    <p>- Développer un site web. <br>
                        - Développer la version mobile du site. <br>
                        - Rassembler des données.


                    </p>
                </div>
                <div class="projet-sub">
                    <h6>Ce que j'ai appris : </h6>
                    <p>- Développer un site en mobile-first. <br>
                        - Utiliser un nouveau langage de programmation : MySQL. <br>
                        - Créer et exploiter une base de données. <br>
                        - Permettre de rechercher, ajouter, modifier, supprimer des données via une interface de gestion.</p>
                </div>
                <div class="projet-sub">

                    <a href="https://mmi22d04.sae203.ovh" target="_blank">Lien vers le projet </a>
                </div>
            </div>
        </div>

        <div class="ue-content-box comp">
            <button id="projet3">SAE 202 : Concevoir un produit ou un service et sa communication</button>
            <hr>
            <div class="ue-content projet3">
                <div class="projet-sub">
                    <h6>Sujet : </h6>
                    <p>Concevoir un site de covoiturage pour les étudiants en BUT MMI. </p>
                </div>
                <img src="portfolio-img/sae202.jpg" alt="sae202">

                <div class="projet-sub">
                    <h6>Mon rôle : </h6>
                    <p>- Faire le développement front du site web. <br>
                        - Créer la direction artistique du site web (collaboration avec le pôle graphisme). <br>
                        - Concevoir des éléments graphiques.
                    </p>
                </div>
                <div class="projet-sub">
                    <h6>Ce que j'ai appris : </h6>
                    <p>- Travailler à plusieurs sur un projet de développement web. <br>
                        - Utiliser un outil de développement collaboratif : Github.

                    </p>
                </div>
                <div class="projet-sub">

                    <a href="https://mmi22d04.sae202.ovh" target="_blank">Lien vers le projet </a>
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