<html>
    <body>
        <?php
            $hourlyrate     = 5.75;
            $hoursperweek   = 40;
            $taxrate        = 0.78;
            $gross = $hourlyrate * $hoursperweek;
            $net = $gross * $taxrate;
            echo $net;
        ?>
    </body>
</html>