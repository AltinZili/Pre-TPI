<?php
ob_start();
$title = "Ajout de thème";
?>

<div class="outer">
    <div class="middle">
        <div class="inner">
            <h1>Thème à ajouter</h1>
            <br>
            <form method="post" action="index.php?action=addtheme">
                <h2>Entrer le thème:</h2>
                <input type="text" name="addedtheme" class="form-control">
                <input type="submit" value="valider">
            </form>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>

