<?php
include('connect.php');
class data
{
    // Blog
    function insert_blog($ten_blog, $bai_blog, $quote, $tacgia_quote, $tac_gia, $anh1, $anh2, $anh3, $anh4) {
        global $conn;
        $blogSql = "INSERT INTO blog (id_blog, ten_blog, bai_blog, quote, tacgia_quote, tac_gia, thoi_gian) SELECT COALESCE(MAX(id_blog) + 1, 1), '$ten_blog', '$bai_blog', '$quote', '$tacgia_quote', '$tac_gia', current_timestamp() FROM blog;";

        $hinhanhSql = "INSERT INTO hinhanhblog (`id_hinhanh`, `anh1`, `anh2`, `anh3`, `anh4`) SELECT COALESCE(MAX(id_hinhanh) + 1, 1), '$anh1', '$anh2', '$anh3', '$anh4' FROM hinhanhblog;";
        
        $hinhanh_blogSql = "INSERT INTO blog_hinhanh (id_blog, id_hinhanh) VALUES ((SELECT MAX(id_blog) FROM blog), (SELECT MAX(id_hinhanh) FROM hinhanhblog));";
        

        $run = mysqli_query($conn, $blogSql); // hàm thực thi lệnh sql
        $run = mysqli_query($conn, $hinhanhSql); // hàm thực thi lệnh sql
        $run = mysqli_query($conn, $hinhanh_blogSql); // hàm thực thi lệnh sql
        return $run; // trả về KQ thực thi được hay không
    }
    function edit_blog($id_blog, $id_hinhanh, $ten_blog, $bai_blog, $quote, $tacgia_quote, $tac_gia, $anh1, $anh2, $anh3, $anh4) {
        global $conn;
        $blogSql = "UPDATE blog SET ten_blog = '$ten_blog', bai_blog = '$bai_blog', quote = '$quote', tacgia_quote = '$tacgia_quote', tac_gia = '$tac_gia' WHERE blog.id_blog = $id_blog";

        $hinhanhSql = "UPDATE hinhanhblog set `anh1` = '$anh1', `anh2` = '$anh2', `anh3` = '$anh3', `anh4` = '$anh4' WHERE hinhanhblog.id_hinhanh = $id_hinhanh;";

        $run = mysqli_query($conn, $blogSql); // hàm thực thi lệnh sql
        $run = mysqli_query($conn, $hinhanhSql); // hàm thực thi lệnh sql
        return $run; // trả về KQ thực thi được hay không
    }
    function select_listblog() {
        global $conn;
        $sql = "SELECT blog.*, anh1 FROM blog ".
        "inner join blog_hinhanh on blog_hinhanh.id_blog = blog.id_blog ".
        "inner join hinhanhblog on hinhanhblog.id_hinhanh = blog_hinhanh.id_hinhanh";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    function select_blog_id($id_blog) {
        global $conn;
        $sql = "SELECT blog.*, hinhanhblog.* FROM blog inner join blog_hinhanh on blog_hinhanh.id_blog = blog.id_blog inner join hinhanhblog on hinhanhblog.id_hinhanh = blog_hinhanh.id_hinhanh where blog.id_blog = $id_blog";
        $run = mysqli_query($conn, $sql);
        return $run;
    }

    // Phòng
    function select_listPhong() {
        global $conn;
        $sql = "SELECT phong.*, anh1 FROM phong ".
        "inner join phong_hinhanh on phong_hinhanh.id_phong = phong.id_phong ".
        "inner join hinhanh on hinhanh.id_hinhanh = phong_hinhanh.id_hinhanh";
        $run = mysqli_query($conn, $sql);
        return $run;
    }
    function insert_phong($ten_phong, $gia, $mo_ta, $giuong, $bon_tam, $wifi, $tv, $dieu_hoa, $may_giat, $bua_toi, $anh1, $anh2, $anh3, $anh4) {
        global $conn;
        $blogSql = "INSERT INTO `phong` (`id_phong`, `ten_phong`, `gia`, `mo_ta`, `trang_thai`, `giuong`, `bon_tam`, `wifi`, `tv`, `dieu_hoa`, `may_giat`, `bua_toi`) SELECT COALESCE(MAX(id_phong) + 1, 1), '$ten_phong', '$gia', '$mo_ta', b'1', '$giuong', '$bon_tam', b'$wifi', b'$tv', b'$dieu_hoa', b'$may_giat', b'$bua_toi' FROM phong;";

        $hinhanhSql = "INSERT INTO `hinhanh` (`id_hinhanh`, `anh1`, `anh2`, `anh3`, `anh4`) SELECT COALESCE(MAX(id_hinhanh) + 1, 1), '$anh1', '$anh2', '$anh3', '$anh4' FROM hinhanh;";
        
        $hinhanh_blogSql = "INSERT INTO `phong_hinhanh` (`id_phong`, `id_hinhanh`) VALUES ((SELECT MAX(id_phong) FROM phong), (SELECT MAX(id_hinhanh) FROM hinhanh));";
        

        $run = mysqli_query($conn, $blogSql); // hàm thực thi lệnh sql
        $run = mysqli_query($conn, $hinhanhSql); // hàm thực thi lệnh sql
        $run = mysqli_query($conn, $hinhanh_blogSql); // hàm thực thi lệnh sql
        return $run; // trả về KQ thực thi được hay không
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
    function edit_room($id_phong, $id_hinhanh, $ten_phong, $gia, $mo_ta, $giuong, $bon_tam, $wifi, $tv, $dieu_hoa, $may_giat, $bua_toi, $anh1, $anh2, $anh3, $anh4) {
        global $conn;
        $blogSql = "UPDATE phong SET ten_phong = '$ten_phong', gia = '$gia', mo_ta = '$mo_ta', giuong = '$giuong', bon_tam = '$bon_tam', wifi = '$wifi', tv = '$tv', dieu_hoa = '$dieu_hoa', may_giat = '$may_giat', bua_toi = '$bua_toi' WHERE phong.id_phong = $id_phong";

        $hinhanhSql = "UPDATE hinhanh set `anh1` = '$anh1', `anh2` = '$anh2', `anh3` = '$anh3', `anh4` = '$anh4' WHERE hinhanh.id_hinhanh = $id_hinhanh;";

        $run = mysqli_query($conn, $blogSql); 
        $run = mysqli_query($conn, $hinhanhSql); 
        return $run;
    }
}
