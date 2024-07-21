<?php
require '../config.php';
$admin = new Admin();

// Check if the POST data is set
if (isset($_GET["id"])) {
    // Sanitize user input
    $sid = $_GET["id"];

    // Insert new record into the petcart table
    if ($sid) {
        // Update petstatus in pets table to true
        $updateStmt = $admin->cud("UPDATE `student` SET `status` = 'true' WHERE `id` = '$sid'", "updated");

        if ($updateStmt) {
            echo "<script>alert('Approved successfully'); window.location='../admin/Manage.php'; </script>";
            exit(); // Terminate script execution after redirecting
        } else {
            // echo "<script>alert('Failed to update pet status'); window.location='../petlisting.php'; </script>";
            exit(); // Terminate script execution after redirecting
        }
    } else {
        // echo "<script>alert('some thing went wrong'); window.location='../Manage.php'; </script>";
        exit(); // Terminate script execution after redirecting
    }
} else {
    // Redirect user to the petlisting page if the required fields are not provided
    header('Location: ' . BASE_URL . 'login.php');
    exit();
}
