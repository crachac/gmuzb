<?php
include('session.php');
include('login.php');
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


<img src="2.PNG">

<div class="panel panel-default">
    <div class="panel-heading">Enter the data of car model</div>
    <div class="panel-body">In this section you  can enter Car Model which is available in Sale in Store!!!</div>
    <br>



</div>


<div class="container" style="width: 500px">
<form action="search-database.php" method="post">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search" name="search">
            <div class="input-group-btn">
                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            </div>
        </div>
    </form>
</div>



<br>
<br>
<br>
<br>

<b id="logout"><a href="logout.php">
        <button type="button" class="btn btn-warning">Log out</button>
    </a></b>
</body>
</html>