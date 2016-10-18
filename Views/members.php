<?php
$title='Gestion des membres';
ob_start();

foreach ($var as $ligne)
{
    echo $ligne['Id'];
}
$content= ob_get_clean();
include ('Views/layout.php');
?>

