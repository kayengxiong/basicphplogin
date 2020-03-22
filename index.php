<?php
    include 'connection.php';
    if(!isset($_SESSION['name'])){
        header("location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        body{
             background-color: #f1f1f1;
             padding: 0px 100px 0px 100px;
             font-size: 24px;
        }
        p{
            font-size: 30px;
            text-align: center;
        }
        .information{
            border-left: 5px solid blue;
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <div>
        <p>Welcome to My Website</p>
    </div>
    <div class="information">
        <span>Name: </span> <?php echo $_SESSION['name']?>
        <br>
        <br>
        <span>Surname: </span> <?php echo $_SESSION['surname']?>
    </div>
    <a href="logout.php">Logout</a>
</body>
</html>