<?php
include('connect.php');
class data
{
    function select_blog()
    {
        global $conn;
        $sql = "SELECT blog.*, anh1 FROM blog ".
        "inner join blog_hinhanh on blog_hinhanh.id_blog = blog.id_blog ".
        "inner join hinhanhblog on hinhanhblog.id_hinhanh = blog_hinhanh.id_hinhanh";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    function select_room()
    {
        global $conn;
        $sql = "SELECT phong.*, anh1 FROM phong ".
        "inner join phong_hinhanh on phong_hinhanh.id_phong = phong.id_phong ".
        "inner join hinhanh on hinhanh.id_hinhanh = phong_hinhanh.id_hinhanh";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    function select_room_limit3()
    {
        global $conn;
        $sql = "SELECT phong.*, anh1 FROM phong ".
        "inner join phong_hinhanh on phong_hinhanh.id_phong = phong.id_phong ".
        "inner join hinhanh on hinhanh.id_hinhanh = phong_hinhanh.id_hinhanh LIMIT 3";
        $run = mysqli_query($conn, $sql);
        return $run; 
    }
    function select_room_id($id_phong)
    {
        global $conn;
        $sql = "SELECT phong.*, hinhanh.* FROM phong ".
        "inner join phong_hinhanh on phong_hinhanh.id_phong = phong.id_phong ".
        "inner join hinhanh on hinhanh.id_hinhanh = phong_hinhanh.id_hinhanh ".
        "where phong.id_phong = $id_phong";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    function select_about_id($ID)
    {
        global $conn;
        $sql = "select blog.id_blog, ten_blog, bai_blog, tac_gia, quote, tacgia_quote, thoi_gian, anh1, anh2, anh3, anh4 from blog inner join blog_hinhanh on blog_hinhanh.id_blog = blog.id_blog inner join hinhanhblog on hinhanhblog.id_hinhanh = blog_hinhanh.id_hinhanh where blog.id_blog ='$ID'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    function delete_about($ID)
    {
        global $conn;
        $sql = "delete from about where id_about='$ID'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    function update_about($id, $name, $picture, $des, $desful)
    {
        global $conn;
        $sql = "update about set name='$name',
                                        picture='$picture',
                                         des='$des',
                                        deslong='$desful' WHERE id_about='$id'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
}
