<?php

session_start();
include("admin/config/config.php");
$id_kh = $_SESSION['id_kh'];
$code_order = rand(0, 9999);
$insert_cart = "INSERT INTO tbl_cart(id_kh, code_cart, cart_status) VALUE ('".$id_kh."','".$code_order."', 1)";
$cart_query = mysqli_query($insert_cart);
if($insert_cart){
    foreach($_SESSION['cart'] as $key => $value){
        $id_xe = $value['id'];
        $ngaydi = $value['ngaydi'];
        $ngayve = $value['ngayve'];
        $insert_order_detail = "INSERT INTO tbl_cart_detail(id_xe, code_cart, ngaydi, ngayve) VALUE('".$id_xe."','".$code_order."','".$ngaydi."','".$ngayve."')";
        mysqli_query($mysqli,$insert_order_detail);
        
    }
}


?>