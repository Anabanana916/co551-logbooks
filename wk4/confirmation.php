<?php
    session_start();
    
    switch ($_SESSION["price"]) {
        case "Small 15.75":
            echo "Small Price = 15.75";
            $Cost = 15.75;
            break;
        case "Medium 16.75":
            echo "Medium Price = 16.75";
            $Cost = 16.75;
            break;
        case "Large 17.75":
            echo "Large Price = 17.75";
            $Cost = 17.75;
            break;
        case "Extra Large":
            echo " Extra Large Price = 18.75";
            $Cost = 18.75;
            break;
        }
    
    echo "<h2> Your order qty is " . $_SESSION["qty"] . " " . $_SESSION["price"] . "</h2></br>";

    echo "<h2> Your order price is " . $_SESSION["qty"] * $Cost . "</h2></br>";
    
    echo "<h2> And the selected colour is $_POST[selcolour].</h2>";
    
?>
