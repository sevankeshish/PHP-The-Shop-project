<?php

include 'connect.php';

if(empty($_REQUEST["display_name"]) || empty($_REQUEST["email"]) || empty($_REQUEST["password"])){

    return;
}

$display_name = $_REQUEST["display_name"];
$email = $_REQUEST["email"];
$password = $_REQUEST["password"];

$query = "INSERT INTO tbl_users (display_name,email,password) VALUES ('$display_name','$email','$password')";

$result = $connect->prepare($query);
$result->execute();

