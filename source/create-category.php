<?php

spl_autoload_register(function ($className) {
    require_once ('../classes/' . $className . '.class.php');
});

use Database as db;
use Categories as cat;

$db = new db();
$conn = $db->getConnection();

$cat = new Categories($conn);

$cat->name = $_POST['name'] ?? die ("Error: Missing data");
$cat->createCategory();

header("Location: categories.php#categories");
exit;
   
?>