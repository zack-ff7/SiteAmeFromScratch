<?php
$title='Déconnecté';
ob_start();

?>
<p>Vous allez être redirigé sur l'accueil dans 5 secondes.<p>
<?php


session_destroy();
$content=  ob_get_clean();
include('Views/layout.php');
header('Location: index.php');
sleep(5);

?>