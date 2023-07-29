<?php
    session_start();
    if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
    //làm rỗng giỏ hàng
    if(isset($_GET['delcart'])&&($_GET['delcart']==1)) unset($_SESSION['giohang']);
    //xóa sp trong giỏ hàng
    if(isset($_GET['delid'])&&($_GET['delid']>=0)){
       array_splice($_SESSION['giohang'],$_GET['delid'],1);
    }
    //lấy dữ liệu từ form
    if(isset($_POST['addcart'])&&($_POST['addcart'])){
        $hinh=$_POST['hinh'];
        $tensp=$_POST['tensp'];
        $gia=$_POST['gia'];
        $soluong=$_POST['soluong'];

        //kiem tra sp co trong gio hang hay khong?

        $fl=0; //kiem tra sp co trung trong gio hang khong?

        for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
            
            if($_SESSION['giohang'][$i][1]==$tensp){
                $fl=1;
                $soluongnew=$soluong+$_SESSION['giohang'][$i][3];
                $_SESSION['giohang'][$i][3]=$soluongnew;
                break;

            }
            
        }
        //neu khong trung sp trong gio hang thi them moi
        if($fl==0){
            //them moi sp vao gio hang
            $sp=[$hinh,$tensp,$gia,$soluong];
            $_SESSION['giohang'][]=$sp;
        }

       // var_dump($_SESSION['giohang']);
    }

    function showgiohang(){
        if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
            if(sizeof($_SESSION['giohang'])>0){
                $tong=0;
                for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
                    $tt=$_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                    $tong+=$tt;
                    echo '<tr>
                            <td>'.($i+1).'</td>
                            <td><img src="images/'.$_SESSION['giohang'][$i][0].'" alt=""></td>
                            <td>'.$_SESSION['giohang'][$i][1].'</td>
                            <td>'.$_SESSION['giohang'][$i][2].'</td>
                            <td>'.$_SESSION['giohang'][$i][3].'</td>
                            <td>
                                <div>'.$tt.'</div>
                            </td>
                            <td>
                                <a href="cart.php?delid='.$i.'">Xóa</a>
                            </td>
                        </tr>';
                }
                echo '<tr>
                        <th colspan="5">Tổng đơn hàng</th>
                        <th>
                            <div>'.$tong.'</div>
                        </th>
    
                    </tr>';
            }else{
                echo "Giỏ hàng rỗng!";
            }    
        }
    }
    


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart | View Cart</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="boxcenter">
        <div class="row mb header">
            <h1> SIÊU THỊ TRỰC TUYẾN</h1>
        </div>
        <div class="row mb menu">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="cart.php">Giỏ hàng</a></li>
                <li><a href="#">Liên hệ</a></li>
                <li><a href="#">Góp ý</a></li>
                <li><a href="#">Hỏi đáp</a></li>
            </ul>
        </div>
        <div class="row mb ">
            <div class="boxtrai mr" id="bill">
                <div class="row" >
                    <h1>THÔNG TIN NHẬN HÀNG</h1>
                    <table class="thongtinnhanhang">
                        <tr>
                            <td width="20%">Họ tên</td>
                            <td><input type="text" name="hoten" required></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="diachi" required></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><input type="text" name="dienthoai" required></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" required></td>
                        </tr>
                    </table>
                </div>
                <div class="row mb">
                    <h1>GIỎ HÀNG</h1>
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Hình</th>
                            <th>Tên sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền ($)</th>
                            <th>Xóa</th>
                        </tr>
                        <?php showgiohang(); ?>
                        <!-- <tr>
                            <td>1</td>
                            <td><img src="images/1.jpg" alt=""></td>
                            <td>Đồng hồ</td>
                            <td>10</td>
                            <td>1</td>
                            <td>
                                <div>10</div>
                            </td>
                        </tr> -->
                        <!-- <tr>
                            <th colspan="5">Tổng đơn hàng</th>
                            <th>
                                <div>10</div>
                            </th>

                        </tr> -->
                    </table>
                </div>
                <div class="row mb">
                    <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">
                    <a href="cart.php?delcart=1"><input type="button" value="XÓA GIỎ HÀNG"></a>
                    <a href="index.php"><input type="button" value="TIẾP TỤC ĐẶT HÀNG"></a>
                </div>
            </div>
            <div class="boxphai">
                <div class="row mb ">
                    <div class="boxtitle">TÀI KHOẢN</div>
                    <div class="boxcontent formtaikhoan">
                        <form action="#" method="post">
                            <div class="row mb10">
                                Tên đăng nhập<br>
                                <input type="text" name="user">
                            </div>
                            <div class="row mb10">
                                Mật khẩu<br>

                                <input type="password" name="pass">
                            </div>
                            <div class="row mb10">
                                <input type="checkbox" name=""> Ghi nhớ tài khoản?</div>
                            <div class="row mb10">
                                <input type="submit" value="Đăng nhập">
                            </div>
                        </form>
                        <li>
                            <a href="#">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="#">Đăng ký thành viên</a>
                        </li>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">DANH MỤC</div>
                    <div class="boxcontent2 menudoc">
                        <ul>
                            <li>
                                <a href="#">Đồng hồ</a>
                            </li>
                            <li>
                                <a href="#">Laptop</a>
                            </li>
                            <li>
                                <a href="#">Điện thoại</a>
                            </li>
                            <li>
                                <a href="#">Ba lô</a>
                            </li>
                            <li>
                                <a href="#">Đồng hồ</a>
                            </li>
                            <li>
                                <a href="#">Laptop</a>
                            </li>
                            <li>
                                <a href="#">Điện thoại</a>
                            </li>
                            <li>
                                <a href="#">Ba lô</a>
                            </li>
                        </ul>
                    </div>
                    <div class="boxfooter searbox">
                        <form action="#" method="post">
                            <input type="text" name="" id="">
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="boxtitle">TOP 10 YÊU THÍCH</div>
                    <div class="row boxcontent">
                        <div class="row mb10 top10">
                            <img src="images/1.jpg" alt="">
                            <a href="#">Sir Rodney's Marmalade</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="images/5.jpg" alt="">
                            <a href="#">Cate de Blaye</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="images/3.jpg" alt="">
                            <a href="#">Tharinger Rostbratwurst</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="images/4.jpg" alt="">
                            <a href="#">Mishi Kobe Niku</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="images/1.jpg" alt="">
                            <a href="#">Sir Rodney's Marmalade</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="images/5.jpg" alt="">
                            <a href="#">Cate de Blaye</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="images/3.jpg" alt="">
                            <a href="#">Tharinger Rostbratwurst</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="images/4.jpg" alt="">
                            <a href="#">Mishi Kobe Niku</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb footer">
            Copyright © 2021 - HOTB
        </div>
    </div>

