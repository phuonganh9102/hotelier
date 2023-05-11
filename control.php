<?php
include ('connect.php');
class data 
{
function insert_dangky($name,$password,$email,$address)
    {
        global $conn;
        $sql="insert into dangky(username,pass,email,address) values ('$name','$password','$email','$address')";
        $run=mysqli_query($conn,$sql);// hàm thực thi lệnh sql
        return $run;// trả về KQ thực thi được hay không
    }
    function login($name,$password)
        {
            global $conn;
            $sql="select * from dangky where username='$name' and pass='$password'"; 
            $run=mysqli_query($conn,$sql);
            $num=mysqli_num_rows($run);
            return $num;
        }
    }
?>