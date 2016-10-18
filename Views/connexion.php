<?php
$title = 'Se connecter';
ob_start();
?>

<div id="connection">

    <div id="connectionPanel">
        <form method="POST">
            <label>Login</label>
            <input type="text" name="login"/>
            <label>Mot de passe</label>
            <input type="password" name="lepass"/>
            <button type="submit" name="connect">Se connecter</button>
        </form>
        <div id="connectionPanelNew"><p>Pas encore de compte? Cliquez<a href="index.php?page=creation"> ici</a></div>
    </div>
</div>


<?php
if (isset($Message)) {
    echo '<p>' . $Message . '</p>';
}



$content = ob_get_clean();
include("Views/layout.php");
?>




