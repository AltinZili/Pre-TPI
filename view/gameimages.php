<?php
ob_start();
$title = "Jeu des Images";
?>

<p>hello world</p>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
