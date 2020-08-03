<?php

spl_autoload_register(function ($className) {
    require_once ('../classes/' . $className . '.class.php');
});

require '../vendor/autoload.php';

use Database as db;
use Categories as cat;

/* Log Error */
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('Update catigory');
$log->pushHandler(new StreamHandler('../log_error.log', Logger::WARNING));

$db = new db();
$conn = $db->getConnection();
$cat = new Categories($conn);

if(!isset($_POST['id']) || !isset($_POST['name'])){
    // add records to the log
    $log->warning('Name and ID POST fail');
    $log->error('Name and ID POST not exist');
}
else{

    $cat->id = $_POST['id'] ?? die ("Error: Missing data");
    $cat->name = $_POST['name'] ?? die ("Error: Missing data");
    $cat->updated = time();

}

$cat->updateCategory();

header("Location: categories.php#categories");
exit;
   

?>