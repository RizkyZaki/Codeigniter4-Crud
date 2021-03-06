<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="author" content="TechyDevs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Easy-News | <?= $news['slug']?></title>
    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam:wght@100;300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Template CSS Files -->
    <link rel="stylesheet" href="<?= base_url('/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/css/line-awesome.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/css/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/css/animated-headline.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/css/jquery-ui.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/css/jquery.fancybox.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/css/chosen.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('/css/style.css'); ?>">
</head>
<body>
<!-- start per-loader -->
<!-- <div class="loader-container">
    <div class="loader-ripple">
        <div></div>
        <div></div>
    </div>
</div> -->
<!-- end per-loader -->


<!-- ================================
    START BLOG AREA
================================= -->
<section class="blog-area section-padding">
    <div class="container mx-auto">
        <div class="row">
            <div class="col-lg-10">
                <div class="card-item single-card">
                    <div class="card-image after-none">
                        <div class="single-slider owl-trigger-action owl-trigger-action-3">
                            <div class="single-slider-item">
                                <img src="<?= base_url(); ?>/img/<?= $news['foto']; ?>" class="card__img" alt="blog image">
                            </div>
                        </div>
                    </div><!-- end card-image -->
                    <div class="card-content">
                        <h4 class="card-title font-size-25 mb-0"><?= $news['judul']; ?></h4>
                        <div class="d-flex flex-wrap align-items-center pt-3">
                            <a href="#" class="d-flex align-items-center text-gray mr-3">
                                <span class="font-weight-medium">By Alex Smith</span>
                            </a>
                            <ul class="listing-meta d-flex align-items-center pt-0">
                                <li class="mr-3">
                                    <i class="la la-calendar mr-1"></i>Created at <?=$news['created_at'];?>
                                </li>
                                <li class="mr-3">
                                    <i class="la la-tags mr-1"></i>
                                    <a href="#" class="listing-cat-link"><?=$news['nama_kat'];?></a>
                                </li>
                            </ul>
                        </div>
                        <p class="card-sub mt-3"><?= $news['isi']; ?></p>
                    </div><!-- end card-content -->
                </div><!-- end card-item -->
            </div>
        </div>
    </div>    
</section>


<!-- Template JS Files -->
<script src="<?= base_url('js/jquery-3.4.1.min.js"'); ?>"></script>
<script src="<?= base_url('js/jquery-ui.js"'); ?>"></script>
<script src="<?= base_url('js/popper.min.js'); ?>"></script>
<script src="<?= base_url('js/bootstrap.min.js'); ?>"></script>
<script src="<?= base_url('js/owl.carousel.min.js'); ?>"></script>
<script src="<?= base_url('js/jquery.fancybox.min.js'); ?>"></script>
<script src="<?= base_url('js/animated-headline.js'); ?>"></script>
<script src="<?= base_url('js/chosen.min.js'); ?>"></script>
<script src="<?= base_url('js/moment.min.js'); ?>"></script>
<script src="<?= base_url('js/datedropper.min.js'); ?>"></script>
<script src="<?= base_url('js/waypoints.min.js'); ?>"></script>
<script src="<?= base_url('js/jquery.counterup.min.js'); ?>"></script>
<script src="<?= base_url('js/jquery.lazy.min.js'); ?>"></script>
<script src="<?= base_url('js/main.js'); ?>"></script>
</body>
</html>