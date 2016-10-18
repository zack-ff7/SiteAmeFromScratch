<?php
$title='Déconnecté';
ob_start();

?>
<p>Vous allez être redirigé sur l'accueil dans 5 secondes.<p>
<?php
$content=  ob_get_clean();
sleep(5);
session_destroy();
header('Location: index.php');
include('Views/layout.php');
?>