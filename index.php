<?php

require __DIR__ . '/vendor/autoload.php';



?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="Teste PHP" />
        <meta name="author" content="Celso Bastos" />
        <title>Test PHP</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
              type="text/css" />
        <link href="css/styles.css" rel="stylesheet" />
    </head>

    <body id="page-top">


        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="index.php#manual"><i class="fab fa-angellist"></i></a>
                <button
                    class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded"
                    type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                    aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a id="add-new-debtor"
                                                             class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                                                             href="index.php#manual">home</a></li>

                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                                                             href="source/products.php#products">Products</a></li>

                        <li class="nav-item mx-0 mx-lg-1"><a id="add-new-debtor"
                                                             class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                                                             href="source/categories.php#categories">Categories</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Masthead-->
        <header class="masthead text-center pb-0 pt-10">
            <h2>Test PHP - CRUD</h2>
            <p>Celso Ricardo Basto</p>
        </header>

        <!-- Portfolio Section-->
        <section class="text-center page-section products container-fluid bg-light" id="manual">
            <h2>Especificação do Sistema</h2>
            <article class="container">
            <p>
                Apache version 2.4.35 <br />
                Mysql version 5.7.23 <br />
                PHP version 7.2.10 <br />
                Composer version 1.10.7  >> Foi implementado o pacote "Monolog\Logger" em 
                algumas paginas para gerarção de logs, <br />na pagina "source/update-category.php" foi implementado
                esse package "https://packagist.org/packages/monolog/monolog".<br />
            </p>
            <div class="btn-group mt-6" role="group" aria-label="Basic example">
                <a href="source/products.php#products" class="btn btn-secondary">Products</a>
                <a href="source/categories.php#categories" class="btn btn-secondary">Categories</a>
            </div>
                
            </article>
        </section>
        <!-- About Section-->

        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <h2> Test PHP - Celso Ricardo Bastos</h2>
            </div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
    </body>

</html>