<?php 

session_start();
require_once "connect.php"; 

// hàm kiểm tra của nút update

if (isset($_POST['update'])) {
	// hàm kiểm tra xem có session cảrt hay khong
	if(isset($_SESSION['cart'])){
		foreach ($_SESSION['cart'] as $value) {
			if($_POST['so_luong'.$value['id']] <= 0){
				unset($_SESSION['cart'][$value['id']]);
			}

			else{
				$_SESSION['cart'][$value['id']]['so_luong'] = $_POST['so_luong'.$value['id']];
			}
		}
	}

	



	
//=======================================================================MT
	if(isset($_SESSION['cart_mt'])){
		foreach ($_SESSION['cart_mt'] as $value_mt) {
			if($_POST['so_luong_mt'.$value_mt['id']] <= 0){
				unset($_SESSION['cart_mt'][$value_mt['id']]);
			}

			else{
				$_SESSION['cart_mt'][$value_mt['id']]['so_luong_mt'] = $_POST['so_luong_mt'.$value_mt['id']];
			}
		}
	}
//=======================================================================TN

	if(isset($_SESSION['cart_tn'])){
		foreach ($_SESSION['cart_tn'] as $value_tn) {
			if($_POST['so_luong_tn'.$value_tn['id']] <= 0){
				unset($_SESSION['cart_tn'][$value_tn['id']]);
			}

			else{
				$_SESSION['cart_tn'][$value_tn['id']]['so_luong_tn'] = $_POST['so_luong_tn'.$value_tn['id']];
			}
		}
	}
//=======================================================================TL

	if(isset($_SESSION['cart_tl'])){
		foreach ($_SESSION['cart_tl'] as $value_tl) {
			if($_POST['so_luong_tl'.$value_tl['id']] <= 0){
				unset($_SESSION['cart_tl'][$value_tl['id']]);
			}

			else{
				$_SESSION['cart_tl'][$value_tl['id']]['so_luong_tl'] = $_POST['so_luong_tl'.$value_tl['id']];
			}
		}
	}
	
}
?>


<?php  

