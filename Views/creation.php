<?php
$title = "Creer un compte";
ob_start();
?>

<div id="creation">
    <div id="creationPanel">
        <form method="POST" onsubmit="return verifForm(this)">
            <label>Login</label>
            <input type="text" name="log" onkeypress="verifId(this)"/>
            <label>Mot de passe</label>
            <input type="text" name="pass" onkeypress="verifPass(this)"/>
            <label>Retapez le mot de passe</label>
            <input type="text" name="verifpass" onkeypress="verifPass(this),verifEgal(pass,verifpass)"/>
            <label>Nom</label>
            <input type="text" name="nom" onkeypress="verifNom(this)"/>
            <label>Prenom</label>
            <input type="text" name="prenom" onkeypress="verifPrenom(this)"/>
            <label>Email</label>
            <input type="text" name="mail" onkeypress="verifMail(this)"/>
            <label>Comfirmer Email</label>

            <input type="text" name="verifmail" onkeypress="verifMail(this),verifEgal(mail,verifmail)"/>
          

            <input type="text" name="verifmail" />
            <label>Date de Naissance</label>
            <input type="date" name="dateNaiss"/>
            <button type="submit" name="inscription" >S'inscrire</button>
            
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

