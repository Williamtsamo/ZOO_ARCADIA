<?php
//require_once '../lib/config.php';
//require_once '../lib/pdo.php';
require_once("templates/header.php");
require_once("lib/avis.php");
//$avis = getavis($conn);


//var_dump($avis);
?>


<section>
    <div class='album py-5 bg-body-warning '>
        <div class="container" class='text-center '>
            <h2 class="  p-3 text-success-emphasis bg-success-subtle border border-success-subtle rounded-3" class="text-center">Restauration</h2>
        </div>
    </div>

    <div class="container  ">
        <div class="row ">
            <div class="col md-6">

                <div class="card shadow-sm">
                    <img src="assets/images/Restauration.jpg" class="bd-placeholder-img card-img-top" width="100%" height=100% xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                </div>

            </div>
            <div class="col-md-6">
                <div class="col">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <a class="navbar-brand" href="#">RestoRapide</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#burgers">Burgers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pizzas">Pizzas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#desserts">Desserts</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#boissons">Boissons</a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <div class="container mt-5">
                        <h2 id="burgers">Burgers</h2>
                        <ul class="list-group">
                            <li class="list-group-item">Cheeseburger</li>
                            <li class="list-group-item">Burger au poulet</li>

                        </ul>

                        <h2 id="pizzas" class="mt-5">Pizzas</h2>
                        <ul class="list-group">
                            <li class="list-group-item">Pizza Margherita</li>
                            <li class="list-group-item">Pizza Pepperoni</li>

                        </ul>

                        <h2 id="desserts" class="mt-5">Desserts</h2>
                        <ul class="list-group">
                            <li class="list-group-item">Tarte aux pommes</li>
                            <li class="list-group-item">Brownie</li>

                        </ul>


                    </div>
                </div>
            </div>

        </div>

    </div>
    </div>

    </div>
</section>

<section>


    <div class='album py-5 bg-body-warning width="100" height=100"'>
        <div class="container" class='text-center '>
            <h2 class="  p-3 text-success-emphasis bg-success-subtle border border-success-subtle rounded-3" class="text-center">visite des habitats avec
                un guide </h2>
        </div>
    </div>
    </div>
    <div class="container">

        <div class="row ">
            <div class="col-md-6">
                <div class="card shadow-sm">

                    <img src="assets/images/habitats du zoo.jpg" class="bd-placeholder-img card-img-top" width="100%" height=100% xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">


                </div>
            </div>

            <div class="col-md-6">

                <div class="col-md-6">
                    <div class="card shadow-sm">
                        <!-- Image du Zoo -->
                        <img src="assets/images/LOGO.jpg" class="card-img-top" alt="Visite Zoo">

                        <!-- Contenu de la carte -->
                        <div class="card-body text-center">
                            <h5 class="card-title"> Visite du Zoo</h5>
                            <p class="card-text">Explorez les différentes zones du zoo avec un billet combiné train + entrée.</p>

                            <!-- Liste des zones à visiter -->
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Savane Africaine</li>
                                <li class="list-group-item">Forêt Tropicale</li>
                                <li class="list-group-item">Terre des Félins</li>
                               
                            </ul>


                            <h6 class="mt-3 text-success">€10.00</h6>


                            <a href="#" class="btn btn-primary mt-2">Acheter Billet</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
<section>


    <div class='album py-3 bg-body-warning width="100" height=100"'>
        <div class="container" class='text-center '>
            <h2 class="  p-3 text-success-emphasis bg-success-subtle border border-success-subtle rounded-3" class="text-center">visite du zoo en petit train: gratuit</h2>
        </div>
    </div>
    </div>
    <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
                <div class="card shadow-sm">

                    <img src="assets/images/mini train.jpg" class="bd-placeholder-img card-img-top" width="100%" height=100% xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">


                </div>
            </div>
        </div>
</section>

<?php

//include_once("templates/header.php");
require_once '<templates/footer.php';
//include_once("lib/avis.php");

//$avis = getavis($conn);
//var_dump($avis);
?>