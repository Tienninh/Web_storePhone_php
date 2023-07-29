<!DOCTYPE html>
<html>
<head>
	<title>Quản trị CSDL</title>
</head>
<body>
	<?php
		$conn = mysqli_connect("localhost","root","","web_dienthoai");
		mysqli_query($conn,"SET NAMES 'utf8'");

		$str = "select * from acc_admin";
		$kq = mysqli_query($conn,$str);
		?>
		<table border="1">
		<tr>
			<td colspan="5"><h3>
			Thông tin tài khoản</h3></td>
		</tr>	
		<tr><td>ID</td>
			<td>Họ và tên</td>
			<td>Tên tài khoản</td>
			<td>Mật khẩu</td>
			<td>Chức vụ</td>
			<!-- <td>Thao tác</td></tr> -->
		<?php
		//Phần hiển thị
		while ($row = mysqli_fetch_row($kq))
    		{

    		echo "<tr>";
    	// In ra từng trường
    	 echo "<td>".$row[0]."</td>";
    	 echo "<td>".$row[1]."</td>";
    	 echo "<td>".$row[2]."</td>";
    	 echo "<td>".$row[3]."</td>";
    	 echo "<td>".$row[4]."</td>";
    	//  echo "<td>";
    	 ?>
    	 <!-- <a href='xulyxoa.php?masv=<?php echo $row[0]; ?> '>Xóa</a>
    	 <a href='xulysua.php?masv=<?php echo $row[0]; ?> '>Sửa</a> -->
    	</td>
    	 <?php echo "</tr>";
    }
    echo "</table>";
	?>
	<form action="excel.php" method="POST"><input type="submit" name="export_excel" value="Xuất Excel"></form>
</body>
</html>