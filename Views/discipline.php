<?php
$title = 'La Discipline';
ob_start();
?>
<div id="discipline">

    <?php
    if (isset($_SESSION['log']) && $_SESSION['Statut'] == 1) {
        ?>
        <form method="POST">

            <textarea name="editorDiscipline" id="editorDiscipline"><?php
                if (isset($data)) {
                    echo $data;
                }
                ?></textarea>
            <script>CKEDITOR.replace('editorDiscipline');</script>
            <div id="editorMenu">
                <button>Annuler modifications</button>
                <button type="submit" name="vuedis">Sauvegarder</button>
            </div>
        </form>

        <?php
    } else {
        ?>
        <div id="editorDiscipline">
            <?php
            if (isset($data)) {
                echo $data;
            }
            ?>
        </div>
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
