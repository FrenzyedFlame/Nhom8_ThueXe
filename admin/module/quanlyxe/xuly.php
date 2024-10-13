<?php


include('../../config/config.php');

$doitac = $_POST['doitac']; 
$loaixe = $_POST['loaixe'];
$hangxe = $_POST['hangxe'];
$dongxe = $_POST['dongxe'];
$tenxe = $_POST['tenxe'];
$dongia = $_POST['dongia'];
$mota = $_POST['mota'];
$bienso = $_POST['bienso'];
$tinhtrang = $_POST['tinhtrang'];
if(isset($_POST['themxe'])){
    $sql_them = "INSERT INTO carlist_db(ID_đt, ID_loại, ID_hãng, ID_dòng, tenxe, dongia, mota, bienso, tinhtrang) VALUE('".$doitac."','".$loaixe."','".$hangxe."', '".$dongxe."', '".$tenxe."', '".$dongia."', '".$mota."', '".$bienso."', '".$tinhtrang."')";
    mysqli_query($mysqli, $sql_them);
    header('Location:../../index.php?action=quanlyxe');
}elseif(isset($_POST['suaxe'])){

}elseif(isset($_GET['query']) == 'xoa'){
    $id=$_GET['id_xe'];
    $sql_xoa = "DELETE FROM carlist_db WHERE id_xe= '".$id."'";
    header('Location:../../index.php?action=quanlyxe');
}

?>