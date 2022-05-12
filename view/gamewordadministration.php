<?php
ob_start();
$title = "Choix du jeu";
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-6 col-xl-6 centerhorizontalyandverticaly test-presentation" style="background-color: red; font-weight: bold">Administrer jeu <----</div>
        <div class="col-6 col-xl-6 centerhorizontalyandverticaly test-presentation">Contrôler les scores</div>
    </div>
    <div class="administrationrow row">
        <div class="col-2 col-xl-2"></div>
        <div class="col-2 col-xl-2"><button type="button" class="btn btn-success">Ajouter mot</button></div>
        <div class="col-2 col-xl-1"></div>
        <div class="col-2 col-xl-2"><a href="index.php?action=administrationimages"><button type="button" class="btn btn-success">Ajouter image</button></a></div>
        <div class="col-2 col-xl-1"></div>
        <div class="col-2 col-xl-2"><a href="index.php?action=administrationthemes"><button type="button" class="btn btn-success">Ajouter theme</button></a></div>
        <div class="col-2 col-xl-2"></div>
    </div>
     <div class="administrationrow row">
        <div class="centerhorizontaly col-12 col-xl-12"><h1>1/5</h1></div>
    </div>
    <div class="row">
        <div class="col-8 col-xl-8"></div>
        <div class="col-4 col-xl-4"><h1>Sélection Thème</h1></div>
    </div>
    <div class="row">
        <div class="col-2 col-xl-2"><h1>Entrer mot:</h1></div>
        <div class="col-4 col-xl-4" style="padding-top: 15px"><input type="text" id="addword" name="addword" required minlength="2" maxlength="40" size="60"></div>
        <div class="col-2 col-xl-2"></div>
        <div class="col-4 col-xl-4" style="padding-top: 15px">
            <form method="post" action="index.php?action=adminstrationtheme">
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
    <form>
    <div class="row">
        <div class="col-2 col-xl-2"><h2>réponse 1:</h2></div>
        <div class="col-4 col-xl-4." style="padding-top: 8px"><input type="text" id="addresponseone" name="addresponseone" required minlength="2" maxlength="40" size="60"></div>
        <div class="col-1 col-xl-1" style="padding-top: 4px">
            <input class="form-check-input radiobuttonsize" type="radio" name="radiobuttons" id="radioresponseone">
        </div>
    </div>
    <div class="row">
        <div class="col-2 col-xl-2"><h2>réponse 2:</h2></div>
        <div class="col-4 col-xl-4" style="padding-top: 8px"><input type="text" id="addresponsetwo" name="addresponsetwo" required minlength="2" maxlength="40" size="60"></div>
        <div class="col-1 col-xl-1" style="padding-top: 4px">
            <input class="form-check-input radiobuttonsize" type="radio" name="radiobuttons" id="radioresponsetwo">
        </div>
    </div>
    <div class="row">
        <div class="col-2 col-xl-2"><h2>réponse 3:</h2></div>
        <div class="col-4 col-xl-4" style="padding-top: 8px"><input type="text" id="addresponsethree" name="addresponsethree" required minlength="2" maxlength="40" size="60"></div>
        <div class="col-1 col-xl-1" style="padding-top: 4px">
            <input class="form-check-input radiobuttonsize" type="radio" name="radiobuttons" id="radioresponsethree">
        </div>
        <div class="col-5 col-xl-5 centerhorizontaly">
            <button type="button" class="btn btn-success">VALIDER SÉLECTION</button>
        </div>
    </div>
    <div class="row">
        <div class="col-2 col-xl-2"><h2>réponse 4:</h2></div>
        <div class="col-4 col-xl-4" style="padding-top: 8px"><input type="text" id="addresponsefour" name="addresponsefour" required minlength="2" maxlength="40" size="60"></div>
        <div class=" col-1 col-xl-1" style="padding-top: 4px">
            <input class="form-check-input radiobuttonsize" type="radio" name="radiobuttons" id="radioresponsefour">
        </div>
    </div>
    </form>
</div>




<?php
$content = ob_get_clean();
require "gabarit.php";
?>
