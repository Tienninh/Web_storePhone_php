<?php 
require_once 'db.php';
$id= $_GET['id'];
$sql = "SELECT* FROM dienthoai WHERE id = $id ";
$result = mysqli_query($conn, $sql);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title>
 		Chi tiet san pham
 	</title>
 </head>
 <body>
 	<h1>Chi tiet san pham </h1>
	
<?php foreach ($result as $value) {?>
	

<img class="img_apple" src="/BTL_DienThoai/Image/list_img/<?php echo $value['imagedt']?>" alt="dt">

<p><?php echo $value['namedt'] ?></p>

<p><?php echo $value['gia'] ?></p>

<br>

<form action="cart.php?ma=<?php echo $value['id']; ?>" method="POST">
	<button type="submit" name="add-to-cart">Mua hang</button>
</form>


<?php } ?>
 	

 
 </body>
 </html>