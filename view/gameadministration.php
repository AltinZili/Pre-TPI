<?php
ob_start();
$title = "Choix du jeu";
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-6 col-xl-6 centerhorizontalyandverticaly test-presentation">Administrer jeu</div>
    </div>
</div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
