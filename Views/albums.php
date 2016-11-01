<?php
$title="Les albums";
ob_start();

if(isset($_SESSION['Statut'])==0 || isset($_SESSION['Statut'])==1)
{
    echo 'Voici les albums photos';
}
else
{
    echo 'Vous n\'avez pas accès aux albums, inscrivez-vous pour y accéder';
}

$content=  ob_get_clean();
include("Views/layout.php");
?>

