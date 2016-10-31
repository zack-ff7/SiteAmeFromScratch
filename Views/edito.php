<?php
$title='Event';
ob_start();
?>
<form method="POST">
    <label> Titre  : <input type="text" name="titre"/></label>
    <label> Contenu: <input type="text" name="contenu"/></label>
</form>

<?php

$content=  ob_get_clean();

?>


