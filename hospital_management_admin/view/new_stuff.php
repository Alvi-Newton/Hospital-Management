<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/new_doctor_style.css">
    <title>Add Stuff</title>
</head>
<?php
include '../controller/new_stuff_validation.php';
?>

<body>
    <div>
        <form method="POST" action="">
            <p>Name</p>
            <input type="text" name="name" id="name1" required>
            <br>
            <p>
                <?php
                echo $nameErr;
                ?>
            </p>
            <p>Email</p>
            <input type="email" name="email" id="email1">
            <br>
            <?php
            echo $emailErr;
            ?>
            <p>Password</p>
            <input type="password" name="password" id="password1"> <br>
            <?php
            echo $passwordErr;
            ?>
            <p>Phone Number</p>
            <input type="text" name="phone" id="phone">
            <br>
            <?php
            echo $phoneErr;
            ?>  
            <div class="center">
                <input type="submit" class="common_btn" value="Register" name="submit">
            </div>
        </form>

        <div class="center">
            <a class="common_btn" href="./admin_dashboard.php">Back</a>
        </div>

    </div>
</body>

</html>