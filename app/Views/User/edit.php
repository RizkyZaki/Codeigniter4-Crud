<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Edit Profile</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    <style>
        html body {
            background: rgb(254,254,254);
            background: linear-gradient(90deg, rgba(254,254,254,1) 0%, rgba(11,149,189,1) 100%);
        }
        .card {
            margin-top: 115px;
            width: 30rem;
            /* height: 25rem; */
            box-shadow: -2px 9px 24px 1px rgba(3,114,140,0.4);
        }
        i {
            font-size: 16px;
            margin-left: 12px;
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
    <div class="global-container">
        <div class="card mx-auto" style="width: 500px;">
            <div class="card-body">
                <h1 class="text-center">Edit Profile</h1>
                <form action="<?= base_url(); ?>/edit" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="id" value="<?= session()->get('id');?>">
                    <div class="mb-3">
                        <label for="username" class="form-label"><i class="bi bi-pencil-fill"></i></label>
                        <input type="text" class="form-control" id="username" name="username" readonly class="form-control-plaintext"  value="<?= session()->get('username'); ?>" aria-describedby="emailHelp" placeholder="username">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label"><i class="bi bi-pencil-fill"></i></label>
                        <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Your Name" value="<?= session()->get('name'); ?>">
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
                <a href="<?= base_url('/delete/' .session()->get('id')); ?>" class="btn btn-danger mt-3">Delete Account</a>
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