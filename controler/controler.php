<?php
require_once 'model/model.php';

function homePage()
{
    require_once 'view/home.php';
}

function gameChoicePage()
{
    $users = verifyPseudoExist($_SESSION['pseudo']);


    if(isset($_SESSION['pseudo'])){
        addUserByPseudo($_SESSION['pseudo']);
    }

    require_once 'view/gamechoice.php';
}
