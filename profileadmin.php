<?php
include('sessionfadmin.php');
?>
<!DOCTYPE html>
<html>
<head>
    <?php include('head.php') ?>


    <title>Your helo Page You are admin</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php include('mainindex.php') ?>


<br>

<img src="gm_uzbekistan.png" class="img-responsive" alt="Cinque Terre" width="100%" height="50%" >


<div class="panel panel-default">
    <div class="panel-heading"><a href="phpformforcarforsale.php">Enter the data of car for sale </a></div>
    <div class="panel-body">In this section you  can enter Car Model which is available in Sale in Store!!!</div>
    <br>

    <div class="panel-heading"><a href="phpformforcarmodel.php">Enter the data of car model </a></div>
    <div class="panel-body">In this section you  can enter Car Model which is available in Sale in Store!!!</div>
    <br>
    <div class="panel-heading"><a href="phpformformanufacturer.php">Enter manufacturer of Model </a></div>
    <div class="panel-body">Manufacturer</div>
    <br>

    <div class="panel-heading"><a href="phpformforcustomercare.php">Enter the data of customer care!</a></div>
    <div class="panel-body">Customer Care</div>
</div>


<b id="logout"><a href="logout.php">
        <button type="button" class="btn btn-warning">Log out </button></a></b>

</body>
</html>