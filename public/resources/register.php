<?php
/**
 * Created by PhpStorm.
 * User: Juha
 * Date: 27.10.2015
 * Time: 21:41
 */

require_once(__DIR__.'/config.php');

$user = $mysqli->real_escape_string($_POST["username"]);
$pass = $mysqli->real_escape_string($_POST["password"]);

if($mysqli->query("INSERT users SET user_name = ('$user'), password = ('$pass')")){
    echo "Register successful!";
} else {
    echo "Failed ".$mysqli->error;
}


?>