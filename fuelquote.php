<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fuel Quote Form</title>
    <link rel="stylesheet" href="style.css"> <!--links to css style sheet-->
  </head>

  <body>

    <header>
      <div class = "topnav"> <!--top navigation bar-->
        <a href="profileDisplay.html">Profile Management</a>
        <a href="index.html"><img src= "icon.png"></a>
        <a href="fuelquote.php">Fuel Quote</a>
        <a href="AboutUs.html">About Us</a>
      </div>
      <h1>Fuel Quote</h1>
    </header>

    <div class="form"> <!--contains all form fields-->
      <form id="fuel-form" method = "post">
          <fieldset> <!--allows for the creation of a box around the form-->
            <h2>Fuel Quote Request Form</h2>
            <div class = "error">
            </div>
            <div>
              <label>Gallons Requested: </label>
              <input type="number" id = "GallonsRequested" name = "GallonsRequested" required>
            </div>
            <div>
              <label>Delivery Address: </label>
              <input type="text" id = "DeliveryAddress" name = "DeliveryAddress" readonly value = "Random Address 12345">
            </div>
            <div>
              <label>Delivery Date: </label>
              <input type="date" id = "DeliveryDate" name = "DeliveryDate">
            </div>
            <div>
              <label>Suggested Price / gallon: </label>
              <input type="number" id = "SuggestedPriceperGallon" name = "SuggestedPriceperGallon" readonly value = 2>
            </div>
            <div>
              <label>Total Amount Due: </label>
              <input type="number" id= "TotalAmountDue" name= "TotalAmountDue" readonly value = 4>
            </div>
            <div class = "button">
              <input type = "submit" class = "submitbtn" name = "submit" value = "Submit" >
            </div>
          </fieldset>
      </form>
    </div>

    <div class="table">
      <table id="fuel-history">
        <thead>
          <caption><h2>Fuel Quote History</h2></caption>
          <tr>
            <!--headers-->
            <th>Gallons Requested</th>
            <th>Delivery Address</th>
            <th>Delivery Date</th>
            <th>Suggested Price / gallon</th>
            <th>Total Amount Due</th>
          </tr>
        </thead>
      </table>
    </div>

     <?php class PricingModule {
     } //not implemented yet; Last assignment
     ?>

     <script src = "jquery.js"></script>
     <script>
      $(".submitbtn").click(function(e) {
        e.preventDefault();

        $.ajax({
          type: "post",
          url: "fuelquotevalidate.php",
          data: $("#fuel-form").serialize(),
          success: function(data) {

            if (data == true) {
              ajaxUpdateFuelHistory ();
            }

            else {
              $(".error").empty(); //clears out error message above
              $(".error").append(data);
            }
          }
        });
      });

      function ajaxUpdateFuelHistory () {
        $.ajax({
          type: "post",
          url: "fuelquotehistory.php",
          data: $("#fuel-form").serialize(),
          success: function(data) {
            $("#fuel-history").append(data);
          }
        });
      }

     </script>

  </body>

</html>
