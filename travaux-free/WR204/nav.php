<?php $page = $_SERVER['PHP_SELF']; ?>
<nav>
    <div>
        <div>
            <a href="#"><img src="images/logo.png" width="40" height="40" alt="logo"></a>

            <div class="tutorial">
                <ul>
                    <li> <a <?php if (strpos($page, 'index.php')) echo 'class="active"'; ?> href="index.php">Accueil</a> </li>
                    <li <?php if (strpos($_SERVER['REQUEST_URI'], 'technologie_et_pollution.php') !== false || strpos($_SERVER['REQUEST_URI'], 'impact_environnemental_et_site_web.php') !== false || strpos($_SERVER['REQUEST_URI'], 'high-tech_et_alternatives.php') !== false) echo 'class="active"'; ?>>Articles <img src="images/plus.svg" alt="voir plus" width="10" height="10">
                        <ul>
                            <a href="technologie_et_pollution.php">
                                <li>La technologie, un outil polluant ?</li>
                            </a>
                            <a href="impact_environnemental_et_site_web.php">
                                <li>Comment réduire l’impact environnemental d’un site web ?</li>
                            </a>
                            <a href="high-tech_et_alternatives.php">
                                <li>Quelles alternatives aux objets high-tech ?</li>
                            </a>
                        </ul>
                    </li>
                    <li><a href="demarches_techniques.php">Demarches techniques</a> </li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<a href="#" id="top"><img src="images/top.svg" alt="go_top" width="10" height="10"></a>