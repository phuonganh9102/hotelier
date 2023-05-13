<?php
	$connect = mysqli_connect('localhost','root','','login');
	mysqli_set_charset($connect,"utf8");
?>
<!DOCTYPE html>
<html>
<head>
	<title>index_dangky</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<?php
		if(isset($_POST["dangky"])){
			$user_name = $_POST["username"];
			$pass1 = $_POST["pass"];
			$pass2 = $_POST["pass"];
			$name = $_POST["full_name"];
			//kiểm tra xem 2 mật khẩu có giống nhau hay không:
			if($pass1 != $pass2){
				header("location:index.php?page=register");
				setcookie("error", "Đăng ký không thành công!", time()+1, "/","", 0);
			}
			else{
				$pass = md5($pass1);
				mysqli_query($connect,"
					insert into user (user_name,password,full_name)
					values ('$user_name','$pass','$name')
				");

				header("location:index.php?page=register");
				setcookie("success", "Đăng ký thành công!", time()+1, "/","", 0);
			}
		}

	?>
	<div class="container">
		<div class="row">
			<a href="index.php?page=register" class="btn btn-success">Đăng ký</a>
			<a href="index.php" class="btn btn-info">Trang chủ</a>
		</div>

		<div class="row">
			<!-- start nếu xảy ra lỗi thì hiện thông báo: -->
			<?php
				if(isset($_COOKIE["error"])){
			?>
				<div class="alert alert-danger">
				  	<strong>Có lỗi!</strong> <?php echo $_COOKIE["error"]; ?>
				</div>
			<?php } ?>
			<!-- end nếu xảy ra lỗi thì hiện thông báo: -->


			<!-- start nếu thành công thì hiện thông báo: -->
			<?php
				if(isset($_COOKIE["success"])){
			?>
				<div class="alert alert-success">
				  	<strong>Chúc mừng!</strong> <?php echo $_COOKIE["success"]; ?>
				</div>
			<?php } ?>
			<!-- end nếu thành công thì hiện thông báo: -->

			<?php
				if(isset($_GET["page"]) && $_GET["page"] == "register")
					include "register.php";
			?>
		</div>

	</div>
</body>
</html>