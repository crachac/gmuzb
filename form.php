<?php
session_start();
$pattern1 = "/^[A-Za-z0-9\.|-|_]*[@]{1}[A-Za-z0-9\.|-|_]*[.]{1}[a-z]{2,5}/";
$number = "[\d]";
$number2 = "#[0-9]+#";
$uletter = "#[A-Z]+#";
$lletter = "#[a-z]+#";
$name = "(^[A-Za-z0-9]*$)";
$pcountry = "(^[A-Za-z]*$)";
$_SESSION['message'] = '';
$mysqli = mysqli_connect('127.0.0.1:3306', 'root', '', 'dbfc') or die("Unable connect");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!preg_match($name, $_POST['username'])) {
        ?><span style="color:red"><?php echo "User name is not valid"; ?></span> <?php
    } elseif (!preg_match($number, $_POST['age'])) {
        ?><span style="color:red"><?php echo "Age is only number"; ?></span> <?php
    } elseif (!preg_match($pattern1, $_POST['email'])) {
        ?><span style="color:red"><?php echo "Email is not in valid format"; ?></span> <?php
    } elseif (!preg_match($number2, $_POST['password'])) {
        ?><span style="color:red"><?php echo "Your Password Must Contain At Least 1 Number"; ?></span> <?php
    } elseif (!preg_match($uletter, $_POST['password'])) {
        ?><span style="color:red"><?php echo "Your Password Must Contain At Least 1 UPPER letter"; ?></span> <?php
    } elseif (!preg_match($lletter, $_POST['password'])) {
        ?><span style="color:red"><?php echo "Your Password Must Contain At Least 1 lawer letter"; ?></span> <?php
    } elseif ($_POST['password'] !== $_POST['confirmpassword']) {
        ?><span style="color:red"><?php echo "Password Not Match"; ?></span> <?php
    } elseif (!preg_match($pcountry, $_POST['country'])) {
        ?><span style="color:red"><?php echo "Country is only letter"; ?></span> <?php
    } elseif (!preg_match($number, $_POST['zip_code'])) {
        ?><span style="color:red"><?php echo "Zip-Code is only number"; ?></span> <?php
    } elseif (!preg_match($pcountry, $_POST['town_city'])) {
        ?><span style="color:red"><?php echo "City is only letter"; ?></span> <?php
    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $age = $_POST['age'];
        $country = $_POST['country'];
        $zip_code = $_POST['zip_code'];
        $town_city = $_POST['town_city'];
        // $username="root";$password="";$database="dbfc"; $password = $_POST['password'];
        // mysql_connect(localhost,$username,$password);
        // $customers_Name = $mysqli->real_escape_string($_POST['username']);
        // $customers_Email = $mysqli->real_escape_string($_POST['email']);
        // $customers_Password = md5($_POST['Password']);
        // $sql = "INSERT INTO Customers (username, email, Password)" . "VALUES ('$customers_Name', '$customers_Email', '$customers_Password')";
        // if($mysqli->query($sql) === true){
        //   $_SESSION['message'] = 'Registration Successfull!!!';
        // }else echo "sorrryyyy!!!";

        $sql = "INSERT INTO Customers (customers_Name, customers_Age, customers_Email, customers_Password) VALUES ('$username', '$age', '$email', '$password')";

        $sql1 = " INSERT INTO Adress (country, post_Zip_Code, town_city) VALUES ('$country', '$zip_code', '$town_city')";
        if (mysqli_query($mysqli, $sql) && mysqli_query($mysqli, $sql1)) {

            // header("location: login.php");
            //    function show(){
            //     echo "Successfull";
            //      document.location.href == "login.php";
            // }

            if (test) {
                //do something
                echo '<META HTTP-EQUIV="Refresh" Content="0; URL=profile.php">';//This causes the browser to open the new page after 0 seconds, i.e immediately.
            } else {
                echo "<script>alert('database connection_aborted');</script>";
                return false;
            }

        }
    }//end else
}//end POST
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
        <h1>Create an account</h1>
    </div>
    <div class="panel-body">


        <div class="body-content">
            <div class="module">
                <div class="body-content">
                    <div class="module">

                        <form class="form" action="form.php" method="post" enctype="multipart/form-data"
                              autocomplete="off">
                            <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
                            <input type="text" placeholder="User Name" name="username" required maxlength="20"/>
                            <br><br>
                            <input type="text" placeholder="User Age" name="age" required minlength="2" maxlength="2"/> <br><br>
                            <input type="email" placeholder="Email" name="email" required maxlength="20"/> <br><br>

                            <input type="password" placeholder="Password" name="password" autocomplete="new-password"
                                   required
                                   minlength="4" maxlength="20"/> <br><br>
                            <input type="password" placeholder="Confirm Password" name="confirmpassword"
                                   autocomplete="new-password"
                                   required minlength="4" maxlength="20"/> <br><br>
                            <input type="text" placeholder="Country" name="country" required maxlength="20"/> <br><br>
                            <input type="text" placeholder="Zip code" name="zip_code" required minlength="5"
                                   maxlength="5"/> <br><br>
                            <input type="text" placeholder="Town City" name="town_city" required/> <br><br>
                            <input type="submit" value="Register" name="register" class="btn btn-primary"/>

                    </div>
                </div>


            </div>
        </div>
    </div>
</div>


</body>
</html>





