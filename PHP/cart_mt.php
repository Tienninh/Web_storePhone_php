<?php 
session_start();
require_once 'connect.php';
$id= $_GET['id'];
$sql = "SELECT* FROM maytinh WHERE id = $id ";
$result = mysqli_query($conn, $sql);

// tạo mảng để lưu sản phẩm
$product_cart_mt = array();
foreach ($result as $value_mt) {
    $product_cart_mt[$value_mt['id']] = $value_mt;
}
// die();

// $detail = $product_cart_mt[$id];
// echo "<pre>";
// print_r($detail);

if(isset($_POST['add-to-cart'])){
    if (!isset($_SESSION['cart_mt']) || $_SESSION['cart_mt'] == null) {

        $product_cart_mt[$id]['so_luong_mt'] =1;
        $_SESSION['cart_mt'][$id] = $product_cart_mt[$id];
        // echo "<pre>";
        // print_r($_SESSION['cart_mt']);
        // code...
    }

    else
    {
        if(array_key_exists($id, $_SESSION['cart_mt'])){
            $_SESSION['cart_mt'][$id]['so_luong_mt'] +=1; 
        }

        else{
            $product_cart_mt[$id]['so_luong_mt'] =1;
        $_SESSION['cart_mt'][$id] = $product_cart_mt[$id];
        }
    }

    echo "<pre>";
print_r($_SESSION['cart_mt']);

header('location:muahang.php');
 
}
?>
