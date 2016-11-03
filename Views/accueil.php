<?php
$title='Accueil AME';
ob_start();
if(isset($_SESSION['Statut'])==1)
{
   
}
?>
<div id="accueil">
<?php
    if (isset($_SESSION['log']) && $_SESSION['Statut'] == 1 && $_SESSION['editorMode']==true) {
        ?>
        <form method="POST">
            <textarea name="editorAccueil" id="editorAccueil"><?php
                if (isset($data)) {
                    echo $data;
                }
                ?></textarea>
            <script>CKEDITOR.replace('editorAccueil');</script>
            <div id="editorMenu">
                
                <button type="submit" name="vueacc">Sauvegarder</button>
            </div>
        </form>

        <?php
    } else {
        ?>
        <div id="editorAccueil">
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
include("Views/layout.php");
?>


