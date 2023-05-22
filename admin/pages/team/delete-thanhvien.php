<?php 
$id = $_REQUEST['id'];

include('../../control.php');
$get = new data();
$del_blog = $get->delete_team_id($id);
if($del_blog) {
    echo "<script>alert('Xóa thành công')</script>";
    echo "<script>window.location.href='all-thanhvien.php';</script>";
} else {
    echo "<script>alert('Xóa không thành công')</script>";
}
?>