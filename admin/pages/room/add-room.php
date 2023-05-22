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
                                    <h4 class="card-title">Thêm 1 phòng</h4>
                                    <p class="card-description">
                                        Nhập thông tin phòng cần thêm
                                    </p>
                                    <form class="forms-sample" method="POST" action="" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Tên phòng</label>
                                            <input name="ten_phong" type="text" class="form-control" id="exampleInputName1" placeholder="Tên phòng" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Giá phòng</label>
                                            <input name="gia" type="text" class="form-control" id="exampleInputName1" placeholder="Giá phòng / 1 đêm" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Mô tả phòng</label>
                                            <input name="mo_ta" type="text" class="form-control" id="exampleInputName1" placeholder="Mô tả phòng" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Số lượng giường</label>
                                            <input name="giuong" type="text" class="form-control" id="exampleInputEmail3" placeholder="Số lượng giường của phòng" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Số lượng bồn tắm</label>
                                            <input name="bon_tam" type="text" class="form-control" id="exampleInputEmail3" placeholder="Số lượng bồn tắm của phòng" required>
                                        </div>
                                        <!-- Lựa chọn dịch vụ -->
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Tích chọn vào những dịch vụ phòng này có</label>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input name="wifi" type="checkbox" class="form-check-input">
                                                    Wifi
                                                    <i class="input-helper"></i></label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input name="tv" type="checkbox" class="form-check-input">
                                                    TV
                                                    <i class="input-helper"></i></label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input name="dieu_hoa" type="checkbox" class="form-check-input">
                                                    Hệ thống làm mát
                                                    <i class="input-helper"></i></label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input name="may_giat" type="checkbox" class="form-check-input">
                                                    Dịch vụ giặt là
                                                    <i class="input-helper"></i></label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input name="bua_toi" type="checkbox" class="form-check-input">
                                                    Bữa tối
                                                    <i class="input-helper"></i></label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Ảnh Phòng (1) (Sẽ hiển thị ở bìa của Phòng)</label>
                                            <input name="anh1" type="file" class="form-control" id="exampleInputName1" placeholder="Brand product" required style="    height: 3em;">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Ảnh Phòng (2)</label>
                                            <input name="anh2" type="file" class="form-control" id="exampleInputName1" placeholder="Brand product" required style="    height: 3em;">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Ảnh Phòng (3)</label>
                                            <input name="anh3" type="file" class="form-control" id="exampleInputName1" placeholder="Brand product" required style="    height: 3em;">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Ảnh Phòng (4)</label>
                                            <input name="anh4" type="file" class="form-control" id="exampleInputName1" placeholder="Brand product" required style="    height: 3em;">
                                        </div>

                                        <button name="submit" type="submit" class="submitAdd btn btn-primary me-2">Add</button>
                                    </form>
                                    <?php
                                    include('../../control.php'); // chèn trang control vào bài
                                    $get_data = new data(); // gọi đến class data       
                                    if (isset($_POST['submit'])) // thực thi sau khi nhấn nút submit
                                    {
                                        move_uploaded_file($_FILES['anh1']['tmp_name'], '../../../resources/img/room/' . $_FILES['anh1']['name']);
                                        move_uploaded_file($_FILES['anh2']['tmp_name'], '../../../resources/img/room/' . $_FILES['anh2']['name']);
                                        move_uploaded_file($_FILES['anh3']['tmp_name'], '../../../resources/img/room/' . $_FILES['anh3']['name']);
                                        move_uploaded_file($_FILES['anh4']['tmp_name'], '../../../resources/img/room/' . $_FILES['anh4']['name']);

                                        // $ten_phong, $gia, $mo_ta, $giuong, $bon_tam, $wifi, $tv, $dieu_hoa, $may_giat, $bua_toi, $anh1, $anh2, $anh3, $anh4

                                        if (isset($_POST['wifi'])) $wifi = 1; else $wifi = 0;
                                        if (isset($_POST['tv'])) $tv = 1; else $tv = 0;
                                        if (isset($_POST['dieu_hoa'])) $dieu_hoa = 1; else $dieu_hoa = 0;
                                        if (isset($_POST['may_giat'])) $may_giat = 1; else $may_giat = 0;
                                        if (isset($_POST['bua_toi'])) $bua_toi = 1; else $bua_toi = 0;

                                        $insert = $get_data->insert_phong($_POST['ten_phong'], $_POST['gia'], $_POST['mo_ta'], $_POST['giuong'], $_POST['bon_tam'], $wifi, $tv, $dieu_hoa, $may_giat, $bua_toi, $_FILES['anh1']['name'], $_FILES['anh2']['name'], $_FILES['anh3']['name'], $_FILES['anh4']['name']);

                                        if ($insert) {
                                            echo "<script>alert('Thêm mới thành công')</script>";
                                        } else {
                                            echo "<script>alert('Không thực hiện được')</script>";
                                        }
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