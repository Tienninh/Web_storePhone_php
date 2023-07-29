




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS -->
<link rel="stylesheet" href="/BTL_DienThoai/STYLE/hang_hoa_1.css">
    <title>Admin</title>
</head>
<body>
    <div class="header">
        <div class="header_menu">
        <h1 class="menu_fiverr"><a class="fiverr" href="hanghoa.php">FIVERR</a>
            </h1>
            <ul class="menu_list">
                <li class="list_li"><a class="list_a" href="hanghoa.php">Trang chủ</a></li>
                <li class="list_li"><a class="list_a" href="taikhoan.php">Tài khoản</a></li>
                <li class="list_li"><a class="list_a" href="loaihang.php">Loại hàng</a></li>
                <li class="list_li"><a class="list_a" href="khachhang.php">Khách hàng</a></li>
                <li class="list_li"><a class="list_a" href="don_hang.php">Đơn hàng</a></li>
            </ul>
        </div>

        <div class="header_content">
            <h1 class="header_main"></h1>
            <?php
    include "connect.php";
    $result_dt = mysqli_query($conn, "SELECT * FROM acc_admin");
?>
    
    <table  class="table table-bordered">
        <h1 class="tb_h1">Thông tin sản phẩm</h1>
    <thead class="bg-light">
        <tr>
            <th class="tieude" scope="col">STT</th>
            <th class="tieude" scope="col">Tên người dùng </th>
            <th class="tieude" scope="col">Tên tài khoản</th>
            <th class="tieude" scope="col">Mật khẩu</th>
            <th class="tieude" colspan="3" scope="col">Chức năng</th>
        </tr>
    </thead>
    <tbody>
       <?php  while($value_dt = mysqli_fetch_assoc($result_dt)) {?>
        <tr>
            <td class="phanchinh td_main"><?php echo $value_dt['id']?></td>
            <td class="phanchinh td_main"><?php echo $value_dt['name']?></td>
            <td class="phanchinh td_main"><?php echo $value_dt['user']?></td>
            <td class="phanchinh td_main"><?php echo $value_dt['pass']?></td>
            <td class="phanchinh td_main"><a class="btn_chucnang them" href="them_sp.php">Thêm</a></td>
            <td class="phanchinh td_main"><a class="btn_chucnang sua" href="sua_sp.php?this_id=<?php echo $value_dt['id']?>" class="btn btn-primary">Sửa</a></td>
            <td class="phanchinh td_main"><a class="btn_chucnang xoa" href="xoa_sp.php? this_id_xoa=<?php echo $value_dt['id'] ?>">Xóa</a></td>
            </tr>
   <?php }?>
        
    
        </div>
    </div>

    <!-- <button>EXCEL</button> -->

    
</body>
</html>
<form action="admin_excel.php" method="POST"><input type="submit" name="export_excel" value="Xuất Excel"></form>