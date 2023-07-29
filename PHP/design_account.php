<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/BTL_DienThoai/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="/BTL_DienThoai/STYLE/thietke.css">
    <title>Document</title>
</head>
<body>
<div id="header">
        <div class="container">
            <!-- Phần giao diện menu -->
            <div class="nav">
                <div class="nav_img">
                    <img class="img_logo" src="/BTL_DienThoai/Image/Fiverr-Logo.png" alt="fiverr">
                </div>

                <div class="nav_menu">
                    <ul class="subnav">
                        <li><a class="subnav_list" href="">Fiverr Business</a></li><!-- viec kinh doanh-->
                        <li><a class="subnav_list" href="">Explore</a></li><!-- Kham pha-->
                        <li><i class="ti-world icon_world"></i>
                            <a class="subnav_list" href="">Language</a></li><!--Ngon ngu-->
                        <li>
                            <a class="subnav_list" href="login.php">Sign in</a>
                        </li>
                        <li><a class="subnav_join" href="">Account</a></li><!---->
                    </ul>
                </div>
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
                        <input class="input_find" type="text" placeholder="Hãy tìm kiếm điện thoại dành riêng cho bạn ">
                        <i class="input_icon ti-search"></i>
                        <button class="input_btn">Search</button>
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

    <div id="content">
        <div class="content_heading">
            <div class="popular_heading_phone">
                <div class="phone_head">
                    <h2 class="phone_title">ĐIỆN THOẠI NỔI BẬT NHẤT</h2>
                    <button class="phone_all">Xem tất cả</button>

                </div>

                <?php for($list =1 ; $list<=8;$list++){?>
                <div class="phone_list">
               
                    <!-- <form action="hienthi_chitiet/ip14pr_den.php" method="POST"> -->
                        <div class="list_apple">
                            <img class="img_apple" src="/BTL_DienThoai/Image/list_img/apple.png" alt="apple">
                            <p class="img_title">IPhone 14 128GB | Chính hãng VN/A</p>
                            <p class="img_money">24.790.000 ₫ <small>28.990.000 ₫</small> </p>
                            <div class="img_icon">
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                                <i class="ti-star"></i>
                            </div>
                            <a href="hienthi_chitiet/ip14pr_den.php" name="img_buy" class="img_btn">Mua ngay</a>
                        </div>
                </div>
                <?php }?>


            </div>
        </div>
        <style>
            .phone_list{
                float:left;
                width: 23%;
            }
        </style>
        
    </div>
</body>
</html>