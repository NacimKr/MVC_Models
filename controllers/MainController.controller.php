<?php


require_once "./models/MainModel.model.php";

// $mainModel = new MainModel();
// var_dump($mainModel->data);


// function getData(){
//     foreach($mainModel->data as $key){
//         foreach($key as $key1 => $value){
//             echo $key1." : ".$value;
//         }
//     }
// }

class MainController{

    private $mainModel;

    public function __construct(){
        $this->mainModel = new MainModel();
    }

    function home(){
        $page_title = "Titre page Home";
        ob_start();
        $datas = $this->mainModel->getPDOFromModel();
        $titre = "Bienvenue les amis";
        $btn_danger = "btn btn-danger";
        require_once './views/home.view.php';
        $page_content = ob_get_clean();
        $style = "home.css";
        require_once "./views/common/template.php";
    }

    function page1(){
        $page_title = "Titre page 1";
        ob_start();
        require_once './views/page1.view.php';
        $page_content = ob_get_clean();
        $style = "page1.css";
        require_once "./views/common/template.php";
    }

    function erreur(){
        $page_title = "La page existe pas";
        ob_start();
        require_once './views/erreur.view.php';
        $page_content = ob_get_clean();
        require_once "./views/common/template.php";
    }
}

