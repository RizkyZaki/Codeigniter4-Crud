<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Page</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam:wght@100;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
            <li class="nav-item">
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
                                <span
                                    class="ml-2 small font-weight-medium d-none d-lg-inline"><?= session()->get('username');?></span>
                            </a>
                        </li>
                    </ul>
                </nav><!-- end dashboard-topbar -->
                <div class="row mx-2">
                    <div class="col-lg-12">
                        <div class="block-card mb-4">
                            <div class="block-card-header">
                                <h2 class="widget-title">Add Category</h2>
                                <div class="stroke-shape mb-3"></div>
                            </div><!-- end block-card-header -->
                            <div class="block-card-body">
                                <form method="post" action="<?= base_url(); ?>/Category/addCategory" class="form-box row">
                                <?= csrf_field(); ?>
                                    <div class="col-lg-12">
                                        <div class="input-box">
                                            <label class="label-text">Category Name</label>
                                            <div class="form-group">
                                                <span class="la la-tags form-icon"></span>
                                                <input class="form-control <?= ($validation->hasError('nama_kat')) ? 'is-invalid' : ''; ?>" type="text" name="nama_kat" id="nama_kat" placeholder="Category Name">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('nama_kat'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-box pt-1 mt-4">
                                            <button type="submit" class="theme-btn gradient-btn border-0">Add Category<i
                                            class="la la-arrow-right ml-2"></i></button>
                                        </div>
                                    </div><!-- end col-lg-12 -->
                                </form>
                            </div><!-- end block-card-body -->
                        </div><!-- end block-card -->
                    </div>
                </div>
            </div>
        </div>   
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
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>