<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Landing Page</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?= base_url(); ?>/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <style>
        html body {
            background: rgb(254,254,254);
            background: linear-gradient(90deg, rgba(254,254,254,1) 0%, rgba(11,149,189,1) 100%);
        }
        .card {
            margin-top: 115px;
            width: 30rem;
            height: 25rem;
            box-shadow: -2px 9px 24px 1px rgba(3,114,140,0.4);
        }
        i {
            font-size: 80px;
            margin-left: 183px;
        }
    </style>
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-transparent">
        <div class="container">
            <a class="navbar-brand text-black" href="<?= base_url(); ?>/home">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>/profile">My Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>/Film">List Film</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>/logout">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="card mx-auto">
            <div class="card-body">
                <i class="bi bi-person-circle"></i>
                <h2 class="card-title text-center"><?= session()->get('username'); ?></h2>
                <hr>
                <h5 class="card-text text-center">Your Name</h5>
                <h6 class="text-center"><?= session()->get('name'); ?></h6>
                <hr>
                <a href="<?= base_url(); ?>/edit" class="btn btn-primary">Edit Profile</a>
            </div>
        </div>
    </div>
        <!-- Footer-->
    <!-- <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
        </div>
    </footer> -->
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url(); ?>js/scripts.js"></script>
</body>

</html>