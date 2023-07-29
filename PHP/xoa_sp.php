<?php  
        include "connect.php";
        //DUngf get
            $delete = $_GET['this_id_xoa'];
            // echo $this_id;

            $sql_delete = "DELETE FROM dienthoai WHERE id ='$delete' ";
            mysqli_query($conn, $sql_delete);

            //khi xoa xong sẽ quay về trang hiển thị 
            // header('location: hienthi.php');
        header('location:dienthoai.php');

       
?>