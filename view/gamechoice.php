<?php
ob_start();
$title = "Accueil";
?>

<div class="heighttotal">
    <div class="container-fluid">
        <div class="row">
            <div class="col-2 col-xl-2">
            </div>
            <div class="col-3 col-xl-3 test-presentation boxgames centerhorizontalyandverticaly">
                <a href="index.php?action=themechoicewords">
                <h1>JEU 1: Mots</h1>
                </a>
            </div>
            <div class="col-2 col-xl-2">
            </div>
            <div class="col-3 col-xl-3 test-presentation boxgames centerhorizontalyandverticaly" href="index.php?action=gameimages">
                <a href="index.php?action=themechoiceimages">
                <h1>JEU 2: Images</h1>
                </a>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>