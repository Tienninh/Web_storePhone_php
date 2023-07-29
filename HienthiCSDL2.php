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
			<td colspan="6"><h3>
			DS Các Sinh viên lớp ĐH TIN14A4HN</h3></td>
		</tr>	
		<tr><td>Mã SV</td>
			<td>Họ tên SV</td>
			<td>Ngày sinh</td>
			<td>Quê quán</td>
			<td>Level</td>
			<td>Thao tác</td></tr>
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
    	 echo "<td>";
    	 ?>
    	 <a href='xulyxoa.php?masv=<?php echo $row[0]; ?> '>Xóa</a>
    	 <a href='xulysua.php?masv=<?php echo $row[0]; ?> '>Sửa</a>
    	</td>
    	 <?php echo "</tr>";
    }
    echo "</table>";
	?>
	<form action="export_excel.php" method="POST"><input type="submit" name="export_excel" value="Xuất Excel"></form>
</body>
</html>