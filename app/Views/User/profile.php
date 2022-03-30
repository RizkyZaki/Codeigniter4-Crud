<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Easy-News | My Profile</title>
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
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url();?>/dashboard">
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
            <li class="sidebar-heading">Add News</li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/create">
                    <i class="la la-folder-plus font-size-18 mr-1"></i>
                    <span>Create News</span>
                </a>
            </li>
            <li>
            <li>
                <hr class="sidebar-divider border-top-color">
            </li>
            <li class="sidebar-heading">Account</li>
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url(); ?>/profile">
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
                                    class="ml-2 small font-weight-medium d-none d-lg-inline"><?= session()->get('username');?>
                                </span>
                            </a>
                        </li>
                    </ul>
                </nav><!-- end dashboard-topbar -->
                <div class="row mx-2">
                    <div class="col-lg-6">
                        <div class="block-card dashboard-card mb-4">
                            <div class="block-card-header">
                                <h2 class="widget-title pb-0">Profile Details</h2>
                            </div>
                            <div class="block-card-body">
                                <form method="post" action="<?= base_url(); ?>/edit" class="form-box row pt-4">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="id" value="<?= session()->get('id');?>">
                                    <div class="col-lg-12">
                                        <div class="input-box">
                                            <label class="label-text">Username</label>
                                            <div class="form-group">
                                                <span class="la la-user-tag form-icon"></span>
                                                <input class="form-control" type="text" name="username" id="username"
                                                    value="<?= session()->get('username');?>" disabled>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-12 -->
                                    <div class="col-lg-12">
                                        <div class="input-box">
                                            <label class="label-text">Your Email</label>
                                            <div class="form-group">
                                                <span class="la la-envelope-o form-icon"></span>
                                                <input class="form-control" type="email" name="email" value="<?= session()->get('email');?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-box">
                                            <label class="label-text">Name</label>
                                            <div class="form-group">
                                                <span class="la la-user form-icon"></span>
                                                <input class="form-control" type="text" name="name" id="name"
                                                    value="<?= session()->get('name');?>">
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-12 -->
                                    <div class="col-lg-12">
                                        <div class="input-box">
                                            <label class="label-text">Notes</label>
                                            <div class="form-group">
                                                <span class="la la-pencil form-icon"></span>
                                                <textarea class="message-control form-control"
                                                    name="message">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, quos?
                                                </textarea>
                                            </div>
                                        </div>
                                    </div><!-- end col-lg-12 -->
                                    <div class="btn-box pt-1">
                                        <button type="submit" class="theme-btn gradient-btn border-0">Save Changes<i
                                            class="la la-arrow-right ml-2"></i></button>
                                    </div>
                                </form>
                            </div>    
                        </div><!-- end block-card-body -->
                    </div><!-- end block-card -->
                    <div class="col-lg-6">
                        <div class="block-card dashboard-card mb-4">
                            <div class="block-card-header">
                                <h2 class="widget-title pb-0">Delete account</h2>
                                <hr>
                                <p>If you want to delete the account, the account will be permanently deleted</p>
                            </div>
                            <div class="block-card-body">
                                <a href="<?= base_url('User/delete/' .session()->get('id')) ?>" class="btn-danger btn border-0 text-white">Delete<i class="las la-user-minus ml-2"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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