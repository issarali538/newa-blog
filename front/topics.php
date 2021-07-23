<?php require "header.php"; ?>
<section id="topics-sec">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-12">
            <h1>Read your Favourite Topic</h1>
         </div>
         <div class="col-md-12">
            <?php
            require "../oop/operation.php";
            $topic_search = new Database();
            // if for category name
            if (isset($_GET['category_id'])) {
               $category_id = $_GET['category_id'];
               $topic_search->special_selection("*", "post", "category ON category.category_id=post.category", "post.category=$category_id", null, null, null);
            }
            // if for searching 
            if (isset($_GET['search'])) {
               $search  = $_GET['search_val'];
               $topic_search->special_selection("title, description, img", "post", null, "title REGEXP '$search' OR description REGEXP '$search' ", null, null, null);
               $cname = $_GET['search_val'];
            }
            // if for heading of the topic page heading 
            if (isset($_GET['category_id'])) {
               $category_name = new Database();
               $category_name->special_selection("category_name", "category", null, "category_id=$_GET[category_id]", null, null, null);
               foreach ($category_name->getResults() as $name) {
                  $cname = $name["category_name"];
               }
            }
            echo '<h4>' . $cname . '</h4>';
            ?>
         </div>
         <!-- cards  -->
         <?php
            foreach($topic_search->getResults() as $key => $value) {
         ?>
               <div class="col-lg-2">
                  <div class="card">
                     <img src="../img/<?php echo $value['img']; ?>" class="card-img-top" alt="...">
                     <div class="card-body">
                        <p class="card-text"><a href="">
                              <?php echo $value["title"]; ?>
                           </a></p>
                     </div>
                  </div>
               </div>
         <?php
         }
         ?>
      </div>
   </div>
</section>
<?php require "footer.php" ?>