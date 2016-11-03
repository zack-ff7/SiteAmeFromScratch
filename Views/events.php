<?php
$title="Les Evenements";
ob_start();

if(isset($_SESSION['Statut'])==1)
{
?>

<form method="POST">
    <label> Titre Billet <input type="text" name="titleEdit"/></label>
    <input type="text" name="contenuEdit"/>
    <script>CKEDITOR.replace('contenuEdit')</script>
    <button type="submit" name="newBillet">Envoyer</button>
</form>
<?php
}
if(isset($data))
{
    

foreach ($data as $ligne)
{ 
    echo '<div class="billet">';
    echo $ligne['titre'];
    echo $ligne['text_event'];
    echo $ligne['date_event'];
    echo '</div>';
}


    
}
$content=  ob_get_clean();
include("Views/layout.php");
?>

