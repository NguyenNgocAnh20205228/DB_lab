<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping-cart</title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css" />
<!--    <link rel="stylesheet" href="css/reponsive.css" />-->

</head>
<?php
include "../connect_db/connect_db.php";
//    $user=[];
$user= (isset($_SESSION['user'])) ? $_SESSION['user']: [];
//    $user=$_SESSION['user'];
$result = mysqli_query($conn, "SELECT * FROM Book");
//                $row=sqlsrv_fetch_array($result);


?>
<!--<style>-->
<!--    body {-->
<!--        background-image: url('https://wallpaperaccess.com/full/6191149.jpg');-->
<!--        background-repeat: no-repeat;-->
<!--        background-attachment: fixed;-->
<!--        background-size: 100% 100%;-->
<!--    }-->
<!--</style>-->
<body>
<!-- header -->

<header>
    <nav>
        <div class="img-nav">
            <img src="img/logo.png" alt="" />
        </div>
        <div class="content-nav">
            <ul>
                <li><a href="#">Trang Chủ</a></li>
                <li><a href="#">Sản Phẩm</a></li>
                <li><a href="#">Liên Hệ</a></li>
                <li><a href="#">Giới Thiệu</a></li>
            </ul>
            <form>
                <input type="text" name="search" placeholder="Tìm kiếm sản phẩm..." />
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
            </form>
        </div>
        <!-- The Modal -->
        <button id="cart">
            <i class="fa fa-shopping-basket" aria-hidden="true"></i>
            Giỏ Hàng
        </button>
        <div id="myModal" class="modal">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Giỏ Hàng</h5>
                    <span class="close">&times;</span>
                </div>
                <div class="modal-body">
                    <div class="cart-row">
                        <span class="cart-item cart-header cart-column">Sản Phẩm</span>
                        <span class="cart-price cart-header cart-column">Giá</span>
                        <span class="cart-quantity cart-header cart-column">Số Lượng</span>
                    </div>
                    <div class="cart-items">


                        </div>
                    <div class="cart-total">
                        <strong class="cart-total-title">Tổng Cộng:</strong>
                        <span class="cart-total-price">0VNĐ</span>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-footer">Đóng</button>
                    <button type="button" class="btn btn-primary order">Thanh Toán</button>
                </div>
            </div>
        </div>
    </nav>

</header>

<!-- content -->
<section class="wrapper">
    <div class="products">
        <ul>
            <?php while ($row=mysqli_fetch_array($result)){?>
            <li class="main-product">

                <div class="img-product">
                    <div class="img-prd">
                     <?php
                       echo "<img src='../img/" . $row['image']. "' alt='img'";
                       ?>
                    </div>
                </div>
                <div
                <div class="content-product">
                    <h3 class="content-product-h3"><?php echo $row['book_name']?></h3>
                    <div class="content-product-deltals">
                        <div class="price">
                            <span class="money"><a><?php echo $row['price']?></span>
                        </div>
                        <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                    </div>

                </div>

            </li>
            <?php } ?>
            <li class="main-product">
                <div class="img-product">
                    <img class="img-prd"
                         src="https://bizweb.dktcdn.net/thumb/large/100/228/168/products/sualai.jpg?v=1573720306000"
                         alt="">
                </div>
                <div class="content-product">
                    <h3 class="content-product-h3">Mũi Hàn 500</h3>
                    <div class="content-product-deltals">
                        <div class="price">
                            <span class="money">25000đ</span>
                        </div>
                        <button type="button" class="btn btn-cart">Thêm Vào Giỏ</button>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</section>

<!-- footer -->
<footer>
    <div class="footer-item">
        <div class="img-footer">
            <img src="img/logo.png" alt="" />
        </div>
        <div class="social-footer">
            <li><a target="_blank" href="https://www.facebook.com/thanhlongdev">
                <i class="fa fa-facebook-square" aria-hidden="true"></i>
            </a></li>
            <li><a target="_blank" href="https://github.com/long1211">
                <i class="fa fa-github-square" aria-hidden="true"></i>
            </a>
            </li>

        </div>
    </div>
</footer>

<script type="text/javascript" src="function.js"></script>
</body>
</html>