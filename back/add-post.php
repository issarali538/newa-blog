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
            <div class="form-group form-group-sm mb-2">
               <select name="category" class="form-control">
                  <option selected disabled>Insert into category</option>
                  <?php
                  $insrt_post->only_selection("*", "category");
                  foreach ($insrt_post->getResults() as $key => $value) {

                     echo  '<option value="' . $value['category_id'] . '">' . $value['category_name'] . '</option>';
                  }
                  ?>
               </select>
            </div>
            <div class="for-group form-group-sm mb-2">
               <input type="file" value="" required name="file" class="form-control">
            </div>
            <input type="submit" value="update" name="update" class="btn btn-sm btn-success mb-2">
         </form>
      </div>
   </div>
</div>