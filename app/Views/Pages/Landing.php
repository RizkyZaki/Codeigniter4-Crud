<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listhub - Directory & Listing HTML5 Template</title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">

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
            START HEADER AREA
================================= -->
<header class="header-area">
    <div class="header-top-bar bg-dark-opacity py-2 padding-right-30px padding-left-30px">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 d-flex align-items-center header-top-info font-size-14">
                    <div class="user-chosen-select-container mr-3">
                        <select class="user-chosen-select">
                            <option value="1" selected>English</option>
                            <option value="2">Espanol</option>
                            <option value="3">Deutsch</option>
                            <option value="4">Türkçe</option>
                            <option value="5">Polski</option>
                            <option value="6">Português</option>
                            <option value="7">Italiano</option>
                            <option value="8">Dansk</option>
                            <option value="9">French</option>
                            <option value="10">German</option>
                        </select>
                    </div>
                    <p class="login-and-signup-wrap">
                        <a href="#" data-toggle="modal" data-target="#loginModal">
                            <span class="mr-1 la la-sign-in"></span>Login
                        </a>
                        <span class="or-text px-2">or</span>
                        <a href="#" data-toggle="modal" data-target="#signUpModal">
                            <span class="mr-1 la la-user-plus"></span>Sign Up
                        </a>
                    </p>
                </div><!-- end col-lg-6 -->
                <div class="col-lg-6 d-flex align-items-center justify-content-end header-top-info">
                    <span class="mr-2 text-white font-weight-semi-bold font-size-14">Follow Us</span>
                    <ul class="social-profile social-profile-colored">
                        <li><a href="#" class="facebook-bg"><i class="lab la-facebook-f"></i></a></li>
                        <li><a href="#" class="twitter-bg"><i class="lab la-twitter"></i></a></li>
                        <li><a href="#" class="instagram-bg"><i class="lab la-instagram"></i></a></li>
                        <li><a href="#" class="dribbble-bg"><i class="la la-dribbble"></i></a></li>
                    </ul>
                </div>
            </div><!-- end row -->
        </div><!-- end container-fluid -->
    </div><!-- end header-top-bar -->
</header>
<!-- ================================
        END HEADER AREA
================================= -->

<!-- ================================
    START HERO-WRAPPER AREA
================================= -->
<section class="hero-wrapper overflow-hidden">
    <div class="overlay"></div><!-- end overlay -->
    <div id="fullscreen-slide-container">
        <ul class="slides-container">
            <li><img class="lazy" src="images/img-loading.png" data-src="images/hero-bg.jpg" alt=""></li>
            <li><img class="lazy" src="images/img-loading.png" data-src="images/hero-bg2.jpg" alt=""></li>
            <li><img class="lazy" src="images/img-loading.png" data-src="images/hero-bg3.jpg" alt=""></li>
            <li><img class="lazy" src="images/img-loading.png" data-src="images/hero-bg4.jpg" alt=""></li>
            <li><img class="lazy" src="images/img-loading.png" data-src="images/hero-bg5.jpg" alt=""></li>
        </ul>
    </div><!-- End fullscreen-slide-container -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="hero-heading text-center">
                    <div class="section-heading">
                        <h2 class="sec__title cd-headline slide">
                            What news would you like to read here,
                            <span class="cd-words-wrapper py-0">
                            <b class="is-visible">Politics?</b>
                            <b>Health?</b>
                            <b>Game?</b>
                            <b>World?</b>
                            <b>Sports?</b>
                            <b>music?</b>
                        </span>
                        </h2>
                        <p class="sec__desc">
                            Find the news category below
                        </p>
                    </div>
                </div><!-- end hero-heading -->
                <div class="highlighted-categories">
                    <div class="d-flex align-items-end justify-content-center highlight-search-desc py-5 text-center">
                        <img src="images/arrow-shape.png" alt="" class="mr-5 cat-arrow-icon">
                        <h5 class="highlighted__title">There are various news categories here <br> something hot & happening!</h5>
                    </div>
                    <div class="highlight-lists d-flex justify-content-center mt-4">
                        <div class="hero-category-item">
                            <a href="#" class="d-block hero-cat-link hover-y">
                                <span class="icon-element bg-1 mx-auto"><i class="la la-medkit"></i></span>
                                Health
                            </a>
                        </div>
                        <div class="hero-category-item">
                            <a href="#" class="d-block hero-cat-link hover-y">
                                <span class="icon-element bg-2 mx-auto"><i class="la la-balance-scale"></i></span>
                                Politics
                            </a>
                        </div>
                        <div class="hero-category-item">
                            <a href="#" class="d-block hero-cat-link hover-y">
                                <span class="icon-element bg-3 mx-auto"><i class="la la-globe"></i></span>
                                World
                            </a>
                        </div>
                        <div class="hero-category-item">
                            <a href="#" class="d-block hero-cat-link hover-y">
                                <span class="icon-element bg-4 mx-auto"><i class="la la-music"></i></span>
                                Music
                            </a>
                        </div>
                        <div class="hero-category-item">
                            <a href="#" class="d-block hero-cat-link hover-y">
                                <span class="icon-element bg-5 mx-auto"><i class="la la-basketball-ball"></i></span>
                                Sports
                            </a>
                        </div>
                        <div class="hero-category-item">
                            <a href="#" class="d-block hero-cat-link hover-y">
                                <span class="icon-element bg-6 mx-auto"><i class="la la-gamepad"></i></span>
                                Games
                            </a>
                        </div>
                    </div>
                </div><!-- end highlighted-categories -->
            </div><!-- end col-lg-12 -->
        </div><!-- end row -->
    </div><!-- end container -->
    <div class="svg-bg">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path fill="#F5F7FC" class="elementor-shape-fill" d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z"></path>
        </svg>
    </div>
