




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="/BTL_DienThoai/STYLE/hang_hoa.css">
    <title>Admin</title>
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
            <?php
    include "connect.php";
    $result_dt = mysqli_query($conn, "SELECT * FROM maytinh");
?>
    
    <table  class="table table-bordered">
        <h1 class="tb_h1">Thông tin sản phẩm</h1>
    <thead class="bg-light">
        <tr>
            <th class="tieude" scope="col">STT</th>
            <th class="tieude" scope="col">Hình ảnh</th>
            <th class="tieude" scope="col">Tên sản phẩm</th>
            <th class="tieude" scope="col">Giá sale</th>
            <th class="tieude" scope="col">Giá gốc</th>
            <th class="tieude" scope="col">Bảo hành</th>
            <th class="tieude" scope="col">Thông tin</th>
            <th class="tieude" colspan="3" scope="col">Chức năng</th>
        </tr>
    </thead>
    <tbody>
       <?php  while($value_mt = mysqli_fetch_assoc($result_dt)) {?>
        <tr>
            <td class="phanchinh"><?php echo $value_mt['id']?></td>
            <td class="phanchinh"><img width="50px" class="img_apple" src="/BTL_DienThoai/Image/laptop_img/<?php echo $value_mt['img']?>"></td>
            <td class="phanchinh"><p width="100px"><?php echo $value_mt['name']?></p></td>
            <td class="phanchinh"><?php echo $value_mt['gia']?>₫</td>
            <td class="phanchinh"><?php echo $value_mt['giagoc']?>₫</td>
            <td class="phanchinh"><?php echo $value_mt['baohanh']?></td>
            <td class="phanchinh"><?php echo $value_mt['thongtin']?></td>
            <td class="phanchinh"><a class="btn_chucnang them" href="them_sp.php">Thêm</a></td>
            <td class="phanchinh"><a class="btn_chucnang sua" href="sua_sp.php?this_id_mt=<?php echo $value_mt['id']?>" class="btn btn-primary">Sửa</a></td>
            <td class="phanchinh"><a class="btn_chucnang xoa" href="xoa_sp.php? this_id_xoa_mt=<?php echo $value_mt['id'] ?>">Xóa</a></td>
            </tr>
   <?php }?>
        
    
        </div>
    </div>
    
</body>
</html>