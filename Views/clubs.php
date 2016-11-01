<?php
$title = "Les Clubs";
ob_start();
?>

<div id="lesClubs">

    <?php
    if (isset($_SESSION['log']) && $_SESSION['Statut'] == 1) {

        echo '<div id="form_club"><form method="POST">';
        echo '<label>Nom du nouveau Club<input type="text" name="nom"/>';
        echo '<input type="submit" value="Valider" name="valider"/>';
        echo '</form></div>';
    }


    foreach ($data as $ligne) {
        echo '<a class="clubs" href="index.php?page=clubs&club=' . $ligne['nom_club'] . '">' . $ligne['nom_club'] . '</a>';
    }
    ?>

</div>

<?php
$content = ob_get_clean();
include("Views/layout.php");
?>

