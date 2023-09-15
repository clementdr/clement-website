<?php
  include('head.php');
  include('nav.php');
?>


        
    <main>
        <section class="article">
            <h2>Réduire l’impact environnemental d’un site web</h2>
            <img class="vignette" src="images/vignette-2.webp" alt="arbres">
            <p class="intro_article">
                Depuis une dixaine d'année, nous avons pris conscience des réels impacts négatifs de l'activité humaine sur 
                l'environnement. La création de site web, et plus généralement le <span>secteur informatique</span>, font partie  
                des <span>grands émetteurs de CO2</span> qui participent à la dégradation de la Planète. Ainsi, dans une <span>démarche 
                écologique</span>, il est nécessaires d'appliquer certains bons gestes pour un site éco-conçu. <br>
                Nous allons donc analyser différentes étapes de conception d'un site Internet et vous proposer des alternatives pour que 
                votre site répondent dès maintenant aux attentes au principe d'<span>éco-conception</span>.
            </p>


            <h3><span>1</span> Utiliser les éléments HTML appropriés</h3>
            
            <div class="left">
                <div>
                    <p>
                        Lorsque vous créez vos pages web en <span>HTML</span> et <span>CSS</span>, il est important de garder à l'esprit qu'une performance 
                        optimisée  est synonyme d'une bonne expérience utilisateur sur votre site.
                    </p>
                    <p>
                        Prenons pour exemple l'utilisation des balises <span>&lt;div&gt;</span> et <span>&lt;class&gt;</span>. <br> 
                        Les <span>&lt;div&gt;</span> permettent de diviser votre page en différents blocks, tandis que les <span>&lt;class&gt;</span> sont utilisées pour 
                        appliquer un style CSS à plusieurs éléments. <br> Ces dernières ont un point en commun : elle sont souvent <span>utilisées de manière 
                        abusive</span> lors de la conception d'un site web. 
                        Or, plus vous les multipierez dans votre code, plus ce dernier sera complexe et plus la <span>taille de vos fichiers
                        augmentera</span>. Cela affectera alors les performances de votre page, car le navigateur devra parcourir plus de code pour afficher le résultat.
                    </p>
                </div>
                <img class="img_right" src="images/language.webp" width="443" height="306.58" alt="Homme qui code">
            </div>
            <div class="right">
                <img class="img_right" src="images/structure.webp" width="443" height="306.58" alt="Structure d'une page">
                <div>
                   <p>
                        Pour y remédier, il est important de penser la <span>structure de votre page</span> et d'utiliser les <span>éléments
                        HTML appropriés</span>  pour organiser 
                        le contenu. Ainsi, vous garderez un code simple optimisant la performance de votre site.
                    </p>
                    <p>
                        Voici un lien vers la <a target="blank" href="https://developer.mozilla.org/fr/docs/Web/HTML">documentation HTML</a> pour mieux choisir vos balises.
                    </p>
                </div>
                
            </div>
    
            <h3><span>2</span> Minifier et Différer</h3>
            <div class="left">
                <div>
                    <p>
                        Comme vu ci-dessus, chaque élément intégré à votre code aura un impact sur le poid de votre page et donc sur son temps 
                        de chargement lors de l'ouverture par le navigateur. Certains de ces éléments sont d'ailleurs très 
                        souvent oubliés et pourtant ils impactent directement la performance de votre site. On retrouve parmis eux : les sauts de lignes,
                        les commentaires et biensur les lignes de codes inutilisées dans le CSS et/ou Javascript. <br>
                        Pour ce débarasser de toutes ces données superflux, vous pouvez minifier votre code lorsque le développement de votre site est 
                        finalisé. Grâce à la minification tout le code inutile est supprimé pour ne former qu'un seul et unique bloc compact de ligne de code. <br>
                        On en trouve de nombreux en ligne tel que <a target="blank" href="https://www.minifier.org/">Minifier.org</a> ou encore <a target="blank" href="https://www.toptal.com/developers/cssminifier">Toptal.com</a>.
                    </p>
                    <p>
                        Mais, minifier votre code ne suffit pas. En effet, lors de l'ouverture de votre page, le naigateur charge l'entièreté de vos fichier CSS et/ou 
                        Javascript. Or, selon le principe d'éco-conception, il devrait charger uniquement le code utilisé à l'instant T. Pour cela, il existe
                        l'attribut "defer" pour le Javascript, à mettre dans l'appel du fichier Javascript dans l'en-tête du HTML (<span>&lt;script&gt;</). Et 
                        pour le CSS, remplacer "rel='stylessheet'" par "rel='preload'". Ainsi, le reste du Javascript et du CSS sera chargé en différé.
                    </p>
                </div>
                <img class="img_right" src="images/page.webp" width="443" height="303" alt="page web illustration">
            </div>
    
            <h3><span>3</span> Utiliser des formats image et vidéo légers</h3>
            <div class="right">
                <img class="img_right" src="images/format.webp" width="443" height="420.26" alt="formats des images et vidéos">
                <div>
                    <p>
                        Les formats <span>WebP</span> et <span>WebM</span> sont deux formats de fichier développés par <span>Google</span> pour les images et les vidéos.
                        Ils offrent une <span>meilleure compression</span> que les formats traditionnels, tels que le JPEG ou le webp pour les
                        images et le MP4 pour les vidéos.
                    </p>
                    <p>
                        En utilisant ces formats sur un site web, vous améliorerez les performances du site en réduisant le temps
                        de chargement des pages contenant des images et des vidéos. Les fichiers <span>plus petits</span> se chargent <span>plus
                        rapidement</span>, cela améliore grandement l'expérience utilisateur.
                    </p>
                    <p>
                        En outre, l'utilisation de <span>formats compressés</span> peut également contribuer à réduire la quantité de bande
                        passante nécessaire pour charger le site, ce qui peut être avantageux pour les utilisateurs qui ont une
                        connexion Internet plus lente ou limitée. Cela peut également contribuer à <span>réduire les coûts d'hébergement
                        et de stockage de données</span> pour le propriétaire du site.
                    </p>
                </div>
            </div>    

            <h3><span>4</span> Créer un design sobre</h3>
            <p class="intro_article">
                Lors de la conception de votre site web, vous pourriez être tenté d'animer chaque section de votre page pour rendre votre navigation 
                plus dynamique. Mais qu'en sera t-il de la <span>performance</span> ? En pensant éco-conception, on comprend rapidement que l'utilisation
                d'<span>animations superflux n'est pas vraiment recommandée</span>. Voici quelques une des raisons :
            </p>
            <div class="right">
                <div>
                    <p>
                        <b>• Temps de chargement trop important</b> : Si les animations sont <span>trop lourdes</span> ou <span>trop nombreuses</span>
                        le temps de chargement sera impacté et pourra inscité vos utilisateurs impatients à <span>quitter votre page</span>. Le poids des données étant déjà
                        lourd, si un utilisateur ayant une mauvaise connexion Internet ne sera d'ailleurs pas du tout en capacité d'ouvrir la page.
                    </p>  
                </div>
                <img class="img_right" src="images/load.webp" width="443" height="234.93" alt="écran de chargement">
            </div>

            <div class="left">
                <img class="img_right" src="images/notif.webp" width="443" height="277.65" alt="Trop de notifications">
                <div>
                    <p>
                        <b>• Source de distraction</b> : Des animations excessives peuvent <span>distraire l'utilisateur</span> et <span>rendre difficile la lecture ou
                        la recherche</span> de l'information souhaitée. Elles peuvent également être <span>source de contrariété</span> pour certains visiteurs
                        et les amener à <span>quitter la page</span> plus rapidement.
                    </p>
                </div>
            </div>
            <div class="right">
                <div>
                    <p>
                        <b>• Manque d'accessibilité</b> : Les animations peuvent également rendre le <span>site moins accessible</span> pour les personnes ayant des troubles
                        de la vision ou de la cognition. Les personnes atteintes d'épilepsie peuvent être particulièrement
                        sensibles aux animations clignotantes, qui peuvent déclencher des crises.
                    </p>
                </div>
                <img class="img_right" src="images/accessibilite.webp" width="443" height="214.26" alt="Accessibilité du site">
            </div>
            <p class="intro_article">
                En résumé, les <span>animations</span> peuvent être un excellent moyen d'ajouter de l'interactivité et de l'engagement
                à un site web, mais elles doivent être <span>utilisées avec parcimonie</span> et intégrées de manière cohérente à la
                conception globale de votre site. Trop d'animations superflues peuvent nuire à la performance et à
                l'expérience utilisateur.
            </p>
    
            <h3><span>5</span> Heberger sur des serveurs “verts”</h3>
            <div class="left">
                <img class="img_right" src="images/serveur.webp" width="443" height="236.31" alt='serveur "vert"'>
                <div>
                    <p>
                        L'hébergement de votre site web sur un <span>serveur vert</span> présente de nombreux avantages pour l'environnement,
                        la responsabilité sociale, les économies d'énergie et de coûts, ainsi que pour sa performance.
                        Les <span>serveurs verts</span> utilisent de l'<span>énergie renouvelable ou propre</span>, réduisant les 
                        émissions de gaz à effet de serre et permettant aux entreprises de montrer leur engagement envers la protection 
                        de l'environnement.
                        Les <span>serveurs verts</span> sont également <span>plus performants</span>, <span>plus fiables</span> et 
                        nécessitent moins de maintenance, ce qui peut réduire les coûts liés à la gestion des serveurs et <span>améliorer 
                        l'expérience utilisateur</span>. <br><br>
                        Voici quelques un des serveurs web accessibles pour tous : <a target="blank" href="https://www.o2switch.fr/">o2switch</a>, 
                        <a target="blank" href="https://www.planethoster.com/fr/Hebergements-World">PlanetHoster</a> ou encore 
                        <a target="blank" href="https://www.infomaniak.com/fr/hebergement/hebergement-web">InfoManiak</a>.
                    </p>
                </div>
            </div>
    
        </section>


    
        <hr>

        <h2>Vous aimerez aussi...</h2>
        <section>
            <article>
                <img src="images/article1.webp" width="525.63" height="328.64" alt="article 1">
                <div>
                    <h3>La technologie, un outil polluant ?</h3>
                    <p>La technologie est aujourd'hui omniprésente dans nos vies, mais son impact environnemental est
                        souvent sous-estimé. En effet, le numérique génère des coûts écologiques énormes : émissions de gaz
                        à effet de serre, consommation d'énergie, épuisement des ressources naturelles... Face à la
                        transformation écologique, comment le</p>
                    <a href="technologie_et_pollution.php">Voir l'article complet</a>
                </div>
            </article>
            <article>
                <img src="images/article3.webp" width="525.63" height="328.64" alt="article 3">
                <div>
                    <h3>Quelles alternatives aux objets high-tech ?</h3>
                    <p>Depuis plusieurs années, le numérique high-tech a envahi notre quotidien. Les smartphones, tablettes,
                        ordinateurs portables, objets connectés, jeux vidéo et réseaux sociaux sont devenus des
                        incontournables de notre vie sociale, professionnelle et personnelle. Cependant,...</p>
                    <a href="high-tech_et_alternatives.php">Voir l'article complet</a>
                </div>
            </article>
        </section>
</main>

<?php
  include('footer.php');
?>