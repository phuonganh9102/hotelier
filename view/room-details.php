<!DOCTYPE html>
<html lang="en">

<?php
$id_phong = $_REQUEST['id_phong'];
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
<style>
    .text-body {
        max-height: 5em;
        line-height: 1.2em;
        overflow: hidden;
    }
</style>
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

        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-2.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Room Detail</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Room Detail</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <!-- Booking Start -->
        <?php include 'partials/_booking.php' ?>
        <!-- Booking End -->
        <?php
        include('control.php');
        $get = new data();
        $select_room_id = $get->select_room_id($id_phong);
        foreach ($select_room_id as $se_room) {
        ?>
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5">
                        <div class="col-lg-8">
                            <div id="room-carousel" class="carousel slide mb-5 wow fadeIn" data-bs-ride="carousel" data-wow-delay="0.1s">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="w-100" src="../resources/img/room/<?php echo $se_room['anh1'] ?>" alt="Image">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="w-100" src="../resources/img/room/<?php echo $se_room['anh2'] ?>" alt="Image">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="w-100" src="../resources/img/room/<?php echo $se_room['anh3'] ?>" alt="Image">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="w-100" src="../resources/img/room/<?php echo $se_room['anh4'] ?>" alt="Image">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#room-carousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#room-carousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                            <div class="d-flex align-items-center mb-4">
                                <h1 class="mb-0"><?php echo $se_room['ten_phong'] ?></h1>
                                <div class="ps-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                            </div>
                            <div class="d-flex flex-wrap pb-4 m-n1">
                                <small class="bg-light rounded py-1 px-3 m-1"><i class="fa fa-bed text-primary me-2"></i><?php echo $se_room['giuong'] ?> Bed</small>
                                <small class="bg-light rounded py-1 px-3 m-1"><i class="fa fa-bath text-primary me-2"></i><?php echo $se_room['bon_tam'] ?> Bath</small>
                                <?php if ($se_room['wifi'] == '1') { ?>
                                    <small class="bg-light rounded py-1 px-3 m-1"><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                <?php } else {
                                } ?>
                                <?php if ($se_room['tv'] == '1') { ?>
                                    <small class="bg-light rounded py-1 px-3 m-1"><i class="fa fa-tv text-primary me-2"></i>TV</small>
                                <?php } else {
                                } ?>
                                <?php if ($se_room['dieu_hoa'] == '1') { ?>
                                    <small class="bg-light rounded py-1 px-3 m-1"><i class="fa fa-fan text-primary me-2"></i>AC</small>
                                <?php } else {
                                } ?>
                                <?php if ($se_room['may_giat'] == '1') { ?>
                                    <small class="bg-light rounded py-1 px-3 m-1"><i class="fa fa-user-cog text-primary me-2"></i>Laundry</small>
                                <?php } else {
                                } ?>
                                <?php if ($se_room['bua_toi'] == '1') { ?>
                                    <small class="bg-light rounded py-1 px-3 m-1"><i class="fa fa-utensils text-primary me-2"></i>Dinner</small>
                                <?php } else {
                                } ?>
                            </div>
                            <p><?php echo $se_room['mo_ta'] ?></p>
                            <div class="tab-class wow fadeInUp" data-wow-delay="0.1s">
                                <ul class="nav nav-pills d-flex justify-content-between border-bottom mb-4">
                                    <li class="nav-item">
                                        <a class="d-flex align-items-center py-3 active" data-bs-toggle="pill" href="#tab-1">
                                            <i class="fa fa-eye text-primary me-2"></i>
                                            <h6 class="mb-0">Overview</h6>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="d-flex align-items-center py-3" data-bs-toggle="pill" href="#tab-2">
                                            <i class="fa fa-dollar text-primary me-2"></i>
                                            <h6 class="mb-0">Pricing</h6>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="d-flex align-items-center py-3" data-bs-toggle="pill" href="#tab-3">
                                            <i class="fa fa-map-marker-alt text-primary me-2"></i>
                                            <h6 class="mb-0">Location</h6>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="d-flex align-items-center py-3" data-bs-toggle="pill" href="#tab-4">
                                            <i class="fa fa-star text-primary me-2"></i>
                                            <h6 class="mb-0">Reviews(3)</h6>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="tab-1" class="tab-pane fade show p-0 active">
                                        <p>Sadipscing labore amet rebum est et justo gubergren. Et eirmod ipsum sit diam ut
                                            magna lorem. Nonumy vero labore lorem sanctus rebum et lorem magna kasd, stet
                                            amet magna accusam consetetur eirmod. Kasd accusam sit ipsum sadipscing et at at
                                            sanctus et. Ipsum sit gubergren dolores et, consetetur justo invidunt at et
                                            aliquyam ut et vero clita. Diam sea sea no sed dolores diam nonumy, gubergren
                                            sit stet no diam kasd vero.
                                        </p>
                                        <p>Voluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores
                                            vero stet consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit
                                            nonumy kasd diam dolores, sanctus lorem kasd duo dolor dolor vero sit et. Labore
                                            ipsum duo sanctus amet eos et. Consetetur no sed et aliquyam ipsum justo et,
                                            clita lorem sit vero amet amet est dolor elitr, stet et no diam sit. Dolor erat
                                            justo dolore sit invidunt.
                                        </p>
                                    </div>
                                    <div id="tab-2" class="tab-pane fade show p-0">
                                        <p>Voluptua est takimata stet invidunt sed rebum nonumy stet, clita aliquyam dolores
                                            vero stet consetetur elitr takimata rebum sanctus. Sit sed accusam stet sit
                                            nonumy kasd diam dolores, sanctus lorem kasd duo dolor dolor vero sit et. Labore
                                            ipsum duo sanctus amet eos et. Consetetur no sed et aliquyam ipsum justo et,
                                            clita lorem sit vero amet amet est dolor elitr, stet et no diam sit. Dolor erat
                                            justo dolore sit invidunt.
                                        </p>
                                        <div class="row g-4">
                                            <div class="col-sm-6 d-flex align-items-center justify-content-between">
                                                <span>Nightly:</span>
                                                <hr class="flex-grow-1 my-0 mx-3">
                                                <span>$100</span>
                                            </div>
                                            <div class="col-sm-6 d-flex align-items-center justify-content-between">
                                                <span>Weekly:</span>
                                                <hr class="flex-grow-1 my-0 mx-3">
                                                <span>$100</span>
                                            </div>
                                            <div class="col-sm-6 d-flex align-items-center justify-content-between">
                                                <span>Monthly:</span>
                                                <hr class="flex-grow-1 my-0 mx-3">
                                                <span>$100</span>
                                            </div>
                                            <div class="col-sm-6 d-flex align-items-center justify-content-between">
                                                <span>Weekends:</span>
                                                <hr class="flex-grow-1 my-0 mx-3">
                                                <span>$100</span>
                                            </div>
                                            <div class="col-sm-6 d-flex align-items-center justify-content-between">
                                                <span>Additional Guest:</span>
                                                <hr class="flex-grow-1 my-0 mx-3">
                                                <span>$100</span>
                                            </div>
                                            <div class="col-sm-6 d-flex align-items-center justify-content-between">
                                                <span>Security Deposit:</span>
                                                <hr class="flex-grow-1 my-0 mx-3">
                                                <span>$100</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-3" class="tab-pane fade show p-0">
                                        <div class="row g-4 mb-4">
                                            <div class="col-md-4 d-flex align-items-center">
                                                <div class="flex-shrink-0 border rounded p-1 me-3" style="width: 45px; height: 45px;">
                                                    <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                                        <i class="fa fa-map-marker-alt text-primary"></i>
                                                    </div>
                                                </div>
                                                <span>123 Street, New York, USA</span>
                                            </div>
                                            <div class="col-md-4 d-flex align-items-center">
                                                <div class="flex-shrink-0 border rounded p-1 me-3" style="width: 45px; height: 45px;">
                                                    <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                                        <i class="fa fa-phone-alt text-primary"></i>
                                                    </div>
                                                </div>
                                                <span>+012 345 67890</span>
                                            </div>
                                            <div class="col-md-4 d-flex align-items-center">
                                                <div class="flex-shrink-0 border rounded p-1 me-3" style="width: 45px; height: 45px;">
                                                    <div class="w-100 h-100 border rounded d-flex align-items-center justify-content-center">
                                                        <i class="fa fa-envelope text-primary"></i>
                                                    </div>
                                                </div>
                                                <span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="761f18101936130e171b061a135815191b">[email&#160;protected]</a></span>
                                            </div>
                                        </div>
                                        <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd" frameborder="0" style="min-height: 350px; border:0;" allowfullscreen aria-hidden="false" tabindex="0"></iframe>
                                    </div>
                                    <div id="tab-4" class="tab-pane fade show p-0">
                                        <div class="mb-4">
                                            <h4 class="mb-4">3 Reviews</h4>
                                            <div class="d-flex mb-4">
                                                <img src="img/user.jpg" class="img-fluid rounded" style="width: 45px; height: 45px;">
                                                <div class="ps-3">
                                                    <h6>John Doe <small class="text-body fw-normal fst-italic">01 Jan 2045</small></h6>
                                                    <div class="mb-2">
                                                        <small class="fa fa-star text-primary"></small>
                                                        <small class="fa fa-star text-primary"></small>
                                                        <small class="fa fa-star text-primary"></small>
                                                        <small class="fa fa-star text-primary"></small>
                                                        <small class="fa fa-star text-primary"></small>
                                                    </div>
                                                    <p class="mb-2">Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                                        accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>
                                                    <a href><i class="fa fa-reply me-2"></i> Reply</a>
                                                </div>
                                            </div>
                                            <div class="d-flex mb-4">
                                                <img src="img/user.jpg" class="img-fluid rounded" style="width: 45px; height: 45px;">
                                                <div class="ps-3">
                                                    <h6>John Doe <small class="text-body fw-normal fst-italic">01 Jan 2045</small></h6>
                                                    <div class="mb-2">
                                                        <small class="fa fa-star text-primary"></small>
                                                        <small class="fa fa-star text-primary"></small>
                                                        <small class="fa fa-star text-primary"></small>
                                                        <small class="fa fa-star text-primary"></small>
                                                        <small class="fa fa-star text-primary"></small>
                                                    </div>
                                                    <p class="mb-2">Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                                        accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>
                                                    <a href><i class="fa fa-reply me-2"></i> Reply</a>
                                                </div>
                                            </div>
                                            <div class="d-flex ms-5 mb-4">
                                                <img src="img/user.jpg" class="img-fluid rounded" style="width: 45px; height: 45px;">
                                                <div class="ps-3">
                                                    <h6>John Doe <small class="text-body fw-normal fst-italic">01 Jan 2045</small></h6>
                                                    <div class="mb-2">
                                                        <small class="fa fa-star text-primary"></small>
                                                        <small class="fa fa-star text-primary"></small>
                                                        <small class="fa fa-star text-primary"></small>
                                                        <small class="fa fa-star text-primary"></small>
                                                        <small class="fa fa-star text-primary"></small>
                                                    </div>
                                                    <p class="mb-2">Diam amet duo labore stet elitr invidunt ea clita ipsum voluptua, tempor labore
                                                        accusam ipsum et no at. Kasd diam tempor rebum magna dolores sed eirmod</p>
                                                    <a href><i class="fa fa-reply me-2"></i> Reply</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bg-light p-4 p-md-5">
                                            <h4 class="mb-4">Leave A Review</h4>
                                            <form>
                                                <div class="row g-3">
                                                    <div class="col-12 d-flex align-items-center">
                                                        <h6 class="mb-0 me-2">Rate Me:</h6>
                                                        <div id="halfstarsReview" class="fs-3 me-2"></div>
                                                        <input type="text" value readonly id="halfstarsInput" class="border-0 bg-transparent" style="width: 30px;">
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <input type="text" class="form-control bg-white border-0" placeholder="Your Name" style="height: 55px;">
                                                    </div>
                                                    <div class="col-12 col-sm-6">
                                                        <input type="email" class="form-control bg-white border-0" placeholder="Your Email" style="height: 55px;">
                                                    </div>
                                                    <div class="col-12">
                                                        <input type="text" class="form-control bg-white border-0" placeholder="Website" style="height: 55px;">
                                                    </div>
                                                    <div class="col-12">
                                                        <textarea class="form-control bg-white border-0" rows="5" placeholder="Comment"></textarea>
                                                    </div>
                                                    <div class="col-12">
                                                        <button class="btn btn-primary w-100 py-3" type="submit">Leave Your Review</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="col-lg-4">

                            <div class="bg-light mb-5 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="border-bottom text-center text-dark p-3 pt-4 mb-3">
                                    <span class="align-top fs-4 lh-base">$</span>
                                    <span class="align-middle fs-1 lh-sm fw-bold"><?php echo $se_room['gia'] ?>.00</span>
                                    <span class="align-bottom fs-6 lh-lg">/ Night</span>
                                </div>
                                <form method="post" action="./booking.php?id=<?php echo $se_room['id_phong'] ?>" class="row g-3 p-4 pt-2">
                                    <div class="col-12">
                                        <div class="date" id="date3" data-target-input="nearest">
                                            <input name="checkin" type="text" class="form-control datetimepicker-input" placeholder="Check in" data-target="#date3" data-toggle="datetimepicker" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="date" id="date4" data-target-input="nearest">
                                            <input name="checkout" type="text" class="form-control datetimepicker-input" placeholder="Check out" data-target="#date4" data-toggle="datetimepicker" />
                                        </div>
                                    </div>
                                    <!-- <div class="col-12">
                                        <select name="nguoi_lon" class="form-select">
                                            <option selected>Người lớn</option>
                                            <option value="1">Adult 1</option>
                                            <option value="2">Adult 2</option>
                                            <option value="3">Adult 3</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <select name="tre_con" class="form-select">
                                            <option selected>Trẻ nhỏ</option>
                                            <option value="1">Không</option>
                                        </select>
                                    </div>
                                    <div class="col-12">
                                        <select name="so_ngay_thue" class="form-select">
                                            <option selected>Night</option>
                                            <option value="1">all day</option>
                                        </select>
                                    </div> -->
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary py-3 w-100">Book Now</button>
                                    </div>
                                </form>
                            </div>


                            <div class="bg-light p-4 mb-5 wow fadeInUp" data-wow-delay="0.1s">
                                <h4 class="section-title text-start mb-4">Category</h4>
                                <a class="d-block position-relative mb-3" href>
                                    <img class="img-fluid" src="img/cat-1.jpg" alt>
                                    <div class="d-flex position-absolute top-0 start-0 w-100 h-100 p-3" style="background: rgba(0,0,0,.3);">
                                        <h5 class="text-white m-0 mt-auto">luxury Room</h5>
                                    </div>
                                </a>
                                <a class="d-block position-relative mb-3" href>
                                    <img class="img-fluid" src="img/cat-2.jpg" alt>
                                    <div class="d-flex position-absolute top-0 start-0 w-100 h-100 p-3" style="background: rgba(0,0,0,.3);">
                                        <h5 class="text-white m-0 mt-auto">Couple Room</h5>
                                    </div>
                                </a>
                                <a class="d-block position-relative" href>
                                    <img class="img-fluid" src="img/cat-3.jpg" alt>
                                    <div class="d-flex position-absolute top-0 start-0 w-100 h-100 p-3" style="background: rgba(0,0,0,.3);">
                                        <h5 class="text-white m-0 mt-auto">Single Room</h5>
                                    </div>
                                </a>
                            </div>


                            <div class="border p-1 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="border p-4">
                                    <h4 class="section-title text-start mb-4">Help & Support</h4>
                                    <p>Lorem sed erat elitr magna magna labore duo elitr ipsum duo. Et sed duo rebum lorem sed stet sed</p>
                                    <div class="bg-primary text-center p-3">
                                        <h4 class="text-white m-0">+012 345 67890</h4>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        <?php
        }
        ?>
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title text-center text-primary text-uppercase">Related Rooms</h6>
                    <h1 class="mb-5">Explore More <span class="text-primary text-uppercase">Rooms</span></h1>
                </div>
                <div class="row g-4">
                    <?php
                    // include('control.php');
                    // $get = new data();
                    $select_room = $get->select_room_limit3();
                    foreach ($select_room as $se_room) {
                    ?>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="room-item shadow rounded overflow-hidden">
                                <div class="position-relative">
                                    <img class="img-fluid" src="../resources/img/room/<?php echo $se_room['anh1'] ?>" alt="">
                                    <small class="position-absolute start-0 top-100 translate-middle-y bg-primary text-white rounded py-1 px-3 ms-4">$100/Night</small>
                                </div>
                                <div class="p-4 mt-2">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="mb-0"><?php echo $se_room['ten_phong'] ?></h5>
                                        <div class="ps-2">
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <small class="border-end me-3 pe-3"><i class="fa fa-bed text-primary me-2"></i><?php echo $se_room['giuong'] ?> Bed</small>
                                        <small class="border-end me-3 pe-3"><i class="fa fa-bath text-primary me-2"></i><?php echo $se_room['bon_tam'] ?> Bath</small>

                                        <?php if ($se_room['wifi'] == '1') { ?>
                                            <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                        <?php } else { ?>
                                            <small style="text-decoration: line-through;"><i style="color: #666565 !important;" class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                                        <?php } ?>
                                    </div>
                                    <p class="text-body mb-3"><?php echo $se_room['mo_ta'] ?></p>
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-sm btn-primary rounded py-2 px-4" href="./room-details.php?id_phong=<?php echo $se_room['id_phong'] ?>">View Detail</a>
                                        <a class="btn btn-sm btn-dark rounded py-2 px-4" href="">Book Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <a href="./room.php" class="btn btn-primary py-3 px-5">Explore All Rooms</a>
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

    <!-- JavaScript Libraries -->
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