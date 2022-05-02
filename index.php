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
    case 'gamewords':
        gameWordsPage();
        break;
    case 'gameimages':
        gameimagesPage();
        break;
} 

?>

