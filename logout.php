<?php

include "connect_db/connect_db.php";
unset($_SESSION['user']);
if(isset($_SESSION['admin'])){unset($_SESSION['user']);}
header('location:page1.php');

?>