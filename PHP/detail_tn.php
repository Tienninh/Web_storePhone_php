<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="witnh=device-witnh, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/BTL_DienThoai/STYLE/helosty.css">
    <title>Chi tiết sản phẩm</title>
</head>
<body>

<?php 
    include "connect.php";
    // var_dump($_GET['id']);
    // $id=$_GET['id'];
    $result_tn = mysqli_query($conn, "SELECT * FROM tainghe WHERE id = ".$_GET['id']);
    $value_tn = mysqli_fetch_assoc($result_tn);

    // $result_mt = mysqli_query($conn, "SELECT * FROM maytinh WHERE id = ".$_GET['id']);
    // $value_tn = mysqli_fetch_assoc($result_mt);
    // var_dump($product);
?>
<h1>Chi tiết sản phẩm</h1>

<?php foreach($result_tn as $value_tn) {?>
<div class="phone_list">
    <div class="list_apple">
        <p class="img_title"><?php echo $value_tn['name']?></p>
        <div class="title">
            <img class="img_apple" src="/BTL_DienThoai/Image/Tainghe_img/<?php echo $value_tn['img']?>">
           <div class="img_content">
                <div class="img_icon">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i> 
                </div> 
                <div class="img_gia">
                    <p class="img_money"><?php echo $value_tn['gia']?></p>
                    <small><?php echo $value_tn['giagoc']?></small>
                </div>
                <p class="img_baohanh">Bảo hành :<?php echo $value_tn['baohanh']?></p>
                <p class="img_thongtin"><?php echo $value_tn['thongtin']?></p>
           </div>
        </div>
            <!-- <button class="img_btn">Mua ngay</button> -->
            <form action="cart_tn.php?id_tn=<?php echo $value_tn['id']; ?>" method="POST">
                <button type="submit" name="add-to-cart">Mua hàng</button>
            </form>
    </div>
</div>

<?php }?>
    
</body>
</html>