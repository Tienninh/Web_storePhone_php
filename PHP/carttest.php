<?php 
    include "connect.php";
    session_start();
    if(isset($_SESSION['giohang']))  $_SESSION['giohang'] = [];

    //lấy dữ liệu từ form 
    if(isset($_POST['add-to-cart']) && ($_POST['add-to-cart'])){
        $hinh = $_POST['hinh'];
        $ten = $_POST['ten'];
        $gia = $_POST['gia'];
        $giagoc = $_POST['gia_goc'];
        $soluong = $_POST['soluong'];

        //tao mang de luu thong tin sp 
        $sp = [$hinh, $ten, $gia, $giagoc, $soluong];
        //lay thong tin sp add vao session 
        $_SESSION['giohang'] = $sp;
        var_dump($_SESSION['giohang']);

    }

?>