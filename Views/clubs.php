<?php

$title = "Les Clubs";
ob_start();
if (isset($_SESSION['log']) && $_SESSION['Statut'] == 1) {

    echo '<div id="form_club"><form method="POST">';
    echo '<label>Nom du nouveau Club<input type="text" name="nom"/>';
    echo '<input type="submit" value="Valider" name="valider"/>';
    echo '</form></div>';
}


foreach ($data as $ligne) {
    echo '<div><a href="index.php?page=clubs&club='. $ligne['nom_club'] . '">' . $ligne['nom_club'] . '</a></div>';
}

$content = ob_get_clean();
include("Views/layout.php");
?>

