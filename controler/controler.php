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
        unset($_SESSION['user']);
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

function tryLoginAdministrator($usernamePost, $passwordPost)
{
    $user = getUserByUsername($usernamePost);


        /*foreach($themes as $theme){
            $themesNames[] = $theme['name'];
        }
        var_dump($themesNames);*/

        
        if ($user != null && password_verify($passwordPost, $user['password'])) {
            unset($user['password']);
            if (isset($_SESSION['pseudo'])) {
                unset($_SESSION['pseudo']);
            }
            $_SESSION['user'] = $user;
            $_SESSION['flashmessage'] = 'Bonjour ' . $_SESSION['user']['username'];

            gameWordAdministrationPage();

            //$themes = getThemes();

            /*foreach($themes as $theme){
                $themesNames[] = $theme['name'];
            }
            var_dump($themesNames);*/

            //require_once 'view/gamewordadministration.php';
        } else {
            $_SESSION['flashmessage'] = "nom d'utilisateur ou mot de passe erroné";
            require_once 'view/login.php';
        }
}

function gameWordAdministrationPage(){
    $validation = 0;
    $themes = getAdaptedThemes($validation);
    require_once 'view/gamewordadministration.php';
}

function logoutAdministration(){
    unset($_SESSION['user']);
    homePage();
}

function loginPage()
{
    require_once 'view/login.php';
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

function administrationImagesPage()
{
    require_once 'view/gameimageadministration.php';
}

function administrationThemesPage()
{
    require_once 'view/themeadministration.php';
}

function addTheme($themePost)
{
    $theme = getThemeByName($themePost);
    if($themePost != null && $theme == null){
        addChoosenTheme($themePost);
        $_SESSION['flashmessage'] = "votre thème a été ajouté";
    } else {
        $_SESSION['flashmessage'] = "thème déjà existant";
    }

    administrationThemesPage();
}

function validateGame($themePost, $addwordPost, $ronePost, $rtwoPost, $rthreePost, $rfourPost, $radioPost, $gametypePost)
{
        $gametypeid = getGameTypeIdByName($gametypePost);
        $themeid = getThemeIdByName($themePost);
    /*$gameincludetheme = getByIdsGamesIncludeThemes($gametypeid, $themeid);

    if($gameincludetheme == null)
    {*/
        $idgamesthemes = addGamesIncludeThemes($themeid, $gametypeid);
        updateThemesValidation($themeid);
        /*}*/
        $idGameWord = addWord($addwordPost, $idgamesthemes);
        var_dump($idGameWord);
}

?>
