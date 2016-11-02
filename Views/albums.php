<?php
$title="Les albums";
ob_start();

if(isset($_SESSION['Statut']))
{
    echo 'Voici les albums photos';
    if(isset($_SESSION['log']))
    {
        include('PhotoShow-master/index.php');  
        
    }
    
}
else
{
    echo 'Vous n\'avez pas accès aux albums, inscrivez-vous pour y accéder';
}

$content=  ob_get_clean();
include("Views/layout.php");
?>

