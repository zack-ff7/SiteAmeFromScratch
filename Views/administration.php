<?php
$title='Administration';
ob_start();
?>
<p>Administration</p>
<ul>
    <li><a href="index.php?page=members"> Gestion des Membres </a></li>
    <li><a href="index.php?page=editEvent"> Rajouter un évenement</a></li>
</ul>
<?php
$content=  ob_get_clean();
include ('Views/layout.php');
?>



