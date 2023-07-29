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
    $result_tl = mysqli_query($conn, "SELECT * FROM tablet WHERE id = ".$_GET['id']);
    $value_tl = mysqli_fetch_assoc($result_tl);

    // $result_tl = mysqli_query($conn, "SELECT * FROM maytinh WHERE id = ".$_GET['id']);
    // $product_tl = mysqli_fetch_assoc($result_tl);
    // var_dump($product);

    
?>

<h1>Chi tiết sản phẩm</h1>
<?php foreach($result_tl as $value_tl) {?>
<div class="phone_list">
    <div class="list_apple">
        <p name="ten" class="img_title"><?php echo $value_tl['name']?></p>
        <div class="title">
            <img name = "hinh" class="img_apple" src="/BTL_DienThoai/Image/tablet_img/<?php echo $value_tl['img']?>">
           <div class="img_content">
                <div class="img_icon">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i> 
                </div> 

                <div class="img_gia">
                    <p name="gia" class="img_money"><?php echo $value_tl['gia']?></p>
                    <small name="gia_goc"><?php echo $value_tl['giagoc']?></small>
                </div>
    
                <p class="img_baohanh">Bảo hành :<?php echo $value_tl['baohanh']?></p>
                <p class="img_thongtin"><?php echo $value_tl['thongtin']?></p>
                <p>so luonh <input name="soluong" min ="1 " max = "10" type="number"></p>
           </div>
        </div>
            <!-- <button class="img_btn">Mua ngay</button> -->
            <!-- <form action="cart_tl.php?id=<?php echo $value_tl['id']; ?>" method="POST"> -->
            <form action="cart_tl.php?id=<?php echo $value_tl['id']; ?>" method="POST">
                <button type="submit" name="add-to-cart">Mua hang</button>
            </form>
    </div>
</div>

<?php }?>
    
</body>
</html>