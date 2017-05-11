

<html>
<head>
    <?php include('head.php') ?>
    <title>Inserting data</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
<?php include('mainindex.php') ?>
<a></a>


<link rel="stylesheet" href="Stylesheet.css" type="text/css">
<div class="body-content">
    <div class="module">
        <h1>Car for sale</h1>
        <form class="form" action="phpformforcarforsale.php" method="post" enctype="multipart/form-data" autocomplete="off">
            <div class="alert alert-error"></div>
            <input type="text" placeholder="Cars For Sale Code" name="carsForSale_id1"/>

            <input type="text" placeholder="Car Name" name="car_name1" />
            <input type="text" placeholder="Car Price" name="car_Price"/>
            <br>

            <!-- <input type="text" placeholder="Car Manufacturer Name " name="carManufacturer_name" required /> -->
            <input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
            <b id="logout"><a href="profileadmin.php">Back!</a></b>
    </div>
</div>








<button type="button" class="btn btn-default" ><a href="profileadmin.php">Prev. page</a></button>

<?php


$carsForSale_id1 = $_POST['carsForSale_id1'];

$car_name1 = $_POST['car_name1'];
$car_Price = $_POST['car_Price'];

$servername = "127.0.0.1:3306";
$username = "root";
$password = "";
$dbname = "dbfc";

$mysqli = new mysqli('127.0.0.1:3306','root', '', 'dbfc');
$mysqli = mysqli_connect('127.0.0.1:3306','root', '', 'dbfc') or die("Unable connect");
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

// Attempt insert query execution
$sql = "INSERT INTO CarsForSale (carForSale_Code, car_Name, car_Price)
     VALUES ('$carsForSale_id1', '$car_name1', '$car_Price')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
    //              if (test){
    //    //do something
    //    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=profileadmin.php">';//This causes the browser to open the new page after 0 seconds, i.e immediately.
    // }  else {
    //    return false;
    // }
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}

// Close connection
$mysqli->close();

?>
</body>
</html>


