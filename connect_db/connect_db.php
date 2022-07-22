
<?php


$servername = "localhost";
$database = "bk_book_store";
$username = "root";
$password = "";

// Create connection
global $conn;
$conn = mysqli_connect($servername, $username, $password, $database);

//// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//echo "Connected successfully";
//
//
//$sql = "SELECT * FROM `admin_i`";
//$result = mysqli_query($conn, $sql);

//if (mysqli_num_rows($result) > 0) {
//    // output data of each row
//    while ($row = mysqli_fetch_assoc($result)) {
//        echo "id: " . $row["tk"] . " - Name: " . $row["mk"] . "<br>";
//    }
//} else {
//    echo "0 results";
//}

//SESSION_START();

///* Specify the server and connection string attributes. */
//$serverName = "LAPTOP-CLCEJ8N8\NNA";
//$connectionInfo = array( "Database"=>"admin_i");
//
///* Connect using Windows Authentication. */
//global $conn;
//$conn = sqlsrv_connect( $serverName, $connectionInfo);
//if( $conn === false )
//{
//    echo "Unable to connect.</br>";
//    die( print_r( sqlsrv_errors(), true));
//}

//$sql = "SELECT * FROM admin_i";
//$stmt = sqlsrv_query( $conn, $sql );
//if( $stmt === false) {
//    die( print_r( sqlsrv_errors(), true) );
//}
//
//while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
//    echo $row['tk'].", ".$row['mk']."<br />";
//}
//
//sqlsrv_free_stmt( $stmt);
SESSION_START();
?>