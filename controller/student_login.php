<?php
include '../config.php'; // Include the configuration file
$admin = new Admin(); // Instantiate the Admin class

if (isset($_POST['l_user'])) {
    $uemail = $_POST['email']; // Get the email from the form
    $upass = $_POST['password']; // Get the password from the form

    // Retrieve user data from the database based on the provided email
    if($uemail == "admin@gmail.com" && $upass == "password" ){
        $adminid = 123;
        $_SESSION['admin_id']=$adminid;
        echo "<script>alert('admin Login successful'); window.location='../admin/dashboard.php'</script>";

    }else{
        $stmt = $admin->ret("SELECT * FROM `users` WHERE `email`='$uemail'");
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $num = $stmt->rowCount();

        if ($num > 0) {
        // User found in the database
        $db_pass = $row['password']; // Fetch password from the database

        // Check if the provided email is for admin
        

        // Check if the provided password matches the one stored in the database
        if ($upass === $db_pass) {
            $id = $row['user_id']; // Get user ID
            $_SESSION['user_id'] = $id; // Set user ID in session
            echo "<script>alert('login successfully!'); window.location='../student/index.php'</script>";

            // Redirect user to the specified page after successful login
        } else {
            // Password incorrect
            echo "<script>alert('Email or password incorrect!'); window.location='../student/login.php'</script>";
        }
    } else {
        // No user found
        echo "<script>alert('Email or password incorrect!'); window.location='../student/login.php'</script>";
    }
}
} else {
    // Redirect to the login page if form fields are not submitted
    echo "<script>alert('Enter input fields'); window.location='../student/login.php'</script>";
    exit(); // Exit to prevent further execution
}
?>
