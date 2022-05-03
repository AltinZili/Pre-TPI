<?php
ob_start();
$title = "Accueil";
?>

<div class="outer">
    <div class="middle">
        <div class="inner">
            <h1>Se déplacer</h1>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>