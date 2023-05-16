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
                                    <h4 class="card-title">Write a blog post</h4>
                                    <p class="card-description">
                                        Enter information for new blog
                                    </p>
                                    <form class="forms-sample" method="POST" action="" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Tiêu đề</label>
                                            <input name="ten_blog" type="text" class="form-control" id="exampleInputName1" placeholder="Tiêu đề blog" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Nội dung Blog</label>
                                            <input name="bai_blog" type="text" class="form-control" id="exampleInputName1" placeholder="Nội dung blog" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Tác giả Blog</label>
                                            <input name="tac_gia" type="text" class="form-control" id="exampleInputName1" placeholder="Tác giả" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Quote</label>
                                            <input name="quote" type="text" class="form-control" id="exampleInputEmail3" placeholder="Viết một câu Quote nào đó ..." required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Tác giả quote</label>
                                            <input name="tacgia_quote" type="text" class="form-control" id="exampleInputEmail3" placeholder="Tác giả câu Quote này" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Ảnh Blog (1) (Sẽ hiển thị ở bìa của Blog)</label>
                                            <input name="anh1" type="file" class="form-control" id="exampleInputName1" placeholder="Brand product" required style="    height: 3em;">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Ảnh Blog (2)</label>
                                            <input name="anh2" type="file" class="form-control" id="exampleInputName1" placeholder="Brand product" required style="    height: 3em;">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Ảnh Blog (3)</label>
                                            <input name="anh3" type="file" class="form-control" id="exampleInputName1" placeholder="Brand product" required style="    height: 3em;">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputName1">Ảnh Blog (4)</label>
                                            <input name="anh4" type="file" class="form-control" id="exampleInputName1" placeholder="Brand product" required style="    height: 3em;">
                                        </div>

                                        <button name="submit" type="submit" class="submitAdd btn btn-primary me-2">Add</button>
                                    </form>
                                    <?php
                                    include('../../control.php'); // chèn trang control vào bài
                                    $get_data = new data(); // gọi đến class data       
                                    if (isset($_POST['submit'])) // thực thi sau khi nhấn nút submit
                                    {
                                        move_uploaded_file($_FILES['anh1']['tmp_name'], '../../../resources/img/blog/' . $_FILES['anh1']['name']);
                                        move_uploaded_file($_FILES['anh2']['tmp_name'], '../../../resources/img/blog/' . $_FILES['anh2']['name']);
                                        move_uploaded_file($_FILES['anh3']['tmp_name'], '../../../resources/img/blog/' . $_FILES['anh3']['name']); 
                                        move_uploaded_file($_FILES['anh4']['tmp_name'], '../../../resources/img/blog/' . $_FILES['anh4']['name']); 

                                        $insert = $get_data->insert_blog($_POST['ten_blog'], $_POST['bai_blog'], $_POST['quote'], $_POST['tacgia_quote'], $_POST['tac_gia'], $_FILES['anh1']['name'], $_FILES['anh2']['name'], $_FILES['anh3']['name'], $_FILES['anh4']['name']);

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