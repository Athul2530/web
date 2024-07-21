<?php 
  require("../config.php");
  $admin = new Admin();

  if (!isset($_SESSION['admin_id'])) {
    header("Location: " . BASE_URL . 'student/login.php');
    exit(); // Make sure to stop script execution after redirection
}


  $users_count = $admin->ret("SELECT * FROM users")->rowCount();
  $student_count = $admin->ret("SELECT * FROM student")->rowCount();
  $status_count = $admin->ret("SELECT * FROM student where status ='true'")->rowCount();
  
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>index page</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <div class="side-bar">
        <h1 style="text-align:center;color:Red;font-size:50px;">Yathra</h1>
        <div class="list">
            <div class="list1"><a href="home.php">HOME</a></div>
            <div class="list1"><a href="allpass.php">All PASS</a></div>
            <div class="list1"><a href="Manage.php">MANAGE PASS</a></div>
        </div>
    </div>
    <div class="content">
        <div class="header">
            <a class="loginad" href="../controller/u_logout.php"
                style="margin-left:1130px;font-size:35px;height:30px;text-decoration:none;">Logout

            </a>
        </div>
        <div class="box">
            <div class='container' style="background-color:#80ced6;">
                <h1 style="text-align:center;font-family:cursive;">Total Students</h1>
                <span
                    style="display:block;text-align:center;font-size:50px;font-weight:900;"><?php echo  $users_count; ?></span>
            </div>
            <div class='container' style="background-color:#80ced6;">
                <h1 style="text-align:center;font-family:cursive;">Total Applications</h1>
                <span
                    style="display:block;text-align:center;font-size:50px;font-weight:900;"><?php echo  $student_count; ?></span>
            </div>
            <div class='container' style="background-color:#80ced6;">
                <h1 style="text-align:center;font-family:cursive;">Total Approved</h1>
                <span
                    style="display:block;text-align:center;font-size:50px;font-weight:900;"><?php echo  $status_count; ?></span>
            </div>
        </div>
    </div>


</body>

</html>
