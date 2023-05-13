<?php
$server="localhost:3307";
$username="root";
$password="";
$database="hotel";
$conn=mysqli_connect($server,$username,$password,$database);
mysqli_query($conn,'set names"utf8"');

?>
<?php
//    define('DB_SERVER', 'localhost:3307');
//    define('DB_USERNAME', 'root');
//    define('DB_PASSWORD', '');
//    define('DB_DATABASE', 'hotel');
//    $db = new PDO('mysql:host='.DB_SERVER.';dbname='.DB_DATABASE, DB_USERNAME, DB_PASSWORD);
?>