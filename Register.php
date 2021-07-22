<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="./profile.css">

</head>
<body>
    <header>
        <div class="topnav">
            <!--top navigation bar-->
            <a href="profileDisplay.php">Profile Management</a>
            <a href="index.php"><img src="icon.png"></a>
            <a href="fuelquote.php">Fuel Quote</a>
            <a href="AboutUs.html">About Us</a>
        </div>
    </header>

    <h1 style="text-align: center;">Register</h1>

    <div class="information">
        <form id="register" action="index.php" method = "post">
            <div class="error">
            </div>
            <h3 style="font-size: x-large;">Input New Login Information</h3>
            <div class="flex-container">
                <div class="flex-child">
                    <label for="usname"><b>Username: </b></label>
                </div>
                <div class="flex-child">
                    <input type="text" id="usname" name = "username" required>
                </div>
            </div>

            <div class="flex-container">
                <div class="flex-child">
                    <label for="pword"><b>Password: </b></label>
                </div>
                <div class="flex-child">
                    <input type="text" id="pword" name = "password" required>
                </div>
            </div>

            <div class="button">
                <input type="submit" class = "registerbtn" name = "registerbtn" value="Submit">
            </div>
        </form>
    </div>

    <script src = "jquery.js"></script>
    <script>
     $(".registerbtn").click(function(e) {
       e.preventDefault();

       $.ajax({
         type: "post",
         url: "CallValidateRegister.php",
         data: $("#register").serialize(),
         success: function(data) {

           if (data == true) {
              $("#register").submit();
           }

           else {
               $(".error").empty(); //clears out error message above
               $(".error").append(data);
           }
         }
       });
     });

    </script>

</body>
</html>
