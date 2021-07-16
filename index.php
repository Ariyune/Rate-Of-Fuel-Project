<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href = "style.css">
    <title>Login</title>

  </head>
  <body class ="middle" >
    <div class ="content">
              <header>
                <div class = "topnav"> <!--top navigation bar-->
                  <a href="profileDisplay.html">Profile Management</a>
                  <a href="index.php"><img src= "icon.png"></a>
                  <a href="fuelquote.php">Fuel Quote</a>
                  <a href="AboutUs.html">About Us</a>
                </div>
               </header>
    </div>
        <form id="login" action="profileDisplay.html" method = "post">
            <h1 style="text-align: center;"> Welcome to our service </h1>
            <div class="error">
            </div>
            <div>
                <p><label for="username"><b>Username: </b></label></p>
                <p><input class="input-field" type="text" id="usname" placeholder="Enter Username" name="usname" required></p>

                <p><label for="password"><b>Password: </b></label></p>
                <p><input class="input-field" type="password" id="pword" placeholder="Enter Password" name="pword" required></p>

                <p><input type = "submit" class = "loginbtn" name = "login" value = "Login"></p>

                <p> Need an account? <a href="register.php">Register</a> </p>
            </div>
        </form>

        <script src = "jquery.js"></script>
        <script>
         $(".loginbtn").click(function(e) {
           e.preventDefault();

           $.ajax({
             type: "post",
             url: "CallValidateLogIn.php",
             data: $("#login").serialize(),
             success: function(data) {

               if (data == true) {
                  $("#login").submit();
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
