<?php 
session_start();
require_once 'connect.php';
$id= $_GET['id_tn'];
$sql = "SELECT* FROM tainghe WHERE id = $id ";
$result = mysqli_query($conn, $sql);

// tạo mảng để lưu sản phẩm
$product_cart_tn = array();
foreach ($result as $value_tn) {
    $product_cart_tn[$value_tn['id']] = $value_tn;
}
// die();
// $detail = $product_cart_tn[$id];
// echo "<pre>";
// print_r($detail);

if(isset($_POST['add-to-cart'])){
    if (!isset($_SESSION['cart_tn']) || $_SESSION['cart_tn'] == null) {
        $product_cart_tn[$id]['so_luong_tn'] =1;
        $_SESSION['cart_tn'][$id] = $product_cart_tn[$id];
        // echo "<pre>";
        // print_r($_SESSION['cart_tn']);
        // code...
    }
    else
    {
        if(array_key_exists($id, $_SESSION['cart_tn'])){
            $_SESSION['cart_tn'][$id]['so_luong_tn'] +=1; 
        }
        else{
            $product_cart_tn[$id]['so_luong_tn'] =1;
        $_SESSION['cart_tn'][$id] = $product_cart_tn[$id];
        }
    }
    echo "<pre>";
print_r($_SESSION['cart_tn']);
header('location:muahang.php');
}
?>
