<?php

namespace Controllers;

class Insert extends App {

    public function __construct()
    {
        parent::__construct();
    }

    public function inserts() {
       // $this->f3->get('SESSION.user_id');
        //if ($this->f3->exists('SESSION.user_id',$user)){
        $this->renderView('folder/index.php'); //tampilkan data user di halaman home/index.php
        // echo $user;
        //}
    }

    public function inserts_proses($user, $id, $f3){
        // var_dump($_FILES);
        $this->f3->get('SESSION.user_id');
        if ($this->f3->exists('SESSION.user_id',$user)) {
            $this->database->insert('inser', ['nama' => $_POST['nama'],'id_user'=>$_POST=$user]);
        }
        //echo "Upload Sukses";
        //var_dump($_POST);
        if ($_POST == true){
                $this->f3->get('id',$id);
                //$result = $this->database->select("inser",["nama"],["id"=>[15]]); //memanggil semua data table user
                $result = $this->database->select("inser",['id','nama'],['id_user'=>$user]); //memanggil semua data table user
                /* var_dump($result);*/
                    $this->f3->reroute("/admin");
                //$this->f3->set('result2', $result); //memanggil data user dengandan variabel result2
                //$this->renderView('folder/view/index.php'); //tampilkan data user di halaman home/index.php
                //echo $user;
        }else{
            echo "gagal";
        }
    }

    public function hapus_f(){
        //$id = $_GET['id'];
        $id = $_GET['id'];
        //var_dump($id);
        $del =1;
        if ($del == 0){
            echo "Gagal Menghapus";
        }else{
            $this->database->delete("inser", [
                "AND" => [
                    "id" => $id
                ]
            ]);
            $this->f3->reroute('/admin');
        }
    }











}
