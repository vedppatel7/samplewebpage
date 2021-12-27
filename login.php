<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
    // $sql = "Select * from users where username='$username' AND password='$password'";
    $sql = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        while($row=mysqli_fetch_assoc($result)){
            if ($password == $row['password']){ 
                $login = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['username'] = $username;
                $_SESSION['sno'] = $row['sno'];
                header("location: home.php");
                // echo $row['sno'];
            } 
            else{
                $showError = "Wrong password";
            }
        }
    } 
    else{
        $showError = "Invalid Credentials";
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
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in successfully !
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> ';
    }
    ?>

    <div class="container my-4">
     <h1 class="text-center">Login to our website</h1>
     <form action="login.php" method="post">
           <div class="form-group my-3">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">          
        </div>
        <div class="form-group my-3">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>         
        <button type="submit" class="btn btn-primary">Login</button>
     </form>
    </div>

    <script src="Utilities/bootstrap/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>
</html>