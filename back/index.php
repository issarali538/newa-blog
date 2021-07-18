<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
   <link rel="stylesheet" href="../style/bootstrap.css">
   <link rel="stylesheet" href="../style/style.css">
</head>

<body class="justify-content-center">
   <div class="container my-5 text-center" id="login">
      <div class="row">
         <div class="col-md-12">
            <h2>Login </h2>
         </div>
         <div class="col-md-6 mx-auto">
            <form action="login.php" method="POST">
               <div class="form-group form-group-sm mb-3">
                  <input type="text" name="email" placeholder="email" class="form-control">
               </div>
               <div class="form-group form-group-sm mb-3">
                  <input type="password" name="password" placeholder="Password" class="form-control">
               </div>
               <div><input type="submit" name="login" value="Login" class="btn btn-block btn-success"></div>
            </form>
         </div>
      </div>
   </div>
</body>

</html>