<?php
$title='Administration';
ob_start();
?>
<p>Administration</p>
<a href="index.php?page=members"> Gestion des Membres </a>
<?php
$content=  ob_get_clean();
include ('Views/layout.php');
?>



