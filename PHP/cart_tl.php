<?php 
session_start();
require_once 'connect.php';
$id= $_GET['id_tl'];
$sql = "SELECT* FROM tablet WHERE id = $id ";
$result = mysqli_query($conn, $sql);

// tạo mảng để lưu sản phẩm
$product_cart_tl = array();
foreach ($result as $value_tl) {
    $product_cart_tl[$value_tl['id']] = $value_tl;
}
// die();

// $detail = $product_cart_tl[$id];
// echo "<pre>";
// print_r($detail);

if(isset($_POST['add-to-cart'])){
    if (!isset($_SESSION['cart_tl']) || $_SESSION['cart_tl'] == null) {

        $product_cart_tl[$id]['so_luong_tl'] =1;
        $_SESSION['cart_tl'][$id] = $product_cart_tl[$id];
        // echo "<pre>";
        // print_r($_SESSION['cart_tl']);
        // code...
    }

    else
    {
        if(array_key_exists($id, $_SESSION['cart_tl'])){
            $_SESSION['cart_tl'][$id]['so_luong_tl'] +=1; 
        }

        else{
            $product_cart_tl[$id]['so_luong_tl'] =1;
        $_SESSION['cart_tl'][$id] = $product_cart_tl[$id];
        }
    }

    echo "<pre>";
print_r($_SESSION['cart_tl']);

header('location:muahang.php');
 
}
?>
