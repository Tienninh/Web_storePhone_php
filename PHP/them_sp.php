<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/BTL_DienThoai/STYLE/hang_hoa_1.css">

    <title>Thêm sản phẩm</title>
</head>
<body>
    <div class="header">
        <div class="header_menu">
            <h1 class="menu_fiverr">FIVERR</h1>
            <ul class="menu_list">
                <li class="list_li"><a class="list_a" href="">Trang chủ</a></li>
                <li class="list_li"><a class="list_a" href="">Tài khoản</a></li>
                <li class="list_li"><a class="list_a" href="loaihang.php">Loại hàng</a></li>
                <li class="list_li"><a class="list_a" href="">Khách hàng</a></li>
                <li class="list_li"><a class="list_a" href="">Đơn hàng</a></li>
            </ul>
        </div>

        <div class="header_content">
            <h1 class="header_main">Thêm sản phẩm</h1>
            <form method="POST">
    <table border="1">
        <h1>Thêm sản phẩm</h1>
        <tr>
            <td>Tên sản phẩm</td> 
            <td><input name="ten" type="text"></td>
        </tr>
        <tr>
            <td>Hình ảnh </td> 
            <td><input name="img" type="text"></td>
        </tr>
        <tr>
            <td>Giá sale</td> 
            <td><input name="gia" type="text"></td>
        </tr>
        <tr>
            <td>Giá gốc</td> 
            <td><input name="goc" type="text"></td>
        </tr>
        <tr>
            <td>bảo hành</td> 
            <td><input name="baohanh" type="text"></td>
        </tr>
        <tr>
            <td>Thông tin</td> 
            <td><input name="thongtin" type="text"></td>
       </tr>
       <tr>

       <td></td>
        <td>
            <input name="btn_them" type="submit" value="Them">
        </td>
       </tr>   
        </tr>
    </table>
    </form>>
</form>

    <?php
    include "connect.php";
    if(isset($_POST['btn_them'])){
        $name =$_POST['ten'];
        $hinhanh =$_POST['img'];
        $giasale =$_POST['gia'];
        $giagoc =$_POST['goc'];
        $baohanh =$_POST['baohanh'];
        $thongtin =$_POST['thongtin'];

        
        $sql = "INSERT INTO dienthoai(name, img, gia, giagoc, baohanh,thongtin) VALUES('$name', '$hinhanh','$giasale','$giagoc','$baohanh', '$thongtin')";
        mysqli_query($conn, $sql);

        // header('location:dienthoai.php');
    }
    ?>
        </div>
    </div>
    
</body>
</html>