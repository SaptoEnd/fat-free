<?php

namespace Controllers;

class App {

    var $f3;
    var $view;
    var $database;
    var $database_rw;

    public function __construct() {
        require_once('lib/autoload.php');

        global $database;
        global $database_rw;

        $this->f3 = \Base::instance();
        $f3 = $this->f3;
        $this->view = new \View();
        $this->database = $database;
    }



    public function renderView($view) {
        include_once $this->f3->get('UI') . 'layout/header.php';
        if ($this->f3->exists('SESSION.user_id') == true){
            include_once $this->f3->get('UI') . 'layout/nav.php';
        }else{

        }
        //
        echo $this->view->render($view);
        include_once $this->f3->get('UI') . 'layout/footer.php';
    }


    
}
