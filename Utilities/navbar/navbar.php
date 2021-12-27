<?php 
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    $loggedin= true;
    }
    else{
    $loggedin = false;
    } 
?>

<header class="p-3 bg-light text-dark">
        <div class="container-fluid">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="home.php" class="nav-link px-2 text-dark">Home</a></li>
                    <?php 
                        if ($loggedin) {
                            echo '<li><a href="logout.php" class="nav-link px-2 text-dark">Logout</a></li>
                            <li><a href="form.php" class="nav-link px-2 text-dark">Form</a></li>
                            <li><a href="allForms.php" class="nav-link px-2 text-dark">Your forms</a></li>
                            <p><a class=" nav-link px-2 text-dark"><b>Welcome - '.$_SESSION['username'].'</b></a></p>';
                        }
                        if (!$loggedin) {
                            echo '<li><a href="login.php" class="nav-link px-2 text-dark">Login</a></li>
                            <li><a href="signup.php" class="nav-link px-2 text-dark">Signup</a></li>';
                        }
                    ?>
                </ul>

                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3 justify-content-end">
                    <input type="search" class="form-control form-control-dark" id="searchTxt" placeholder="Search..."
                        aria-label="Search">
                </form>
            </div>
        </div>
    </header>