</section><!-- end hero-wrapper -->



<!-- Modal -->
<div class="modal fade modal-container login-form" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center mh-bg">
                <h5 class="modal-title" id="loginModalTitle">Hey, Welcome back!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times-circle"></span>
                </button>
            </div>
            <div class="modal-body">
            
                <form method="post" action="<?= base_url(); ?>/Login/process" class="form-box">
                <?= csrf_field(); ?>
                    <div class="input-box">
                        <label class="label-text">Username</label>
                        <div class="form-group">
                            <span class="la la-user form-icon"></span>
                            <input class="form-control form-control-styled" type="text" name="username" id="username" placeholder="Username">
                        </div>
                    </div>
                    <div class="input-box">
                        <label class="label-text">Password</label>
                        <div class="form-group">
                            <span class="la la-lock form-icon"></span>
                            <input class="form-control form-control-styled" type="password" name="password" id="password" placeholder="Enter password">
                        </div>
                    </div>
                    <div class="btn-box">
                        <button type="submit" class="theme-btn gradient-btn w-100">
                            <i class="la la-sign-in mr-1"></i> Login to Account
                        </button>
                        <p class="sub-text-box text-right pt-1 font-weight-medium font-size-14">
                            New to Listhub? <a class="text-color-2 signup-btn" href="javascript:void(0)">Create account</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade modal-container signup-form" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="signUpModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center mh-bg-2">
                <h5 class="modal-title" id="signUpModalTitle">Welcome! create your account</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times-circle"></span>
                </button>
            </div>
            <div class="modal-body">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <h4>ALERT!!</h4>
                        </hr />
                        <?php echo session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>
                <form method="post" action="<?= base_url(); ?>/Register/process" class="form-box">
                <?= csrf_field(); ?>
                    <div class="input-box">
                        <label class="label-text">Username</label>
                        <div class="form-group">
                            <span class="la la-user form-icon"></span>
                            <input class="form-control form-control-styled" type="text" name="username" id="username" placeholder="Username">
                        </div>
                    </div>
                    <div class="input-box">
                        <label class="label-text">Your Name</label>
                        <div class="form-group">
                            <span class="la la-user form-icon"></span>
                            <input class="form-control form-control-styled" type="text" name="name" id="name" placeholder="Name">
                        </div>
                    </div>
                    <!-- <div class="input-box">
                        <label class="label-text">Email</label>
                        <div class="form-group">
                            <span class="la la-envelope form-icon"></span>
                            <input class="form-control form-control-styled" type="email" name="text" placeholder="Email address">
                        </div>
                    </div> -->
                    <div class="input-box">
                        <label class="label-text">Password</label>
                        <div class="form-group">
                            <span class="la la-lock form-icon"></span>
                            <input class="form-control form-control-styled" type="password" name="password" id="password" placeholder="Enter password">
                        </div>
                        <p class="font-size-14 mt-n2">Your password must be at least 8 characters long and must contain letters, numbers and special characters. Cannot contain whitespace.</p>
                    </div>
                    <div class="input-box">
                        <label class="label-text">Confirm Password</label>
                        <div class="form-group">
                            <span class="la la-lock form-icon"></span>
                            <input class="form-control form-control-styled" type="password" name="password_conf" id="password_conf" placeholder="Enter password">
                        </div>
                    </div>
                    <div class="btn-box">
                        <button type="submit" class="theme-btn gradient-btn w-100">
                            <i class="la la-user-plus mr-1"></i> Register Account
                        </button>
                        <p class="sub-text-box text-right pt-1 font-weight-medium font-size-14">
                            Already on Listhub? <a class="text-color-2 login-btn" href="javascript:void(0)">Log in</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<!-- <div class="modal fade modal-container recover-form" id="recoverModal" tabindex="-1" role="dialog" aria-labelledby="recoverModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center mh-bg">
                <h5 class="modal-title" id="recoverModalTitle">Reset password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="la la-times-circle"></span>
                </button>
            </div>
            <div class="modal-body">
                <p class="font-size-15 font-weight-medium pb-3">
                    Enter your username or email to reset your password.
                    You will receive an email with instructions on how to reset your password. If you are experiencing problems
                    resetting your password <a href="contact.html" class="text-color-2">contact us</a> or <a href="#" class="text-color-2">send us an email</a>
                </p>
                <form method="post" class="form-box">
                    <div class="input-box">
                        <label class="label-text">Username or email</label>
                        <div class="form-group">
                            <span class="la la-user form-icon"></span>
                            <input class="form-control form-control-styled" type="text" name="text" placeholder="Username or email address">
                        </div>
                    </div>
                    <div class="btn-box">
                        <button type="submit" class="theme-btn gradient-btn w-100">
                            Get New Password <i class="la la-arrow-right ml-1"></i>
                        </button>
                        <p class="sub-text-box text-right pt-1 font-weight-medium font-size-14">
                            Not a member? <a class="text-color-2 signup-btn" href="javascript:void(0)">Create account</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->

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
<script src="js/jquery-rating.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/jquery-supperslides.min.js"></script>
<script src="js/superslider-script.js"></script>
<script src="js/jquery.lazy.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>