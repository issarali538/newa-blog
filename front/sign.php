<?php require "header.php"; ?>
<section id="sign" class="mt-5">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <h1 class="text-center">Sing Up</h1>
         </div>
         <div class="col-md-6 mx-auto p-4">
            <form action="./save.php" method="POST">
               <div class="form-group my-3">
                  <input type="text" name="name" placeholder="username" class="form-control">
               </div>
               <div class="form-group my-3">
                  <input type="text" name="address" placeholder="address" class="form-control">
               </div>
               <div class="form-group my-3">
                  <input type="email" name="email" placeholder="email" class="form-control">
               </div>
               <input type="submit" value="Submit" name="submit" class="btn btn-success mt-2">
            </form>
         </div>
      </div>
   </div>
</section>