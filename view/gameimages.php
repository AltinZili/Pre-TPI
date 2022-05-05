<?php
ob_start();
$title = "Jeu des Images";
?>

<div class="outer">
    <div class="middle">
        <div class="inner">
            <img src="../images/english_games_logo.png">
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-1 col-xl-1">
        </div>
        <div class="col-2 col-xl-2 myDiv">
            <span>poisson</span>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>
