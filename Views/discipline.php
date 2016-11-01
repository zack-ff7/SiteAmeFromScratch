<?php
$title = 'La Discipline';
ob_start();
?>
<div id="discipline">

    <?php
    if (isset($_SESSION['log']) && $_SESSION['Statut'] == 1) {
        ?>
        <textarea name="editorDiscipline" id="editorDiscipline">texte a charger/sauvegarder</textarea>
        <script>CKEDITOR.replace('editorDiscipline');</script>
        <?php
    } else {
        ?>
        <textarea name="editorDiscipline" id="editorDiscipline">texte a charger/sauvegarder</textarea>
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
