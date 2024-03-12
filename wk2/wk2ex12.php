<DOCTYPE html>
<?php
    $topmodules = array("Open Source Systems" => 0,
    "Programming 1" => 1,
    "Programming 2" => 2,
    "Web Application Development" => 3,
    "Software Engineering" => 4);
?>
<html>
<head>
    <title>Data in table</title>
</head>
<body>
    <table border=1 align="center">
        <tr><th>Index</th><th>Subject</th></tr>
        <?
            for($count = 0; $count < 5;$count++);
            {
                echo "<tr><td>$count</td><td>$topmodules[$count]</td></tr>";
            }
        ?>
    </table>
</body>
</html>