<?php
/**
 * Created by PhpStorm.
 * User: Juha
 * Date: 27.10.2015
 * Time: 15:53
 */

class db
{
    public function connect()
    {
        $servername = "localhost";
        $username = "root";
        $password = "test123";
        $database = "my_first_db";

        //create connection
        $conn = new mysqli($servername, $username, $password);
        $conn->select_db($database);

        //check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}

$db_obj = new db;
$mysqli = $db_obj->connect();

?>