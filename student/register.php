<?php include '../config.php';
$admin = new Admin();

if (isset($_SESSION['user_id'])) {
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Page</title>
    <!-- <link rel="stylesheet" href="css/login.css">  -->
    <!-- <link rel="stylesheet" href="css/signup.css"> -->
    <link rel="stylesheet" href="style2.css">
    <!-- <link rel="stylesheet" href="css/header.css"> -->
</head>

<body class="back">
    <div class="main">
        <?php include 'mini.php' ?>
        <div class="logod">
            <h2 style="text-align:center;color:blue;">Sign up</h2>
            <form style="padding:20px;" action="../controller/registerBackend.php" method="post">
                <label for="">Enter your username</label><br>
                <input type="text" name="username" placeholder="username" style="padding:10px;" required><br>
                <label for="">Enter your email</label><br>
                <input type="email" name="email" placeholder="email" style="padding:10px;" required><br>
                <label for="">Enter your password</label><br>
                <input type="password" name="password" placeholder="Password" style="padding:10px;" required><br>
                <input type="submit" class="btn" value="Login">
                <a href="login.php">Already have an Account?</a>

            </form>
        </div>
    </div>
</body>

</html>
