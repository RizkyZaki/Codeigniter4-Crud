<?php

use App\Controllers\Pklpages;
?>
<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <style>
        html, body {
            background: linear-gradient(to right, #000428, #004e92);
        }
        .card {
            border-radius: 13px;
            margin-top: 180px;
        }
        i {
            font-size: 1.3rem;
        }
    </style>

    <title>Login Page</title>
</head>
<body>
    <div class="global-container">
        <div class="card mx-auto" style="width: 500px;">
            <div class="card-body">
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?php echo session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>
                <form method="post" action="<?= base_url(); ?>/Login/process">
                <?= csrf_field(); ?>
                    <h1 class="login text-center">LOGIN</h1>
                    <div class="container">
                        <div class="mb-3 ">
                            <label for="username"><i class="bi bi-person"></i></label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
                        </div>
                        <div class="mb-3 ">
                            <i class="bi bi-key"></i><input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto mb-2">
                            <button class="btn btn-primary center" type="submit">Sign In</button>
                        </div>
                        <p class="text-center">Don't have an account? <a href="<?= base_url('/Register'); ?>">Click Here</a></p>
                    </div>
                    </form>
            </div>
        </div>
    </div> 



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
</html>