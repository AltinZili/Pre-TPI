<?php
ob_start();
$title = "Accueil";
?>

<div class="outer">
    <div class="middle">
        <div class="inner">
            <form method="post" action="index.php?action=gameimages">
                <span style="font-weight: bold">Choisir le thème pour le jeu des mots</span>
                <select name="pets" class="select form-select" onchange="this.form.submit();">
                    <option value="">--Choisissez une valeur--</option>
                    <option value="dog">chien</option>
                    <option value="cat">chat</option>
                    <option value="hamster">hamster</option>
                    <option value="parrot">perroquet</option>
                    <option value="spider">araignée</option>
                    <option value="fish">poisson</option>
                </select>
            </form>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require "gabarit.php";
?>