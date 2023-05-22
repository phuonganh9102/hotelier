<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Đăng nhập tài khoản</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="./css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="./images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <!-- <h4>Xin chào! Hãy đăng nhập để bắt đầu nào</h4> -->
                            <h6 class="fw-light">Đăng nhập để tiếp tục</h6>
                            <form action="login.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input name="username" type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input name="password" type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="mt-3">
                                    <button name="submit" type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">SIGN IN</button>
                                </div>
                            </form>
                                <!-- <div class="my-2 d-flex justify-content-between align-items-center">
                                    <a href="#" class="auth-link text-black">Forgot password?</a>
                                </div> -->
                                <div class="text-center mt-4 fw-light">
                                    Bạn chưa có tài khoản? <a href="dang_ky.php" class="text-primary">Đăng ký tại đây</a>
                                </div>
                            <?php 
                            include('./control.php');
                            $get_data = new data();
                            if (isset($_POST['submit'])) {
                                if (empty($_POST['username']) || empty($_POST['password'])) {
                                    echo "<script>alert('Vui lòng nhập đủ thông tin đăng nhâp')</script>";
                                } else {
                                    $login = $get_data->login($_POST['username'], $_POST['password']);
                                    $num = mysqli_num_rows($login);
                                    if ($num == 1) {
                                        $_SESSION['username'] = $_POST['username'];
                                        foreach ($login as $lo) {
                                            $_SESSION['id_khachhang'] = $lo['id_khachhang'];
                                        }
                                        header('location: index.php');
                    
                                    } else echo "Not login";
                                }
                            }

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>