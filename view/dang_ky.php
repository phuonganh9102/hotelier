<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Đăng ký tài khoản</title>
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
                            <h6 class="fw-light">Đăng ký để tiếp tục</h6>
                            <form action="dang_ky.php" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input name="username" type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Tên đăng nhập">
                                </div>
                                <div class="form-group">
                                    <input name="password" type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Mật khẩu">
                                </div>
                                <div class="form-group">
                                    <input name="ho_ten" type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Họ tên">
                                </div>
                                <div class="form-group">
                                    <input name="email" type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input name="sdt" type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Số điện thoại">
                                </div>
                                <div class="mt-3">
                                    <button name="submit" type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">ĐĂNG KÝ</button>
                                </div>
                            </form>
                                <div class="text-center mt-4 fw-light">
                                    Bạn đã có tài khoản? <a href="login.php" class="text-primary">Đăng nhập</a>
                                </div>
                            <?php 
                            include('./control.php');
                            $get_data = new data();
                            if (isset($_POST['submit'])) {
                                if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['ho_ten']) || empty($_POST['email']) || empty($_POST['sdt'])) {
                                    echo "<script>alert('Vui lòng nhập đủ thông tin đăng nhâp')</script>";
                                } else {
                                    $num = $get_data->check_dangky($_POST['username']);
                                    if ($num == 1) {
                                      echo "<script>alert('Tên đăng nhập ".$_POST['username']." đã tồn tại.')</script>";
                                    } else {
                                      $dangky = $get_data->dangky($_POST['username'], $_POST['password'], $_POST['ho_ten'], $_POST['email'], $_POST['sdt']);
                                      if ($dangky) {
                                        echo "<script>alert('Đăng ký tài khoản thành công!')</script>";
                                      } else echo "<script>alert('Đăng ký không thành công!')</script>";
                                    }
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