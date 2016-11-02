<?php
$title = 'La Discipline';
ob_start();
?>
<div id="discipline">

    <?php
    if (isset($_SESSION['log']) && $_SESSION['Statut'] == 1) {
        ?>
        <form>
            <textarea name="editorDiscipline" id="editorDiscipline">texte a charger/sauvegarder</textarea>
            <script>CKEDITOR.replace('editorDiscipline');</script>
            <div id="editorMenu">
                <button>Annuler modifications</button>
                <button>Sauvegarder</button>
            </div>
        </form>


        <?php
    } else {
        ?>
        <textarea disabled="true" name="editorDiscipline" id="editorDiscipline">texte a charger/sauvegarder</textarea>
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
