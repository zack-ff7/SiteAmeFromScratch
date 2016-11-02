<?php
$title = 'Le Programme';
ob_start();
?>
<div id="programme">

    <?php
    if (isset($_SESSION['log']) && $_SESSION['Statut'] == 1) {
        ?>
        <form method="POST">
            <textarea name="editorProgramme" id="editorProgramme"><?php if(isset($data))
        {
            echo $data;
        }?></textarea>
            <script>CKEDITOR.replace('editorProgramme');</script>
            <div id="editorMenu">
                <button>Annuler modifications</button>
                <button type="submit" name="sauvpro">Sauvegarder</button>
            </div>
        </form>
        <?php
    } else {
        ?>
        <div id="editorProgramme">
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
