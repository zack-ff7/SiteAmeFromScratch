<?php

session_start();
include('Model/Model.php');
include('Model/UserManager.php');
include('Model/ClubManager.php');
include('Model/ViewManager.php');
include ('Model/EventManager.php');

$Club = new ClubManager();
$Us = new UserManager();
$View = new ViewManager();
$Event = new EventManager();

if (isset($_POST['btnEditorFalse'])) {
    $_SESSION['editorMode'] = true;
}
if (isset($_POST['btnEditorTrue'])) {
    $_SESSION['editorMode'] = false;
}

if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'creation' :
            if (isset($_POST['inscription'])) {
                $result = $Us->SignUp($_POST['log'], $_POST['pass'], $_POST['verifpass'], $_POST['mail'], $_POST['verifmail'], $_POST['nom'], $_POST['prenom'], $_POST['dateNaiss'], 1);
                echo $result;


                switch ($result) {
                    case 0:
                        $message = "Creation réussie ! ";
                        include('Views/succes.php');
                        break;
                    case 1 :
                        $message = "Les Mails ne sont pas identiques.";
                        include('Views/creation.php');
                        break;
                    case 2 :
                        $message = "Les mots de passes ne sont pas identiques";
                        include('Views/creation.php');
                        break;
                    case 3 :
                        $message = "Remplissez tous les champs";
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
                        $_SESSION['editorMode'] = false;
                        $CONNEXION = true;
                        $STATUT = $_SESSION['Statut'];
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
            if (isset($_GET['club'])) {
                if(isset($_POST['btnClub']))
                {
                  
                    $Club->ModifClub($_GET['club'],$_POST['editorClub']);
                }
                $data=$Club->afficherTexteClub($_GET['club']);
                
                include('Views/affichageClub.php');
            } else {
                $data = $Club->afficherClubs();
                include('Views/clubs.php');
            }
            break;

        case 'contact':
            include('Views/contact.php');
            break;

        case 'discipline':
            if (isset($_POST['vuedis'])) {
                $View->modifDiscipline($_POST['editorDiscipline']);
            }

            $data = $View->afficherDiscipline();
            include('Views/discipline.php');



            break;

        case 'events' :
            if (isset($_POST['newBillet'])) {
               
                $Event->ajouterEvent($_POST['titleEdit'], $_POST['contenuEdit'],$date = date("d-M-Y"));
            }
            $data = $Event->afficherEvents();
            include('Views/events.php');
            break;

        case 'liens' :
            if (isset($_POST['sauvliens'])) {
                $View->modifliens($_POST['editorLiens']);
            }
            $data = $View->afficherLiens();
            include('Views/liens.php');
            break;

        case 'programme' :
            if (isset($_POST['sauvpro'])) {
                $View->modifProgramme($_POST['editorProgramme']);
            }
            $data = $View->afficherProgramme();
            include('Views/programme.php');
            break;

        case 'album' :
            include('Views/albums.php');
            break;
        case 'deconnexion':
            include('Views/deconnexion.php');
            break;

        case 'administration':
         
            $var = $Us->allUser(1); //Utlisateurs validés
            $var2 = $Us->allUser(-1); //Utilisateurs non validés
            include ('Views/members.php');
            break;
    }
} else {
    if (isset($_POST['vueacc'])) {
        $View->modifAccueil($_POST['editorAccueil']);
    }
    $data = $View->afficherAccueil();
    include('Views/accueil.php');
}
?>