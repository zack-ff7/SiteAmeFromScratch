<?php
$title = 'Se connecter';
ob_start();
?>

<div id="connection">
<<<<<<< HEAD
<form method="POST">
    <label>Login<input type="text" name="login"/></label>
    <label>Mot de passe<input type="password" name="lepass"/></label>
    <button type="submit" name="connect"> Se connecter</button>
</form>
    </div>
    
<p>Pas encore de compte? Cliquez <a href="index.php?page=creation"> ici </a>
  
 <?php

 if(isset($Message))
 {
     echo '<p>'.$Message.'</p>';
 }

 $content=ob_get_clean();
 include("Views/layout.php");
 ?>
=======
    <form method="POST">
        <label>Login<input type="text" name="nom"/></label>
        <label>Mot de passe<input type="password" name="password"/></label>
        <button name="connect"> Se connecter</button>
    </form>
</div>



<?php
$content = ob_get_clean();
include("Views/layout.php");
?>
>>>>>>> origin/master
 