//Gửi thông tin về admin 
if(isset($_POST['oder'])){
	if(empty($_POST['ten']) || empty($_POST['diachi']) || empty($_POST['sdt']) ){
		echo 0;
	}

	else{
		$cart = !empty($_SESSION['cart'])?$_SESSION['cart']:[];
		 $cart_mt = !empty($_SESSION['cart_mt'])?$_SESSION['cart_mt']:[];
		// $cart_tn = !empty($_SESSION['cart_tn'])?$_SESSION['cart_tn']:[];
		// $cart_tl = !empty($_SESSION['cart_tl'])?$_SESSION['cart_tl']:[];
		$ten =$_POST['ten'];
		$sdt =$_POST['sdt'];
		$date =$_POST['date'];
		$diachi =$_POST['diachi'];
		$total =$_POST['tongtien'];
		
		// $tongtien =$_POST['tongtien'];
		$sql = "INSERT INTO don_hang( name, sdt,ngaydathang,  diachi, tongtien ) VALUES ('$ten', '$sdt', '$date','$diachi', '$total')";
		$sql_mt = "INSERT INTO don_hang( name, sdt,ngaydathang,  diachi, tongtien ) VALUES ('$ten', '$sdt', '$date','$diachi', '$total')";
		// $sql_tn = "INSERT INTO don_hang( name, sdt,ngaydathang,  diachi, tongtien ) VALUES ('$ten', '$sdt', '$date','$diachi', '$total')";
		// $sql_tl = "INSERT INTO don_hang( name, sdt,ngaydathang,  diachi, tongtien ) VALUES ('$ten', '$sdt', '$date','$diachi', '$total')";
		// echo $sql;
		// echo $sql_mt;
		// echo $sql_tn;
		// echo $sql_tl;
		$result_order = mysqli_query($conn, $sql);
		 $result_order_mt = mysqli_query($conn, $sql_mt);
		// $result_order_tn = mysqli_query($conn, $sql_tn);
		// $result_order_tl = mysqli_query($conn, $sql_tl);

		$order ="SELECT MAX(id) as 'id' FROM  don_hang";
		 $order_mt ="SELECT MAX(id) as 'id' FROM  don_hang";
		// $order_tn ="SELECT MAX(id) as 'id' FROM  don_hang";
		// $order_tl ="SELECT MAX(id) as 'id' FROM  don_hang";

		$order_result = mysqli_query($conn, $order);
		 $order_result_mt = mysqli_query($conn, $order_mt);
		// $order_result_tn = mysqli_query($conn, $order_tn);
		// $order_result_tl = mysqli_query($conn, $order_tl);
			while($id_donhang = mysqli_fetch_array($order_result)){
				$id_order = $id_donhang['id'];
		}
			while($id_donhang_mt = mysqli_fetch_array($order_result_mt)){
				$id_order_mt = $id_donhang_mt['id'];
		}
		// 	while($id_donhang_tn = mysqli_fetch_array($order_result_tn)){
		// 		$id_order_tn = $id_donhang_tn['id'];
		// }
		// 	while($id_donhang_tl = mysqli_fetch_array($order_result_tl)){
		// 		$id_order_tl = $id_donhang_tl['id'];
		// }

		foreach($cart as $value){
			$id = $value['id'];
			$sl = $value['so_luong'];
			$id_mt = $value_mt['id'];
			$sl_mt = $value_mt['so_luong_mt'];
			// $id = $value['id'];
			$order_detail = "INSERT INTO hoa_don(id_sp, soluong, id_hoadon) values ($id, $sl, $id_order)";
			// echo $order_detail;
			$result_detail = mysqli_query($conn, $order_detail);

			$order_detail_mt = "INSERT INTO hoa_don(id_sp, soluong, id_hoadon) values ($id_mt, $sl_mt, $id_order_mt)";
			// echo $order_detail_mt;
			$result_detail_mt = mysqli_query($conn, $order_detail_mt);
		}


		// foreach($cart_mt as $value_mt){
		// 	$id_mt = $value_mt['id'];
		// 	$sl_mt = $value_mt['so_luong_mt'];
		// 	// $id = $value['id'];
		// 	$order_detail_mt = "INSERT INTO hoa_don(id_sp, soluong, id_hoadon) values ($id_mt, $sl_mt, $id_order_mt)";
		// 	// echo $order_detail_mt;
		// 	$result_detail_mt = mysqli_query($conn, $order_detail_mt);
		// }
		// foreach($cart_tn as $value_tn){
		// 	$id_tn = $value_tn['id'];
		// 	$sl_tn = $value_tn['so_luong_tn'];
		// 	// $id = $value['id'];
		// 	$order_detail_tn = "INSERT INTO hoa_don(id_sp, soluong, id_hoadon) values ($id_tn, $sl_tn, $id_order_tn)";
		// 	// echo $order_detail_tn;
		// 	$result_detail_tn = mysqli_query($conn, $order_detail_tn);
		// }
		// foreach($cart_tl as $value_tl){
		// 	$id_tl = $value_tl['id'];
		// 	$sl_tl = $value_tl['so_luong_tl'];
		// 	// $id = $value['id'];
		// 	$order_detail_tl = "INSERT INTO hoa_don(id_sp, soluong, id_hoadon) values ($id_tl, $sl_tl, $id_order_tl)";
		// 	// echo $order_detail_tl;
		// 	$result_detail_tl = mysqli_query($conn, $order_detail_tl);
		// }

		// if(mysqli_query($conn, $order_detail)){
		// 	echo 1;

		// }
		// else{
		// 	echo 0;
		// }
		
	}

}?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mua san pham </title>
</head>
<body>
<?php include "header.php" ?>	
	<a href="design.php">Main</a>
