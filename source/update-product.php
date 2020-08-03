<?php
spl_autoload_register(function ($className) {
    require_once ('../classes/' . $className . '.class.php');
});

use Database as db;
use Products as pro;

$db = new db();
$conn = $db->getConnection();

$pro = new Products($conn);

$pro->categories_id = $_POST['categories_id'] ?? die ("Error: Missing data");
$pro->name = $_POST['name'] ?? die ("Error: Missing data");
$pro->id = $_POST['id'] ?? die ("Error: Missing data");
$pro->updated = time();

$pro->updateProduct();

header("Location: products.php#products");
exit;
   
?>