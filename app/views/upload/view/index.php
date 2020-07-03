<?php
$id_f = $_GET ['id_folder'];
//echo $id;

$result = Base::instance()->get('result_file');


//header('Content-Type: application/pdf');
//echo file_get_contents('filename.pdf');

$no = 1;
$tabel .= "
<table class='table'>
    <thead class='thead-dark'>
    <tr>
        <th scope='col'>#</th>
        <th scope='col'>Nama File</th>
        <th scope='col'>Aksi</th>
        <th><a href='./insert_files?id_folder=$id_f ' class='ml-auto'>[+]</a></th>
    </tr>
    </thead>";
    foreach ($result as  $data) {
    $tabel .= "
    <tbody >
    
    <tr>
        <td>" . $no. "</td>
        
        <td > ".$data['name']." <i class='fa fa-file-pdf-o'></i><input type='hidden' value='".$id_f."'></td>
        <td ><a href='./hapus?id=".$data['id']."&id_folder=".$id_f."' type='button' class='btn btn-danger'>[ - ]</a></td>
        
        
             
    </tr>
    

    </tbody>
       ";
    $no++;
    }
    $tabel .= "</table>";
echo $tabel;

?>
<!--<style type="text/css">
    .table
    {
        float: left;
    }
</style>

<td ><embed type='application/pdf' src='../assets/file/" . $data['name'] . "'><embed></td>
-->