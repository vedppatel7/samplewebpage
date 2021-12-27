<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $exists=false;
    if(($password == $cpassword) && $exists==false){
        $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ('$username', '$password', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        if ($result){
            $showAlert = true;
        }
        else {
            $showError = "Username already exists";
        }
    }
    else{
        $showError = "Passwords do not match";
    }
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
    <?php include 'Utilities/navbar/navbar.php' ?>
    <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show msg"         role="alert" id="success">
            <strong>Success: </strong> Your account is now created and now you can login !
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> ';
    }
    ?>

    <div class="container my-4">
     <h1 class="text-center">Signup to our website</h1>
     <form action="signup.php" method="post">
        <div class="form-group my-3">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Username must be 2-20 characters long</small>            
        </div>
        <div class="form-group my-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
            <small id="emailHelp" class="form-text text-muted">Make sure to type a safe and secure password</small>
        </div>
        <div class="form-group my-3">
            <label for="cpassword">Confirm Password</label>
            <input type="password" class="form-control" id="cpassword" name="cpassword">
            <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
        </div>
         
        <button type="submit" class="btn btn-primary">SignUp</button>
     </form>
    </div>

  
    <script src="Utilities/bootstrap/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>