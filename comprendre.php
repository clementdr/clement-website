<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include('head.php'); ?>
    <title>Comprendre</title>
</head>

<body>

    <?php include("nav-burger.php"); ?>


    <main id="main-ue">
        <h1 class="comp">COMPRENDRE</h1>

        <div id="description-ue" class="comp">
            <h5> Objectif : </h5>
            <p>Comprendre les écosystème, les besoins des utilisateurs et les dispositifs de communication numérique.</p>

            <hr>
        </div>

        <div class="ue-content-box comp">
            <button id="projet1">SAE 101 : Audit de communication</button>
            <hr>
            <div class="ue-content projet1">
                <div class="projet-sub">
                    <h6>Sujet : </h6>
                    <p>Réaliser l'analyse sectorielle de 5 sites de musée. Rendre compte de cette analyse dans un document divisée en 5 parties : Contexte - Contenus et Fonctionnalités - Ergonomie et Accessibilité - Identité visuelle et Communication - Cibles et Réseaux sociaux. </p>
                </div>
                <div class="projet-sub-img">
                    <img src="portfolio-img/sae101-2.jpg" alt="sae101">
                    <img src="portfolio-img/sae101.jpg" alt="sae101">

                </div>
                <div class="projet-sub">
                    <h6>Mon rôle : </h6>
                    <p>- Analyser le contenu et les Fonctionnalités des 5 sites de musée selectionnés. <br>
                        - Rendre compte de mes recherches dans un livrable et lors d'une présentation orale. </p>
                </div>
                <div class="projet-sub">
                    <h6>Ce que j'ai appris : </h6>
                    <p>- Analyser et appréhender les exigences d'un sujet. <br>
                        - Mettre en place une stratégie d'analyse efficace, dans le cas présent, découper l'analyse en plusieurs sous-analyses. <br>
                        - Rendre compte de mes recherches de manière synthétique. <br>
                        - Organiser et mettre en page un livrable de manière structurée.</p>
                </div>
                <div class="projet-sub">

                    <a href="sae/D02_SAE101_livrable.pdf" target="_blank">Lien vers le projet </a>
                </div>
            </div>
        </div>

        <div class="ue-content-box comp">
            <button id="projet2">SAE 201 : Explorer les usages du numérique</button>
            <hr>
            <div class="ue-content projet2">
                <div class="projet-sub">
                    <h6>Sujet : </h6>
                    <p>Réaliser des recommandations pour la création d'une application à objectif environnemental. </p>
                </div>
                <div class="projet-sub-img">
                    <img src="portfolio-img/sae201.jpg" alt="sae201">
                    <img src="portfolio-img/sae201-2.jpg" alt="sae201">
                    <img src="portfolio-img/sae201-3.jpg" alt="sae201">

                </div>
                <div class="projet-sub">
                    <h6>Mon rôle : </h6>
                    <p>- Analyser les avis de centaines d'applications dans le but de connaître les attentes utilisateurs. <br>
                        - Rendre compte de mes recherches dans un livrable. </p>
                </div>
                <div class="projet-sub">
                    <h6>Ce que j'ai appris : </h6>
                    <p>- Utiliser un outil d'analyse puissant : Matlab. <br>
                        - Comprendre les avis et proposer des recommandations en adéquations avec ceux-ci. </p>
                </div>
                <div class="projet-sub">

                    <a href="sae/WS201_deroberti_desprez_gratet-taburel_CompteRendu.pdf" target="_blank">Lien vers le projet </a>
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