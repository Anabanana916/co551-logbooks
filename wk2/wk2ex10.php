<?php
    //I prefer this style of coding for arrays
    $mymarks = array("year 1" => 55, "year 2" => 65, "year 3" => 75);

    foreach ($mymarks as $index => $value) {
        echo "for $index my grade was $value <br/>";
    }
    echo "<br/> My best year was Year 3 when I averaged " . $mymarks['year 3'];

    