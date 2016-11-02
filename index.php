<?php

session_start();
include('Model/Model.php');
include('Model/UserManager.php');
include('Model/ClubManager.php');
include('Model/ViewManager.php');

$Club = new ClubManager();
$Us = new UserManager();
$View=new ViewManager();
$_SESSION['editorMode'] = False;


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
                include('Views/clubs/' . $_GET['club'] . '.php');
            } else {
                $data = $Club->afficherClubs();
                if (isset($_POST['valider'])) {
                    $Club->nouveauClub($_POST['nom']);
                    $nomVue = 'Views/clubs/' . $_POST['nom'];
                    $lavue = fopen($nomVue, 'x+');
                    
                    fputs($lavue, $str, $length);
                } else {
                    include('Views/clubs.php');
                }
            }
            break;

        case 'contact':
            include('Views/contact.php');
            break;

        case 'discipline':
            if(isset($_POST['vuedis']))
            {
                $View->modifDiscipline($_POST['editorDiscipline']);
                
            }

        $data=$View->afficherDiscipline();
        include('Views/discipline.php');
 

           
            break;

        case 'events' :
            include('Views/events.php');
            break;

        case 'liens' :
            include('Views/liens.php');
            break;

        case 'programme' :
            if(isset($_POST['sauvpro']))
            {
                $View->modifProgramme($_POST['editorProgramme']);
            }
            $data=$View->afficherProgramme();
            include('Views/programme.php');
            break;

        case 'album' :   
            include('Views/albums.php');  
            break;
        case 'deconnexion':
            include('Views/deconnexion.php');
            break;

        case 'administration':
            include('Views/administration.php');
            break;
        case 'members':
            $var = $Us->allUser(1); //Utlisateurs validés
            $var2 = $Us->allUser(-1); //Utilisateurs non validés
            include ('Views/members.php');
            break;
        case 'editEvent':
            include('Views/edito.php');
            break;
    }
} else {
    if(isset($_POST['admin']))
    {
        include('assets/scriptckeditor.php');
    }
    include('Views/accueil.php');
}
?>