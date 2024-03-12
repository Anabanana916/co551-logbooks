<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "anawk5";
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo"Connected Successfully";


$sql = "SELECT * from test";
//Execute sql statement
$result = $conn-> query($sql);
?>

<html>
    <body>
        <?php
        while ($row = mysqli_fetch_assoc($result))
        {
            echo "<a href=\"wk6ex2action.php?id=$row[ID]\">$row[name]</a></br>";
        }
        ?>
    </body>
</html>