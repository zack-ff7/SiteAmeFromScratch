<?php
$title="Les albums";
ob_start();

if(isset($_SESSION['Statut']))
{
    
    if(isset($_SESSION['log']))
    {
        ?>
<p> Bienvenue sur la page des albums Photos, suivez le lien ci dessous afin d'accéder à l'application de gestion des photos, Vous devrez recreer un compte afin de pouvoir administrer et ajouter des photos.</p>
<a href="/SiteAmeFromScratch/PhotoShow-master/">Voici les albums, Bonne naviguation ! </a>
<?php
        
    }
    
}
else
{
    echo 'Vous n\'avez pas accès aux albums, inscrivez-vous pour y accéder';
}

$content=  ob_get_clean();
include("Views/layout.php");
?>

