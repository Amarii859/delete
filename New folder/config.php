<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "pro";


try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname" , $username,$password);
} catch (Exception $e) {
    echo "Something went wrong";
    echo $e->getMessage();
}