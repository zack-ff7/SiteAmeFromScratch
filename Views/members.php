<?php
$title='Gestion des membres';
ob_start();
?>
<table>
    <?php
foreach ($var as $ligne)
{
    echo '<form method="POST"><tr>';
    echo '<td>'.$ligne['Id'].'</td>';
    echo '<td>'.$ligne['Nom'].'</td>';
    echo '<td>'.$ligne['Prenom'].'</td>';
    echo '<td>'.$ligne['Email'].'</td>';
    echo '<td>'.$ligne['date_naissance'].'</td>';
    echo '<td><button type="submit" name="valid'.$ligne['Id'].'">Valider</button></td>';
    echo '</tr></form>';
}
?>
</table>
<?php
$content= ob_get_clean();
include ('Views/layout.php');
?>

