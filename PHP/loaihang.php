<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <h1 class="header_main"> DANH SÁCH MẶT HÀNG</h1>
            <p class="content_para">Dưới đây là danh sách các mặt hàng</p>

            <table class="content_table" >

                <tr>
                    <th class="tb_th">Tên loại hàng</th>
                    <th class="tb_th">Chức năng</th>
                </tr>

                <tr>
                    <td class="tb_td">Điện thoại</td>
                    <td class="tb_td"><button class="tb_btn"><a class="btn_a" href="dienthoai.php">Chi tiết</a></button></td>
                    <!-- <td class="tb_td">Điện thoại</td> -->
                </tr>
                <tr>
                    <td class="tb_td">Máy tính</td>
                    <td class="tb_td"><button class="tb_btn"><a class="btn_a" href="maytinh.php">Chi tiết</a></button></td>
                    <!-- <td class="tb_td">Điện thoại</td> -->
                </tr>
                <tr>
                    <td class="tb_td">Tai nghe</td>
                    <td class="tb_td"><button class="tb_btn"><a class="btn_a" href="tainghe.php">Chi tiết</a></button></td>
                    <!-- <td class="tb_td">Điện thoại</td> -->
                </tr>
                <tr>
                    <td class="tb_td">Máy tính bảng</td>
                    <td class="tb_td"><button class="tb_btn"><a class="btn_a" href="tablet.php">Chi tiết</a></button></td>
                    <!-- <td class="tb_td">Điện thoại</td> -->
                </tr>
            </table>
        </div>
    </div>
    
</body>
</html>