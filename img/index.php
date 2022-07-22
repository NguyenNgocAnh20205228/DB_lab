<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home_index.css">
    <!-- <script src="https://kit.fontawesome.com/da3f2c352c.js" crossorigin="anonymous"></script> -->
    <title>Project CSDL</title>
</head>

<?php
  //  include "connect_db/connect_db.php";
//    $user=[];
    $user= (isset($_SESSION['user'])) ? $_SESSION['user']: [];
//    $user=$_SESSION['user'];
?>
<body>
    <div class="menu cha" id="menu">
        <div class="page_name box_shadow"><a href="./home.html">BK Book Store</a></div>
        <form action=".#" id="search">
            
            <input type="search" name="s" id="search_text" placeholder="Book Name or Category">
        </form>
        <div class="chuc_nang box_shadow"><a href="./admin.php">ADMIN</a></div>
        <div class="chuc_nang box_shadow"><a href="order.php">List sản phẩm</a></div>
        <div class="chuc_nang box_shadow"><a href="./">Giỏ Hàng</a></div>
        <?php
        if(isset($user['tk'])){
        ?>
        <div class="chuc_nang box_shadow"><a href="logout.php">Đăng Xuất</a></div>
        <?php } else {?>

            <div class="chuc_nang box_shadow"><a href="login.php">Đăng Nhập</a></div>
        <?php }?>
    </div>
    <div id="content_home">
        <div class="noi_dung" id="cham_ngon">Sách hay, cũng như bạn tốt, ít và được lựa chọn; chọn lựa càng nhiều, thưởng thức càng nhiều.</div>

        <div id="thong_bao" class="noi_dung"></div>
        <?php
        if(isset($user['tk'])){
            ?>
            <div class="noi_dung" id="cham_ngon">Bạn đã đăng nhập mời bạn xem sách</div>
        <?php } else {?>
            <div class="noi_dung" id="cham_ngon">Bạn chưa đăng nhập rồi</div>
        <?php }?>
    </div>

</body>

</html>