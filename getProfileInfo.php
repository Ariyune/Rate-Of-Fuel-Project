<?php

function getInformation() {
    
    $db = mysqli_connect("localhost", "root", "", "fueldb");
    $query = "SELECT * FROM clientinformation WHERE id = 1";
    $result = mysqli_query($db, $query);

    while ($row = mysqli_fetch_array($result)) {
        echo '
        <h3 style="font-size: x-large;">Personal Information</h3>
            <div class="flex-container">
                <div class="flex-child">
                    <label><b>Full Name: </b></label>
                </div>
                <div class="flex-child">
                    <div> ' . $row['FullName'] . ' </div>
                </div>
            </div>

            <div class="flex-container">
                <div class="flex-child">
                    <label><b>Address 1: </b></label>
                </div>
                <div class="flex-child">
                    <div> ' . $row['Address1'] . '</div>
                </div>
            </div>

            <div class="flex-container">
                <div class="flex-child">
                    <label><b>Address 2: </b></label>
                </div>
                <div class="flex-child">
                    <div> ' . $row['Address2'] . ' </div>
                </div>
            </div>

            <div class="flex-container">
                <div class="flex-child">
                    <label><b>City: </b></label>
                </div>
                <div class="flex-child">
                    <div> ' . $row['City'] . '</div>
                </div>
            </div>

            <div class="flex-container">
                <div class="flex-child">
                    <label><b>State: </b></label>
                </div>
                <div class="flex-child">
                    <div> ' . $row['State'] . '</div>
                </div>
            </div>

            <div class="flex-container">
                <div class="flex-child">
                    <label><b>Zip Code: </b></label>
                </div>
                <div class="flex-child">
                    <div> ' . $row['ZipCode'] . '</div>
                </div>
            </div>
            <div class = "button">
              <a href="profileManage.php">
                <input type = "button" class = "btn" value= "Edit">
              </a>
            </div>
        ';
    }
    //preparing to persist to database
}


?>