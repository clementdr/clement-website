<?php require 'debut_html.inc.php'; ?>

<?php require 'menu_html.inc.php'; ?>

<div id="contenu">
    <h1>Liste des jeux</h1>
</div>

<?php
$mabd = new PDO('mysql:host=localhost;dbname=MMIple;charset=UTF8;', 'MMIpleUser', 'vps$Clement$19');
$mabd->query('SET NAMES utf8;');
$req = " SELECT * FROM mmiple_jeux ";
$resultat = $mabd->query($req);

foreach ($resultat as $value) {
    echo '<div id="liste-jeu">';
    echo '<li>' . $value['jeu_nom'] . ' - ' . $value['jeu_editeur'] . ' (ref n°' . $value['jeu_code'] . ')' . '</li>';
    echo '<p>' . 'Joueurs (mini/maxi) : ' . '('  . $value['jeu_nb_joueurs_mini'] . '/' . $value['jeu_nb_joueurs_maxi'] . ')' . "<br\n>" . '</p>';
    echo '<p>' . 'Prix ' .  $value['jeu_prix_unit'] . ' €' . '</p>';
    echo '<p>' . 'Stock : ' .  $value['jeu_qte_stock'] . '</p>';
    echo '<p>' . 'Durée d\'une partie : ' .  $value['jeu_duree_partie'] . ' min' . '</p>';
    echo '<div id="liste-jeu-img">';
    echo '<img src="' . $value['jeu_photo1'] . '" alt="' . $value['jeu_photo1'] . '">' . ' ' .  '<img src="' . $value['jeu_photo2'] . '" alt="' . $value['jeu_photo2'] . '">' . ' ' .  '<img src="'  . $value['jeu_photo3'] . '" alt="' . $value['jeu_photo3'] . '">';
    echo '</div>';
    echo '</div>';
    echo "<br\n>";
}
?>

<?php require 'fin_html.inc.php'; ?>