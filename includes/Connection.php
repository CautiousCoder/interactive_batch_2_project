<?php
namespace App;

use PDO;
use PDOException;
// $db_name = "mysql:host=localhost;dbname=bangubank;";
// $user_name = "root";
// $password = "";

// $conn = new PDO($db_name, $user_name, $password);


// use singleton pattern
class Connection
{

    private $conn;
    private function __construct()
    {
    }

    public static function __self()
    {
        $db_name = "mysql:host=localhost;dbname=bangubank;";
        $user_name = "root";
        $password = "";
        if (!isset($conn)) {
            try {
                $conn = new PDO($db_name, $user_name, $password);
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("): Oops! Connection fail." . $e->getMessage());
            }
            return $conn;
        }
        return $conn;
    }
}
