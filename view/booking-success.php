<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>

<head>
    <meta charset="utf-8">
    <title>Hotelier - Hotel HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content name="keywords">
    <meta content name="description">

    <link href="img/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">

        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <!-- Header Start -->
        <?php include 'partials/_header.php' ?>
        <!-- Header End -->

        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-1.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Booking</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Booking</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Booking Start -->
        <?php include 'partials/_booking.php' ?>
        <!-- Booking End -->

        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Room Booking</h6>
                    <h1 class="mb-5">Book A <span class="text-primary text-uppercase">Luxury Room</span></h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="img/about-1.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="img/about-2.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="img/about-3.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="img/about-4.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <?php
                            include('control.php');
                            $get = new data();
                            $select_phong_id = $get->select_dondatphong_id($_SESSION['id_don_dat_phong']);

                            foreach ($select_phong_id as $se_phong) {
                            ?>
                                <table class="table table-strpper;">
                                    <tbody>
                                        <tr>
                                            <td>Mã hóa đơn:</td>
                                            <td><?php echo $se_phong['id_don_dat_phong'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tên Khách Hàng:</td>
                                            <td><?php echo $se_phong['ho_ten'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Email:</td>
                                            <td><?php echo $se_phong['email'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Số điện thoại:</td>
                                            <td><?php echo $se_phong['sdt'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tên Phòng:</td>
                                            <td><?php echo $se_phong['ten_phong'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Giá phòng:</td>
                                            <td>$<?php echo $se_phong['gia'] ?>.00</td>
                                        </tr>
                                        <tr>
                                            <td>Ngày checkin:</td>
                                            <td>
                                                <?php
                                                    $d=strtotime($se_phong['checkin']);
                                                    echo date("d-m-Y", $d);
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Ngày checkout:</td>
                                            <td>
                                                <?php
                                                    $d=strtotime($se_phong['checkout']);
                                                    echo date("d-m-Y", $d);
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Yêu cầu:</td>
                                            <td><?php echo $se_phong['yeu_cau'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Trạng Thái:</td>
                                            <td>Đặt Phòng Thành Công!</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Cảm ơn quý khách đã đặt phòng.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Newsletter Start -->
        <?php include 'partials/_news.php' ?>
        <!-- Newsletter Start -->

        <!-- Footer Start -->
        <?php include 'partials/_footer.php' ?>
        <!-- Footer End -->

        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>