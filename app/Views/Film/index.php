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
            color: white;
        }
        .table > tbody > tr > * {
            vertical-align: middle;
        }

        .poster {
            width: 150px;
        }
        i {
            font-size: 15px;
            margin: 12px;
        }
        
        .plus {
            font-size: 15px;
            margin-right: 12px;
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
                <a href="<?= base_url(); ?>/film/create" class="btn btn-info my-3"> <i class="plus bi bi-plus-square-fill"></i>Tambah List</a>
                <h1 class="mt-2">Daftar Film yang akan dirilis 2022</h1>
                <?php if (session()->getFlashdata('Pesan')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('Pesan'); ?> 
                    </div>
                <?php endif; ?>
                <table class="table text-white">
                    <thead>
                        <tr>
                        <th scope="col" >#</th>
                        <th scope="col" >Poster</th>
                        <th scope="col" >Judul</th>
                        <th scope="col" >Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($film as $k) : ?>
                            <?php $i = 1; ?>
                            <tr>
                                <th scope="row"><? $i++; ?></th>
                                <td><img class="poster" src="<?= base_url(); ?>/img/<?= $k['poster']; ?>" alt=""></td>
                                <td class="text-white"><?= $k['judul']; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>/film/<?= $k['slug']; ?>" class="btn btn-success"> <i class="bi bi-list"></i></a>
                                    <a href="<?= base_url(); ?>/film/edit/<?= $k['slug']; ?>" class="btn btn-warning"> <i class="bi bi-pencil"></i></a>
                                    <form action="<?= base_url(); ?>/film/<?= $k['id'];?>" method="post" class="d-inline">
                                        <?= csrf_field();?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger"><i class="bi bi-eraser"></i></button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="<?= base_url(); ?>js/scripts.js"></script>
</body>

</html>
