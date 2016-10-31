<?php


$title='Accueil AME';
ob_start();

if(isset($_SESSION['Statut'])==1)
{
    echo '<form method="POST"><button type="submit" name=admin" id="admin">Administrer</button></form>';
}




$content=  ob_get_clean();

include("Views/layout.php");
?>


