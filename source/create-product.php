<?php

spl_autoload_register(function ($className) {
    require_once ('../classes/' . $className . '.class.php');
});

use Database as db;
use Products as cat;

$db = new db();
$conn = $db->getConnection();
$product = new Products($conn);

$product->name = $_POST['name'] ?? die ("Error: Missing ID");
$product->categories_id = (int)$_POST['categories_id'];
$product->createProduto();

header("Location: products.php#products");
exit;
   
?>