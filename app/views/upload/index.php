<?php
$id_f =$_GET['id_folder'];

?>

<form action="<?= Base::instance()->get('BASE') .'/upload/proses?id_folder='.$id_f.''?>" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="hidden" value="<?=$id_f?>">
    <br>
    <button type="submit" name="submit">Kirim</button>
</form>
