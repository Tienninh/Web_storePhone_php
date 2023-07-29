<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="search.css"> -->
    <link rel="stylesheet" href="/BTL_DienThoai/STYLE/sanpham_all.css">
    <link rel="stylesheet" href="/BTL_DienThoai/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">



    <title>Tìm kiếm sản phẩm</title>
</head>
<body>
    



<?php
include "header.php";
    include "connect.php";

    if( isset($_POST['btn_input_search'])){
        $ten_dt = $_POST['input_search'];
        $tenmt = $_POST['input_search'];
        $tentn = $_POST['input_search'];
        $tentl = $_POST['input_search'];
    }

 

     $sql_mt = "SELECT * FROM maytinh ";                              
     $result_mt = mysqli_query($conn, $sql_mt);  


?>

<div class="content_sp">

<!-- ==================================================================================================================================================== -->

<div class="main_SP">
<?php
            while($row = mysqli_fetch_array($result_mt)){    
                $product_price_mt =  $row['gia'];
                    $product_price_goc_mt =  $row['giagoc'];
        ?>
       
       <div class="sanpham">
            <img class="sp_img" width="20" height="40" class="img_apple" src="/BTL_DienThoai/Image/laptop_img/<?php echo $row['img']?>" alt="may tinh">
            
           <!-- <p><?php echo $row['id']?></p>   -->
           <p class="sp_name"><?php echo $row['name']?></p>
            
           <div class="gia_sp">
           <p class="sp_gia"><?= number_format($product_price_mt, 0, '.', '.'); ?> ₫</p>
                <p class="sp_giamgia"><?= number_format($product_price_goc_mt, 0, '.', '.'); ?> ₫</p>
            </div>
            <p class="sp_baohanh"> <?php echo $row['baohanh']?></p>
           
           <!-- <p><?php echo $row['baohanh']?></p> -->
           <div class="img_icon">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star end" aria-hidden="true"></i> 
        </div>
           <button class="sp_buy">Mua ngay</button>
        </div>
<?php }?>
</div>


<!-- ==================================================================================================================================================== -->


</div>
</body>
</html>