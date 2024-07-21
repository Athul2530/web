<?php
include '../config.php';
$admin = new Admin();

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
  $uid = $_SESSION['user_id'];
  $stmt = $admin->ret("SELECT * FROM `users` WHERE `user_id`='$uid'");
  $row = $stmt->fetch(PDO::FETCH_ASSOC);
}

?>

<nav class="navbar">
    <div class="navdiv">
        <div class="logos"><a href="#">Yathra</a> </div>
        <ul>

            <a href="about.php" style="margin-right:50px;color:red;font-size:25px">About</a>
            <?php if(isset($uid)) {?> <a href="contact.php" style="margin-right:50px;color:red;font-size:25px">Pass
                Status</a><?php } ?>
            <a href="Studentpass.php" style="color:red;font-size:25px">Student pass</a>
            <?php if (isset($row['user_id'])): ?>
            <a href="contact.php" style="margin-right:30px;color:red;"><?php echo $row['username']; ?></a>
            <a href="../controller/u_logout.php" class="logBtn">Log Out</a>
            <?php else: ?>
            <button><a href="login.php">SignIn</a></button>
            <button><a href="register.php">SignUp</a></button>
            <?php endif; ?>
        </ul>
    </div>
</nav>
