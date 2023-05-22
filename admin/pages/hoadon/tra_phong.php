<?php 
session_start();

$id_hoadon = $_REQUEST['id_hoadon'];
$id_phong = $_REQUEST['id_phong'];

include('../../control.php');
$get = new data();
$select_room = $get->tra_phong($id_hoadon, $id_phong);

header("Location: hoadon.php");
exit;
?>