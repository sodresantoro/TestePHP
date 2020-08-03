<?php

require '../vendor/autoload.php';

use Database as db;
use Categories as cat;
/* Log Error */
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class Database {
    private $host = "localhost";
    private $database_name = "sodresantoro";
    private $username = "sage";
    private $password = "@g1l3t3c";

    public $conn;

    public function getConnection(){

        try{
            $mysqli = new mysqli($this->host, $this->username, $this->password, $this->database_name);
            if ($mysqli)
            {
                $this->conn = $mysqli;
            } else {
                throw new Exception('Unable to connect');

                $log->error('Unable to connect');
    
            }
        }catch (Exception $e) {
            echo 'ERROR:'.$e->getMessage();
        }
        

        return $this->conn;

    }
}  


?>