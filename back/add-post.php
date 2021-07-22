<?php
require "./header.php";
require "../oop/operation.php";
$insrt_post = new Database();
?>
<div class="container">
   <div class="row">
      <div class="col-md-6 mx-auto py-3">
         <form action="new-post.php" method="POST" enctype="multipart/form-data">
            <h2 class="mb-2">Create Post</h2>
            <div class="for-group form-group-sm mb-2">
               <input type="text" required placeholder="Heading" name="heading" class="form-control">
            </div>
            <div class="for-group form-group-sm mb-2">
               <textarea name="desc" required class="form-control" placeholder="Description" cols="30" rows="10"></textarea>
            </div>
            <div class="for-group form-group-sm mb-2">
               <input type="file" value="" required name="file" class="form-control">
            </div>
            <input type="submit" value="update" name="update" class="btn btn-sm btn-success mb-2">
         </form>
      </div>
   </div>
</div>