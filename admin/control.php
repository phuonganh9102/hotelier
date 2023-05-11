<?php
include ('connect.php');
class data 
{
    function insert_about($name,$picture,$description,$desful)
        {
            global $conn;
            $sql="insert into about(name,picture,des,deslong) values ('$name','$picture','$description','$desful')";
            $run=mysqli_query($conn,$sql);// hàm thực thi lệnh sql
            return $run;// trả về KQ thực thi được hay không
        }
        function select_about()
    {
        global $conn;
        $sql="select * from about";
        $run=mysqli_query($conn,$sql);
        return $run;
    }
    function select_about_id($ID)
        {
            global $conn;
            $sql="select * from about where id_about='$ID'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        function delete_about($ID)
        {
            global $conn;
            $sql="delete from about where id_about='$ID'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
        function update_about($id,$name,$picture,$des,$desful)
        {
            global $conn;
            $sql="update about set name='$name',
                                        picture='$picture',
                                         des='$des',
                                        deslong='$desful' WHERE id_about='$id'";
            $run=mysqli_query($conn,$sql);
            return $run;
        }
}
?>