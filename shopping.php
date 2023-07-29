<?php 

session_start();
require_once "db.php"; 

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
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mua san pham </title>
</head>
<body>

	<a href="main.php">Main</a>
<form action="shopping.php" method="POST">
	<table border="1">
		
		<tr>
			<th>STT</th>
			<th>img</th>
			<th>ten san pham </th>
			<th>gia</th>
			<th>so luong</th>
			<th>Gia san pham </th>
			<th>Thanh tien</th>
			<th>Chuc nang</th>
		</tr>
		<!-- kiem tra xem co san pham hay khong  -->
		<?php 

		if(isset($_SESSION['cart'])){
			foreach ($_SESSION['cart'] as $value) {
				//ham tinh tien=================================================== 
				$tong =0;
				// $tong =$value['gia'] * $value['so_luong'];


				?>

		<tr>
			<td><?php echo $value['id']; ?></td>
			<td>			
			<img width="100px" class="img_apple" src="/BTL_DienThoai/Image/list_img/<?php echo $value['imagedt']?>" >
			</td>
			<td><?php echo $value['namedt']; ?></td>
			<td><?php echo $value['giadt']; ?></td>
			<td><input type="number" min="1" name="so_luong<?php echo $value['id']; ?>" value="<?php echo $value['so_luong']; ?>" ></td>
			<!-- <td><?php echo $value['gia']; ?></td> -->
			<!-- <td> <?php echo $tong ?></td> -->
			<td><a href="delete.php?ma_sp=<?php echo $value['id']; ?>">Delete</a></td>
		
		</tr>
		<?php }
		
		} ?>

		
	</table>

	<button type="submit" name="update">UPDATE</button>
</form>
</body>
</html>