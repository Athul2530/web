<?php include '../config.php';
$admin = new Admin();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body class="main">
    <div class="login">
        <h2>Login</h2>
        <form action="../controller/student_login.php" method="post">
            <div class="form-group">
                <label for="email" style="color:purple;">Enter the email</label>
                <input type="email" id="email" name="email" placeholder="Enter the email" style="padding:10px;"
                    required>
                <label for="password" style="color:purple;">Password</label>
                <input type="password" id="password" name="password" placeholder="Password" style="padding:10px;"
                    required>

                <p class="sign" style="text-align:center;color:black;">Don't Have An Account? <a href="register.php"
                        style="color:purple;">Register</a></p>
            </div>
            <button type="submit" name="l_user" class="btnform">Login</button>
        </form>
    </div>
    </div>
</body>

</html>
