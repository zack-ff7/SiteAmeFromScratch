<?php

$title = 'titre du club';
ob_start();
?>
<div id="detailClub">

    <?php
    if (isset($_SESSION['log']) && $_SESSION['Statut'] == 1) {
        ?>
        <form method="POST">

            <textarea name="editorClub" id="editorClub"><?php
                if (isset($data)) {
                    echo $data;
                }
                ?></textarea>
            <script>CKEDITOR.replace('editorClub');</script>
            <div id="editorMenu">
                <button>Annuler modifications</button>
                <button type="submit" name="vuedis">Sauvegarder</button>
            </div>
        </form>

        <?php
    } else {
        ?>
        <div id="editorClub">
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
include ('Views/layout.php');
?>