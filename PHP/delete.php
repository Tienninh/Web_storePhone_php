<?php 
session_start();
require_once 'connect.php';
$id=$_GET['ma_sp'];
if(isset($_SESSION['cart'][$id])){
	unset($_SESSION['cart'][$id]);
}


$id_mt=$_GET['ma_sp_mt'];
if(isset($_SESSION['cart_mt'][$id_mt])){
	unset($_SESSION['cart_mt'][$id_mt]);
}
// session_start();
// require_once 'db.php';
$id_tn=$_GET['ma_sp_tn'];
if(isset($_SESSION['cart_tn'][$id_tn])){
	unset($_SESSION['cart_tn'][$id_tn]);
}
// session_start();
// require_once 'db.php';
$id_tl=$_GET['ma_sp_tl'];
if(isset($_SESSION['cart_tl'][$id_tl])){
	unset($_SESSION['cart_tl'][$id_tl]);
}
header('location:muahang.php');
 ?>
