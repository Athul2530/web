<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>index page</title>
    <link rel="stylesheet" href="style2.css">

</head>

<body>
    <?php include ('link.php');
    $sql = "SELECT * FROM student where user_id = $uid";
    $res = $admin->ret($sql)->fetch(PDO::FETCH_ASSOC);
    ?>
    <div class="pass">
        <?php
        if ($res && $res['status'] == "true") { ?>
        <p>Your pass has been approved</p>
        
        <?php } ?>
    </div>
</body>

</html>
