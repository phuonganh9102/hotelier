<?php 
$id_room = $_REQUEST['id'];

include('../../control.php');
$get = new data();
$del_room = $get->delete_room_id($id_room);
if($del_room) {
    echo "<script>alert('Xóa thành công')</script>";
    echo "<script>window.location.href='all-room.php';</script>";
} else {
    echo "<script>alert('Xóa không thành công')</script>";
}
?>