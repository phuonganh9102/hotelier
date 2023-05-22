<!DOCTYPE html>
<html lang="en">
<?php 
    session_start();
    $id_phong = $_REQUEST['id'];
    if (empty($_SESSION['id_khachhang'])) {
        echo "<script>alert('Vui lòng đăng nhập để tiếp tục!')</script>";
        // header("Location: ./login.php");
        echo "<script>window.location.href='login.php';</script>";
    }
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
                            if (isset($_REQUEST['checkin']) && isset($_REQUEST['checkout'])) {
                                $checkin = $_REQUEST['checkin'];
                                $checkout = $_REQUEST['checkout'];
                            } else {
                                $checkin = "";
                                $checkout = "";
                            }
                            include('control.php');
                            $get = new data();
                            $select_room_id = $get->select_room_id($id_phong);
                            foreach ($select_room_id as $se_room) {
                            ?>
                            <form method="POST" action="" enctype="multipart/form-data">
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input value="$<?php echo $se_room['gia'] ?>.00" readonly type="text" class="form-control" id="gia" placeholder="Your gia">
                                            <label for="gia">Giá phòng</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input value="<?php echo $se_room['ten_phong'] ?>" readonly type="text" class="form-control" id="ten_phong" placeholder="Your ten_phong">
                                            <label for="ten_phong">Tên phòng</label>
                                        </div>
                                    </div> 
                                    <?php 
                                    $insert = $get->select_khachhang_id($_SESSION['id_khachhang']);
                                    foreach($insert as $in) {
                                    ?>                                    
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input readonly name="nguoi_lon" value="<?php echo $in['ho_ten'] ?>" type="text" class="form-control" id="nguoilon" placeholder="Số lượng người lớn"/>
                                            <label for="nguoilon">Tên khách hàng</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input readonly name="tre_con" value="<?php echo $in['email'] ?>" type="text" class="form-control" id="trecon" placeholder="Số lượng trẻ nhỏ"/>
                                            <label for="trecon">Email</label>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    ?>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date3" data-target-input="nearest">
                                            <input name="checkin"  value="<?php echo $checkin ?>" type="date" class="form-control datetimepicker-input" id="checkin" placeholder="Check In"  />
                                            <label for="checkin">Check In</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating date" id="date4" data-target-input="nearest">
                                            <input name="checkout"  value="<?php echo $checkout ?>" type="date" class="form-control datetimepicker-input" id="checkout" placeholder="Check Out"  />
                                            <label for="checkout">Check Out</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea name="yeu_cau" class="form-control" placeholder="Special Request" id="message" style="height: 100px"></textarea>
                                            <label for="message">Yêu cầu đặc biệt</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button name="submit" class="btn btn-primary w-100 py-3" type="submit">Book Now</button>
                                    </div>
                                </div>
                            </form>
                            <?php 
                            }
                            ?> 
                            <!-- Xử lý đặt phòng -->
                            <?php 
                            if (isset($_POST['submit'])) // thực thi sau khi nhấn nút submit
                                {
                                    // $ten_khachhang, $email, $checkin, $checkout, $soluong_nguoilon, $soluong_trecon, $yeu_cau, $id_phong
                                    if (!empty($_POST['yeu_cau'])) {
                                        $yeu_cau = $_POST['yeu_cau'];
                                    } else {
                                        $yeu_cau = "Không có";
                                    }
                                    $select = $get->select_id_dondathang();
                                    foreach($select as $se) {
                                        $id_don_dat_phong = $se['id'];
                                    }
                                    if (empty($id_don_dat_phong)) {
                                        $id_don_dat_phong = 1;
                                    }
                                    $_SESSION['id_don_dat_phong'] = $id_don_dat_phong;

                                    $insert = $get->book_room($id_don_dat_phong, $id_phong, $_SESSION['id_khachhang'], $_POST['checkin'], $_POST['checkout'], $yeu_cau);
                                    
                                    if ($insert) { 
                                        echo "<script>alert('Đặt phòng thành công')</script>";
                                        echo "<script>window.location.href='booking-success.php';</script>";
                                            exit;
                                    } else
                                        echo "<script>alert('Không thực hiện được')</script>";
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