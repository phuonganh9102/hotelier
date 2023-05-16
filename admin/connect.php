<?php
$server="localhost:3307";
$username="root";
$password="";
$database="hotel";
$conn=mysqli_connect($server,$username,$password,$database);
mysqli_query($conn,'set names"utf8"');
?>