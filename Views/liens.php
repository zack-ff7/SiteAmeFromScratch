<?php
$title = 'Liens utiles';
ob_start();
?>
<div id="liens">

    <?php
    if (isset($_SESSION['log']) && $_SESSION['Statut'] == 1) {
        ?>
        <textarea name="editorLiens" id="editorLiens">texte a charger/sauvegarder</textarea>
        <script>CKEDITOR.replace('editorLiens');</script>
        <?php
    } else {
        ?>
        <textarea name="editorLiens" id="editorLiens">texte a charger/sauvegarder</textarea>
        <?php
    }
    ?>
</div>
    <?php
    $content = ob_get_contents();
    ob_end_clean();
    ?>

<?php
include("Views/layout.php");
?>
