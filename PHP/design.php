<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/BTL_DienThoai/themify-icons-font/themify-icons/themify-icons.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/BTL_DienThoai/STYLE/style.css">
    <title>Document</title>
</head>
<?php
    include "connect.php";
    session_start();
    //khai bao so san pham tren 1 trang 
    $item_per_page = !empty($_GET['per_page'])?$_GET['per_page']:5;
    //Khai bao so trang
    $current_page =!empty($_GET['page'])?$_GET['page']:1;
    $offset = ($current_page - 1)* $item_per_page;
    //===========================
    $sql = "SELECT * FROM dienthoai ORDER BY 'id' ASC LIMIT ".$item_per_page." OFFSET ".$offset;
    $result = mysqli_query($conn, $sql);
    $totalRecord = mysqli_query($conn , "SELECT*FROM dienthoai");
    //ham kiem tra co bao nhieu co sow du lieu 
    // var_dump($totalRecord);
    $totalRecord = $totalRecord->num_rows;
    //tinhs so trang
    $totalPages = ceil($totalRecord / $item_per_page);
    if($result){
        // echo "thanh cong";
    }

    else {
        echo"khong thanh cong";
    }


    

    // var_dump($result);
?>
<body>
    <div id="header">
            <div class="container ">
                <!-- Phần giao diện menu -->
                <div class="header_nav">
                    <div class="nav">
                        <div class="nav_img">
                            <img class="img_logo" src="/BTL_DienThoai/Image/Facebook.png" alt="fiverr">
                        </div>
                        <form action="search.php" method="POST">
                        <div class="nav_search">
                            <i class="search_icon fa-sharp fa-solid fa-magnifying-glass"></i>
                            <input name="input_search" class="search_enter" type="text">
                            <button name="btn_input_search" class="search_tim">Tìm kiếm</button>
                        </div>
                        </form>


                        <!-- <div class="search_input">
                            <form action="search.php" method="POST">
                                <input name = "input_search" class="input_find" type="text" placeholder="Hãy tìm kiếm điện thoại dành riêng cho bạn ">
                                <i class="input_icon ti-search"></i>
                                <button name="btn_input_search" class="input_btn">Search</button>
                            </form>
                        </div> -->

                        <div class="nav_menu">
                            <ul class="subnav">
                                <li class="list">
                                    <a class="subnav_list " href="">Khám phá Fiverr</a>
                                </li><!-- viec kinh doanh-->
                                <li class="list"><i class="ti-world icon_world"></i>
                                    <a class="subnav_list" href="">Ngôn ngữ</a></li><!--Ngon ngu-->
                                <form method="POST" action="design.php">
                                    <li name="login" class="list login_js">
                                    <a class="subnav_list" href="">Join</a>
                                    <!-- <a class="subnav_list">Đăng nhập</a>  -->
                                </li>
                                </form>
                     
                                <style>
                                    .list{
                                        cursor: pointer;
                                    }
                                </style>

                                <li><a class="subnav_join" href="login.php">Đăng xuất</a></li><!---->
                                <li class="list">
                                    <a href="muahang.php" class="icon_cart">
                                        <i class="cart fa-solid fa-cart-flatbed-suitcase"></i>
                                    </a>
                                    
                                </li>
                            </ul>

                        </div>
