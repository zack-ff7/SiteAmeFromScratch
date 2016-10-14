<?php

$title="Creer un compte";
ob_start();

?>
<form method="POST">
    <label>Login <input type="text" name="log" /></label><br>
    <label>Mot de passe <input type="password" name="pass"/></label><br>
    <label>Retapez le mot de passe<input type="password" name="verifpass"/></label><br>
    <label>Nom <input type="text" name="nom"/></label><br>
    <label>Prenom <input type="text" name="prenom"/></label><br>
    <label>Email <input type="text" name="mail" /></label><br>
    <label>Email <input type="text" name="verifmail" /></label><br>
    <button> <input type="submit" name="inscription"/></button><br>
    
</form>

<?php

if (isset($message))
{
    echo '<p>'.$message.'<p>';
}


$content=  ob_get_clean();
include("Views/layout.php");
    
