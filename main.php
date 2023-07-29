<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>san pham</title>
</head>
<body>

<?php 


include 'db.php'; 
// $sql="SELECT* FROM dienthoai";
// $result = mysqli_query($conn, $sql);
if(isset($_POST['btn'])){
	echo 'sdfdf';
}
?>



<form method="POST">
    <input type="text" name="txt">
    <input type="submit" name="btn" value="tim kiems">
</form>

</body>
</html>