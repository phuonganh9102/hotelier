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
    <link rel="stylesheet" href="../../css/modal.css">
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
    .btn-secondary.btn-light, .btn-secondary.btn-secondary {
        color: #ffffff;
        background: #1F3BB3 !important;
    }
    .table > :not(:last-child) > :last-child > *, .jsgrid .jsgrid-table > :not(:last-child) > :last-child > * {
        text-align: center;
    }
    .table td {
        text-align: center;
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
                    <div class="col-lg-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Danh sách phòng</h4>  
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>
                                                    ID phòng
                                                </th>
                                                <th>
                                                    Trạng thái
                                                </th>
                                                <th>
                                                    Tên phòng
                                                </th>
                                                <th>
                                                    Giá (1 đêm)
                                                </th>
                                                <th>
                                                    Số giường
                                                </th>
                                                <th>
                                                    Số phòng tắm
                                                </th>
                                                <th>
                                                    Thao tác
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        include('../../control.php');
                                        $get = new data();
                                        $select_room = $get->select_listPhong();
                                        foreach ($select_room as $se_room) {
                                        ?>
                                            <tr>
                                                <td>
                                                    <?php echo $se_room['id_phong'] ?>
                                                </td>
                                                <td>
                                                    <?php 
                                                    if ($se_room['trang_thai'] == '1') {
                                                        echo "Còn phòng";
                                                    } else {
                                                        echo "Hết phòng";
                                                    }
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php echo $se_room['ten_phong'] ?>
                                                </td>
                                                <td>
                                                    $<?php echo $se_room['gia'] ?>.00
                                                </td>
                                                <td>
                                                    <?php echo $se_room['giuong'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $se_room['bon_tam'] ?>
                                                </td>
                                                <td>
                                                    <a href="edit-room.php?id=<?php echo $se_room['id_phong'] ?>" class="btn btn-secondary">Edit</a>
                                                    <a href="delete-room.php?id=<?php echo $se_room['id_phong'] ?>" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                        </tbody>
                                    </table>
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
    <script src="../../js/alertModal.js"></script>

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
