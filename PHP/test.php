<?php  

session_start();
require_once "connect.php"; 
if(isset($_POST['oder'])){
    if(empty($_POST['ten']) || empty($_POST['diachi']) || empty($_POST['sdt']) ){
        echo 0;
    }

    else{
        $ten =$_POST['ten'];
        $sdt =$_POST['sdt'];
        $date =$_POST['date'];
        $diachi =$_POST['diachi'];
        $tongtien =$_POST['tongtien'];

        // $tongtien =$_POST['tongtien'];
        $sql = "INSERT INTO don_hang( name, sdt,ngaydathang,  diachi, tongtien ) VALUES ('$ten', '$sdt', '$date','$diachi', '$tongtien')";
        // echo $sql;
        $result_order = mysqli_query($conn, $sql);
    }
}?>

<form action="test.php" method="POST">
        <input name="ten" type="text" placeholder=" ho va ten">
		<input name="sdt" type="text" placeholder=" nhap so dien thoai">
        <input name="diachi" type="text" placeholder=" nhap dia chi">
		<input name="date" type="date" placeholder=" nhap so ngay thang nam">
		<input name="tongtien" type="type" value ="Nhap tong tien">
		<button><input name="oder" type="submit" value="ODER"></button>
     </form>