<form action="muahang.php" method="POST">
	<table >
		
		<tr class="tb_head">
			<th class="th_head">STT</th>
			<th class="th_head">Hình ảnh</th>
			<th class="th_head">Tên sản phẩm</th>
			<th class="th_head">Giá tiền</th>
			<th class="th_head">Số lượng</th>
			<th class="th_head">Tiền sản phẩm</th>
			<th class="th_head">Chức năng</th>
		</tr>
		<!-- kiem tra xem co san pham hay khong  -->
		<?php 
	$total = 0;
		if(isset($_SESSION['cart'])){
			foreach ($_SESSION['cart'] as $value) {
				//ham tinh tien=================================================== 
				$tong =0;
				$tong =$value['gia'] * $value['so_luong'];		
				$total += $tong;
				$product_price = $value['gia'];

				
		?>

		<tr>
			<td><?php echo $value['id']; ?></td>
			<td>			
				<img width="100px" class="img_apple" src="/BTL_DienThoai/Image/list_img/<?php echo $value['img']?>" >
			</td>
			<td>
				<p class="tb_name"><?php echo $value['name']; ?></p>
			</td>
			<!-- <td><?php echo $value['gia']; ?></td> -->
			<td><?= number_format($product_price, 0, '.', '.'); ?> VNĐ</td>
			<td><input class="input_soluong" type="number" min="1" name="so_luong<?php echo $value['id']; ?>" value="<?php echo $value['so_luong']; ?>" ></td>
			<!-- <td> <?php echo $tong ?></td> -->
			<td><?= number_format($tong, 0, '.', '.'); ?> VNĐ</td>

			<td><a class="delete" href="delete.php?ma_sp=<?php echo $value['id']; ?>">Delete</a></td>
		
		</tr>
		<?php }
		
		} 
		$dienthoai = $tong;
		?>

<!-- ===========================================================================MT -->
<?php
$total_mt = 0;
if(isset($_SESSION['cart_mt'])){
	foreach ($_SESSION['cart_mt'] as $value_mt) {
		//ham tinh tien=================================================== 
		$tong_mt =0;
		$tong_mt =$value_mt['gia'] * $value_mt['so_luong_mt'];
		$product_price_mt = $value_mt['gia'];
		$total_mt +=$tong_mt;
?>
<tr>
			<td><?php echo $value_mt['id']; ?></td>
			<td>			
				<img width="100px" class="img_apple" src="/BTL_DienThoai/Image/laptop_img/<?php echo $value_mt['img']?>" >
			</td>
			<td>
				<p class="tb_name"><?php echo $value_mt['name']; ?></p>
			</td>
			<!-- <td><?php echo $value_mt['gia']; ?></td> -->
			<td><?= number_format($product_price_mt, 0, '.', '.'); ?> VNĐ</td>

			<td><input class="input_soluong" type="number" min="1" name="so_luong_mt<?php echo $value_mt['id']; ?>" value="<?php echo $value_mt['so_luong_mt']; ?>" ></td>
			<!-- <td> <?php echo $tong_mt ?></td> -->
			<td><?= number_format($tong_mt, 0, '.', '.'); ?> VNĐ</td>

			<td><a class="delete" href="delete.php?ma_sp_mt=<?php echo $value_mt['id']; ?>">Delete</a></td>
		
		</tr>
<?php }
		} 
		
		$maytinh = $tong_mt;
		?>
		<!-- ===========================================================================TN -->
<?php

$total_tn = 0;

if(isset($_SESSION['cart_tn'])){
	foreach ($_SESSION['cart_tn'] as $value_tn) {
		//ham tinh tien=================================================== 
		$tong_tn =0;
		$tong_tn =$value_tn['gia'] * $value_tn['so_luong_tn'];
		$product_price_tn = $value_tn['gia'];
		$total_tn += $tong_tn;

?>
<tr>
			<td><?php echo $value_tn['id']; ?></td>
			<td>			
				<img width="100px" class="img_apple" src="/BTL_DienThoai/Image/Tainghe_img/<?php echo $value_tn['img']?>" >
			</td>
			<td>
				<p class="tb_name"><?php echo $value_tn['name']; ?></p>
			</td>
			<!-- <td><?php echo $value_tn['gia']; ?></td> -->
			<td><?= number_format($product_price_tn, 0, '.', '.'); ?> VNĐ</td>

			<td><input class="input_soluong" type="number" min="1" name="so_luong_tn<?php echo $value_tn['id']; ?>" value="<?php echo $value_tn['so_luong_tn']; ?>" ></td>
			<!-- <td> <?php echo $tong_tn ?></td> -->
			<td><?= number_format($tong_tn, 0, '.', '.'); ?> VNĐ</td>

			<td><a class="delete" href="delete.php?ma_sp_tn=<?php echo $value_tn['id']; ?>">Delete</a></td>
		
		</tr>
<?php }
		} 
		$tainghe = $tong_tn;
		?>
		<!-- ===========================================================================TL -->
		<?php
$total_tl = 0;

