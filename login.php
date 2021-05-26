<?php

session_start();
$conn = mysqli_connect('localhost', 'root', '' , 'students') or die ('Unable to connect');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meddy Dior | Login</title>
    <link rel="stylesheet" href="style.css">

    <style>
        .login-wrapper {
            margin: auto !important;
            width: 50% !important;
            padding-top: 10%;
        }

        input {
            margin-bottom: 20px;
        }

        label {
            margin-right: 1rem;
        }

        .loginbtn {
            width: 45% height:35%;
        }

        button {
            width: 35%;
            height: 30px;
            cursor: pointer;
        }
    </style>
</head>

<body>

    <div class="login-wrapper">
        <h2>Maddy Dior</h2>
        <form action="login.php" method="post">
            <label for="">Username</label> <input type="text" name="uname" placeholder="Username" required=""><br />
            <label for="">Password</label> <input type="password" name="pwd" placeholder="Password" required=""><br />
            <button type="submit" name="login">Login</button>
        </form>
    </div>

    <?php
    if (isset($_POST['login'])){
        $uname = $_POST['uname'];
        $pwd = $_POST['pwd'];

    $select = mysqli_query($conn," SELECT * FROM students_tbl WHERE uname = '$uname' AND pwd = '$pwd' ");
    $row  = mysqli_fetch_array($select);

    if(is_array($row)) {
        $_SESSION["uname"] = $row['uname'];
        $_SESSION["pwd"] = $row['pwd'];
    }   else {
        echo '<script type = "text/javascript">';
        echo 'alert("Invalid Username or Password !");';
        echo 'window.location.href = "login.php" ';
        echo '</script>';
    }
    }
    if(isset($_SESSION["uname"])){
        header("Location:home.php");
    }
?>

</body>

</html>