<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/BTL_DienThoai/STYLE/header1.css">

    <title>Fiverr</title>
</head>
<body>
<div id="header">
            <div class="container ">
                <!-- Phần giao diện menu -->
                <div class="header_nav">
                    <div class="nav">
                        <div class="nav_img">
                            <a href="design.php"><img class="img_logo" src="/BTL_DienThoai/Image/Facebook.png" alt="fiverr"></a>
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
                                    <a href="#" class="icon_cart">
                                        <i class="cart fa-solid fa-cart-flatbed-suitcase"></i>
                                    </a>
                                    
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>  
            </div> 
</div>


<div class="help">
    <!-- <h1>asdfs

    </h1> -->
</div>

<style>
    .help{
        /* height: 1000px;
        background-color: red; */
        /* margin-top: 20px; */
        height: 20px;
    }
</style>
</body>
</html>