<?php
error_reporting(0);
require ("../config.php");
$admin = new Admin();

$stmtt = $admin->ret("SELECT * from student WHERE `status` != 'true'");

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

        </div>
        <?php while ($rowtt = $stmtt->fetch(PDO::FETCH_ASSOC)) { ?>
        <div class=manage style="justify-content:space-between;width:2100px;">
            <img src="../controller/<?php echo $rowtt['s_photo'] ?>" alt="" id="nphoto"><br>
            <img src="../controller/<?php echo $rowtt['s_aadhar'] ?>" alt="" id="nadhar"><br>
            <p style="text-align:center;padding:10px;">name:<?php echo $rowtt['name'] ?></p><br>
            <p style="text-align:center;padding:10px;">phone:<?php echo $rowtt['phone'] ?></p><br>
            <p style="text-align:center;padding:10px;">College Name:<?php echo $rowtt['college_name'] ?></p><br>
            <p style="text-align:center;padding:10px;">College Address<?php echo $rowtt['college_address'] ?></p><br>
            <p style="text-align:center;padding:10px;">From:<?php echo $rowtt['from_address'] ?></p><br>
            <p style="text-align:center;padding:10px;">To:<?php echo $rowtt['to_address'] ?></p><br>
            <p style="text-align:center;padding:10px;">Year:<?php echo $rowtt['year'] ?></p><br>
            <p style="text-align:center;padding:10px;">Course:<?php echo $rowtt['course'] ?></p><br>
            <p style="text-align:center;padding:10px;">RegNo:<?php echo $rowtt['register_number'] ?></p><br>

            <p class="approved"><a href=" ../controller/approvebackend.php?id=<?php echo $rowtt['id']; ?>"
                    class="btn">Approve</a>
            </p>




        </div>
        <?php } ?>
</body>

</html>
