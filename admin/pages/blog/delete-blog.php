<?php 
$id_blog = $_REQUEST['id'];

include('../../control.php');
$get = new data();
$del_blog = $get->delete_id($id_blog);
if($del_blog) {
    echo "<script>alert('Xóa thành công')</script>";
    echo "<script>window.location.href='all-blog.php';</script>";
} else {
    echo "<script>alert('Xóa không thành công')</script>";
}
?>