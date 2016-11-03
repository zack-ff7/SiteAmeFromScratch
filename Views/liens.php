<?php
$title = 'Liens utiles';
ob_start();
?>
<div id="liens">

    <?php
    if (isset($_SESSION['log']) && $_SESSION['Statut'] == 1 && $_SESSION['editorMode']==true) {
        ?>
        <form>
            <textarea name="editorLiens" id="editorLiens">texte a charger/sauvegarder</textarea>
            <script>CKEDITOR.replace('editorLiens');</script>
            <div id="editorMenu">
                <button>Annuler modifications</button>
                <button>Sauvegarder</button>
            </div>
        </form>

        <?php
    } else {
        ?>
        <div id="editorLiens">
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
