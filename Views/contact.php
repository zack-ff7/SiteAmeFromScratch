<?php
$title = "Nous contacter";
ob_start();
?>

<div id="contactDiv">
    <div id="contactPanel">
        <form id="formContact" method="POST">
            <label>Adresse M�l</label>
            <input type="text" name="mailAdress">
            <label>Comfirmer M�l</label>
            <input type="text" name="mailAdressComfirm">
            <label>Nom</label>
            <input type="text" name="nom">
            <label>Pr�nom</label>
            <input type="text" name="prenom">
            <label>Message</label>
            <textarea type="text" name="mailAdress"></textarea>
            <button type="submit" value="Envoyer">Envoyer</button>
        </form>
    </div>
</div>

<?php
$content = ob_get_contents();
ob_end_clean();
include("Views/layout.php");
?>

