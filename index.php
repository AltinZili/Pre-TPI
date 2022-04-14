<?php

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
        $enterpseudoPost = $_POST['pseudo'];
        gameChoicePage($enterpseudoPost);
        break;
} 

?>

