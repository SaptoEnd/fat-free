<?php
$value = 'path/';
//cek folder jika benar

//var_dump($value);

if(is_dir($value)){
    //jika benar
    //buka folder
    if($open = opendir($value)){
        //var_dump($open);
        //menampikan data dalam folder
        while(($file = readdir($open)) !== FALSE){
            if($file !== '.' && $file !=='..'){
                echo 'nama File'
                    .$file.'';
            }
           echo opendir($value);'.<br>.';
        }
        closedir($open);
    }
}
?>