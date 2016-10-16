<?php ?>
<!DOCTYPE html>
<html>
    <head>
        <link  rel="stylesheet" type="text/css" href="assets/css/style.css" />
        <title> <?php echo $title ?> </title>	
    </head>
    <body>
<?php
if (isset($CONNEXION)) {
    echo '<div id="user"><a id="boutonco" href="#">Deconnexion</a></div>';
    echo $_SESSION['Nom'];()
} else {
    echo '<a id="boutonco" href="';
    echo "index.php?page=connexion";
    echo '"> Connexion </a>';
}
?>
       
            <div id="navbar">

                <a href="index.php"> Accueil </a>
                <a href="index.php?page=discipline">La Discipline</a>
                <a href="index.php?page=clubs"> Les Clubs </a>
                <a href="index.php?page=programme"> Le Programme</a>
                <a href="index.php?page=events"> Evenements </a>
                <a href="index.php?page=photo"> Albums Photo</a>
                <a href="index.php?page=liens"> Liens Utiles </a>
                <a href="index.php?page=discipline"> Nous contacter</a>
                <div id="searchbar">
                    <form name="search" method="POST">
                        <label>Rechercher<input type="text"/></label>

                        <button name="search"> ok </button>
                    </form>
                </div>
            </div>
     

<div id="content">
        <div id="left-side">  image du coté</div> 
        <div id="middle"><?php echo $content ?></div>
        <div id="right-side"> image du coté </div>
</div>

    </body>
</html>

