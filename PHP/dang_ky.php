<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/BTL_DienThoai/STYLE/style.css">
    <title>Đăng nhập </title>
</head>
<body>

<?php include "connect.php"?>

<form   method="POST">
   <div class="modal js-modal">
        <div class="modal-container js-modal-container">
            <div class="modal-close js-modal-close">
                <i class="ti-close"></i>
            </div>

            <header class="modal-header">
                Đăng ký </header>

            <div class="modal-body">
                <!-- for chỉ dùng khi có id 
                    sẽ forcus đêns  người dùng
                    khi bấm vào 'Tickets, ..... cũng sẽ đến chỗ để đăng nhập' -->
                <label  for="tickets-quantity" class="modal-label">
                    Tên người dùng *
                </label>
                    <!-- [placeholder] tạo chữ dạng trong ô đăng nhập 
                        khi bâm vào nó sẽ mât
                        khi không bấm nó sẽ hiện lên chữ đã có sẵn -->
                <input name="input_name" id="tickets-quantity" type="text" class="modal-input"  placeholder="Nhập tên người dùng">
            
                <label  for="tickets-email" class="modal-label">
                   Email hoặc tên tài khoản *
                </label>

                <input name="input_user" id="tickets-email"type="text" class="modal-input"  placeholder="Nhập Email">

                <label  for="tickets-email" class="modal-label">
                  Mật khẩu *
                </label>

                <input name="input_pass" id="tickets-email"type="password" class="modal-input"  placeholder="Nhập mật khẩu">

                <label  for="tickets-email" class="modal-label">
                   Nhập lại mật khẩu *
                </label>

                <input name="input_reset_pass" id="tickets-email"type="password" class="modal-input"  placeholder="Nhập lại mật khẩu">
<!-- ================================================================================== -->
                




<?php
session_start();
include "connect.php";
if (isset($_POST['form_btn'])) {
    $name = $_POST['input_name'];
    $username = $_POST['input_user'];
    $password = $_POST['input_pass'];
    $password = $_POST['input_reset_pass'];

    $sql = "INSERT INTO acc_admin(name, user, pass, role) VALUE('$name', '$username', '$password', 1)";
    $result = $conn->query($sql);
    header('location:login.php');
    // if (mysqli_num_rows($result) == 1) {
    //     $row = $result->fetch_assoc();
    //     if ($row['role'] == 0) {
    //         $_SESSION['admin'] = $username;
    //         header("location: hanghoa.php");
    //     } else {
    //         $_SESSION['user'] = $username;
    //         header("location: design.php");
    //     }
    // } 
    // else {
    //     echo "<p class=error_login>Tài khoản hoặc mật khẩu sai!!</p>";
    // }
}

?>
<!-- ======================================================================================== -->
<button name="form_btn" type="submit"  id="buy-tickets"> Đăng Ký <i class="ti-check"></i></button>
                
                <div class="dangky">
                <footer class="modal-footer left">
                    <p class="modal-helf"><a class="login_new" href="login.php">Đăng nhập</a></p>
                </footer>
                <footer class="modal-footer">
                    <p class="modal-helf">Need <a href="">help?</a></p>
                </footer>
            
                </div>
            </div>
        </div>
    </div>
    </form>

    <script src="/BTL_DienThoai/STYLE/login.js">

    // //     const login =document.querySelector('.login_js')
    // //     const modalJS =document.querySelector('.js-modal')
    //     const modalClose =document.querySelector('.js-modal-close')
    // //     const modalContainer = document.querySelector('.js-modal-container')

    //     function showLogin(){
    //         modalJS.classList.add('open')
    //     }
    //     function removeLogin(){
    //         modalJS.classList.remove('open')
    //     }
    // //     login.addEventListener('click', showLogin)
    //     modalClose.addEventListener('click', removeLogin)
    // //     modalJS.addEventListener('click', removeLogin)
        
    // //     /*khi dùng mode remove ở trên sẽ xảy ra hiện tượng bấm vào đâu 
    // //         nó cũng sẽ out khỏi phânf buy tickets 
    // //         nên ta dùng thêm 1 hàm event có stopPropagation để csửa lỗi này        
    // //     */
    //     modalContainer.addEventListener('click', function (event) {
    //         event.stopPropagation()
       })

    </script>
</body>
</html>

