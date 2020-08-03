<?php

spl_autoload_register(function ($className) {
    require_once ('../classes/' . $className . '.class.php');
});

use Database as db;
use Categories as cat;

$db = new db();
$conn = $db->getConnection();
$cat = new Categories($conn);
$cat->id = $_GET['id'] ?? die ("Error: Missing ID");
$cat->deleteCategory();

header("Location: " . $_SERVER['HTTP_REFERER']);

?>