<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/line-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/animated-headline.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/chosen.min.css">
    <link rel="stylesheet" href="css/style.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css_2/style.css">
</head>
<body>

<div class="loader-container">
    <div class="loader-ripple">
        <div></div>
        <div></div>
    </div>
</div>

<div class="main">
    <!-- Sing in  Form -->
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="img_login/signin-image.jpg" alt="sing up image"></figure>
                    <a href="<?= base_url()?>/register" class="signup-image-link">Create an account</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Sign in</h2>
                    <?php if (!empty(session()->getFlashdata('login_salah'))) : ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <h4>UPSSS</h4>
                            <hr>
                            <?= session()->getFlashdata('login_salah'); ?>
                        </div>
                    <?php endif; ?>
                    <form method="POST" action="<?= base_url(); ?>/Login/process" class="register-form" id="login-form">
                    <?= csrf_field(); ?>
                        <div class="form-group">
                            <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="username" id="username" placeholder="Username"/>
                        </div>
                        <div class="form-group">
                            <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="password" placeholder="Password"/>
                        </div>
                        <div class="form-group form-button">
                            <button type="submit" class="theme-btn gradient-btn w-100">
                                <i class="la la-sign-in mr-1"></i> Login to Account
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</div>

    <!-- JS -->
    <script>
        // $( "button" ).onsubmit(function( event ) {
        // event.preventDefault();
        // });
    </script>
    <script src="vendor/jquery/jquery.min.js"></script>
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
    <script src="js.2/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>