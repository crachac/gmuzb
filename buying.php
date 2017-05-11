<!DOCTYPE html>
<html>
<head>

    <style type="text/css">
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
        }

        label {
            font-weight: bold;
            width: 100px;
            font-size: 14px;
        }

        .box {
            border: #666666 solid 1px;
        }
    </style>
    <?php include('head.php') ?>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>


<body>
<?php include('mainindex.php') ?>
<a></a>
<link rel="stylesheet" href="Stylesheet.css" type="text/css">


<div class="panel panel-success">
    <div class="panel-heading">Enter car code</div>
    <div class="panel-body">
        <div class="body-content">
            <div class="module">

                <img src="2.PNG">
                <button type="button" class="btn btn-default"><a href="profile.php">Prev. page</a></button>
                <br>
                <?php
                // session_start();
                $db1 = mysqli_connect('127.0.0.1:3306', 'root', '', 'dbfc') or die("Unable connect");

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
// $customers_Name = mysqli_real_escape_string($db,$_POST['username']);
// $customers_Password = mysqli_real_escape_string($db,$_POST['password']);
                    $carForSale_Code = $_POST['carForSale_Code'];
                    $payment_Status_Code = $_POST['payment_Status_Code'];
                    $sql = "SELECT carsForSale_Id FROM CarsForSale WHERE carForSale_Code = '$carForSale_Code'";
                    $sql1 = "SELECT payment_Status_Id FROM Payment_Status WHERE payment_Status_Code = '$payment_Status_Code'";
                    $result = mysqli_query($db1, $sql);
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    $active = $row['active'];
                    $count = mysqli_num_rows($result);    //"SELECT customers_Id FROM Customers WHERE username = '$carForSale_Code' and passcode = '$customers_Password'";

                    $result1 = mysqli_query($db1, $sql1);
                    $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
                    $active1 = $row1['active'];
                    $count1 = mysqli_num_rows($result1);

                    if ($count == 1 && $count1 == 1) {
                        session_register("carForSale_Code");
                        $_SESSION['carForSale_Code_user'] = $carForSale_Code;
                        session_register("payment_Status_Code");
                        $_SESSION['payment_Status_Code_user'] = $payment_Status_Code;

                        if (test) {
                            //do something


////// 			Change URL!!!!!

                            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=buycomplited.php">';//This causes the browser to open the new page after 0 seconds, i.e immediately.
                        } else {
                            return false;
                        }
                    } else {
                        $error = "Your Car Code or Payment Code is invalid";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>


<body bgcolor="#FFFFFF">

<div align="center">
    <div style="width:300px; border: solid 1px #333333; " align="left">
        <div style="background-color:#333333; color:#FFFFFF; padding:3px;"><b>Enter Information!!!</b></div>

        <div style="margin:30px">

            <form action="" method="post">
                <label>Car Code</label><input type="text" name="carForSale_Code" class="box"/><br/><br/>
                <label>Payment Code</label><input type="text" name="payment_Status_Code" class="box"/><br/><br/>
                <!--   <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br /> -->
                <input type="submit" evalue=" Submit "/><br/>
            </form>

            <div style="font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>

        </div>

    </div>

</div>

<?php include('footer.php') ?>

</body>
</html>