<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>
<!doctype html>
<html lang="en">
  <head>
     <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet "href="Utilities/bootstrap/node_modules/bootstrap/dist/css/bootstrap.min.css"></link>
  </head>
  <body>
    <?php require 'Utilities/navbar/navbar.php'; ?>
    
    <div class="container my-3">
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Welcome - <?php echo $_SESSION['username']?></h4>
      <p>Hey how are you doing? Welcome ! You are logged in as <?php echo $_SESSION['username']?></p>
      <hr>
      <p class="mb-0">Whenever you need to, be sure to logout <a href="logout.php"> using this link.</a></p>
    </div>
  </div>

   <script src="Utilities/bootstrap/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>