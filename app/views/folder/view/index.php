<style type="text/css">
    .card
    {
        float: left !important;
        margin: 6% 1% !important;
    }
    a#button{
        margin-left:80% !important;
    }
    div.container-fluid#folder{
        margin-top: -6% !important;
    }
</style>

<div class="container-fluid" id="folder">
<?php
$result4 = Base::instance()->get('result2');



//var_dump($result4);

/*
$no = 1;
$tabel = "
<table class='table'>
  <thead class='thead-dark'>
    <tr>
      <th scope='col'>#</th>
      <th scope='col'>First</th>
      <th scope='col'>Last</th>
      <th scope='col'>Handle</th>
    </tr>
  </thead>";


foreach ($result4 as  $data) {
    $tabel .= "
	<tbody>
    <tr>

      <td>" . $no. "</td>
      <td>" . $data['id'] . "</td>
      <td>" . $data['nama'] . "</td>
      <td>" . $data['nama'] . "</td>

    </tr>

  </tbody>";
    $no++;
}
$tabel .= "</table>";
echo $tabel;*/
foreach ($result4 as  $data) {
    $card .= " 
        <th>
            <div class='card ' style='width: 160px;'>";
    $card .=  "<a id='button' class='center-bloked' href='./hapus_f?id=".$data['id']."'>[x]</a>
            
                <div class='card-body'>";
    $card .=  "<a class='center-bloked' href='./upload?id_folder=".$data['id']."'>".$data['nama']."</a>";
    $card .="</div> 
                <span ><input type='hidden' value='".$data['id']."'></span>
            </div></th>";
}
echo $card;?>


<?php
/* echo "<a href='./user/insert'>[+]</a>";
*/?>





