<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title><?= $title;?></title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <style>
        html, body {
            background: linear-gradient(to right, #000428, #004e92);
        }
        .card {
            max-width: 760px;
            margin: auto;
            margin-top: 40px;
            box-shadow: -2px 9px 24px 1px rgba(3,114,140,0.4);
        }
        i{
            margin-right: 2px;
        }
        .back {
            text-align: center;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-transparent">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url(); ?>/Home/index">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>/Home/profile">My Profile</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>/Film">List Film</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>/logout">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mt-4 text-center text-white">Detail Film</h2>
                <div class="card">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="<?= base_url(); ?>/img/<?= $film['poster']; ?>" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title text-center"><?= $film['judul']; ?></h3>
                                <hr>
                                <h5 class="card-text text-center">Sutradara</h5>
                                <h4 class="text-center"><b><?= $film['sutradara']; ?></b></h4>
                                <hr>
                                <p class="card-text text-center"><small class="text-muted">Released<br>
                                <?= $film['rilis']; ?></small></p>
                                <br>
                                <a class="back" href="<?= base_url(); ?>/film"><i class="bi bi-arrow-bar-left"></i>Back</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url(); ?>js/scripts.js"></script>
</body>

</html>