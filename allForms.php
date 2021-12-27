<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet "href="Utilities/bootstrap/node_modules/bootstrap/dist/css/bootstrap.min.css"></link>
</head>
<body>
<?php include "Utilities/navbar/navbar.php"; ?>
<div class="container my-4" id="ques">

    <!-- Search form text -->
    <div class="text-center">
        <label for="searchText" class=" display-6 form-label"><strong>Browse your forms</strong></label>
        <input type="text" id="searchText" name="searchText" class="form-control" placeholder="Search your forms...">
    </div>

    <div class="row my-4">

    <?php
    // Connecting to database
    include "_dbconnect.php";

    // Fetching data from database
    $sql = "SELECT * FROM `data`";
    $result = mysqli_query($conn, $sql);

    // Looping through all data in the table and printing
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['Sr No.'];
        $problem = $row['Problem Description'];
        $date = $row['Date'];
        $name = $row['Name'];
        $workno = $row['Work Order No.'];
        $userid = $_SESSION['sno'];

        // IF loggedin user is equal to all the User Sr No. then print the forms
        if ($userid == $row['User Sr No.']) {
        echo '<div class="col-md-4 my-2 formCards">
                  <div class="card" style="width: 18rem;">
                      <div class="card-body">
                          <h5 class="card-title"><a> Work Order No. : ' . $workno . '</a></h5>
                          <p class="card-text">By ' . substr($name, 0, 90). '... </p>
                          <a href="subject.php?sno='.$id.'&userid='.$userid.'" class="btn btn-primary">View response</a>
                      </div>
                  </div>
                </div>';
        }
    }
    ?>
    </div>
    </div>


    <script src="Utilities/bootstrap/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    
    <script>

        // SEARCH FUNCTIONALITY: - 

        let search = window.document.getElementById("searchText");
        search.addEventListener("input", function (e) {
            let input = search.value.toLowerCase();
            console.log("Input event fired !", input);

            let formCards = window.document.getElementsByClassName("formCards");
            console.log(formCards)
            Array.from(formCards).forEach(function (element, index) {
                let formText = element.getElementsByTagName("h5")[0].innerText;
                console.log(formText);

                if (formText.includes(input)) {
                    element.style.display = "block";
                }

                else {
                    element.style.display = "none";
                };
            });
        });
    </script>
</body>
</html>