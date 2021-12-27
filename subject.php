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
    <?php
        include "_dbconnect.php";
        $id = $_GET['sno'];
        $userid = $_GET['userid'];
        $sql = "SELECT * FROM `data` WHERE `Sr No.` = $id";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result)){
            $name = $row['Name'];
            $contact = $row['Mobile No.'];
            $alternateNumber = $row['Alternate No.'];
            $address = $row['Address'];
            $product = $row['Product Type'];
            $modelname = $row['Model Name'];
            $modelno = $row['Model No.'];
            $serialno = $row['Serial No.'];
            $IMEI_1 = $row['IMEI_1'];
            $IMEI_2 = $row['IMEI_2'];
            $accessories = $row['Accessories'];
            $problem = $row['Problem Description'];
            $status = $row['Current Status'];
            $workNo = $row['Work Order No.'];
            $date = $row['Date'];
          echo '<div class="container">
    <form class="row g-3 my-3" method="post" action="form.php">
        <div class="col-md-6">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter customer name" maxlength="20" value="'.$name.'" disabled>
            <small></small>
        </div>
        <div class="col-md-6">
            <label for="contact" class="form-label">Mobile No. :</label>
            <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter mobile number" maxlength="10" value="'.$contact.'" disabled>
            <small></small>
        </div>
        <div class="col-md-3">
            <label for="alternateNumber" class="form-label">Alternate No. :</label>
            <input type="text" class="form-control" id="alternateNumber" name="alternateNumber" placeholder="Enter mobile number" maxlength="10" value="'.$alternateNumber.'" disabled>
            <small></small>
        </div>
        <div class="col-9">
            <label for="address" class="form-label">Address:</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Enter customer address" value="'.$address.'" disabled>
            <small></small>
        </div>
        <div class="col-md-4">
            <label for="product" class="form-label">Product type:</label>
            <select id="product" name="product" class="form-select" aria-label="Default select example" value="'.$product.'" disabled>
                <option value="Cell Phone">Cell Phone</option>
                <option value="Laptop">Laptop</option>
                <option value="Smart Watch">Smart Watch</option>
                <option value="Bluetooth">Bluetooth</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="modelname" class="form-label">Model Name:</label>
            <input type="text" class="form-control" id="modelname" name="modelname" placeholder="Enter model name" value="'.$modelname.'" disabled>
            <small></small>
        </div>
        <div class="col-md-4">
            <label for="modelno" class="form-label">Model No. :</label>
            <input type="text" class="form-control" id="modelno" name="modelno" placeholder="Enter model no. " value="'.$modelno.'" disabled>
            <small></small>
        </div>
        <div class="col-md-4">
            <label for="serialno" class="form-label">Serial No. :</label>
            <input type="text" class="form-control" id="serialno" name="serialno" placeholder="Enter serial no. " value="'.$serialno.'" disabled>
            <small></small>
        </div>
        <div class="col-md-4">
            <label for="IMEI_1" class="form-label">IMEI 1:</label>
            <input type="text" class="form-control" id="IMEI_1" name="IMEI_1" placeholder="Enter IMEI" value="'.$IMEI_1.'" disabled>
            <small></small>
        </div>
        <div class="col-md-4">
            <label for="IMEI_2" class="form-label">IMEI 2:</label>
            <input type="text" class="form-control" id="IMEI_2" name="IMEI_2" placeholder="Enter IMEI" value="'.$IMEI_2.'" disabled>
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
                <input class="form-control" id="problem" name="problem" rows="3" value="'.$problem.'" disabled></input>
                <small></small>
            </div>
        </div>

        <br>

        <div class="col-md-6">
            <label for="status" class="form-label">Current status:</label>
            <select id="status" name="status" class="form-select"  value="'.$status.'" disabled>
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
            <input type="text" class="form-control workNo" id="workNo" name="workNo" value="'.$workNo.'" disabled>
        </div>

        <div class="col-md-6">
            <label for="date" class="form-label">Date:</label>
            <input type="text" class="form-control workNo" id="date" name="date" value="'.$date.'" disabled>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary" id="submit">Submit</button>
        </div>
    </form>
</div>';
        }
    ?>
    <script src="Utilities/bootstrap/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>