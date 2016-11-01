<?php
$title = "Creer un compte";
ob_start();
?>

<div id="creation">
    <div id="creationPanel">
        <form method="POST">
            <label>Login</label>
            <input type="text" name="log" />
            <label>Mot de passe</label>
            <input type="password" name="pass"/>
            <label>Retapez le mot de passe</label>
            <input type="password" name="verifpass"/>
            <label>Nom</label>
            <input type="text" name="nom"/>
            <label>Prenom</label>
            <input type="text" name="prenom"/>
            <label>Email</label>
            <input type="text" name="mail" />
            <label>Comfirmer Email</label>
            <input type="text" name="verifmail" />
            <label>Date de Naissance</label>
            <input type="date" name="dateNaiss"/>
            <button type="submit" name="inscription">S'inscrire</button>
        </form>
    </div>

</div>

<?php
if (isset($message)) {
    echo '<p>' . $message . '<p>';
}

$content = ob_get_clean();
include("Views/layout.php");
?>

