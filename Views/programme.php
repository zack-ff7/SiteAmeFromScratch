<?php
$title = 'Le Prrogramme';
ob_start();
?>
<div id="programme">

    <?php
    if (isset($_SESSION['log']) && $_SESSION['Statut'] == 1) {
        ?>
        <textarea name="editorProgramme" id="editorProgramme">texte a charger/sauvegarder</textarea>
        <script>CKEDITOR.replace('editorProgramme');</script>
        <?php
    } else {
        ?>
        <textarea name="editorProgramme" id="editorProgramme">texte a charger/sauvegarder</textarea>
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
