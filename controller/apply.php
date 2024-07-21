<?php
// Database connection
require ("../config.php");
$admin = new Admin();


// Form submission handling
if (isset($_POST['app'])) {
    // Retrieve form data
    $name = $_POST['name'];
    $uid = $_POST['userid'];
    $phone = $_POST['phone'];
    $college_name = $_POST['cname'];
    $college_address = $_POST['caddress'];
    $from_address = $_POST['from'];
    $to_address = $_POST['to'];
    $year = $_POST['year'];
    $course = $_POST['course'];
    $register_number = $_POST['rnum'];

    if (isset($_FILES['photo'])) {
        // File uploaded successfully
        $img_path = "uploads/" . basename($_FILES['photo']['name']);
        if (move_uploaded_file($_FILES['photo']['tmp_name'], $img_path)) {
            echo "";
        } else {
            echo "Failed to upload file.";
        }
    } else {
        // 'q_pic' file was not uploaded
        $img_path = ""; // Set default or handle accordingly
    }
    if (isset($_FILES['aadhar'])) {
        //File uploaded successfully
        $aadhar_path = "uploads/" . basename($_FILES['aadhar']['name']);
        if (move_uploaded_file($_FILES['aadhar']['tmp_name'], $aadhar_path)) {
        } else {
            echo "Failed to upload file.";
        }
    } else {
        // 'q_pic' file was not uploaded
        $aadhar_path = ""; // Set default or handle accordingly
    }
    // Insert data into 'students' table
    $sql = "INSERT INTO student (`user_id`,`name`, phone, college_name, college_address, from_address, to_address, `year`, course, register_number,s_photo,s_aadhar,status)
            VALUES ($uid,'$name', '$phone', '$college_name', '$college_address', '$from_address', '$to_address', '$year', '$course', '$register_number','$img_path','$aadhar_path','false')";

    if ($admin->cud($sql, ' inserted student') === TRUE) {
        echo "<script>alert('Form Submitted Succesfully');window.location='../student/index.php';</script>";

    } else {
        echo "<script>alert('Unable To Submit')</script>";
    }
}


?>
