<?php
ob_start();
$title = "Accueil";
?>

<div class="heighttotal">
    <div class="container-fluid centerverticaly">
        <div class="row">
            <div class="col-2 col-xl-2">
            </div>
            <div class="col-3 col-xl-3 test-presentation boxgames centerhorizontalyandverticaly">
                <h1 class="">JEU 1: Mots</h1>
            </div>
            <div class="col-2 col-xl-2">
            </div>
            <div class="col-3 col-xl-3 test-presentation boxgames centerhorizontalyandverticaly">
                <h1 class="">JEU 2: Images</h1>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>



