<?php

include_once 'config.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    $sql = "INSERT INTO user (name , username , email)";

    $sqlQuery = $conn->prepare($sql);
    $sqlQuery = bindParam(":name", $name);
    $sqlQuery = bindParam(":username", $username);
    $sqlQuery = bindParam(":email", $email);

    $sqlQuery->execute();

    echo "BRAVO!!!";
}