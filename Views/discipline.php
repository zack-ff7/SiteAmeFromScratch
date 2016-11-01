<?php

$title = 'La Discipline';
ob_start();
?>

<textarea name="editorDiscipline" id="editorDiscipline">ckeditor</textarea>
<script>CKEDITOR.replace('editorDiscipline');</script>

<?php
$content = ob_get_contents();
ob_end_clean();
?>

<?php

include("Views/layout.php");
?>
