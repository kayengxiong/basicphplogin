<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
        <form action="login.php" method="POST">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Login" name="login">
        </form>
        <a href="register.php">Register Here</a>
    </div>
    <?php
        include 'connection.php';
        if(isset($_POST['login'])){
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $sql = "SELECT * FROM tb_login WHERE username = '$username' AND password = '$password'";
            $query = mysqli_query($conn, $sql);
            $countRow = mysqli_num_rows($query); // Count rows
            $data = mysqli_fetch_array($query);
            if($countRow > 0){
                $_SESSION['name'] = $data['name'];
                $_SESSION['surname'] = $data['surname'];
                header("location: index.php");
            }
        }
    ?>
</body>
</html>