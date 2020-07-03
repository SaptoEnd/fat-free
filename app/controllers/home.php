<?php

namespace Controllers;

class Home extends App {

    public function __construct()
    {
        parent::__construct();
    }

    public function index() {
        $result = $this->database->select('user', '*'); //memanggil semua data table user
       /* var_dump($result);*/

        $this->f3->set('result2', $result); //memanggil data user dengandan variabel result2
        $this->renderView('home/index.php'); //tampilkan data user di halaman home/index.php
    }


    public  function halaman(){
        $result = $this->database->select('fd', '*'); //tampilkan data pada tabel fd
            /*var_dump($result);*/

         $this->f3->set('resultFd', $result); //memanggil dtaa user dengan variabel resultFd
            $this->renderView('home/pages/create_folder.php');
    }

    public function open_files(){
        $result = $this->database->select('fd', '*'); //tampilkan data pada tabel fd
        /*var_dump($result);*/

        $this->f3->set('openn', $result); //memanggil dtaa user dengan variabel resultFd
        $this->renderView('home/pages/open_file.php');
    }


}
