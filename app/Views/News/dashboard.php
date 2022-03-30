<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Easy-News | Dashboard Page</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam:wght@100;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/line-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/animated-headline.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/chosen.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- start per-loader -->
    <div class="loader-container">
        <div class="loader-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- end per-loader -->

    <!-- ================================
    START DASHBOARD AREA
================================= -->
<section class="dashboard-wrap d-flex">
    <ul class="navbar-nav dashboard-sidebar">
        <li>
            <span id="sidebar-close">
                <i class="la la-times"></i>
            </span>
        </li>
        <li>
            <div class="sidebar-brand">
                <h2 class="sec__title font-size-24 mb-0 text-white">Welcome</h2>
            </div>
        </li>
        <li class="sidebar-heading pt-3">Main</li>
        <li class="nav-item active">
            <a class="nav-link" href="<?= base_url(); ?>/dashboard">
                <i class="la la-dashboard font-size-18 mr-1"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>/list">
                <i class="la la-list font-size-18 mr-1"></i>
                <span>List News</span>
            </a>
        </li>
        <li><hr class="sidebar-divider border-top-color"></li>
        <li class="sidebar-heading">News</li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>/create">
                <i class="la la-folder-plus font-size-18 mr-1"></i>
                <span>Create News</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>/list-category">
                <i class="la la-tags font-size-18 mr-1"></i>
                <span>Category</span>
            </a>
        </li>
        <li>
            <hr class="sidebar-divider border-top-color">
        </li>
        <li class="sidebar-heading">Account</li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url();?>/profile">
                <i class="la la-user font-size-18 mr-1"></i>
                <span>My Profile</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url(); ?>/logout">
                <i class="la la-power-off font-size-18 mr-1"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>
    <div class="dashboard-body d-flex flex-column">
        <div class="dashboard-inner-body flex-grow-1">
            <nav class="navbar navbar-expand bg-navbar dashboard-topbar mb-4">
                <button id="sidebarToggleTop" class="btn rounded-circle mr-3">
                    <i class="la la-bars"></i>
                </button>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown border-left pl-3 ml-4">
                        <a class="nav-link dropdown-toggle after-none" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="user-thumb user-thumb-sm position-relative">
                                <img src="images/avatar-default.jpg" alt="author-image">
                                <div class="status-indicator bg-success"></div>
                            </div>
                            <span class="ml-2 small font-weight-medium d-none d-lg-inline"><?= session()->get('username');?></span>
                        </a>
                    </li>
                </ul>
            </nav><!-- end dashboard-topbar -->
            <div class="container-fluid dashboard-inner-body-container">
                <div class="breadcrumb-content d-sm-flex align-items-center justify-content-between mb-4">
                    <div class="section-heading">
                        <h2 class="sec__title font-size-24 mb-0">HELLO <?= session()->get('username');?>!</h2>
                    </div>
                </div><!-- end breadcrumb-content -->
                <div class="row">
                <div class="col-lg-12 mb-4">
                <?php if (!empty(session()->getFlashdata('login_berhasil'))) : ?>
                    <div class="alert alert-success alert-dismissible fade show p-3" role="alert">
                        <?= session()->getFlashdata('login_berhasil'); ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif ?>
                </div><!-- end col-lg-12 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card-item dashboard-stat">
                        <div class="card-content">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h2 class="card-title font-size-40"><?=$news?></h2>
                                    <p class="card-sub font-size-18 line-height-24">Total News</p>
                                </div>
                                <div class="col-auto font-size-60">
                                    <i class="la la-newspaper text-primary"></i>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card-item dashboard-stat">
                        <div class="card-content">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h2 class="card-title font-size-40"><?=$user?></h2>
                                    <p class="card-sub font-size-18 line-height-24">User</p>
                                </div>
                                <div class="col-auto font-size-60">
                                    <i class="la la-users text-success"></i>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                </div><!-- end col-lg-3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="card-item dashboard-stat">
                        <div class="card-content">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h2 class="card-title font-size-40"><?=$cat?></h2>
                                    <p class="card-sub font-size-18 line-height-24">Total Category</p>
                                </div>
                                <div class="col-auto font-size-60">
                                    <i class="la la-tags text-danger"></i>
                                </div>
                            </div><!-- end row -->
                        </div><!-- end card-content -->
                    </div><!-- end card-item -->
                </div><!-- end col-lg-3 -->
            </div>
        </div>
        <!-- <div class="dashboard-footer bg-white fixed-bottom">
            <div class="container-fluid">
                <div class="copy-right d-flex align-items-center justify-content-between">
                    <p class="copy__desc">
                        &copy; Copyright Listhub <script> document.write(new Date().getFullYear()); </script>. Made with
                        <span class="la la-heart-o"></span> by <a href="https://www.youtube.com/channel/UC9Hqgb2HRMFnDS43EQU-u_Q">Zaki</a>
                    </p>
                </div>
            </div>
        </div> -->
    </div>   
</section>
<!-- ================================
    START DASHBOARD AREA
================================= -->

                <!-- Template JS Files -->
                <script src="js/jquery-3.4.1.min.js"></script>
                <script src="js/jquery-ui.js"></script>
                <script src="js/popper.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/owl.carousel.min.js"></script>
                <script src="js/jquery.fancybox.min.js"></script>
                <script src="js/animated-headline.js"></script>
                <script src="js/chosen.min.js"></script>
                <script src="js/moment.min.js"></script>
                <script src="js/datedropper.min.js"></script>
                <script src="js/waypoints.min.js"></script>
                <script src="js/jquery.counterup.min.js"></script>
                <script src="js/chart.min.js"></script>
                <script src="js/line-chart.js"></script>
                <script src="js/main.js"></script>
</body>

</html>