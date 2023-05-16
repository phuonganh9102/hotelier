<!DOCTYPE html>
<html lang="en">

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

        <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-2.jpg);">
            <div class="container-fluid page-header-inner py-5">
                <div class="container text-center pb-5">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Blog List</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Blog List</li>
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
                <div class="row g-5">
                    <div class="col-lg-8">
                    <?php
                    include('control.php');
                    $get = new data();
                    $select_about = $get->select_blog();
                    foreach ($select_about as $se_about) {
                    ?>
                        <div class="row blog-item m-0 mb-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="col-md-5 col-lg-12 col-xl-5 p-0" style="min-height: 300px;">
                                <div class="position-relative overflow-hidden h-100">
                                    <img class="position-absolute w-100 h-100" src="/hotelier/resources/img/blog/<?php echo $se_about['anh1'] ?>" alt style="object-fit: cover;">
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-12 col-xl-7 h-100 px-0">
                                <div class="p-4">
                                    <a href class="bg-primary text-white rounded py-1 px-3">Web Design</a>
                                    <div class="d-flex mb-3 my-4">
                                        <small class="border-end me-3 pe-3"><i class="fa fa-user-alt text-primary me-2"></i><?php echo $se_about['tac_gia'] ?></small>
                                        <small><i class="fa fa-calendar-alt text-primary me-2"></i>
                                        <?php
                                            $d=strtotime($se_about['thoi_gian']);
                                            echo date("d M Y", $d);
                                        ?>
                                        </small>
                                    </div>
                                    <h5 class="lh-base mb-0"><?php echo $se_about['ten_blog'] ?></h5>
                                </div>
                                <div class="d-flex align-items-center justify-content-between border-top mt-auto p-4">
                                    <a class="btn btn-sm btn-primary rounded py-2 px-3" href="blog-details.php?id=<?php echo $se_about['id_blog'] ?>">Read More</a>
                                    <div class="me-n1">
                                        <span class="me-1">Share:</span>
                                        <a class="mx-1" href><i class="fab fa-twitter"></i></a>
                                        <a class="mx-1" href><i class="fab fa-facebook-f"></i></a>
                                        <a class="mx-1" href><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                        <!-- page switch button Start -->
                        <div class="row wow fadeInUp" data-wow-delay="0.1s">
                            <div class="col-12">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-center m-0">
                                        <li class="page-item disabled">
                                            <a class="page-link rounded-0" href="#" aria-label="Previous">
                                                <span aria-hidden="true"><i class="bi bi-arrow-left"></i></span>
                                            </a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link rounded-0" href="#" aria-label="Next">
                                                <span aria-hidden="true"><i class="bi bi-arrow-right"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <!-- page switch button End -->
                    </div>


                    <div class="col-lg-4">
                        <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="input-group">
                                <input type="text" class="form-control p-3" placeholder="Keyword">
                                <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                            </div>
                        </div>


                        <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s">
                            <h4 class="section-title text-start mb-4">Categories</h4>
                            <div class="category-list d-flex flex-column">
                                <a class="text-body d-flex mb-3" href="#">
                                    <span>Web Design</span>
                                    <span class="badge text-body fw-normal ms-auto pe-0">(50)</span>
                                </a>
                                <a class="text-body d-flex mb-3" href="#">
                                    <span>Web Development</span>
                                    <span class="badge text-body fw-normal ms-auto pe-0">(50)</span>
                                </a>
                                <a class="text-body d-flex mb-3" href="#">
                                    <span>Apps Development</span>
                                    <span class="badge text-body fw-normal ms-auto pe-0">(50)</span>
                                </a>
                                <a class="text-body d-flex mb-3" href="#">
                                    <span>Digital Marketing</span>
                                    <span class="badge text-body fw-normal ms-auto pe-0">(50)</span>
                                </a>
                                <a class="text-body d-flex mb-3" href="#">
                                    <span>Content Writing</span>
                                    <span class="badge text-body fw-normal ms-auto pe-0">(50)</span>
                                </a>
                                <a class="text-body d-flex mb-0" href="#">
                                    <span>SEO Services</span>
                                    <span class="badge text-body fw-normal ms-auto pe-0">(50)</span>
                                </a>
                            </div>
                        </div>


                        <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s">
                            <h4 class="section-title text-start mb-4">Recent Post</h4>
                            <div class="d-flex border-bottom mb-3 pb-3">
                                <img class="img-fluid" src="img/blog-1.jpg" style="width: 80px; height: 80px; object-fit: cover;" alt>
                                <div class="d-flex flex-column justify-content-center ps-3">
                                    <a href class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet consec adipis elit</a>
                                    <div class="d-flex mx-n2">
                                        <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John Doe</small>
                                        <small class="mx-2"><i class="fa fa-calendar-alt text-primary me-2"></i>01 Jan 45</small>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex border-bottom mb-3 pb-3">
                                <img class="img-fluid" src="img/blog-2.jpg" style="width: 80px; height: 80px; object-fit: cover;" alt>
                                <div class="d-flex flex-column justify-content-center ps-3">
                                    <a href class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet consec adipis elit</a>
                                    <div class="d-flex mx-n2">
                                        <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John Doe</small>
                                        <small class="mx-2"><i class="fa fa-calendar-alt text-primary me-2"></i>01 Jan 45</small>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img class="img-fluid" src="img/blog-3.jpg" style="width: 80px; height: 80px; object-fit: cover;" alt>
                                <div class="d-flex flex-column justify-content-center ps-3">
                                    <a href class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet consec adipis elit</a>
                                    <div class="d-flex mx-n2">
                                        <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John Doe</small>
                                        <small class="mx-2"><i class="fa fa-calendar-alt text-primary me-2"></i>01 Jan 45</small>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s">
                            <img src="img/blog-1.jpg" alt class="img-fluid">
                        </div>


                        <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s">
                            <h4 class="section-title text-start mb-4">More Post</h4>
                            <ul class="nav nav-pills d-flex justify-content-between border-bottom mb-3">
                                <li class="nav-item">
                                    <a class="d-flex align-items-center pb-3 active" data-bs-toggle="pill" href="#tab-1">
                                        <h6 class="mb-0">Featured</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="d-flex align-items-center pb-3" data-bs-toggle="pill" href="#tab-2">
                                        <h6 class="mb-0">Popular</h6>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="d-flex align-items-center pb-3" data-bs-toggle="pill" href="#tab-3">
                                        <h6 class="mb-0">Latest</h6>
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane fade show p-0 active">
                                    <div class="d-flex border-bottom mb-3 pb-3">
                                        <img class="img-fluid" src="img/blog-1.jpg" style="width: 80px; height: 80px; object-fit: cover;" alt>
                                        <div class="d-flex flex-column justify-content-center ps-3">
                                            <a href class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="d-flex mx-n2">
                                                <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John Doe</small>
                                                <small class="mx-2"><i class="fa fa-calendar-alt text-primary me-2"></i>01 Jan 45</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom mb-3 pb-3">
                                        <img class="img-fluid" src="img/blog-2.jpg" style="width: 80px; height: 80px; object-fit: cover;" alt>
                                        <div class="d-flex flex-column justify-content-center ps-3">
                                            <a href class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="d-flex mx-n2">
                                                <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John Doe</small>
                                                <small class="mx-2"><i class="fa fa-calendar-alt text-primary me-2"></i>01 Jan 45</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <img class="img-fluid" src="img/blog-3.jpg" style="width: 80px; height: 80px; object-fit: cover;" alt>
                                        <div class="d-flex flex-column justify-content-center ps-3">
                                            <a href class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="d-flex mx-n2">
                                                <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John Doe</small>
                                                <small class="mx-2"><i class="fa fa-calendar-alt text-primary me-2"></i>01 Jan 45</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-2" class="tab-pane fade show p-0">
                                    <div class="d-flex border-bottom mb-3 pb-3">
                                        <img class="img-fluid" src="img/blog-1.jpg" style="width: 80px; height: 80px; object-fit: cover;" alt>
                                        <div class="d-flex flex-column justify-content-center ps-3">
                                            <a href class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="d-flex mx-n2">
                                                <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John Doe</small>
                                                <small class="mx-2"><i class="fa fa-calendar-alt text-primary me-2"></i>01 Jan 45</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom mb-3 pb-3">
                                        <img class="img-fluid" src="img/blog-2.jpg" style="width: 80px; height: 80px; object-fit: cover;" alt>
                                        <div class="d-flex flex-column justify-content-center ps-3">
                                            <a href class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="d-flex mx-n2">
                                                <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John Doe</small>
                                                <small class="mx-2"><i class="fa fa-calendar-alt text-primary me-2"></i>01 Jan 45</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <img class="img-fluid" src="img/blog-3.jpg" style="width: 80px; height: 80px; object-fit: cover;" alt>
                                        <div class="d-flex flex-column justify-content-center ps-3">
                                            <a href class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="d-flex mx-n2">
                                                <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John Doe</small>
                                                <small class="mx-2"><i class="fa fa-calendar-alt text-primary me-2"></i>01 Jan 45</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-3" class="tab-pane fade show p-0">
                                    <div class="d-flex border-bottom mb-3 pb-3">
                                        <img class="img-fluid" src="img/blog-1.jpg" style="width: 80px; height: 80px; object-fit: cover;" alt>
                                        <div class="d-flex flex-column justify-content-center ps-3">
                                            <a href class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="d-flex mx-n2">
                                                <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John Doe</small>
                                                <small class="mx-2"><i class="fa fa-calendar-alt text-primary me-2"></i>01 Jan 45</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex border-bottom mb-3 pb-3">
                                        <img class="img-fluid" src="img/blog-2.jpg" style="width: 80px; height: 80px; object-fit: cover;" alt>
                                        <div class="d-flex flex-column justify-content-center ps-3">
                                            <a href class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="d-flex mx-n2">
                                                <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John Doe</small>
                                                <small class="mx-2"><i class="fa fa-calendar-alt text-primary me-2"></i>01 Jan 45</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <img class="img-fluid" src="img/blog-3.jpg" style="width: 80px; height: 80px; object-fit: cover;" alt>
                                        <div class="d-flex flex-column justify-content-center ps-3">
                                            <a href class="h6 lh-base fw-medium mb-2">Lorem ipsum dolor sit amet consec adipis elit</a>
                                            <div class="d-flex mx-n2">
                                                <small class="mx-2"><i class="fa fa-user-alt text-primary me-2"></i>John Doe</small>
                                                <small class="mx-2"><i class="fa fa-calendar-alt text-primary me-2"></i>01 Jan 45</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="mb-5 wow fadeInUp" data-wow-delay="0.1s">
                            <h4 class="section-title text-start mb-4">Tags</h4>
                            <div class="d-flex flex-wrap m-n1">
                                <a href class="btn btn-tag border m-1">Design</a>
                                <a href class="btn btn-tag border m-1">Development</a>
                                <a href class="btn btn-tag border m-1">Marketing</a>
                                <a href class="btn btn-tag border m-1">SEO</a>
                                <a href class="btn btn-tag border m-1">Writing</a>
                                <a href class="btn btn-tag border m-1">Consulting</a>
                                <a href class="btn btn-tag border m-1">Design</a>
                                <a href class="btn btn-tag border m-1">Development</a>
                                <a href class="btn btn-tag border m-1">Marketing</a>
                                <a href class="btn btn-tag border m-1">SEO</a>
                                <a href class="btn btn-tag border m-1">Writing</a>
                                <a href class="btn btn-tag border m-1">Consulting</a>
                            </div>
                        </div>


                        <div class="border p-1 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="border p-4">
                                <h4 class="section-title text-start mb-4">Plain Text</h4>
                                <p>Vero sea et accusam justo dolor accusam lorem consetetur, dolores sit amet sit dolor clita kasd justo, diam accusam no sea magna amet sit et diam dolor ipsum amet diam</p>
                                <a href class="btn btn-primary py-2 px-4">Read More</a>
                            </div>
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