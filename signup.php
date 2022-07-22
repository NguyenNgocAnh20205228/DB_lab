<?php
include "connect_db/connect_db.php";
global $conn;
?>

<?php

$err = [];
if ($_POST) {
    if (isset($_POST['user_name']) != 0) {
        $user_account = $_POST['user_account'];
        $user_pass = $_POST['user_pass'];
        $ruser_pass = $_POST['ruser_pass'];
        $user_name = $_POST['user_name'];
        $user_email = $_POST['user_email'];
        $user_dob = $_POST['user_dob'];
        $user_sex = $_POST['user_sex'];

        $user_phone = $_POST['user_phone'];
        $user_address = $_POST['user_address'];
        $sql = "SELECT account FROM customer where account='$user_account'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);

        if ($row) {
            $err['account'] = 'Tài Khoản Đã Tồn Tại';
        }else{
        if ($user_pass != $ruser_pass) {
            $err['ruser_pass'] = 'Nhap lai mat khau khong chinh xác';
        } else {
            header("Location:login.php");
            $sql = "INSERT INTO customer(account,password,name,sex,dob,email,phone_number,address) VALUES ('$user_account','$user_pass','$user_name','$user_sex','$user_dob','$user_email','$user_phone','$user_address')";

            $query = mysqli_query($conn, $sql);
        }
        }
    }
}
?>


<html lang="en">

<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <script src="https://kit.fontawesome.com/da3f2c352c.js" crossorigin="anonymous"></script> -->
    <link rel="stylesheet" href="css/signupcss.css">

</head>

<body>
    <!--<div id="id01" class="modal">-->
    <!--    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">times;</span>-->
    <form action="#" method="post" style="border:1px solid #ccc">
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="user_account"><b>Account</b></label>
            <input class="su" type="text" placeholder="Enter user account" name="user_account" required oninvalid="this.setCustomValidity('Bạn chưa điền ô nay!')" onchange="this.setCustomValidity('')" type="text">
            <div style="margin-top:-10px">
                <span style="color: red">
                    <?php echo (isset($err['account'])) ? $err['account'] : '' ?>
                </span>
            </div>
            <label for="user_pass"><b>Password</b></label>
            <input class="su" type="password" placeholder="Enter Password" name="user_pass" required oninvalid="this.setCustomValidity('Bạn chưa điền ô nay!')" onchange="this.setCustomValidity('')" type="text">

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input class="su" type="password" placeholder="Repeat Password" name="ruser_pass" required oninvalid="this.setCustomValidity('Bạn chưa điền ô nay!')" onchange="this.setCustomValidity('')" type="text">
            
            <label for="user_name"><b>User Name</b></label>
            <input class="su" type="text" placeholder="Enter user name" name="user_name" required oninvalid="this.setCustomValidity('Bạn chưa điền ô nay!')" onchange="this.setCustomValidity('')" type="text">
            
            <label for="user_email"><b>Email</b></label>
            <input class="su" type="email" placeholder="Enter user name email" name="user_email" required oninvalid="this.setCustomValidity('vui lòng nhập đúng dạng email')" onchange="this.setCustomValidity('')" type="text">

            <label for="user_dob"><b>DoB</b></label>
            <input class="su" type="date" name="user_dob" required oninvalid="this.setCustomValidity('Bạn chưa điền ô nay!')" onchange="this.setCustomValidity('')" type="text">

            <label for="user_sex"><b>Sex</b></label>
            <input class="su" type="text" placeholder="Enter user name sex" name="user_sex" required oninvalid="this.setCustomValidity('Bạn chưa điền ô nay!')" onchange="this.setCustomValidity('')" type="text">

            <label for="user_sex"><b>Phone Number</b></label>
            <input class="su" type="text" placeholder="Enter phone number" name="user_phone" required oninvalid="this.setCustomValidity('Bạn chưa điền ô nay!')" onchange="this.setCustomValidity('')" type="text">

            <label for="user_sex"><b>Address</b></label>
            <input class="su" type="text" placeholder="Enter user name address" name="user_address" required oninvalid="this.setCustomValidity('Bạn chưa điền ô nay!')" onchange="this.setCustomValidity('')" type="text">


            <!-- <label for="user_name"><b>DoB</b></label>
            <input type="date" name="dob" id="user_dob"> -->
            <div style="margin-top:-10px">
                <span style="color: red">
                    <?php echo (isset($err['ruser_pass'])) ? $err['ruser_pass'] : '' ?>
                </span>
            </div>


            <!--        <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>-->

            <p style="margin-top:20px">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

            <div class="clearfix">
                <a href="login.php">
                    <button type="button" class="cancelbtn">Cancel</button>
                </a>
                <button type="submit" class="signupbtn">Sign Up</button>
            </div>
        </div>
    </form>
    <!--</div>-->
</body>