<!DOCTYPE html>
<html>

    <head>
        <link  rel="stylesheet" type="text/css" href="style.css" />
        <title> <?php echo $title ?> </title>	
    </head>

    <body>
<<<<<<< HEAD
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
=======
        <div class="header">
            <div class="headerMenu">
                <?php
                if (isset($_SESSION['log'])) {
                    echo '<a class="boutonco" href="#">Deconnexion</a>';
                } else {
                    echo '<a class="boutonco" href="';
                    echo "index.php?page=connexion";
                    echo '"> Connexion </a>';
                }
                ?>
            </div>
        </div>
>>>>>>> origin/master

        <div class="navBar">
            <div class="navLeft"><h1>A.M.E</h1></div>
            <div class="navMenu">
                <a href="index.php">Accueil</a>
                <a href="index.php?page=discipline">La Discipline</a>
                <a href="index.php?page=clubs">Les Clubs</a>
                <a href="index.php?page=programme">Le Programme</a>
                <a href="index.php?page=events">Evenements</a>
                <a href="index.php?page=photo">Albums Photo</a>
                <a href="index.php?page=liens">Liens Utiles</a>
                <a href="index.php?page=discipline">Contact</a>
            </div>
            <div class="navRight">
                <form id="formSearch" name="search" method="POST">
                    <input id="recherche" type="text"/><button id ="search" name="search">Rechercher</button>
                </form>
            </div>
        </div>
        
        <div class="main">
            <div class="left-side"></div>
            <div class="content"> <?php echo($content); ?> </div>
            <div class="right-side"></div>
        </div>
        
        <div class="footer">footer<br><br></div>
    </body>
</html>

