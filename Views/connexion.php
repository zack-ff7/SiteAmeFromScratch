<?php

$title='Se connecter';
ob_start();

?>
<div id="connection">
<form method="POST">
    <label>Login<input type="text" name="nom"/></label>
    <label>Mot de passe<input type="password" name="password"/></label>
    <button name="connect"> Se connecter</button>
</form>
    </div>
    
<p>Pas encore de compte? Cliquez <a href="index.php?page=creation"> ici </a>
  
 <?php
 
 $content=ob_get_clean();
 include("Views/layout.php");
 ?>
 
    

