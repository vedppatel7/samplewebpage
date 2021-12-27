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
    <link rel="stylesheet" href="forms.css">
    <title></title>
</head>
<body>

<?php include "Utilities/navbar/navbar.php"; ?>
<?php
    $random = random_int(1000, 9999);
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        include "_dbconnect.php";

        $name = $_POST["name"];
        $contact = $_POST["contact"];
        $alternateNumber = $_POST["alternateNumber"];
        $address = $_POST["address"];
        $product = $_POST["product"];
        $modelname = $_POST["modelname"];
        $modelno = $_POST["modelno"];
        $serialno = $_POST["serialno"];
        $IMEI_1 = $_POST["IMEI_1"];
        $IMEI_2 = $_POST["IMEI_2"];
        $problemDescription = $_POST["problem"];
        $currentStatus = $_POST["status"];
        

        $sql = "INSERT INTO `data` (`User Sr No.`, `Sr No.`, `Name`, `Mobile No.`, `Alternate No.`, `Address`, `Product Type`, `Model Name`, `Model No.`, `Serial No.`, `IMEI_1`, `IMEI_2`, `Accessories`, `Problem Description`, `Current Status`, `Work Order No.`, `Date`) VALUES ('".$_SESSION['sno']."', NULL, '$name', '$contact', '$alternateNumber', '$address', '$product', '$modelname', '$modelno', '$serialno', '$IMEI_1', '$IMEI_2', '', '$problemDescription', '$currentStatus', '$random', current_timestamp())";
        $result = mysqli_query($conn, $sql);
        echo $result;

        if ($result){
            $showAlert = true;
            // header("Location:home.php?formSuccess=true");
            echo '<div class="alert alert-success alert-dismissible fade show msg" role="alert" id="success">
            <strong>Message: </strong> Thankyou for submitting !
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
    };
?>

<div class="container">
    <p class="display-6">Submit your issue:</p>

    <form class="row g-3 my-3" method="post" action="form.php">
        <div class="col-md-6">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter customer name" maxlength="20" required>
            <small></small>
        </div>
        <div class="col-md-6">
            <label for="contact" class="form-label">Mobile No. :</label>
            <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter mobile number" maxlength="10" required>
            <small></small>
        </div>
        <div class="col-md-3">
            <label for="alternateNumber" class="form-label">Alternate No. :</label>
            <input type="text" class="form-control" id="alternateNumber" name="alternateNumber" placeholder="Enter mobile number" maxlength="10" required>
            <small></small>
        </div>
        <div class="col-9">
            <label for="address" class="form-label">Address:</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Enter customer address" required>
            <small></small>
        </div>
        <div class="col-md-4">
            <label for="product" class="form-label">Product type:</label>
            <select id="product" name="product" class="form-select" aria-label="Default select example">
                <option value="Cell Phone">Cell Phone</option>
                <option value="Laptop">Laptop</option>
                <option value="Smart Watch">Smart Watch</option>
                <option value="Bluetooth">Bluetooth</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="modelname" class="form-label">Model Name:</label>
            <input type="text" class="form-control" id="modelname" name="modelname" placeholder="Enter model name" required>
            <small></small>
        </div>
        <div class="col-md-4">
            <label for="modelno" class="form-label">Model No. :</label>
            <input type="text" class="form-control" id="modelno" name="modelno" placeholder="Enter model no. " required>
            <small></small>
        </div>
        <div class="col-md-4">
            <label for="serialno" class="form-label">Serial No. :</label>
            <input type="text" class="form-control" id="serialno" name="serialno" placeholder="Enter serial no. " required>
            <small></small>
        </div>
        <div class="col-md-4">
            <label for="IMEI_1" class="form-label">IMEI 1:</label>
            <input type="text" class="form-control" id="IMEI_1" name="IMEI_1" placeholder="Enter IMEI" required>
            <small></small>
        </div>
        <div class="col-md-4">
            <label for="IMEI_2" class="form-label">IMEI 2:</label>
            <input type="text" class="form-control" id="IMEI_2" name="IMEI_2" placeholder="Enter IMEI" required >
            <small></small>
        </div>
        <div class="col-12">
            <label for="accessories" id="accessories" name="accessories" class="form-label">Accessories:</label>
            <div class="form-check">
                <input class="form-check-input gridCheck" value="Data Cable" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="dataCable" id="dataCable">
                    Data Cable
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input gridCheck" value="Adapter" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="adapter" id="adapter">
                 Adapter
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input gridCheck" value="Stylus" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="stylus" id="stylus">
                    Stylus
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input gridCheck" value="Charger" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="charger" id="charger">
                    Charger
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input gridCheck" value="Cover/Case" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="cover" id="cover">
                    Cover/Case
                </label>
            </div>

            <br>
            <div class="col-md-3">
                <label for="problem" class="form-label">Problem Description</label>
                <textarea class="form-control" id="problem" name="problem" rows="3" required></textarea>
                <small></small>
            </div>
        </div>

        <br>

        <div class="col-md-6">
            <label for="status" class="form-label">Current status:</label>
            <select id="status" name="status" class="form-select">
                <option value="Not Attempted">Not Attempted</option>
                <option value="Work in Progress">Work in Progress</option>
                <option value="Estimate Pending">Estimate Pending</option>
                <option value="Approval Pending">Approval Pending</option>
                <option value="Part Pending">Part Pending</option>
                <option value="Ready for Delivery">Ready for Delivery</option>
                <option value="Delivered">Delivered</option>
            </select>
        </div>

        <div class="col-md-6">
            <label for="workNo" class="form-label">Work order no. :</label>
            <input type="text" class="form-control workNo" id="workNo" name="workNo" value="<?php echo $random; ?>" disabled>

            <!-- <div class="form-text">No more than 20 characters allowed.</div> -->
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
        </div>
    </form>
</div>


    <script src="Utilities/bootstrap/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="jspdf.min.js"></script>
    <script src="forms.js"></script>
    <!-- <script>
    let workNo = document.getElementById("workNo");
    let randomNumber = Math.floor(Math.random() * (9999 - 1000 + 1)) + 1000;
    workNo.setAttribute("value", `${randomNumber}`);
    </script> -->

</body>
</html>