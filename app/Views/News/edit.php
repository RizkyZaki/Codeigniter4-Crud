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
    START DASHBOARD AREA
================================= -->
<div class="container mt-4">
    <div class="row mx-2">
        <div class="col-lg-12">
            <div class="block-card mb-4">
                <div class="block-card-header">
                    <h2 class="widget-title">Edit News</h2>
                    <?php if (session()->getFlashdata('Pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('Pesan'); ?> 
                    </div>
                    <?php endif; ?>
                    <div class="stroke-shape"></div>
                </div><!-- end block-card-header -->
                <div class="block-card-body">
                    <form method="post" action="<?= base_url(); ?>/News/update/<?= $news['id']; ?>" class="form-box row" enctype="multipart/form-data">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="slug" value="<?= $news['slug']; ?>">
                            <div class="col-lg-12">
                                <div class="input-box">
                                    <label class="label-text">News Title</label>
                                    <div class="form-group">
                                        <span class="la la-briefcase form-icon"></span>
                                        <input class="form-control" <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?> type="text" name="judul" id="judul" value="<?= $news['judul']; ?>" placeholder="Title">
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('judul'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col-lg-12 -->
                                        <!-- <div class="col-lg-12">
                                            <div class="input-box">
                                                <label class="label-text">Add Category</label>
                                                <div class="form-group user-chosen-select-container">
                                                    <span class="la la-briefcase form-icon"></span>
                                                    <select class="user-chosen-select">
                                                        <option value="">Select a Category</option>
                                                        <option value="">Health</option>
                                                        <option value="">Politics</option>
                                                        <option value="">World</option>
                                                        <option value="">Music</option>
                                                        <option value="">Music</option>
                                                        <option value="">Sports</option>
                                                        <option value="">Games</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>end col-lg-12 -->
                            <div class="col-lg-12">
                                <div class="input-box">
                                        <label class="label-text">Description</label>
                                    <div class="form-group">
                                        <textarea class="message-control form-control user-text-editor" name="isi" id="isi" value="<?= $news['isi']; ?>"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end col-lg-12 -->
                        <div class="col-lg-12">
                            <div class="input-box">
                                <label for="foto">Ubah Gambar</label>
                                <input class="form-control <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" type="file" id="foto" name="foto">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('foto'); ?>
                                </div>
                            </div>
                        </div><!-- end col-lg-12 -->
                        <div class="btn-box pt-1 mt-4">
                            <button type="submit" class="theme-btn gradient-btn border-0">Update News<i
                            class="la la-arrow-right ml-2"></i></button>
                        </div>
                    </form>
                </div><!-- end block-card-body -->
            </div><!-- end block-card -->
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