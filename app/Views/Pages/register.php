<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

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

    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">Sign up</h2>
                    <?php if (!empty(session()->getFlashdata('error'))) : ?>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <h4>ALERT!!</h4>
                            </hr />
                            <?php echo session()->getFlashdata('error'); ?>
                        </div>
                    <?php endif; ?>
                    <form method="post" action="<?= base_url(); ?>/Register/process" class="register-form" id="register-form">
                    <?= csrf_field(); ?>
                        <div class="form-group">
                            <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" name="username" id="username" placeholder="Username"/>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-email"></i></label>
                            <input type="text" name="name" id="name" placeholder="Your Name"/>
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="password" placeholder="Password"/>
                        </div>
                        <div class="form-group">
                            <label for="password_conf"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="password_conf" id="password_conf" placeholder="Repeat your password"/>
                        </div>
                        <div class="btn-box">
                            <button type="submit" class="theme-btn gradient-btn w-100">
                            <i class="la la-user-plus mr-1"></i> Register Account
                            </button>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="img_login/signup-image.jpg" alt="sing up image"></figure>
                    <a href="<?= base_url()?>/login" class="signup-image-link">I am already member</a>
                </div>
            </div>
        </div>
    </section>
</div>

    <!-- JS -->

    <script>
        // $( "a" ).click(function( event ) {
        // event.preventDefault();
        // $( "<div>" )
        //     .append( "default " + event.type + " prevented" )
        //     .appendTo( "#log" );
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