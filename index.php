<?php

session_start();
include('Model/Model.php');
include('Model/UserManager.php');


$Us = new UserManager();


if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'creation' :
            if (isset($_POST['inscription'])) {
                $result = $Us->SignUp($_POST['log'], $_POST['pass'], $_POST['verifpass'], $_POST['mail'], $_POST['verifmail'], $_POST['nom'], $_POST['prenom'], $_POST['dateNaiss'], 1);
                echo $result;


                switch ($result) {
                    case 0:
                        $Message = "Creation réussie ! ";
                        include('Views/succes.php');
                        break;
                    case 1 :
                        $Message = "Les Mails ne sont pas identiques.";
                        include('Views/creation.php');
                        break;
                    case 2 :
                        $Message = "Les mots de passes ne sont pas identiques";
                        include('Views/creation.php');
                        break;
                }
            } else {
                include('Views/creation.php');
            }
            break;


        case 'connexion':
            if (isset($_POST['connect'])) {
                $result = $Us->logIn($_POST['login'], $_POST['lepass']);
                $res = $Us->detailUser($_POST['login']);

                switch ($result) {
                    case 0:
                        $Message = "Connexion Réussie. ";
                        $_SESSION['log'] = $res['Id'];
                        $_SESSION['Mail'] = $res['Email'];
                        $_SESSION['Statut'] = $res['Statut'];
                        $_SESSION['Nom'] = $res['Nom'];
                        $_SESSION['Prenom'] = $res['Prenom'];
                        $CONNEXION = true;

                        include('Views/succes.php');
                        break;
                    case 1 :
                        $Message = "Pas d'identifiants, vous n'êtes surement pas inscrit.";
                        include('Views/connexion.php');
                        break;
                    case 2 :
                        $Message = "Mot de passe incorrect";
                        include('Views/connexion.php');
                        break;
                }
            } else {
                include('Views/connexion.php');
            }
            break;


        case 'clubs' :
            include('Views/clubs.php');
            break;

        case 'contact':
            include('Views/contact.php');
            break;

        case 'discipline':

            include('Views/discipline.php');
            break;

        case 'events' :
            include('Views/events.php');
            break;

        case 'liens' :
            include('Views/liens.php');
            break;

        case 'programme' :
            include('Views/programme.php');
            break;

        case 'album' :
            include('Views/albums.php');
            break;
        case 'deconnexion':
            include('Views/deconnexion.php');
            break;
            
    }
} else {
    include('Views/accueil.php');
}
?>