<?php
$title = "Les Clubs";
ob_start();
?>

<div id="lesClubs">

    <?php
    foreach ($data as $ligne) {
        ?>
        <a class="club" style="text-decoration:none; color: black;" href="index.php?page=clubs&club=<?php echo $ligne['nom_club']; ?>"> <img src="assets/images/clubs/<?php echo $ligne['nom_club']; ?>.jpg"><h1><?php echo $ligne['nom_club']; ?></h1><p>presentation rapide club blabla blabla bla blabla</p></a>
                <?php
            }
            ?>
</div>

<?php
$content = ob_get_clean();
include("Views/layout.php");
?>

