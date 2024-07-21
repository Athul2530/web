<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>index page</title>
    <link rel="stylesheet" href="style2.css">
</head>

<body style="background: url(./busimages/busim.jpg);background-size:100% 100%;">

    <?php include ('link.php'); ?>


    <h1 style="text-align:center;color:purple;">KSRTC STUDENT PASS</h1>
    <div class="col">

        <div class="form-floating" style="text-align:center;">
            <form action="../controller/apply.php" method="post" enctype="multipart/form-data">
                <h1>Apply Here</h1>
                <label for="name" style="margin-right:320px;">Your Name</label><br>
                <input type="text" class="form-control" name="name" id="name" title="Please enter valid name"
                    placeholder="Your Name" required>
                <input type="number" class="form-control" name="userid" id="name" value="<?php echo $uid ?>" hidden>

                <label for="email" style="margin-right:320px;">Your Phone</label><br>
                <input type="text" class="form-control" pattern="[789][0-9]{9}" name="phone" id="email"
                    title="Please enter valid phone number" placeholder="Your Phone" required>


                <label for="email" style="margin-right:290px;">College Name</label><br>
                <input type="text" class="form-control" name="cname" id="email" title="Please enter your college name"
                    placeholder="College Name" required>

                <label for="email" style="margin-right:285px;">College Address</label><br>
                <input type="text" class="form-control" name="caddress" id="email" placeholder="College Address"
                    required>
                <label for="email" style="margin-right:400px;">From</label><br>
                <input type="text" class="form-control" name="from" id="email" placeholder="From Address" required>
                <label for="email" style="margin-right:400px;">To</label><br>
                <input type="text" class="form-control" name="to" id="email" placeholder="To Address" required>

                <label for="email" style="margin-right:400px;">Year</label><br>
                <input type="text" class="form-control" name="year" id="email" placeholder="Present Year" required>

                <label for="email" style="margin-right:400px;">Course</label><br>
                <input type="text" class="form-control" style="margin-right:35px" name="course" id="email"
                    placeholder="Your Course" required>

                <label for="email" style="margin-right:227px;">Student Register Number</label><br>
                <input type="text" class="form-control" name="rnum" id="email" placeholder="Student Register Number"
                    required>

        </div>

        <div class="pdf">
            <div class="form-floating">
                <input type="file" class="form-control" accept=".jpg,.png,.jpeg" name="photo" id="email"
                    placeholder="Your Phone" required>
                <label for="email" style="margin-right:00px;">Student Photo</label><br>

                <input type="file" class="form-control" accept=".jpg,.png,.jpeg" name="aadhar" id="email"
                    placeholder="Your Phone" required>
                <label for="email">Student Aadhaar </label><br>



            </div>
        </div>

        <div class="col-12" style="padding-top:20px;">
            <button name="app" type="submit" style="margin-left:135px;">Apply Now</button>
        </div>
        </form>
    </div>

</body>

</html>
