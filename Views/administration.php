<?php
$title='Administration';
ob_start();
?>
<p>Administration</p>
<?php
$content=  ob_get_clean();
include ('Views/layout.php');
?>



