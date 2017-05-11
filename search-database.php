
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
    <div class="panel-heading"><h1>You succesfully buy the car</h1></div>
    <div class="panel-body">
        <div class="body-content">
            <div class="module">

                <img src="2.PNG">


                <br>   <br>   <br>   <br>
                <?php
                //load database connection
                // $host = "localhost";
                // $user = "root";
                // $password = "";
                // $database_name = "databasename";
                $host = "127.0.0.1:3306";
                $user = "root";
                $password = "";
                $database_name = "dbfc";
                $pdo = new PDO("mysql:host=$host;dbname=$database_name", $user, $password, array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ));
                // Search from MySQL database table
                $search=$_POST['search'];
                $query = $pdo->prepare("select * from CarsForSale where car_Name LIKE '%$search%' OR carForSale_Code LIKE '%$search%'  LIMIT 0 , 10");
                $query->bindValue(1, "%$search%", PDO::PARAM_STR);
                $query->execute();
                // Display search result
                if (!$query->rowCount() == 0) {
                echo "Search found : <b>You need Car Code<b/> for buying!!<br/>";
                echo "<table style=\"font-family:arial;color:#333333;\">";
                echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Car Name</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Car Code</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Car Price</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Buy!!</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;background:#98bf21;\">Back!!</td></tr>";
                while ($results = $query->fetch()) {
                echo "<tr><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                echo $results['car_Name'];
                echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                echo $results['carForSale_Code'];
                echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                echo "$".$results['car_Price'];
                echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                ?>
                <b id="logout"><a href="buying.php">Buy!</a>
                    <?
                    echo "</td><td style=\"border-style:solid;border-width:1px;border-color:#98bf21;\">";
                    ?>
                    <b id="logout"><a href="profile.php">Back!</a>
                        <?
                        // echo "$".$results['car_Price'];
                        echo "</td></tr>";

                        }
                        echo "</table>";

                        } else {
                            echo 'Nothing found';
                        }
                        ?>
                <button type="button" class="btn btn-default" ><a href="profile.php">Prev. page</a></button>
                <br>
            </div>
        </div>
    </div>
</div>

<?php include('footer.php') ?>
</body>
</html>




