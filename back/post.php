<?php
require "./header.php";
require "../oop/operation.php";
$post_table_date = new Database();
$pagination = new Database();
?>
<section id="post">
   <div class="container">
      <div class="row">
         <div class="col-md-10">
            <h2 class="my-3">Recent Post</h2>
         </div>
         <div class="col-md-2 py-3">
            <a href="add-post.php" class="btn btn-success btn-sm">Add Post</a>
         </div>
         <div class="col-md-12">
            <table class="table border">
               <thead class="thead-dark">
                  <tr>
                     <th scope="col">id</th>
                     <th scope="col">Post Title</th>
                     <th scope="col">image</th>
                     <th scope="col">Date</th>
                  </tr>
               </thead>
               <tbody>
                  <?php
                  if (!isset($_GET['page'])) {
                     $page = 1;
                  } else {
                     $page = $_GET['page'];
                  }
                  $total_records = $pagination->rows_in_table("post");
                  $limit = 10;
                  $offset = ($page - 1) * $limit;
                  $total_pages = ceil($total_records / $limit);
                  $post_table_date->special_selection("*", "post", null, null, null, $limit, $offset);
                  // to show the numbering in the ascending order 
                  $offset = 1;
                  foreach ($post_table_date->getResults() as $key => $value) {
                  ?>
                     <tr>
                        <th scope="row"><?php echo $offset ?></th>
                        <td><?php echo $value["title"] ?></td>
                        <td>
                           <div id="img-cell"><img src="../img/<?php echo $value['img'] ?>" alt="not showing"></div>
                        </td>
                        <td><?php echo $value["date"] ?></td>
                     </tr>
                  <?php
                  $offset ++;
                  }
                  ?>
               </tbody>
            </table>
            <div id="img-popover" class="d-none">
               <div>
                  <img src="../img/landscap1.jpg" alt="no suported ">
               </div>
            </div>
         </div>
         <div class="col-md-12">
            <ul class="pagination justify-content-center" id="post-pagination">
               <?php
               if ($page > 1) {

                  echo '<li class="page-item"><a href="post.php?page=' . ($page - 1) . '" class="page-link">Pre</a></li>';
               }
               for ($i = 1; $i <= $total_pages; $i++) {
                  if ($i == $page) {
                     $active = "active";
                  } else {
                     $active = "";
                  }
                  echo '<li class="page-item ' . $active . '"><a href="post.php?page=' . $i . '" class="page-link">' . $i . '</a></li>';
               }
               if ($total_pages > $page) {
                  echo '<li class="page-item"><a href="post.php?page=' . ($page + 1) . '" class="page-link">Next</a></li>';
               }
               ?>
            </ul>
         </div>
      </div>
   </div>
</section>