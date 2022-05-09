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
        $username = $_POST['username'];
        $password = $_POST['password'];
        tryLoginAdministrator($username, $password);
        break;
} 

?>

