<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel = "stylesheet" href="./profile.css">
</head>
<body>
    <header>
        <div class="topnav">
            <!--top navigation bar-->
            <a href="profileDisplay.php">Profile Management</a>
            <a href="index.php"><img src= "icon.png"></a>
            <a href="fuelquote.php">Fuel Quote</a>
            <a href="AboutUs.html">About Us</a>
        </div>
    </header>

    <h1 style="text-align: center;">Profile Display</h1>

    <div class="information">
        <form>
            <?php
                require_once("./getProfileInfo.php");
                getInformation();
            ?>
        </form>
    </div>
</body>
</html>
