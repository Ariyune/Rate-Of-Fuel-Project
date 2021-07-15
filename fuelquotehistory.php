<?php
  $GallonsRequested = $_POST["GallonsRequested"];
  $DeliveryAddress = $_POST["DeliveryAddress"];
  $DeliveryDate = $_POST["DeliveryDate"];
  $SuggestedPriceperGallon = $_POST["SuggestedPriceperGallon"];
  $TotalAmountDue = $_POST["TotalAmountDue"];
  echo  "<tr>
          <td>$GallonsRequested</td>
          <td>$DeliveryAddress</td>
          <td>$DeliveryDate</td>
          <td>$SuggestedPriceperGallon</td>
          <td>$TotalAmountDue</td>
        </tr>";
?>
