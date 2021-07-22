<?php 
require "./operation.php";
$numRows = new Database();
$yesWorking = $numRows ->rows_in_table("post");
echo $yesWorking;