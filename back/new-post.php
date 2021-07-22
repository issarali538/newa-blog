<?php 
require "../oop/operation.php";
$new_post_date = new Database();
$heading = $_POST['heading'];
$desc = $_POST['desc'];
$file = $_FILES['file']['name'];
$file_size = $_FILES['file']['size'];
$file_separation = explode(".", $file);
$file_ext = end($file_separation);

$new_post_date -> file_validation($file_size, $file_ext);
echo "<pre>";
print_r($new_post_date->getResults());
echo "</pre>";