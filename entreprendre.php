<!DOCTYPE html>
<html lang="fr">

<head>
    <?php include('head.php'); ?>
    <title>Entreprendre</title>
</head>

<body>

    <?php include("nav-burger.php"); ?>


    <main id="main-ue">
        <h1 class="comp">ENTREPRENDRE</h1>

        <div id="description-ue" class="comp">
            <h5> Objectif : </h5>
            <p>Entreprendre dans le secteur du numérique.</p>

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
                    <img src="portfolio-img/sae104.jpg" alt="sae104">
                    <img src="portfolio-img/sae104-2.jpg" alt="sae104">

                </div>
                <div class="projet-sub">
                    <h6>Mon rôle : </h6>
                    <p>- Trouver et réserver un lieu de tournage.
                    </p>
                </div>
                <div class="projet-sub">
                    <h6>Ce que j'ai appris : </h6>
                    <p>- Communiquer de manière professionnelle à travers un échange de mails.

                    </p>
                </div>
                <div class="projet-sub">

                    <a href="https://www.youtube.com/watch?v=m9rEOx-6fNw&t=43s" target="_blank">Lien vers le projet </a>
                </div>
            </div>
        </div>

        <div class="ue-content-box comp">
            <button id="projet2">Profils professionels</button>
            <hr>
            <div class="ue-content projet2">
                <div class="projet-sub">
                    <h6>Sujet : </h6>
                    <p>Être présent et actif sur des réseaux sociaux professionels. </p>
                </div>
                <div class="projet-sub-img">
                    <img src="portfolio-img/linkedin-2.jpg" alt="linkedin">
                    <img src="portfolio-img/behance.jpg" alt="behance">
                    <img src="portfolio-img/dribbble.jpg" alt="dribbble">


                </div>
                <div class="projet-sub">
                    <h6>Mon rôle : </h6>
                    <p>- Créer des profils professionnels sur divers réseaux.
                    </p>
                </div>
                <div class="projet-sub">
                    <h6>Ce que j'ai appris : </h6>
                    <p>- Créer un profil attractif.<br>
                        - Publier du contenu de manière régulière. <br>
                        - Intéragir avec mon réseau.

                    </p>
                </div>
                <div class="projet-sub">

                    <a href="https://fr.linkedin.com/in/clement-deroberti" target="_blank">Lien vers LinkedIn </a> <br>
                    <a href="https://www.behance.net/clementdr" target="_blank">Lien vers Behance </a><br>
                    <a href="https://dribbble.com/clementdr" target="_blank">Lien vers Dribbble </a>
                </div>
            </div>
        </div>
        <div class="ue-content-box comp">
            <button id="projet3">SAE 204 : Présence numérique</button>
            <hr>
            <div class="ue-content projet3">
                <div class="projet-sub">
                    <h6>Sujet : </h6>
                    <p>Réaliser un CV vidéo. </p>
                </div>
                <div class="projet-sub-img">
                    <img src="portfolio-img/sae204.jpg" alt="sae204">
                    <img src="portfolio-img/sae204-2.jpg" alt="sae204">

                </div>
                <div class="projet-sub">
                    <h6>Mon rôle : </h6>
                    <p>- Réaliser un CV vidéo dynamique.
                    </p>
                </div>
                <div class="projet-sub">
                    <h6>Ce que j'ai appris : </h6>
                    <p>- Utiliser un logiciel de montage vidéo : Adobe Première Pro. <br>
                        - Synthétiser un CV en une vidéo rythmée de 30 secondes.

                    </p>
                </div>
                <div class="projet-sub">

                    <a href="https://youtu.be/3DFJHV1X1kI?si=yfnPw73adKfiNn3N" target="_blank">Lien vers le projet </a>
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