<?php

if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'creation' :

            include('Views/creation.php');
            break;

        case 'connexion':
            include('Views/connexion.php');
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

        case 'albums' :
            include('Views/albums.php');
            break;
    }
} else {
    include('Views/accueil.php');
}
?>