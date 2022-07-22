<?php
require_once "../connect_db/connect_db.php";
global $conn;
if(isset($_GET['Del']))
{
    $book_id=$_GET['Del'];
$query = " delete from Book where book_id = '".$book_id."'";
    var_dump($query);
    die();
$result = mysqli_query($conn,$query);
if($result)
{
header("location:view.php");
}
else
{
echo ' Please Check Your Query ';
}
}
else
{
header("location:view.php");
}
?>