</body>

</html>




<style>
    * {
    box-sizing: border-box;
    font-family: sans-serif;
    font-size: 0.7vw;
}

.boxcenter {
    width: 60%;
    margin: 0 auto;
}

.row {
    float: left;
    width: 100%;
}

.mb {
    margin-bottom: 20px;
}

.mb10 {
    margin-bottom: 10px;
}

.mr {
    margin-right: 2%;
}

.demo {
    background-color: antiquewhite;
    min-height: 100px;
}

.header {
    background-image: linear-gradient(#F90, #F60);
    border: 1px #F60 solid;
    color: #FFF;
    border-radius: 5px;
}

a {
    text-decoration: none;
}

.giohang {
    position: fixed;
    border-radius: 10px;
    right: 20px;
    top: 20px;
    height: 60px;
    background-image: linear-gradient(#F90, #F60);
    padding: 10px;
}

.giohang img {
    width: 40px;
    float: left;
    margin-right: 5px;
}

.giohang span {
    font-weight: bold;
    font-size: 2vw;
    color: yellow;
    height: 40px;
    line-height: 40px;
}

.footer {
    background-color: #F90;
    border: 1px #F60 solid;
    color: #FFF;
    font-size: 0.8vw;
    border-radius: 5px;
    padding: 20px;
}

.header h1 {
    margin: 20px;
    font-size: 1.2vw;
    color: #FFF;
}

h1 {
    margin: 20px 0px;
    font-size: 1.2vw;
    color: #F60;
}

.menu {
    background-color: black;
    color: #CCC;
    border-radius: 5px;
}

.boxtrai {
    float: left;
    width: 74%;
}

.boxphai {
    float: left;
    width: 24%;
}

.boxtitle {
    color: #333;
    padding: 10px;
    background-color: #EEE;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    border: 1px #CCC solid;
}

.boxcontent {
    border-left: 1px #CCC solid;
    border-right: 1px #CCC solid;
    border-bottom: 1px #CCC solid;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    min-height: 50px;
    padding: 20px;
}

.boxcontent2 {
    border-left: 1px #CCC solid;
    border-right: 1px #CCC solid;
    background-color: #EEE;
}

.boxfooter {
    padding: 10px;
    background-color: #EEE;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    border-left: 1px #CCC solid;
    border-right: 1px #CCC solid;
    border-bottom: 1px #CCC solid;
}

.banner {
    min-height: 300px;
    width: 100%;
    text-align: center;
}

.banner img {
    height: 300px;
}

.boxsp {
    float: left;
    width: calc(32% - 10px);
    min-height: 300px;
    border: 1px #EEE solid;
    border-radius: 5px;
    margin-bottom: 20px;
    position: relative;
    padding: 5px;
}

.boxsp input {
    width: 40px;
    position: absolute;
    right: 5px;
    bottom: 40px;
    border-radius: 5px;
    border: 1px #FC0 solid;
}

.boxsp button {
    width: 80px;
    position: absolute;
    right: 5px;
    bottom: 10px;
    background-color: #FF6600;
    border-radius: 5px;
    border: 1px #FC0 solid;
    padding: 5px 0px;
    color: #EEE;
}

.boxsp input[type="number"] {
    width: 40px;
    position: absolute;
    right: 5px;
    bottom: 40px;
    border-radius: 5px;
    border: 1px #FC0 solid;
}

.boxsp input[type="submit"] {
    width: 80px;
    position: absolute;
    right: 5px;
    bottom: 10px;
    background-color: #FF6600;
    border-radius: 5px;
    border: 1px #FC0 solid;
    padding: 5px 0px;
    color: #EEE;
}

.boxsp .img {
    min-height: 230px;
    text-align: center;
}

.img img {
    height: 220px;
    width: 100%;
    object-fit: cover;
}

.menu ul {
    padding: 0px 10px;
}

.menu ul li {
    list-style-type: none;
    display: inline;
    padding: 0px 15px;
}

.menu ul li a {
    color: #CCC;
    text-decoration: none;
    transition: 0.5s;
}

.menu ul li a:hover {
    color: white;
    font-size: 0.8vw;
}


/* giỏ hàng */

table {
    width: 100%;
    border-collapse: collapse;
}

th {
    background-color: #999;
    padding: 10px;
}

th,
td {
    border: 1px #CCC solid;
    text-align: center;
}

td div {
    width: calc(100% - 20px);
    padding: 0px 10px;
    text-align: right;
}

th div {
    width: calc(100% - 10px);
    padding: 0px 5px;
    text-align: right;
    font-size: 1.5rem;
}

td img {
    width: 100px;
}


/* box tài khoản*/

.formtaikhoan {
    line-height: 150%;
}

.formtaikhoan input[type="text"],
.formtaikhoan input[type="password"],
.frmcontent input[type="text"] {
    width: 100%;
    border: 1px #CCC solid;
    padding: 5px 10px;
    border-radius: 5px;
}

.formtaikhoan input[type="checkbox"] {
    border-radius: 5px;
}

.formtaikhoan input[type="submit"],
.frmcontent input[type="submit"],
.frmcontent input[type="reset"],
.frmcontent input[type="button"] {
    border-radius: 5px;
    padding: 5px 10px;
    background-color: white;
    border: 1px #CCC solid;
}

.formtaikhoan input[type="submit"]:hover,
.frmcontent input[type="submit"]:hover,
.frmcontent input[type="reset"]:hover,
.frmcontent input[type="button"]:hover {
    background-color: #CCC;
}

.formtaikhoan li a {
    color: teal;
    text-decoration: none;
}

.formtaikhoan li a:hover {
    color: #060;
    text-decoration: underline;
}


/* menu dọc*/

.menudoc ul {
    margin: 0;
    padding: 0;
    list-style-type: none;
}

.menudoc ul li {
    padding: 10px 20px;
    background-color: #FFF;
    border-bottom: 1px #CCC solid;
}

.menudoc ul li a {
    color: #666;
    text-decoration: none;
}

.menudoc ul li:hover {
    background-color: #CCC;
}

.searbox input[type="text"] {
    width: 100%;
    padding: 5px 10px;
    background-color: #FFF;
    border: 1px #CCC solid;
    border-radius: 5px;
}

.top10 img {
    width: 20%;
    height: 50px;
    float: left;
    margin-right: 10px;
    border-radius: 5px;
    border: 1px #CCC solid;
}

.top10 a {
    color: #666;
    text-decoration: none;
}

.top10 a:hover {
    color: #000;
    text-decoration: underline;
}


/* Admin*/

.headeradmin {
    background-color: #EEE;
    border: 1px #CCC solid;
    color: #666;
    border-radius: 5px;
    padding: 0px 20px;
}

.headeradmin h1 {
    font-size: 2vw;
}

.frmtitle {
    background-color: #EEE;
    border: 1px #CCC solid;
    color: #666;
    border-radius: 5px;
    padding: 0px 20px;
}

.frmcontent {
    padding: 20px 0px;
}

.frmdsloai table {
    width: 100%;
    border-collapse: collapse;
}

.frmdsloai table th:nth-child(1) {
    width: 10%;
    padding: 20px;
    background-color: #CCC;
}

.frmdsloai table th:nth-child(2) {
    width: 30%;
    background-color: #CCC;
}

.frmdsloai table th:nth-child(3) {
    width: 40%;
    background-color: #CCC;
}

.frmdsloai table th:nth-child(4) {
    width: 20%;
    background-color: #CCC;
}

.frmdsloai table td {
    padding: 10px 20px;
    border: 1px #CCC solid;
}


/* thong tin nhận hàng */

.thongtinnhanhang tr td {
    text-align: left;
    padding: 10px;
}

.thongtinnhanhang input {
    width: 100%;
    border: 1px #CCC solid;
    padding: 5px;
    border-radius: 5px;
}

#bill input[type="submit"] {
    position: unset;
    width: 150px;
    border: 1px #F90 solid;
    background-image: linear-gradient(#F90, #F60);
    padding: 10px;
    border-radius: 5px;
    color: #FFF;
    font-weight: bold;
}

.dongy:hover {
    background-image: linear-gradient(#F30, #000);
}
</style>