<?php

namespace Controllers;

class Upload extends App {

    public function __construct()
    {

        parent::__construct();
    }

    public function uploads($user) {
        //$f3->set('SESSION.upload_id', $upload[0]['id']);
        //$f3->exists('SESSION.user_id',$upload);

        //$getdata = $this->database->select('folder', ['id'],['id'=>$id]);
        //$data = $this->f3->get('result_file', $result);
        //$this->f3->get('id', $nama);
        //var_dump($result);
        $this->f3->get('SESSION.user_id');
        $this->f3->exists('SESSION.user_id',$user);

        //$getdata = $this->database->get("inser", ["id"], ["id"=>[]]);
        //$result = $this->database->select("inser",['id'],['id_user'=>$user]);
        //$result = $this->database->select("inser",['id'],['nama'=>$user]);
        //$result = $this->database->get('inser',['nama'],['id'=>$_GET['id']]);
        //echo $result;
        //var_dump($result);

        //$result = $this->database->select("folder", ["name"],["AND"=>["id_folder"=>$id, "id_user"=>$user]]); //memanggil semua data table user
        //$result = $this->database->select("folder","*"); //memanggil semua data table user
        /* var_dump($result);*/

        //$this->f3->set('result_file', $result); //memanggil data user dengandan variabel result2
        //$this->renderView('upload/view/index.php'); //tampilkan data user di halaman home/index.php
        //var_dump($result);


        $this->renderView('upload/index.php'); //tampilkan data user di halaman home/index.php
        //echo $upload;

    }

    public function proses($user){
        $id_f = $_GET['id_folder'];
        //var_dump($id);

        // var_dump($_FILES);
        $this->f3->get('SESSION.user_id');

        $path = './assets/file/'; //direktori file
        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        //$strtotime = strtotime("now");
        //$filename = $strtotime.'_'.$_FILES['file']['name'];
        //$target =$path.$strtotime.'_'.$_FILES['file']['name'];
        $target =$path.$_FILES['file']['name'];
        //tampil id folder
        $uploadOk = 1;
        $imageFileType = pathinfo($target,PATHINFO_EXTENSION);

        if($_FILES['file']['error'] === UPLOAD_ERR_OK) {
            if($imageFileType != "pdf" && $imageFileType != "doc" && $imageFileType != "docx" && $imageFileType != "docs" ) {
                //echo "Sorry, only PDF, DOC, DOCX & DOCS files are allowed.";
                echo "<script>alert('Maaf, Hanya File PDF, DOC, DOCX & DOCS yang diperbolehkan.!');history.go(-1);</script>";
                $uploadOk = 0;
            }
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
            } else {

                /*if (move_uploaded_file($_FILES["file"]["tmp_name"],$target)) {
                    $this->f3->exists('SESSION.user_id', $user);
                    //$this->database->insert('folder', ['name' => $_FILES['file']['name']]);

                    $this->database->insert('folder', ['name' => $_FILES['file']['name'], 'id_user' => $user, 'id_folder' => $id_f]);
                    if ($_FILES == true) {
                        //$result = $this->database->select("inser",["nama"],["id"=>[15]]); //memanggil semua data table user
                        $this->f3->reroute('/upload?id_folder=' . $id_f . '');

                    } else {
                        echo "Sorry, there was an error uploading your file.";
                    }
                    /*if ($this->f3->exists('SESSION.user_id',$user)) { //jika id user ada

                    }*/

                    //echo "Upload Sukses";
                    //$this->database->insert('inser', ['nama' => $_POST['nama']] );
                    //echo "Upload Sukses";
                    //var_dump($_POST);

                //} else {
                  //  echo $this->codeToMessage($_FILES['file']['error']);
                //}
                $uploadFile = $_FILES['file'];


                // Extract nama file
                $extractFile = pathinfo($uploadFile['name']);
                $sameName = 0; // Menyimpan banyaknya file dengan nama yang sama dengan file yg diupload
                $handle = opendir($path);
                while(false !== ($file = readdir($handle))){ // Looping isi file pada directory tujuan
                    // Apabila ada file dengan awalan yg sama dengan nama file di uplaod
                    if(strpos($file,$extractFile['filename']) !== false)
                        $sameName++; // Tambah data file yang sama
                }
                $tgl=date('Y-m-d');
                $newName = empty($sameName) ? $uploadFile['name'] : $extractFile['filename'].'('.$sameName.').'.$extractFile['extension'];

                if(move_uploaded_file($uploadFile['tmp_name'],$path.$newName)){
                    $this->f3->exists('SESSION.user_id', $user);

                   // $this->database->insert('folder', ['name' => $uploadFile['name'] , 'id_user' => $user, 'id_folder' => $id_f]);
                    $this->database->insert('folder', ['name' =>$newName , 'id_user' => $user, 'id_folder' => $id_f, 'tgl' =>$tgl]);

                    if ($uploadOk == 1) {
                        $this->f3->reroute('/upload?id_folder=' . $id_f . '');

                        //echo 'File berhasil diupload dengan nama: ' . $newName;
                    }else{
                        echo 'File gagal diupload';
                    }
                    echo 'File berhasil diupload dengan nama: ' . $newName;
                }
                else{
                    echo 'File gagal diupload';
                }
            }
        }
    }


    public function hapus(){
        $id = $_GET['id'];
        $id_f = $_GET['id_folder'];
       //var_dump($id);

        if (isset($_GET['id']) == true){
            $this->database->delete("folder", [
                "AND" => [
                    "id" => $id
                ]
            ]);
            $this->f3->reroute('/upload?id_folder='.$id_f.'');
        }

       else{
            echo "gagal";
        }
    }

    public function tampil($user)
    {
        $id = $_GET['id_folder'];
        //var_dump($id);
        $this->f3->get('SESSION.user_id');
        $this->f3->exists('SESSION.user_id',$user);


        $result = $this->database->select("folder", "*",["AND"=>["id_folder"=>$id, "id_user"=>$user]]); //memanggil semua data table user
        /* var_dump($result);*/

        $this->f3->set('result_file', $result); //memanggil data user dengandan variabel result2
        $this->renderView('upload/view/index.php'); //tampilkan data user di halaman home/index.php
        //var_dump($result);
    }


    private function codeToMessage($code)
    {
        switch ($code) {
            case UPLOAD_ERR_INI_SIZE:
                $message = "The uploaded file exceeds the upload_max_filesize directive in php.ini";
                break;
            case UPLOAD_ERR_FORM_SIZE:
                $message = "The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form";
                break;
            case UPLOAD_ERR_PARTIAL:
                $message = "The uploaded file was only partially uploaded";
                break;
            case UPLOAD_ERR_NO_FILE:
                $message = "No file was uploaded";
                break;
            case UPLOAD_ERR_NO_TMP_DIR:
                $message = "Missing a temporary folder";
                break;
            case UPLOAD_ERR_CANT_WRITE:
                $message = "Failed to write file to disk";
                break;
            case UPLOAD_ERR_EXTENSION:
                $message = "File upload stopped by extension";
                break;

            default:
                $message = "Unknown upload error";
                break;
        }
        return $message;
    }



}

