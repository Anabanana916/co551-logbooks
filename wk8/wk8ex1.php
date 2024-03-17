<?php
    $lottodate = date("d" . "/" . "m" . "/" . "Y");
    echo "The lottery numbers for $lottodate are ";
    for($n=1;$n<7;$n++){
        $number[$n] = rand(1,49);
        echo "<br/> $number[$n]";
    }

    $conn = mysqli_connect("127.0.0.1", "root", "", "anawk8");

    $sql = "insert into lotto (lottodate,number1,number2";
    $sql = $sql . "number4,number4,number5,number6)";
    $sql = $sql . " values ($lottodate,$number[1],$number[2],";
    $sql = $sql . "$number[3],$number[4],$number[5],$number[6]);";

    $result = mysqli_query($sql);
    echo "<br/>This week's numbers have been saved";
?>