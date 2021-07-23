<?php
require "../oop/operation.php";
$new_post_date = new Database();
$heading = $_POST['heading'];
$desc = $_POST['desc'];
$category = $_POST['category'];
$file = $_FILES['file']['name'];
$file_size = $_FILES['file']['size'];
$temp = $_FILES["file"]["tmp_name"];
$folder = "../img/";
$file_separation = explode(".", $file);
$file_ext = end($file_separation);
$time = time();
$date = date("d/M/Y");
$new_post_date->file_validation($file_size, $file_ext);
if (empty($new_post_date->getResults())) {
  $sucess_insetion = $new_post_date->insert("post", "title, description, date, category, img", "'$heading', '$desc', '$date', $category, '$time-$file'");
  if (empty($new_post_date->getResults())) {
    move_uploaded_file($temp, $folder . $time . "-" . $file);
    header("location: http://localhost/blog/back/post.php");
  }
}else{
  echo "<pre>";
  print_r($new_post_date->getResults());
  echo "</pre>";
}
