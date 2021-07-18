<?php
require "./header.php";
require "../oop/operation.php";
?>
<section id="main-sec">
   <div class="container-fluid">
      <div class="row">
         <div class="col-md-3" id="recent">
            <?php
            $recent = new Database();
            $recent->only_selection("COUNT(post_id) as records", "post");
            foreach ($recent->getResults() as $fetching) {
               $assign = $fetching["records"];
            }
            ?>
            <h3>Recent Uploaded(<?php echo $assign . "*" ?>)</h3>
            <ul>
               <?php $side_bar_news = new Database();
               $side_bar_news->special_selection("post_id, title", "post", null,null, "post_id desc", 5, 0);
               foreach ($side_bar_news->getResults() as $title) {
                  echo '<li><a href="./index.php?post_id=' . $title["post_id"] . '">' . $title["title"] . ' <span>read more</span>...</a></li>';
               }
               ?>
            </ul>
         </div>
         <!-- the col for heading, image and paragraph of news   -->
         <div class="col-md-6">
            <?php
            $posts = new Database();
            if(isset($_GET["post_id"])){
               $post_id = $_GET["post_id"];
               $posts->special_selection("title, description, img", "post",null, "post_id=$post_id", "post_id desc", 1, 0);
            }else{
               $posts->special_selection("title, description,null, img", "post", null,null, "post_id desc", 1, 0);
            }
            foreach ($posts->getResults() as $all) {
            ?>
               <h2>
                  <?php echo $all['title']; ?>
               </h2>
               <div>
                  <img src="../<?php echo $all['img']; ?>" alt="not supported">
               </div>
               <p class="lh-2">
                  <?php echo $all['description']; ?>
               </p>
         </div>
      <?php
            }
      ?>
      <div class="col-md-3" id="topics">
         <h3>Topics</h3>
         <ul>
            <?php
            $for_category = new Database();
            $for_category->only_selection("category_name, category_id", "category");
            foreach ($for_category->getResults() as $key => $category) {
               # code...
               echo '<a href="./topics.php?category_id='.$category["category_id"].'"><li>' . $category["category_name"] . '</li></a>';
            }
            ?>
         </ul>
      </div>
      </div>
   </div>
</section>
<?php
require "footer.php";
?>