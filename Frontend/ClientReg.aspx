<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href = "StyleSheet1.css">
    <title>Login</title>
   </head>
  <body>
      <header>
      <div class="header-right"> 
        <a href="profileDisplay.html">Profile Management</a>
        <a href="HomePage.aspx"><img src= "icon.png"></a>
        <a href="fuelquote.html">Fuel Quote</a>
        <a href="AboutUs.html">About Us</a>
      </div>
    </header>
  <div class="box">
    <form id="login">
      <div>
        <p>
          <label for="username"><b>Username: </b></label></p>
        <p>
          <input
            class="input-field"
            type="text"
            id="username"
            placeholder="Enter Username"
            name="username"
            required
          />
        </p>

        <p>
          <label for="password"><b>Password: </b></label></p>

        <p>
          <input
            class="input-field"
            type="password"
            id="password"
            placeholder="Enter Password"
            name="password"
            required
          />
        </p>

        <p>
          <label><b>User Type:</b></label>
          <select name="usertype" id="usertype">
            <option value="customer">Customer</option>
            <option value="employee">Employee</option>
            <option value="supplier">Supplier</option>
          </select>
        </p>

        <p>
          <button onclick="AuthUser()" class="bigSigbutton">Login</button>
        </p>

        <p>
          <a href="register.html">Register</a>
        </p>
      </div>
    </form>
    </div>


    <script>

      function AuthUser() {
        event.preventDefault();
        document.getElementById("login").checkValidity();
        document.getElementById("login").reportValidity();
        const username = document.getElementById("username").value;
        const password = document.getElementById("password").value;
        const userType = document.getElementById("Usertype").value
        if (username != "" && password != "") {
          (async () => {
            const rawResponse = await fetch(`${fetchLocation}/login`, {
              method: "POST",
              headers: {
                Accept: "application/json",
                "Content-Type": "application/json",
              },
              body: JSON.stringify({ username, password, userType}),
            });
            const content = await rawResponse.json();

            if (content.hasOwnProperty("success")) {
              localStorage.setItem("username", username);
              localStorage.setItem("userType", userType);
              window.location.href = content.success;
            } else if (content.hasOwnProperty("error")) {
              alert(
                "Error: Login failed\nUsername does not exist, or password was typed incorrectly."
              );
            }
          })();
        }
      }

      function logout() {
              localStorage.removeItem("username");
              localStorage.removeItem("usertype");
              window.location.href = "login.html";
          }
    </script>
  </body>
</html>