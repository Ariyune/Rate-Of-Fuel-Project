<?php

    function updateProfile($Name, $Address1, $Address2, $City, $State, $Zip) {
        $db = mysqli_connect("localhost", "root", "", "fueldb");
        $queryName = "UPDATE clientinformation SET FullName =  '$Name'  WHERE usersId = 1";
        $queryAddress1 = "UPDATE clientinformation SET Address1 = '$Address1' WHERE usersId = 1";
        $queryAddress2 = "UPDATE clientinformation SET Address2 = '$Address2' WHERE usersId = 1";
        $queryCity = "UPDATE clientinformation SET City = '$City' WHERE usersId = 1";
        $queryState = "UPDATE clientinformation SET State = '$State' WHERE usersId = 1";
        $queryZip = "UPDATE clientinformation SET ZipCode = '$Zip' WHERE usersId = 1";

        mysqli_query($db, $queryName);
        mysqli_query($db, $queryAddress1);
        mysqli_query($db, $queryAddress2);
        mysqli_query($db, $queryCity);
        mysqli_query($db, $queryState);
        mysqli_query($db, $queryZip);
    }
?>