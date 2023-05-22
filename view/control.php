<?php
include('connect.php');
class data
{
    function login($username, $password) {
        global $conn;
        $sql = "select * from khach_hang where username = '$username' and password = '$password'";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    function check_dangky($username) {
        global $conn;
        $sql = "select * from khach_hang where username = '$username'";
        $run = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($run);
        return $num;
    }
    function dangky($username, $password, $ho_ten, $email, $sdt) {
        global $conn;
        $sql = "INSERT INTO `khach_hang` (`ho_ten`, `username`, `password`, `email`, `sdt`) VALUES ('$ho_ten', '$username', '$password', '$email', '$sdt');";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
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
    function select_khachhang_id ($id) {
        global $conn;

        $sql = "select * from khach_hang where id_khachhang = $id";

        $run = mysqli_query($conn, $sql); 
        return $run;  
    }
    // đặt phòng
    function book_room ($id, $id_phong, $id_khachhang, $checkin, $checkout, $yeu_cau) {
        global $conn;

        // $dondatphong = "INSERT INTO `don_dat_phong` (`id_don_dat_phong`, `id_phong`, `id_khachhang`, `checkin`, `checkout`, `yeu_cau`) VALUES ($id, $id_phong, '$id_khachhang', '$checkin', '$checkout' '$yeu_cau');";

        $dondatphong = "INSERT INTO `don_dat_phong` (`id_don_dat_phong`, `id_phong`, `id_khachhang`, `checkin`, `checkout`, `yeu_cau`, `trang_thai`) VALUES ('$id', '$id_phong', '$id_khachhang', '$checkin', '$checkout', '$yeu_cau', 'Đang Thuê');";

        $capnhatphong = "UPDATE phong set `trang_thai` = b'0' WHERE phong.id_phong = $id_phong;";
               
        $run = mysqli_query($conn, $dondatphong); 
        $run = mysqli_query($conn, $capnhatphong); 
        return $run;  
    }
    function select_id_dondathang() {
        global $conn;
        $sql = "SELECT MAX(id_don_dat_phong) + 1 AS id FROM don_dat_phong";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    function select_dondatphong_id($id) {
        global $conn;
        $sql = "SELECT don_dat_phong.*, phong.ten_phong, phong.gia, khach_hang.ho_ten, khach_hang.email, khach_hang.sdt FROM don_dat_phong join phong on phong.id_phong = don_dat_phong.id_phong join khach_hang on khach_hang.id_khachhang = don_dat_phong.id_khachhang where id_don_dat_phong = $id";
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
    function select_team() {
        global $conn;
        $sql = "select * from team";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
}
