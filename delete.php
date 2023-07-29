<?php 
session_start();
require_once 'db.php';
$id=$_GET['ma_sp'];
if(isset($_SESSION['cart'][$id])){
	unset($_SESSION['cart'][$id]);
}
header('location:shopping.php');

 ?>