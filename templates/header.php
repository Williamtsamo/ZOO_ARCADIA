<?php
require_once "lib/session.php";
//require_once 'lib/config.php';
//require_once 'lib/pdo.php';
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body class="bg-success bg-opacity-10">
    <div class="bg-image">

        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <img src="assets/images/logo.jpg" class="bi" width="80" height="70" role="img" aria-label="Bootstrap">
                    <use xlink:href="#bootstrap"></use></svg>
                </a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                <li><a href="index.php" class="nav-link px-2 fs-1 text-primary">Acceuil</a></li>
                <li><a href="service.php" class="nav-link px-2 fs-1 text-primary">services</a></li>




                <li><a href="habitat.php" class="nav-link px-2 fs-1 text-primary">habitats</a></li>

                <li><a href="contact.php" class="nav-link px-2 fs-1 text-primary">Contact</a></li>
            </ul>
            <div class="col-md-3 text-end">
                <?php if (isset($_SESSION['utilisateur'])) { ?>

                    <a href="logout.php" class="btn btn-outline-primary me-2">deconnexion</a>
                <?php } else { ?>
                    <a href="login.php" class="btn btn-outline-primary me-2">login</a>

                <?php } ?>






            </div>


            </ul>

        </header>
        <main>