<?php session_start(); ?>
<!DOCTYPE html>

<?php
$id_phong = $_REQUEST['id'];
?>
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
                                    <h4 class="card-title">Write a blog post</h4>
                                    <p class="card-description">
                                        Enter information for new blog
                                    </p>
                                    <?php 
                                    include('../../control.php');
                                    $get = new data();
                                    $select_room = $get->select_room_id($id_phong);
                                    foreach ($select_room as $se_phong) {
                                    ?>
                                    <form class="forms-sample" method="POST" action="" enctype="multipart/form-data">
                                        <input name="id_hinhanh" type="text" value="<?php echo $se_phong['id_hinhanh'] ?>" style="display: none;">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Tên phòng</label>
                                            <input name="ten_phong" type="text" class="form-control" value="<?php echo $se_phong['ten_phong'] ?>" placeholder="Tên phòng" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Giá phòng</label>
                                            <input name="gia" type="text" class="form-control" value="<?php echo $se_phong['gia'] ?>" placeholder="Giá phòng / 1 đêm" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Mô tả phòng</label>
                                            <input name="mo_ta" type="text" class="form-control" value="<?php echo $se_phong['mo_ta'] ?>" placeholder="Mô tả phòng" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Số lượng giường</label>
                                            <input name="giuong" type="text" class="form-control" value="<?php echo $se_phong['giuong'] ?>" placeholder="Số lượng giường của phòng" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Số lượng bồn tắm</label>
                                            <input name="bon_tam" type="text" class="form-control" value="<?php echo $se_phong['bon_tam'] ?>" placeholder="Số lượng bồn tắm của phòng" required>
                                        </div>
                                        <!-- Lựa chọn dịch vụ -->
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Tích chọn vào những dịch vụ phòng này có</label>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input name="wifi" type="checkbox" class="form-check-input" <?php if($se_phong['wifi'] == 1) echo "checked"; ?>>
                                                    Wifi
                                                    <i class="input-helper"></i></label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input name="tv" type="checkbox" class="form-check-input" <?php if($se_phong['tv'] == 1) echo "checked"; ?>>
                                                    TV
                                                    <i class="input-helper"></i></label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input name="dieu_hoa" type="checkbox" class="form-check-input" <?php if($se_phong['dieu_hoa'] == 1) echo "checked"; ?>>
                                                    Hệ thống làm mát
                                                    <i class="input-helper"></i></label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input name="may_giat" type="checkbox" class="form-check-input" <?php if($se_phong['may_giat'] == 1) echo "checked"; ?>>
                                                    Dịch vụ giặt là
                                                    <i class="input-helper"></i></label>
                                            </div>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input name="bua_toi" type="checkbox" class="form-check-input" <?php if($se_phong['bua_toi'] == 1) echo "checked"; ?>>
                                                    Bữa tối
                                                    <i class="input-helper"></i></label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Ảnh Blog (1) (Sẽ hiển thị ở bìa của Blog)</label>
                                            <input name="anh1" type="text" value="<?php echo $se_phong['anh1'] ?>" class="form-control"  style="height: 3em;">
                                            <input name="anh1new" type="file" class="form-control" style="height: 3em;">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Ảnh Blog (2)</label>
                                            <input name="anh2" type="text" value="<?php echo $se_phong['anh2'] ?>" class="form-control"  style="height: 3em;">
                                            <input name="anh2new" type="file" class="form-control" style="height: 3em;">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Ảnh Blog (3)</label>
                                            <input name="anh3" type="text" value="<?php echo $se_phong['anh3'] ?>" class="form-control"  style="height: 3em;">
                                            <input name="anh3new" type="file" class="form-control" style="height: 3em;">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Ảnh Blog (4)</label>
                                            <input name="anh4" type="text" value="<?php echo $se_phong['anh4'] ?>" class="form-control"  style="height: 3em;">
                                            <input name="anh4new" type="file" class="form-control" style="height: 3em;">
                                        </div>

                                        <button name="submit" type="submit" class="submitAdd btn btn-primary me-2">Add</button>
                                    </form>
                                    <?php 
                                    }
                                    ?>
                                    <?php      
                                    $gets = new data();
                                    if (isset($_POST['submit'])) // thực thi sau khi nhấn nút submit
                                    {
                                        if (empty($_FILES['anh1new']['name'])) {
                                            $anh1 = $_POST['anh1'];
                                        } else {
                                            move_uploaded_file($_FILES['anh1new']['tmp_name'], '../../../resources/img/room/' . $_FILES['anh1new']['name']);
                                            $anh1 = $_FILES['anh1new']['name'];
                                        }
                                        if (empty($_FILES['anh2new']['name'])) {
                                            $anh2 = $_POST['anh2'];
                                        } else {
                                            move_uploaded_file($_FILES['anh2new']['tmp_name'], '../../../resources/img/room/' . $_FILES['anh2new']['name']);
                                            $anh2 = $_FILES['anh2new']['name'];
                                        }
                                        if (empty($_FILES['anh3new']['name'])) {
                                            $anh3 = $_POST['anh3'];
                                        } else {
                                            move_uploaded_file($_FILES['anh3new']['tmp_name'], '../../../resources/img/room/' . $_FILES['anh3new']['name']);
                                            $anh3 = $_FILES['anh3new']['name'];
                                        }
                                        if (empty($_FILES['anh4new']['name'])) {
                                            $anh4 = $_POST['anh4'];
                                        } else {
                                            move_uploaded_file($_FILES['anh4new']['tmp_name'], '../../../resources/img/room/' . $_FILES['anh4new']['name']);
                                            $anh4 = $_FILES['anh4new']['name'];
                                        }
                                        $insert = $gets->edit_room($id_phong, $_POST['id_hinhanh'], $_POST['ten_phong'], $_POST['gia'], $_POST['mo_ta'], $_POST['giuong'], $_POST['bon_tam'], $_POST['wifi'], $_POST['tv'], $_POST['dieu_hoa'], $_POST['may_giat'], $_POST['bua_toi'], $anh1, $anh2, $anh3, $anh4);
                                        
                                        
                                        if ($insert) { 
                                            echo "<script>alert('Sửa thành công')</script>";
                                            echo "<script>window.location.href='all-room.php';</script>";
                                            exit;
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