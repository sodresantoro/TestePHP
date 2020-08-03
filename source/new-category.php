
<?php 
    
    spl_autoload_register(function ($className) {
        require_once ('../classes/' . $className . '.class.php');
    });
  
    use Database as db;
    use Categories as cat;
    
    $actionForm = "create-category.php";
    $valueButton = "Send";
    $section = "New Category";   

    if (isset($_GET["id"]) && !empty($_GET["id"])){
        
        $db = new db();
        $conn = $db->getConnection();
        $cat = new Categories($conn);
        $result = $cat->getCategory($_GET["id"]);
        $stmt = $result->fetch_assoc();
        $actionForm = "update-category.php";
        $valueButton = "Update";
        $section = "Update Category";

    }    

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

    <!-- Contact Section-->
    <section class="page-section" id="new-product">
        <div class="container">
            <!-- Contact Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mt-5"><?=$section?></h2>

            <!-- Contact Section Form-->
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                    
                    <form action="<?=$actionForm?>" method="post">

                        <div class="control-group">
                            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                <label>Category name</label>
                                <input type="hidden" name="id" value="<?=isset($stmt['id'])?$stmt['id']:""?>" />
                                <input type="text" value="<?=isset($stmt['name'])?$stmt['name']:""?>" name="name" placeholder="Catgory name" required="required" autofocus />
                                <p class="help-block text-danger small">Add a new Category.</p>
                            </div>
                        </div>
                        <br />
                        <div id="success"></div>
                        <div class="form-group">
                            <input class="btn btn-primary btn-xl" type="submit" name="send" value="<?=$valueButton?>" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="footer text-center">
        <div class="container">
            <h2> Test PHP </h2>
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