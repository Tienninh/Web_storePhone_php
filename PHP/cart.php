<?php 

include "connect.php";
session_start();
if(isset($_GET['id'])){
    $id= $_GET['id'];
}

//khi bấm vào nút mua thì sẽ chuyển đến trang giỏ hàng luôn 
$action = (isset($_GET['action']))? $_GET['action']:'add';


//trường hợp không có add thì sản phẩm mua sẽ tăng theo biến quantity đã đặt bên detail_dt.php
$soluong = (isset($_GET['quantity']))?$_GET['quantity'] : 1;

// echo $action;
// echo "<br>";
// echo $id;
// die();

var_dump($_GET);


$query = mysqli_query($conn, "SELECT * FROM dienthoai WHERE id= $id");

if($query){
    $product = mysqli_fetch_assoc($query);
}

$item = [
    'id'=>$product['id'],
    'name'=>$product['namedt'],
    'img'=>$product['imagedt'],
    'gia'=>$product['giadt'],
    'giagoc' =>$product['giamgia'],
    'baohanh'=>$product['baohanhdt'],
    'thongtin'=>$product['thongtin'],
    'solan' =>$soluong
];
//dùng mảng 2 chiều 
//kiểm tra xem sản phẩm đã có trong giỏ hàng chưa

if($action == 'add'){
    if(isset($_SESSION['cart'][$id])){
    // nếu có thì chỉ vào key solan và tăng số lượng lên khi bấm 
    $_SESSION['cart'][$id]['solan'] +=$soluong ;
    }
    //nếu chưa có sản phẩm thì thêm sản phẩm bình thường
    else{
        $_SESSION['cart'][$id]= $item ;

    }
}

echo "<pre>";
print_r($_SESSION['cart']);


header('location:view_cart.php');
?>