<!DOCTYPE html>
<html>

    <head>
        <link  rel="stylesheet" type="text/css" href="style.css" />
        <title> <?php echo $title ?> </title>	
    </head>

    <body>
        <div class="header">
            <div class="headerTitle">
                <img src="assets/images/libellule.png" alt="libellule"><h1>Aikido Mouvement Evasion</h1>
            </div>
        </div>
        <div class="headerMenu">
                <?php
                if (isset($_SESSION['log'])) {
                    echo '<a class="boutonco" href="index.php?page=deconnexion">Deconnexion</a>';
                    if ($_SESSION['Statut'] == 1) {
                        echo '<a class="boutonco" href="index.php?page=administration">Administration</a>';
                    }
                } else {
                    echo '<a class="boutonco" href="';
                    echo "index.php?page=connexion";
                    echo '"> Connexion </a>';
                }
                ?>
            </div>

        <div class="navBar">
            <div class="navLeft"><h1>A.M.E</h1></div>
            <div class="navMenu">
                <a href="index.php">Accueil</a>
                <a href="index.php?page=discipline">La Discipline</a>
                <a href="index.php?page=clubs">Les Clubs</a>
                <a href="index.php?page=programme">Le Programme</a>
                <a href="index.php?page=events">Evenements</a>
                <a href="index.php?page=album">Albums Photo</a>
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