if(isset($_SESSION['cart_tl'])){
	foreach ($_SESSION['cart_tl'] as $value_tl) {
		//ham tinh tien=================================================== 
		$tong_tl =0;
		$tong_tl =$value_tl['gia'] * $value_tl['so_luong_tl'];
		$product_price_tl = $value_tl['gia'];
		$total_tl += $tong_tl;
?>
<tr>
			<td><?php echo $value_tl['id']; ?></td>
			<td>			
				<img width="100px" class="img_apple" src="/BTL_DienThoai/Image/tablet_img/<?php echo $value_tl['img']?>" >
			</td>
			<td>
				<p class="tb_name"><?php echo $value_tl['name']; ?></p>
				
			</td>
			<!-- <td><?php echo $value_tl['gia']; ?></td> -->
			<td><?= number_format($product_price_tl, 0, '.', '.'); ?> VNĐ</td>

			<td><input class="input_soluong" type="number" min="1" name="so_luong_tl<?php echo $value_tl['id']; ?>" value="<?php echo $value_tl['so_luong_tl']; ?>" ></td>
			<!-- <td> <?php echo $tong_tl ?></td> -->
			<td><?= number_format($tong_tl, 0, '.', '.'); ?> VNĐ</td>

			<td><a class="delete" href="delete.php?ma_sp_tl=<?php echo $value_tl['id']; ?>">Delete</a></td>
		
		</tr>
<?php }
		} 
		$tablet = $tong_tl;

// $tong_tien = $tong + $tainghe + $maytinh + $tablet;
$tong_tien = $total + $tong_mt +$tong_tn + $tong_tl;


		
	?>
	</table >
	<div class="bottom">
		<button class="btn_update" type="submit" name="update">UPDATE</button>
		<div class="tong_tien"><strong>Số tiền thanh toán :</strong> <?= number_format($tong_tien, 0, '.', '.'); ?> VND</div>
	</div>
	<div class="footer"></div>
</form>


<form class="login" action="muahang.php" method="POST">
	<h1> Nhập thông tin khách hàng</h1>
        <input class="input_cart" name="ten" type="text" placeholder=" ho va ten">
		<br>
		<input class="input_cart" name="sdt" type="text" placeholder=" nhap so dien thoai">
		<br>
        <input class="input_cart" name="diachi" type="text" placeholder=" nhap dia chi">
		<br>
		<input class="input_cart" name="date" type="date" placeholder=" nhap so ngay thang nam">
		<br>
		<input class="input_cart" name="tongtien" type="hidden" value ="<?php echo $tong_tien?>">
		<button><input name="oder" type="submit" value="ODER"></button>
     </form>



</body>
</html>

<style>
	

	.input_cart{
		padding :10px ;
	}
	body{
		font-family: Arial, Helvetica, sans-serif;
	}

	.footer{
		height: 200px;
	}
	.haeder_menu{
		position: fixed;
	}
	.delete{
		padding:10px 10px;
		border:2px solid red;
		text-decoration: none;
		border-radius: 20px;
		color:black;
		font-weight: bold;
	}

	.delete:hover{
		background-color: red;
		color: white;
	}
	td{
		padding:0 30px;
	}
	table{
		margin-right: auto;
		margin-left: auto;
		margin-top: 70px;
		text-align: center;
		/* border:1px solid black; */
		position: relative;
	}
	.bottom{
		display: flex;
		margin-top: 40px;
		
		position: absolute;
		right: 100px;margin-bottom: 200px;
	}

	th{
		padding:10px 0;
		background-color: #ccc;
	}

	.tb_head{
		/* border-radius: 20px;
		position: fixed; */
	}

	.tb_name{
		width: 286px;
	}
	img{
		width: 150px;
	}

	.input_soluong{
		border:none;
		background-color: #ccc;
		padding:10px 0;
		padding-left: 20px;
		font-weight: bold;
	}
	form{
		/* margin-top: 30px; */
	}

	.btn_update{
		padding: 10px 40px;
		border: none;
		background: orange;
		font-weight: 600;
		color: white;
		border-radius: 20px;
		/* margin-left: 77px; */
    /* margin-top: 30px; */
	margin-right: 30px;
	}

	.btn_update:hover{
		background-color: blue;

	}

	.tong_tien{
		float: right;
		font-size: 20px;
	}
</style>

