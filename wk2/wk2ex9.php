<?php
    //I found a style of creating arrays that works for me
    $topmodules = array("Internet Systems Development" => 0,
    "Programming 1" => 5, "Programming 2" => 10, "OOAD" => 30,
    "Software Engineering" => 40) ;
    
    foreach($topmodules as $index => $value)
    {
        if($index == 40) break;
        echo "Index in $index and value is $value <br/>";
    }
