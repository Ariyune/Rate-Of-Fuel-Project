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
        <a href="LogIn.html"><img src= "icon.png"></a>
        <a href="fuelquote.php">Fuel Quote</a>
        <a href="AboutUs.html">About Us</a>
      </div>
      <h1>Fuel Quote</h1>
    </header>

    <div class="form"> <!--contains all form fields-->
      <form id="fuel-form">
          <fieldset> <!--allows for the creation of a box around the form-->
            <h2>Fuel Quote Request Form</h2>
            <div class = "msg"></div>
            <div>
              <label>Gallons Requested: </label>
              <input type="number" id = "GallonsRequested" required>
            </div>
            <div>
              <label>Delivery Address: </label>
              <input type="text" id = "DeliveryAddress" readonly>
            </div>
            <div>
              <label>Delivery Date: </label>
              <input type="date" id = "DeliveryDate">
            </div>
            <div>
              <label>Suggested Price / gallon: </label>
              <input type="number" id = "SuggestedPriceperGallon" readonly>
            </div>
            <div>
              <label>Total Amount Due: </label>
              <input type="number" id= "TotalAmountDue" readonly>
            </div>
            <div class = "button">
              <input type = "submit" class = "btn" value = "Submit" >
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
            <th>Request Number</th>
            <th>Gallons Requested</th>
            <th>Delivery Address</th>
            <th>Delivery Date</th>
            <th>Suggested Price / gallon</th>
            <th>Total Amount Due</th>
          </tr>
        </thead>
      </table>
    </div>
    <script src="main.js"></script> <!--links to javascript file-->

    <?php
     ?>

  </body>

</html>