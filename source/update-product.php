<?php
    spl_autoload_register(function ($className) {
       require_once ('../classes/' . $className . '.class.php');
    });

    use Database as db;
    use Products as pro;

    $db = new db();
    $conn = $db->getConnection();

    $pro = new Products($conn);
    
    $pro->categories_id = $_POST['categories_id'];
    $pro->name = $_POST['name'];
    $pro->id = $_POST['id'];
    $pro->updated = time();
    
    $pro->updateProduct();

    header("Location: products.php#products");
    exit;
   
?>