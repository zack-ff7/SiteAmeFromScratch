<?php
$title='Déconnecté';
ob_start();

?>
<p>Vous allez être redirigé sur l'accueil dans 5 secondes.<p>
<?php
$content=  ob_get_clean();

session_destroy();
include('Views/layout.php');
sleep(5);
header('Location: index.php');

?>