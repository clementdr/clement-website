<?php
  include('head.php');
  include('nav.php');
?>

<a href="#" id="top"><span class="material-symbols-rounded">arrow_upward</span></a>
        
    <main>
        <section id="demarche" class="article">
            <h2>Démarches Techniques</h2>
            <img class="vignette" src="images/rouage.png" alt="arbres">
            <p class="intro_article">Pour que ce blog réponde aux attentes de l'éco-conception, nous avons tenu à respecter certaines règles que vous découvrirez ci-dessous.</p>
            <h4><span>1</span> Le Code</h4>
            <div class="left">
                <div>
                    <p>
                        <b>• HTTPS Minification du code HTML et CSS</b> : La minification du code permet de supprimer toutes les données inutilisées ou répétées inutilement. 
                        Ainsi le code devient plus léger et donc moins énergivore. Ce pourquoi nous avons passer nos code dans un générateur de minification.
                        <br><br>Retrouvez ici la <a href="https://developer.chrome.com/docs/lighthouse/performance/unminified-css/">documentation pour minifier votre CSS</a>
                    </p>  
                </div>
            </div>
            <div class="right">
                <div>
                    <p>
                        <b>• Eliminer les ressources bloquant le rendu</b> : Lorsqu'une page s'ouvre tous les fichier inclus sont chargés, sauf directive contraire.
                        Cela signifie que la page aura un grand nombre de données à télécharger alors qu'une infime partie seulement servira. On comprend
                        donc que charger un fichier entier, tel que le CSS qui est généralement le même pour plusieurs pages, augmentera le temps d'affichage de votre page.
                        Il exite un moyen pour différer le chargement de ce fichier dans le head du HTML et c'est ce que nous avons appliqué à ce blog.
                        <br><br> Retrouvez-ici la <a href="https://developer.chrome.com/docs/lighthouse/performance/render-blocking-resources/"> documentation pour différer le chargement de vos fichiers CSS et Javascript</a>. 
                    </p>  
                </div>
            </div>
            <h4><span>2</span> Les images</h4>
            <div class="left">
                <div>
                    <p>
                        <b>• Redimensionnement des images</b> : Lorsque vous importez une images dans votre site, il est important de comprendre que peu importe
                        la taille que vous lui donnerez dans le CSS, le fichier qui sera téléchargé sera à la taille initiale et non pas recalculer. De plus, plus 
                        une images est grande plus son poids est lourd. Il faut donc absolument redimensionner vos photos à la taille
                        à laquelle vous souhaitez voir votre image apparaitre sur votre site.
                    </p>  
                </div>
            </div>
            <div class="right">
                <div>
                    <p>
                        <b>• Conversion en WEBP</b> : Certains formats d'images sont plus lourd que d'autres et, pour les intégrer à votre site web, plus le format
                        sera leger mieux ça vaudra. Bonne nouvelle, il existe un format d'image spécialement conçu pour le web : le WEBP. Nous avons, ainsi, compressé toutes nos images dans ce format pour optimiser le temps de chargement de la page.
                    </p>  
                </div>
            </div>
            <div class="left">
                <div>
                    <p>
                        <b>• Définition de la Taille des Images dans le code HTML</b> : Si les animations sont <span>trop lourdes</span> ou <span>trop nombreuses</span>
                        le temps de chargement sera impacté et pourra inscité vos utilisateurs impatients à <span>quitter votre page</span>. Le poids des données étant déjà
                        lourd, si un utilisateur ayant une mauvaise connexion Internet ne sera d'ailleurs pas du tout en capacité d'ouvrir la page.
                    </p>  
                </div>
            </div>
            <h4><span>3</span> Les Tests</h4>
            <p class="intro_article">Afin de tester la performance de notre blog, nous l'avons fais analyser par différents outils en ligne, et ce pour chacune des pages.
               <br> En voici les résultats. </p>
            
        </section>

    </main>

<?php
  include('footer.php');
?>