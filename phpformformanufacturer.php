<?php


// $carsForSale_id1 = $_POST['carsForSale_id1'];
$model_cod1 = $_POST['model_cod1'];
// $car_name1 = $_POST['car_name1'];


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
    $sql = "INSERT INTO Car_Manufacturer
 (carManufacturer_Name)
    VALUES ('$model_cod1')";
    // use exec() because no results are returned
    $conn->exec($sql);

} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>

<html>
<head>
    <?php include('head.php') ?>


</head>
<body>
<?php include('mainindex.php') ?>
<a></a>

<link rel="stylesheet" href="Stylesheet.css" type="text/css">


<div class="panel panel-primary">
    <div class="panel-heading">
        <h1>Insert car model</h1>
    </div>
    <div class="panel-body">


        <div class="body-content">
            <div class="module">

                <form class="form" action="phpformformanufacturer.php" method="post" enctype="multipart/form-data"
                      autocomplete="off">
                    <div class="alert alert-error"></div>
                    <!--       <input type="text" placeholder="Model Code" name="carsForSale_id1"/> -->
                    <input type="text" placeholder="Model Name" name="model_cod1"/>
                    <!-- <input type="text" placeholder="Model Color" name="car_name1" /> -->

                    <!-- <input type="text" placeholder="Car Manufacturer Name " name="carManufacturer_name" required /> -->
                    <input type="submit" value="Register" name="register" class="btn btn-primary"/>
                    <br>
                    <button type="button" class="btn btn-default"><a href="profileadmin.php">Prev. page</a></button>

            </div>
        </div>
    </div>
</div>


</body>
</html>
