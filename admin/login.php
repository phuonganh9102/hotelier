<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Đăng nhập Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/typicons/typicons.css">
  <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="images/logo.svg" alt="logo">
              </div>
              <h4>Xin chào! Hãy bắt đầu nào.</h4>
              <h6 class="fw-light">Đăng nhập để tiếp tục</h6>
              <form action="" method="POST" enctype="multipart/form-data" class="pt-3">
                <div class="form-group">
                  <input name="username" type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Tên đăng nhập">
                </div>
                <div class="form-group">
                  <input name="password" type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Mật khẩu">
                </div>
                <div class="mt-3">
                  <button name="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="index.html">ĐĂNG NHẬP</button>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <!-- <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label> -->
                  </div>
                  <a href="#" class="auth-link text-black">Quên mật khẩu?</a>
                </div>
                <div class="mb-2">
                  <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                    <i class="ti-facebook me-2"></i>Connect using facebook
                  </button>
                </div>
                <!-- <div class="text-center mt-4 fw-light">
                  Don't have an account? <a href="register.html" class="text-primary">Create</a>
                </div> -->
              </form>
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
                          $_SESSION['admin'] = $_POST['username'];
                          foreach ($login as $lo) {
                              $_SESSION['id_admin'] = $lo['id_admin'];
                          }
                          echo "<script>alert('Đăng nhập thành công!')</script>";
                          // header("Location: ./login.php");
                          echo "<script>window.location.href='index.php';</script>";      
                      } else echo "Not login";
                  }
              }

              ?>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
</body>

</html>
