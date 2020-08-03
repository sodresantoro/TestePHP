<?php

spl_autoload_register(function ($className) {
    require_once ('../classes/' . $className . '.class.php');
});

use Database as db;
use Products as prod;

$db = new db();
$conn = $db->getConnection();

$p = new prod($conn);
$p->id = $_GET['id'] ?? die ("Error: Missing ID");
$p->deleteProduct();

header("Location: " . $_SERVER['HTTP_REFERER']);
exit;
   
?>