</div>
                    <div  class="nav_list">
                            <ul class="list_menu">       
                                <li class="phone_menu">
                                    <a class="menu_a" href="all_sanpham.php">Tất cả </a>
                                </li>
                                <li class="phone_menu">
                                    <a class="menu_a menu_a1" href="sp_dienthoai.php">Điện thoại</a>
                                    <ul class="menu_phone">
                                        <li><a href="">Iphone</a></li>
                                        <li><a href="">samsung</a></li>
                                        <li><a href="">xiaomi</a></li>
                                        <li><a href="">oppo</a></li>
                                        <li><a href="">realme</a></li>
                                    </ul>
                                </li>

                                <li class="phone_menu">
                                    <a class="menu_a" href="sp_maytinh.php">Laptop</a>
                                    <ul class="menu_phone">
                                        <li class="li_laptop"><a href="">Iphone</a></li>
                                        <li class="li_laptop"><a href="">samsung</a></li>
                                        <li class="li_laptop"><a href="">xiaomi</a></li>
                                        <li class="li_laptop"><a href="">oppo</a></li>
                                        <li class="li_laptop"><a href="">realme</a></li>

                                    </ul>
                                    <!-- 
                                    Apple MacBook Air M1 256GB 2020 I Chính hãng Apple Việt Nam 18.550.000 ₫ 28.990.000 ₫
                                    Apple Macbook Pro 13 M2 2022 8GB 256GB I Chính hãng Apple Việt Nam 28.690.000 ₫ 35.990.000 ₫
                                    MacBook Pro 14 inch M2 Pro 2023 48.090.000 ₫ 52.990.000 ₫
                                    Macbook Pro 14 inch 2021 | Chính hãng Apple Việt Nam 46.990.000 ₫ 52.990.000 ₫

                                    Laptop Asus Gaming Rog Strix G15 G513IH HN015W 17.490.000 ₫ 23.990.000 ₫
                                    Laptop ASUS TUF Gaming F15 FX506HC-HN144W 19.890.000 ₫ 25.990.000 ₫
                                    Laptop Asus ExpertBook B5302FEA LF0749W 16.990.000 ₫ 26.990.000 ₫
                                    Laptop Asus Vivobook Slate OLED T3304GA-LQ021WS 19.990.000 ₫

                                    Laptop MSI Gaming GF63 10SC 804VN 17.450.000 ₫ 20.990.000 ₫ -->
                                </li>
                                <li class="phone_menu">
                                    <a class="menu_a" href="sp_tablet.php">Máy tính bảng</a>
                                    <ul class="menu_phone">
                                        <li class="li_tablet"><a href="">Iphone</a></li>
                                        <li class="li_tablet"><a href="">samsung</a></li>
                                        <li class="li_tablet"><a href="">xiaomi</a></li>
                                        <li class="li_tablet"><a href="">oppo</a></li>
                                        <li class="li_tablet"><a href="">realme</a></li>

                                    </ul>
                                </li>
                                <li class="phone_menu">
                                    <a class="menu_a" href="sp_tainghe.php">Tai nghe</a>
                                    <ul class="menu_phone">
                                        <li class="li_headphone"><a href="">Iphone</a></li>
                                        <li class="li_headphone"><a href="">samsung</a></li>
                                        <li class="li_headphone"><a href="">xiaomi</a></li>
                                        <li class="li_headphone"><a href="">oppo</a></li>
                                        <li class="li_headphone"><a href="">realme</a></li>

                                    </ul>
                                </li>
                                <li class="phone_menu">
                                    <a class="menu_a" href="">Dịch vụ</a>
                                </li>
                                <li class="phone_menu">
                                    <a class="menu_a" href="">Chương trình ưu đãi</a>
                                </li>
                                <li class="phone_menu">
                                    <a class="menu_a" href="">Liên hệ </a>
                                </li>

                            </ul>
                        </div>
                      <hr>  

                </div>
                
                <!-- Phần hình ảnh mono và thanh tìm kiếm -->
                <div class="navbar">
                    <div class="navbar_img">
                        <img class="img_mono" src="/BTL_DienThoai/Image/header_mono.png" alt="mono">
                    </div>

                    <div class="navbar_search">
                        <p class="search_para">
                            Find the perfect <span>freelance</span> services for your business
                        </p>

                        <div class="search_input">
                            <form action="search.php" method="POST">
                                <input name = "input_search" class="input_find" type="text" placeholder="Hãy tìm kiếm điện thoại dành riêng cho bạn ">
                                <i class="input_icon ti-search"></i>
                                <button name="btn_input_search" class="input_btn">Search</button>
                            </form>
                        </div>

                        <div class="search_popular">
                            <p class="popular_h3">Popular:</p>
                            <div class="popular_phone">
                                <a href="#" class="phone">Apple</a>
                                <a href="#" class="phone">SamSung</a>
                                <a href="#" class="phone">Xiaomi</a>
                                <a href="#" class="phone">Oppo</a>
                                <a href="#" class="phone">Redmi</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <style>
        .img_title a{
            text-decoration: none;
            color: black;
        }
    </style>
    <div id="content">
        <div class="content_heading">
            <div class="popular_heading_phone">
                <div class="phone_head">
                    <h2 class="phone_title">ĐIỆN THOẠI NỔI BẬT NHẤT</h2>
                    <button class="phone_all"><a href="sp_dienthoai.php">Xem tất cả</a></button>
                </div>
                <div class="phone_content">
                    <?php 
                        $value = mysqli_fetch_assoc($result);
                        // while($row = mysqli_fetch_array($result)){
                        // 
                        
                         foreach($result as $value) {
                            $product_price = $value['gia'];
                            $product_price_goc = $value['giagoc'];
                            ?>
                    <div class="phone_list">
                        <div class="list_apple">
                        <a href = "detail_dt.php?id=<?= $value['id'] ?>"><img class="img_apple" src="/BTL_DienThoai/Image/list_img/<?php echo $value['img']?>" alt="dt"></a>

                                <!-- <img class="img_apple" src="/BTL_DienThoai/Image/list_img/apple_14_do.png" alt="apple"> -->
                                <hr>
                                <p class="img_title"><a href = "detail_dt.php?id=<?= $value['id'] ?>"><?php echo $value['name']?></a></p>
                                <!-- <p class="img_money"><?php echo $value['gia']?>₫<small><?php echo $value['giagoc']?>₫</small> </p> -->
                                <p class="img_money"><?= number_format($product_price, 0, '.', '.'); ?> ₫  <small> <?= number_format($product_price_goc, 0, '.', '.'); ?> ₫</small></p>
                                <p class="img_baohanh"><?php echo $value['baohanh']?></p>

                                

                                 <div class="img_icon">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star end" aria-hidden="true"></i> 
                            </div>
                                    <!-- <button name="add-to-cart" class="img_btn"><a href = "cart_dt.php?ma=<?= $value['id'] ?>">Mua ngay</a></button> -->
                                    <form action="cart_dt.php?ma=<?php echo $value['id']; ?>" method="POST">
                                        <button class="img_btn" type="submit" name="add-to-cart">Mua ngay</button>
                                    </form>
                                </div>
                    </div>
                    <?php }?>
                </div>
                <div class="phone_page">
                    <?php  
                include "chuyentrang_dt.php"?>   
                </div>
                        
  </div>

  <div id="content">
        <div class="content_heading">
            <div class="popular_heading_phone">
                <div class="phone_head">
                    <h2 class="phone_title">LAPTOP NỔI BẬT NHẤT</h2>
                    <button class="phone_all"><a href="sp_maytinh.php">Xem tất cả</a></button>

                </div>
                <div class="phone_content">
                    <?php 
                        $item_per_page_mt = !empty($_GET['per_page_mt'])?$_GET['per_page_mt']:5;
                        //Khai bao so trang
                        $current_page_mt =!empty($_GET['page_mt'])?$_GET['page_mt']:1;
                        $offset_mt = ($current_page_mt - 1)* $item_per_page_mt;
                        //===========================
                        $sql_mt = "SELECT * FROM maytinh ORDER BY 'id' ASC LIMIT ".$item_per_page_mt." OFFSET ".$offset_mt;
                        $result_mt = mysqli_query($conn, $sql_mt);
                    
                        $totalRecord_mt = mysqli_query($conn , "SELECT*FROM maytinh");
                        //ham kiem tra co bao nhieu co sow du lieu 
                        // var_dump($totalRecord);
                        $totalRecord_mt = $totalRecord_mt->num_rows;
                        //tinhs so trang
                        $totalPages_mt = ceil($totalRecord_mt/ $item_per_page_mt);
                        // while($row = mysqli_fetch_array($result_mt)){
                            $value = mysqli_fetch_assoc($result_mt);
                         foreach($result_mt as $value) {
                            
                            $product_price_mt = $value['gia'];
                            $product_price_goc_mt = $value['giagoc'];
                        ?>

                    <div class="phone_list">
                        <div class="list_apple">
                            
                        <a href = "detail_mt.php?id=<?= $value['id'] ?>"><img class="img_apple" src="/BTL_DienThoai/Image/laptop_img/<?php echo $value['img']?>"></a>

                                <!-- <img class="img_apple" src="/BTL_DienThoai/Image/list_img/apple_14_do.png" alt="apple"> -->
                                <hr>
                                <p class="img_title"><a href = "detail_mt.php?id=<?= $value['id'] ?>"><?php echo $value['name']?></a></p>
                                <!-- <p class="img_money"><?php echo $value['gia']?><small><?php echo $value['giagoc']?></small> </p> -->
                                <p class="img_money"><?= number_format($product_price_mt, 0, '.', '.'); ?> ₫  <small> <?= number_format($product_price_goc_mt, 0, '.', '.'); ?> ₫</small></p>
                                <p class="img_baohanh"><?php echo $value['baohanh']?></p>

                                <div class="img_icon">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star end" aria-hidden="true"></i> 
                            </div>
                                <!-- <button class="img_btn">Mua ngay</button> -->
                                <form action="cart_mt.php?id=<?php echo $value['id']; ?>" method="POST">
                                        <button class="img_btn" type="submit" name="add-to-cart">Mua ngay</button>
                                    </form>

                        </div>
                    </div>
                    <?php }?>

                </div>

                <div class="phone_page">
                    <?php  
                include "chuyentrang_mt.php"?>   
                </div>
                        
  </div>


  <div id="content">
        <div class="content_heading">
            <div class="popular_heading_phone">
                <div class="phone_head">
                    <h2 class="phone_title">TAI NGHE NỔI BẬT NHẤT</h2>
                    <button class="phone_all"><a href="sp_tainghe.php">Xem tất cả</a></button>

                </div>
                <div class="phone_content">
                    <?php 
                        $item_per_page_tn = !empty($_GET['per_page_tn'])?$_GET['per_page_tn']:5;
                        //Khai bao so trang
                        $current_page_tn =!empty($_GET['page_tn'])?$_GET['page_tn']:1;
                        $offset_tn = ($current_page_tn - 1)* $item_per_page_tn;
                            //===========================
                        $sql_tn = "SELECT * FROM tainghe ORDER BY 'id' ASC LIMIT ".$item_per_page_tn." OFFSET ".$offset_tn;
                        $result_tn = mysqli_query($conn, $sql_tn);
                    
                        $totalRecord_tn = mysqli_query($conn , "SELECT*FROM tainghe");
                        //ham kiem tra co bao nhieu co sow du lieu 
                        // var_dump($totalRecord);
                        $totalRecord_tn = $totalRecord_tn->num_rows;
                        //tinhs so trang
                        $totalPages_tn = ceil($totalRecord_tn / $item_per_page_tn);
                        // while($row = mysqli_fetch_array($result_tn)){
                            $value = mysqli_fetch_assoc($result_tn);
                            foreach($result_tn as $value) {
                                $product_price_tn = $value['gia'];
                                $product_price_goc_tn = $value['giagoc'];
                                ?>
                    
                    <div class="phone_list">
                        <div class="list_apple">
                        <a href = "detail_tn.php?id=<?= $value['id'] ?>"><img class="img_apple" src="/BTL_DienThoai/Image/Tainghe_img/<?php echo $value['img']?>"></a>

                                <!-- <img class="img_apple" src="/BTL_DienThoai/Image/list_img/apple_14_do.png" alt="apple"> -->
                                <hr>
                                <p class="img_title"> <a href = "detail_tn.php?id=<?= $row['id'] ?>"><?php echo $value['name']?></a></p>
                                <!-- <p class="img_money"><?php echo $value['gia']?><small><?php echo $value['giagoc']?></small> </p> -->
                                <p class="img_money"><?= number_format($product_price_tn, 0, '.', '.'); ?> ₫  <small> <?= number_format($product_price_goc_tn, 0, '.', '.'); ?> ₫</small></p>
                                <p class="img_baohanh"><?php echo $value['baohanh']?></p>

                                <div class="img_icon">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star end" aria-hidden="true"></i> 
                            </div>

                                <form action="cart_tn.php?id_tn=<?php echo $value['id']; ?>" method="POST">
                                        <button class="img_btn" type="submit" name="add-to-cart">Mua ngay</button>
                                    </form>
                        </div>
                    </div>
                    <?php }?>

                </div>

                <div class="phone_page">
                    <?php  
                include "chuyentrang_tn.php"?>   
                </div>
                        
  </div>



  <div id="content">
        <div class="content_heading">
            <div class="popular_heading_phone">
                <div class="phone_head">
                    <h2 class="phone_title">TABLET NỔI BẬT NHẤT</h2>
                    <button class="phone_all"><a href="sp_tablet.php">Xem tất cả</a></button>

                </div>
                <div class="phone_content">
                    <?php 
                    include "connect.php";
                        $item_per_page_tl = !empty($_GET['per_page_tl'])?$_GET['per_page_tl']:5;
                        //Khai bao so trang
                        $current_page_tl =!empty($_GET['page_tl'])?$_GET['page_tl']:1;
                        $offset_tl = ($current_page_tl - 1)* $item_per_page_tl;
                            //===========================
                        $sql_tl = "SELECT * FROM tablet ORDER BY 'id' ASC LIMIT ".$item_per_page_tl." OFFSET ".$offset_tl;
                        $result_tl = mysqli_query($conn, $sql_tl);
                    
                        $totalRecord_tl = mysqli_query($conn , "SELECT*FROM tablet");
                        //ham kiem tra co bao nhieu co sow du lieu 
                        // var_dump($totalRecord);
                        $totalRecord_tl = $totalRecord_tl->num_rows;
                        //tinhs so trang
                        $totalPages_tl = ceil($totalRecord_tl / $item_per_page_tl);
                        $value = mysqli_fetch_assoc($result_tl);
                            foreach($result_tl as $value) {
                                $product_price_tl = $value['gia'];
                                $product_price_goc_tl = $value['giagoc'];
                            ?>
                    <div class="phone_list">
                        <div class="list_apple">
                        <a href = "detail_tl.php?id=<?= $value['id'] ?>"><img class="img_apple" src="/BTL_DienThoai/Image/tablet_img/<?php echo $value['img']?>"></a>

                                <!-- <img class="img_apple" src="/BTL_DienThoai/Image/list_img/apple_14_do.png" alt="apple"> -->
                                <hr>
                                <p class="img_title"> <a href = "detail_tl.php?id=<?= $value['id'] ?>"><?php echo $value['name']?></a></p>
                                <!-- <p class="img_money"><?php echo $value['gia']?><small><?php echo $value['giagoc']?></small> </p> -->
                                <p class="img_money"><?= number_format($product_price_tl, 0, '.', '.'); ?> ₫  <small> <?= number_format($product_price_goc_tl, 0, '.', '.'); ?> ₫</small></p>
                                <p class="img_baohanh"><?php echo $value['baohanh']?></p>

                                <div class="img_icon">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star end" aria-hidden="true"></i> 
                            </div>

                                <form action="cart_tl.php?id_tl=<?php echo $value['id']; ?>" method="POST">
                                        <button class="img_btn" type="submit" name="add-to-cart">Mua ngay</button>
                                    </form>
                        </div>
                    </div>
                    <?php }?>

                </div>

                <div class="phone_page">
                    <?php  
                include "chuyentrang_tl.php"?>   
                </div>

  </div>



    

    <!-- <link rel="stylesheet" href="/BTL_DienThoai/STYLE/cungcung.css"> -->
    
    <script src="/BTL_DienThoai/STYLE/login.js">
    //     const login =document.querySelector('.login_js')
    //     const modalJS =document.querySelector('.js-modal')
    //     const modalClose =document.querySelector('.js-modal-close')
    //     const modalContainer = document.querySelector('.js-modal-container')

    //     function showLogin(){
    //         modalJS.classList.add('open')
    //     }
    //     function removeLogin(){
    //         modalJS.classList.remove('open')
    //     }
    //     login.addEventListener('click', showLogin)
    //     modalClose.addEventListener('click', removeLogin)
    //     modalJS.addEventListener('click', removeLogin)
        
    //     /*khi dùng mode remove ở trên sẽ xảy ra hiện tượng bấm vào đâu 
    //         nó cũng sẽ out khỏi phânf buy tickets 
    //         nên ta dùng thêm 1 hàm event có stopPropagation để csửa lỗi này        
    //     */
    //     modalContainer.addEventListener('click', function (event) {
    //         event.stopPropagation()
    //    })

    </script>
  </div>
</body>
</html>

