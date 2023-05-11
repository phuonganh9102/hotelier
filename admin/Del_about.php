<?php
$get_id=$_GET['del'];// lấy biến truyền từ trang list
include('control.php');
$get_data=new data();
$delete_fruit=$get_data->delete_about($get_id);// gọi function delete
if($delete_fruit) header ('location:list_about.php'); // chuyển trang list
else echo "<script>alert('Bạn không xóa được')</scripts>";
?>