<?php
/**
 * Created by PhpStorm.
 * User: Juha
 * Date: 22.10.2015
 * Time: 19:08
 */

require_once(__DIR__.'/config.php');

$user = $mysqli->real_escape_string($_POST["username"]);
$pass = $mysqli->real_escape_string($_POST["password"]);

if($result = $mysqli->query("SELECT user_name, password FROM users WHERE user_name = ('$user') AND password = ('$pass')")){
    while($obj = $result->fetch_object()){
        printf ("%s %s\n", $obj->user_name, $obj->password);
    }
}

?>