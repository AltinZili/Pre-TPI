<?php
require_once 'model/model.php';

function homePage()
{
    require_once 'view/home.php';
}

function gameChoicePage($pseudo)
{
    $user = addUserByPseudo($pseudo);
    require_once 'view/gamechoice.php';
}
