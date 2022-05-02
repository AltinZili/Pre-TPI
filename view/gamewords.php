<?php
ob_start();
$title = "Jeu des Mots";
?>

<p>hello world</p>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
