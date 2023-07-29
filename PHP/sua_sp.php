<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/BTL_DienThoai/STYLE/hang_hoa_1.css">

    <title>Sua san pham</title>
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
            <h1 class="header_main"></h1>

            <table>
        <h1>Sửa sản phẩm </h1>
        <?php      
        
        include "connect.php";
            $this_id= $_GET['this_id'];
            // echo "$this_id";

            $sql_sua = "SELECT * FROM dienthoai WHERE id ='$this_id'";
            // mysqli_query($conn, $sql);
            $query_sua = mysqli_query($conn, $sql_sua);

            $row = mysqli_fetch_assoc($query_sua);

            if(isset($_POST['btn_sua'])){
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $gia = $_POST['gia'];
                $goc = $_POST['goc'];
                $baohanh = $_POST['baohanh'];
                $thongtin = $_POST['thongtin'];

                $sql_sua = "UPDATE dienthoai SET id ='$id', name ='$name',
                        img = '$img', gia='$gia',   giagoc='$goc', baohanh='$baohanh', thongtin='$thongtin' WHERE id =".$this_id;
                mysqli_query($conn, $sql_sua);
        // header('location:dienthoai.php');

            }

?>
<form method="POST">
        <tr>
            <td>ID sản phẩm</td> 
            <td><input value="<?php echo $row['id'];?>" name="id" type="text"></td>
        </tr>
        <tr>
            <td>Tên sản phẩm</td> 
            <td><input value="<?php echo $row['name'];?>" name="name" type="text"></td>
        </tr>
        <tr>
            <td>Hình ảnh</td> 
            <td><input value="<?php echo $row['img'];?>" name="img" type="text"></td>
            <td><img width="100px" class="img_apple" src="/BTL_DienThoai/Image/list_img/<?php echo $row['img']?>"></td>
        </tr>
        <tr>
            <td>Giá sale</td> 
            <td><input value="<?php echo $row['gia'];?> VND" name="gia" type="text"></td>
        </tr>
        <tr>
            <td>Giá gốc</td> 
            <td><input value="<?php echo $row['giagoc'];?> VND" name="goc" type="text"></td>
        </tr>
        <tr>
            <td>bảo hành</td> 
            <td><input value="<?php echo $row['baohanh'];?>" name="baohanh" type="text"></td>
        </tr>

       <tr>
            <td>Thông tin</td> 
            <td><input value="<?php echo $row['thongtin'];?>" name="thongtin" type="text"></td>
       </tr>
       <tr>
            <td></td>
            <td>
                <input name="btn_sua" type="submit" value="Sua">
            </td>
       </tr>   
</form>
        </div>
    </div>
    
</body>
</html>