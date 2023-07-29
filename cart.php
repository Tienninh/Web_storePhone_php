<?php 
session_start();
require_once 'db.php';
$id= $_GET['ma'];
$sql = "SELECT* FROM dienthoai WHERE id = $id ";
$result = mysqli_query($conn, $sql);

// tạo mảng để lưu sản phẩm
$product_cart = array();
foreach ($result as $value) {
    $product_cart[$value['id']] = $value;
}

// $detail = $product_cart[$id];
// echo "<pre>";
// print_r($detail);

if(isset($_POST['add-to-cart'])){
    if (!isset($_SESSION['cart']) || $_SESSION['cart'] == null) {

        $product_cart[$id]['so_luong'] =1;
        $_SESSION['cart'][$id] = $product_cart[$id];
        // echo "<pre>";
        // print_r($_SESSION['cart']);
        // code...
    }

    else
    {
        if(array_key_exists($id, $_SESSION['cart'])){
            $_SESSION['cart'][$id]['so_luong'] +=1; 
        }

        else{
            $product_cart[$id]['so_luong'] =1;
        $_SESSION['cart'][$id] = $product_cart[$id];
        }
    }

    echo "<pre>";
print_r($_SESSION['cart']);

header('location:shopping.php');
 
}
?>
