<?php 
require "../oop/operation.php";
$inserttion = new Database();
$name = $_POST["name"];
$address = $_POST["address"];
$email = $_POST["email"];
// insert that data 
$completed = $inserttion ->insert("sign", "name, address, email", "'$name', '$address', '$email'");

if(empty($inserttion->getResults())){
   header("location: http://localhost/blog/front");
}