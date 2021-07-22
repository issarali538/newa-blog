<?php
// for security
session_start(); 
if(isset($_SESSION["email"]) && $_SESSION["password"]){
   header("location: http://localhost/blog/back/post.php");
}
else{
   header("location: http://localhost/blog/back/");
}
require "../oop/operation.php";
$email = $_POST["email"];
$password = $_POST["password"];
$login = new Database();
$success = $login->special_selection("email, password", "adman", null, "email='$email' and password='$password'", null, null, null);
if($success){
  
   foreach ($login->getResults() as $value) {
      $_SESSION["email"] = $value["email"];
      $_SESSION["password"] = $value["password"];
   }
   header("location: http://localhost/blog/back/post.php");
}else{
   echo "Query is failed";
}
print_r($_POST);
?>