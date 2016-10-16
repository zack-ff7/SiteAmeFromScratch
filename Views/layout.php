<!DOCTYPE html>
<html>

    <head>
        <link  rel="stylesheet" type="text/css" href="style.css" />
        <title> <?php echo $title ?> </title>	
    </head>

    <body>
        <?php
        if (isset($_SESSION['log'])) {
            echo '<a class="boutonco" href="#">Deconnexion</a>';
        } else {
            echo '<a class="boutonco" href="';
            echo "index.php?page=connexion";
            echo '"> Connexion </a>';
        }
        ?>

        <div class="header">header</div>

        <div class="navBar">
            <div class="navLeft">A.M.E</div>
            <div class="navMenu">
                <a href="index.php">Accueil</a>
                <a href="index.php?page=discipline">La Discipline</a>
                <a href="index.php?page=clubs">Les Clubs</a>
                <a href="index.php?page=programme">Le Programme</a>
                <a href="index.php?page=events">Evenements</a>
                <a href="index.php?page=photo">Albums Photo</a>
                <a href="index.php?page=liens">Liens Utiles</a>
                <a href="index.php?page=discipline">Nous contacter</a>
            </div>
            <div class="navRight">
                <div id="searchbar">
                    <form id="formSearch" name="search" method="POST">
                        <input id="recherche" type="text"/><button id ="search" name="search">Rechercher</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="main">
            <div class="left-side">  image cote gauche</div>
            <div class="content">content<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
            <div class="right-side"> image cote droit</div>
        </div>

        <div class="footer">footer<br><br></div>

    </body>
</html>

