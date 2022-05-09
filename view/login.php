<?php
ob_start();
$title = "Page de connexion Administrateur";
?>

<div class="outer">
    <div class="middle">
        <div class="inner">
            <form method="post" action="index.php?action=validatelogin">
                <label for="name">Nom d'utilisateur</label>
                <br>
                <input type="text" id="username" name="username" required minlength="5" maxlength="12" size="25">
                <br>
                <br>
                <label for="pass">Mot de passe</label>
                <br>
                <input type="password" id="pass" name="password"
                       minlength="8" required>
                <br>
                <br>
                <input type="submit" value="Valider">
            </form>
        </div>
    </div>
</div>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>