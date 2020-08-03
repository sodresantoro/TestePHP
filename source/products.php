<?php
spl_autoload_register(function ($className) {
    require_once ('../classes/' . $className . '.class.php');
});

use Database as db;
use Categories as cat;
use Products as prod;

$db = new db();
$conn = $db->getConnection();
$prod = new Products($conn);
$stmt = $prod->getProducts();
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
    <link href="../css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">


    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="../index.php#manual"><i class="fab fa-angellist"></i></a>
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
                            href="../index.php#manual">home</a></li>

                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="products.php#products">Products</a></li>

                    <li class="nav-item mx-0 mx-lg-1"><a id="add-new-debtor"
                            class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="categories.php#categories">Categories</a></li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- Portfolio Section-->
    <section class="page-section products" id="products">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-5 mt-5">Products</h2>
            <div class="mb-5">
                <a class="btn btn-primary" role="button" href="new-product.php#new-product">New Product</a>
            </div>
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Date Created</th>
                        <th scope="col">Last Update</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Update</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        while ($row = $stmt->fetch_assoc()) {
                            $name = $row["name"];
                            $id = $row["id"];
                            $category = $row["category"];
                            $cat_id = $row["cat_id"];
                            $created = date("d/m/Y H:i", $row["created"]);
                            $updated = date("d/m/Y H:i", $row["updated"]);
                            ?>
                    <tr>
                        <td><?=$name?></td>
                        <td><?=$category?></td>
                        <td><?=$created ?></td>
                        <td><?=$updated ?></td>
                        <td><a class="btn btn-danger" href="delete-product.php?id=<?=$id?>"
                                title="Delete Product">Delete this product</a></td>
                        <td><a class="btn btn-info" href="new-product.php?id=<?=$id?>&catid=<?=$cat_id?>" title="Update Product">Update this
                                Product</a></td>
                    </tr>
                    <?php
                        }
                        ?>

                </tbody>
            </table>

        </div>
        </div>
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