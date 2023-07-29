<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển thị  </title>
</head>
<body>

<?php
    include "connect.php";
?>



    
</body>
</html>
    <?php
        $sql = "SELECT * FROM dienthoai";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_array($result)){    
            ?>
                <p><?php echo $row['namedt']?></p>
                <img width="10%"  class="img_apple" src="/BTL_DienThoai/Image/list_img/<?php echo $row['imagedt']?>" alt="oppo">
                <p><?php echo $row['giadt']?></p>
                <p><?php echo $row['baohanhdt']?></p>
    <?php }?>