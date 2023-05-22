<?php session_start(); ?>
<!DOCTYPE html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin2 </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../vendors/feather/feather.css">
    <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../../vendors/typicons/typicons.css">
    <link rel="stylesheet" href="../../vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="../../js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../../images/favicon.png" />
</head>
<style>
    .swal2-confirm.swal2-styled {
        background-color: rgb(48, 133, 214) !important;
        color: #fff !important;
        font-weight: 400 !important;
    }

    .m-10-20 {
        margin: 10px 20px;
    }
</style>

<body>
    <div class="container-scroller">
        <?php include '../../partials/_header.php'; ?>

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <?php include '../../partials/_theme.php'; ?>

            <?php include '../../partials/_navbar.php'; ?>

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Thêm 1 nhân viên</h4>
                                    <p class="card-description">
                                        Nhập thông tin nhân viên mới
                                    </p>
                                    <form class="forms-sample" method="POST" action="" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Họ tên nhân viên</label>
                                            <input name="ho_ten" type="text" class="form-control" id="exampleInputName1" placeholder="Họ tên nhân viên" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Vai trò</label>
                                            <input name="vai_tro" type="text" class="form-control" id="exampleInputName1" placeholder="Vai trò" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Link Facebook</label>
                                            <input name="link_fb" type="text" class="form-control" id="exampleInputName1" placeholder="Link Facebook" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Link Twitter</label>
                                            <input name="link_tw" type="text" class="form-control" id="exampleInputEmail3" placeholder="Link Twitte" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Link Instagram</label>
                                            <input name="link_ig" type="text" class="form-control" id="exampleInputEmail3" placeholder="Link Instagram" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Ảnh đại diện</label>
                                            <input name="avt" type="file" class="form-control" id="exampleInputName1" placeholder="Brand product" required style="    height: 3em;">
                                        </div>

                                        <button name="submit" type="submit" class="submitAdd btn btn-primary me-2">Add</button>
                                    </form>
                                    <?php
                                    include('../../control.php'); // chèn trang control vào bài
                                    $get_data = new data(); // gọi đến class data       
                                    if (isset($_POST['submit'])) // thực thi sau khi nhấn nút submit
                                    {
                                        move_uploaded_file($_FILES['avt']['tmp_name'], '../../../resources/img/team/' . $_FILES['avt']['name']);

                                        $insert = $get_data->insert_team($_POST['ho_ten'], $_POST['vai_tro'], $_POST['link_fb'], $_POST['link_tw'], $_POST['link_ig'], $_FILES['avt']['name']);

                                        if ($insert) { 
                                            echo "<script>alert('Thêm mới thành công')</script>";
                                        } else
                                            echo "<script>alert('Không thực hiện được')</script>";
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include '../../partials/_footer.php'; ?>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    </div>

    <!-- End Create block select color and quantity -->
    <!-- plugins:js -->
    <script src="../../vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="../../vendors/chart.js/Chart.min.js"></script>
    <script src="../../vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
    <script src="../../vendors/progressbar.js/progressbar.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../js/off-canvas.js"></script>
    <script src="../../js/hoverable-collapse.js"></script>
    <script src="../../js/template.js"></script>
    <script src="../../js/settings.js"></script>
    <script src="../../js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="../../js/dashboard.js"></script>
    <script src="../../js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
</body>

</html>