<?php

session_start();

require "controler/controler.php";

if(isset($_GET['action'])){
$action = $_GET['action'];
} else {
    $action = 'home';
}

switch($action) {
    case 'home':
        homePage();
        break;
    case 'enterpseudo':
        $pseudo = $_POST['pseudo'];
        gameChoicePage($pseudo);
        break;
    case 'themechoicewords':
        themeChoiceWordsPage();
        break;
    case 'themechoiceimages':
        themeChoiceImagesPage();
        break;
    case 'gamewords':
        gameWordsPage();
        break;
    case 'gameimages':
        gameImagesPage();
        break;
    case 'loginadministration':
        loginPage();
        break;
    case 'validatelogin':
        if(!(isset($_SESSION['user']))){
            $username = $_POST['username'];
            $password = $_POST['password'];
            tryLoginAdministrator($username, $password);
        }else{
            //gameWordAdministrationPage();
            header("Location: ?action=game");
        }

        break;
    case 'administrationimages':
        administrationImagesPage();
        break;
    case 'administrationthemes':
        administrationThemesPage();
        break;
    case 'addtheme':
        $theme = $_POST['addedtheme'];
        addTheme($theme);
        break;
    case 'validategame':
        $theme  = $_POST['themes'];
        $addword = $_POST['addword'];
        $rone  = $_POST['addresponseone'];
        $rtwo  = $_POST['addresponsetwo'];
        $rthree  = $_POST['addresponsethree'];
        $rfour  = $_POST['addresponsefour'];
        $radio = $_POST['radiobuttons'];
        $gametype = $_POST['gametype'];
        validateGame($theme, $addword, $rone, $rtwo, $rthree, $rfour, $radio, $gametype);
        break;
    case 'game':
        gameWordAdministrationPage();
        break;
    default:
        homePage();
        break;
} 

?>

