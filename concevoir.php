<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include('head.php'); ?>
    <title>Concevoir</title>
</head>

<body>

    <?php include("nav-burger.php"); ?>


    <main id="main-ue">
        <div id="ue-title" class="comp">
            <a href="portfolio.php"><img src="img/retour.svg" alt="retour"> </a>
            <h1 class="comp">CONCEVOIR</h1>
        </div>

        <div id="description-ue" class="comp">
            <h5> Objectif : </h5>
            <p>Concevoir ou co-concevoir une réponse stratégique pertinente à une problématique complexe.</p>

            <hr>
        </div>
        <div class="ue-content-box comp">
            <button id="projet1">SAE 102 : Recommandation de communication</button>
            <hr>
            <div class="ue-content projet1">
                <div class="projet-sub">
                    <h6>Sujet : </h6>
                    <p>Construire une recommandation de communication pour la sortie ou le repositionnement d'un produit ou d'un service. </p>
                </div>
                <div class="projet-sub-img">
                    <img src="portfolio-img/sae102-2.jpg" alt="sae102">
                    <img src="portfolio-img/sae102.jpg" alt="sae102">

                </div>
                <div class="projet-sub">
                    <h6>Mon rôle : </h6>
                    <p>- Participer à la mise en place d'une stratégie de communication. <br>
                        - Détourner des logos d'entreprises françaises. <br>
                        - Écrire une norme d'écriture et de mise en page.</p>
                </div>
                <div class="projet-sub">
                    <h6>Ce que j'ai appris : </h6>
                    <p>- Participer à une réunion de groupe afin de mettre en place une stratégie. <br>
                        - Utiliser un logiciel de retouche photo : Adobe Photoshop. <br>
                        - Rédiger de manière professionnelle une norme d'écriture et de mise en page. </p>
                </div>
                <div class="projet-sub">

                    <a href="sae/D02_SAE102_livrable.pdf" target="_blank">Lien vers le projet</a>
                </div>
            </div>
        </div>

        <div class="ue-content-box comp">
            <button id="projet2">Post LinkedIn</button>
            <hr>
            <div class="ue-content projet2">
                <div class="projet-sub">
                    <h6>Sujet : </h6>
                    <p>Publier un post sur LinkedIn afin d'informer mon réseau que je suis ouvert au marché de l'emploie. </p>
                </div>
                <div class="projet-sub-img">
                    <img src="portfolio-img/linkedin.jpg" alt="linkedin">
                    <img src="portfolio-img/linkedin-3.jpg" alt="linkedin">

                </div>
                <div class="projet-sub">
                    <h6>Mon rôle : </h6>
                    <p>- Publier un post sur le réseau professionnel LinkedIn.</p>
                </div>
                <div class="projet-sub">
                    <h6>Ce que j'ai appris : </h6>
                    <p>- Publier de manière professionnelle un post sur un réseau social. </p>
                </div>
                <div class="projet-sub">

                    <a target="_blank">Lien non-disponible</a>
                </div>
            </div>
        </div>

        <div class="ue-content-box comp">
            <button id="projet3">WR 206 : Expression et Communication</button>
            <hr>
            <div class="ue-content projet3">
                <div class="projet-sub">
                    <h6>Sujet : </h6>
                    <p>Réaliser un portrait. </p>
                </div>
                <img src="portfolio-img/wr206.jpg" alt="wr206">
                <div class="projet-sub">
                    <h6>Mon rôle : </h6>
                    <p>- Mettre en place une stratégie d'écriture, dans le cas présent, la création d'une devinette "spéciale". <br>
                        - Écrire le portrait du langage.</p>
                </div>
                <div class="projet-sub">
                    <h6>Ce que j'ai appris : </h6>
                    <p>- Analyser l'existant : pub pour la nouvelle porsche 911. <br>
                        - Écrire un portrait qui puisse se lire de haut en bas, mais aussi de bas en haut. <br>
                        - Attirer l'attention d'un auditoire. </p>
                </div>
                <div class="projet-sub">

                    <a href="portfolio-img/wr206-finale.pdf" target="_blank">Lien vers le projet</a>
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