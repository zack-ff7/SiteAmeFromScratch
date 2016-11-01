<?php
$title="Les albums";
ob_start();

if(isset($_SESSION['Statut']))
{
    echo 'Voici les albums photos';
    if(isset($_SESSION['log']))
    {
        foreach ($lesalbums as $ligne)
        {
            echo '<p>'.$ligne['NomAlbum'].'</p>';
        }
        echo '<form method="POST"  >';
        echo '<label>Rajouter un Album</label>';
        echo '<input type="text" name="lenom"/>';
        echo '<input type="submit" name="envoyerAlb"/>';
        echo '</form>';
        
        if(isset($message))
        {
            echo '<p>'.$message.'</p>';
        }
        
        
    }
    
}
else
{
    echo 'Vous n\'avez pas accès aux albums, inscrivez-vous pour y accéder';
}

$content=  ob_get_clean();
include("Views/layout.php");
?>

