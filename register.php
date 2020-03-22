<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        .form{
            margin: auto;
            width: 30%;
        }
        input{
            display: block;
            margin-top: 20px;
            padding: 5px;
            width: 100%;
        }
        input[type='submit']{
            width: 103%;
        }
    </style>
</head>
<body>
    <div class="form">
        <form action="register.php" method="POST">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="surname" placeholder="Surname">
            <input type="submit" value="Register" name="register">
        </form>
        <a href="login.php">Login</a>
    </div>

    <?php
        include 'connection.php';
        if(isset($_POST['register'])){
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $surname = mysqli_real_escape_string($conn, $_POST['surname']);
            $sql = "INSERT INTO tb_login VALUES (NULL, '$name', '$surname', '$username', '$password')";
            $query = mysqli_query($conn, $sql);
            header("location: login.php");
        }
    ?>
</body>
</html>