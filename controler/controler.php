<?php
require_once 'model/model.php';

function homePage()
{
    require_once 'view/home.php';
}

function gameChoicePage($pseudoPost)
{
    $user = getUserByPseudo($pseudoPost);

    if($user == null){
        $_SESSION['pseudo'] = $pseudoPost;
        addUserByPseudo($_SESSION['pseudo']);
        $_SESSION['flashmessage'] = 'Bonjour '. $_SESSION['pseudo'];
        require_once 'view/gamechoice.php';
    } else {
        $_SESSION['flashmessage'] = "Pseudo déjà pris";
        require_once 'view/home.php';
    }

    /*$PseudoExist = 0;
    $users = getUsers();
    var_dump($users);
        foreach ($users as $user) {
            if ($user == $_SESSION['pseudo']) {
                unset($_SESSION['pseudo']);
                $_SESSION['flashmessage'] = "Pas d'accord";
                $PseudoExist = 1;
                require_once 'view/home.php';
            }
        }

        if($PseudoExist == 0){
            addUserByPseudo($_SESSION['pseudo']);
            $_SESSION['flashmessage'] = 'Bonjour '. $_SESSION['pseudo'];
            require_once 'view/gamechoice.php';
        }*/
}

function themeChoiceWordsPage()
{
    require_once 'view/themechoicewords.php';
}

function themeChoiceImagesPage()
{
    require_once 'view/themechoiceimages.php';
}

function gameWordsPage()
{
    require_once 'view/gamewords.php';
}

function gameImagesPage()
{
    require_once 'view/gameimages.php';
}

?>
