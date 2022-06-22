<?php

require_once './controllers/MainController.controller.php';

$mainController = new MainController();

if(isset($_GET['page'])){
    
    switch($_GET['page']){
        case "home":
            $mainController->home();
            break;

        case "page1":
            $mainController->page1();
            break;

        default : $mainController->erreur();
        break;
    }

}else{

    $mainController->home();

}