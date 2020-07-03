<?php
namespace Controllers;
class AdminController extends App {
    //! HTTP route pre-processor
    function beforeroute($f3) {
        if (empty($f3->get('SESSION.user_id'))){
            $f3->set('flash', 'Please login to continue');
            $f3->reroute('/login');
        }
    }
    function profile($f3, $user){
        //$this->f3->get('SESSION.user_id');
        $f3->set('title', 'Profile');
        //$f3->set('inc', 'profile.html');
        //$this->renderView('folder/view/index.php');
        //$result = $this->database->select("inser",["id","nama"],["id"=>['15']]);
        $f3->get('SESSION.user_id');
        if ($f3->exists('SESSION.user_id',$user)){
            $result = $this->database->select("inser",['id','nama'],['id_user'=>$user]); //memanggil semua data table user berdasarkan id user
            //$f3->set('SESSION.upload_id', $upload[0]['id']);
            //$id = $this->f3->get('PARAMS.id');


            /* var_dump($result);*/

            $this->f3->set('result2', $result); //memanggil data user dengandan variabel result2
            //$this->f3->reroute('/home');
            $this->renderView('folder/view/index.php'); //tampilkan data user di halaman home/index.php
            //echo $user;
        }else{
            echo "coba lgi";
        }
    }
}

