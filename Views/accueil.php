<?php


$title='Accueil AME';
ob_start();

if(isset($_SESSION['Statut'])==1)
{
   
}




$content=  ob_get_clean();

include("Views/layout.php");
?>


