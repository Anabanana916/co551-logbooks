<?php
    $total = 0;
    $mymarks = array("CO401" => 75,"CO402" => 85,"CO403" => 73,
    "CO404" => 60,"CO405" => 78,"CO406" => 90);

    foreach ($mymarks as $index => $value) {
        echo "My total for $index was $value% <br/>";
        $total = $total + $mymarks[$index];
        $average = $total / 6;
        
    }
    echo "My average mark was $average";

