<?php
    include 'connect.php';
    if(isset($_POST['btntim'])){
        $id = $_POST['mhs'];
        // $name = $_POST['ths'];
        // $dc = $_POST['dc'];
        // $dt = $_POST['dt'];
        // $email = $_POST['em'];
        // echo $id;
    }

    $sql = "SELECT * FROM dienthoai WHERE name LIKE '%$id%' ";
                                    
     $result = mysqli_query($conn, $sql);                            
?>

<form method="POST">
	<h1>Tim kiem thong tin</h1>
<table>
	<tr>
		<td>Ma hang sua</td>
		<td><input type="text" name="mhs"></td>
	</tr>

	

    <tr>
        <td></td>
        <td><button name= "btntim">tim kiem</button></td>
    </tr>
	
</table>
	</form>


    <table border="1">
		<tr class="name">
			<td>Ma hang sua</td>
			<td>Ten hang sua</td>
			<td>dien thoai</td>
			<td>dia chi</td>
			<td>Email</td>
		</tr>

		
			<?php
				//ket noi database
				while($row = mysqli_fetch_array($result)){
			?>
			<tr>
				<td><?php echo $row['id']?></td>
				<td><?php echo $row['name']?></td>
				<td><?php echo $row['img']?></td>
				<td><?php echo $row['gia']?></td>
				<td><?php echo $row['giagoc']?></td>
			</tr>	
			<?php }?>


	</table>
<style>
.name{
	background-color: #ccc;
}
</style>