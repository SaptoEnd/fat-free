

<?php
$result = Base::instance()->get('resultFd');
?>

<div class="container">
    <div class="row">
        <div class="col-6 offset-4">
            <?php
            if(!isset($_POST['submit'])){
            }else{
                if(isset($_POST['submit'])){
                    $namafolder = $_POST['namafolder'];
                    if(!empty($namafolder)){
                        mkdir('path/'.$namafolder, 0777, true);
                        echo "<b style='font-size:30px;' class='text-info text-center'>1 File Berhasil Di tambahkan</b>";
                    }else{
                        echo "<b style='font-size:30px;' class='text-warning text-center'>Jangan Kosong</b>";
                    }
                }
            }
            ?>
            <br><br>
            <h3 class="font-weight-bold text-success text-center">Aplikasi Create Folder</h3>
            <form action="" method="post">
                <fieldset>
                    <div class="form-group row">
                        <div class="col-sm-12">
                            <input class="form-control " id="exampleInputText" aria-describedby="emailHelp" placeholder="Tulis Nama Folder di sini" type="text" name="namafolder">
                        </div>
                    </div>
                </fieldset>
                <button name="submit" type="submit" class="btn btn-primary btn-block">Submit</button>
            </form> <br>
            <h5 class="text-center font-weight-bold text-success">Data Folder</h5>
            <ul class="list-group">
                <?php
                $dirs = array_slice(scandir('path'), 2);

                // foreach ($dirs as $dir){
                foreach ($dirs as $key => $value) {
                    ?>
                    <li class="list-group-item d-flex justify-content-between align-items-center text-center">
                        <ul>
                           <a href="<?=Base::instance()->get('BASE') . '/open_files'?>" <span><div class="folder"></div></span><br>
                            <span class="text-info text-uppercase text-center" style="font-size: 12px;">
				    <?php echo $value; ?></span></a>
                            <!-- <a href="?<?php
                           ?>"><span class="badge badge-danger badge-pill">x</span></a> --></ul>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <a href="?" class="pull-right">Refresh</a>
    </div>
</div>
