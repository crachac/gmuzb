<?php


$carsForSale_id1 = $_POST['carsForSale_id1'];
$model_cod1 = $_POST['model_cod1'];
$car_name1 = $_POST['car_name1'];


$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
$dbname = "dbfc";

$mysqli = new mysqli('127.0.0.1:3306', 'root', '', 'dbfc');
$mysqli = mysqli_connect('127.0.0.1:3306', 'root', '', 'dbfc') or die("Unable connect");
// Check connection
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO Customer_Care
 (service_Type, model_Code, experation_day)
    VALUES ('$carsForSale_id1', '$model_cod1', '$car_name1')";
    // use exec() because no results are returned
    $conn->exec($sql);

} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>


<!DOCTYPE html>
<html>
<head>
    <?php include('head.php') ?>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>


<body>
<?php include('mainindex.php') ?>
<a></a>
<link rel="stylesheet" href="Stylesheet.css" type="text/css">


<div class="panel panel-success">
    <div class="panel-heading"><h1>Insert the new cars for sale</h1></div>
    <div class="panel-body">
        <div class="body-content">
            <div class="module">

                <form class="form" action="phpformforcustomercare.php" method="post" enctype="multipart/form-data"
                      autocomplete="off">
                    <div class="alert alert-error"></div>
                    <input type="text" placeholder="Service Type" name="carsForSale_id1"/>
                    <input type="text" placeholder="Model Code" name="model_cod1"/>
                    <input type="text" placeholder="Experation Day" name="car_name1"/>
                    <br>


                    <!-- <input type="text" placeholder="Car Manufacturer Name " name="carManufacturer_name" required /> -->
                    <input type="submit" value="Register" name="register" class="btn btn-primary"/>

                    <button type="button" class="btn btn-primary" ><a href="profileadmin.php">Prev. page</a></button>
                    <br>
                </form>

            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>
</body>
</html>
