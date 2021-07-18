<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Blog</title>
   <!-- css files  -->
   <link rel="stylesheet" href="../style/bootstrap.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
   <link rel="stylesheet" href="../style/style.css">
</head>

<body>
   <!-- main heading of the website -->
   <nav id="main-nav">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
               <h1>Website Logo</h1>
            </div>
            <div class="col-md-12" id="menu">
               <ul>
                  <li><a href="./index.php" id="home">Home</a></li>
                  <li><a href="">How To use</a></li>
                  <li><a href="">About Us</a></li>
                  <li><a href="">FAQ?</a></li>
                  <li><a href="./sign.php" class="btn btn-sm btn-info px-2 p-1">Sign Up</a></li>
                  </li>
               </ul>
            </div>
            <div class="col-md-12" id="search">
               <form action="./topics.php" method="GET" class="d-flex justify-content-center">
                  <form-group class="form-group-sm">
                     <input type="text" autocomplete="off" name="search_val" placeholder="Search" class="form-control">
                  </form-group>
                  <input type="submit" name="search" value="Search" class="mx-1 btn btn-sm btn-info">
               </form>
            </div>
         </div>
      </div>
   </nav>
</body>

</html>