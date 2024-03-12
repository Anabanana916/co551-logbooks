<?php
//Connect to server and select database
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "anawk5";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo"Connected Successfully";

$sql="UPDATE test SET email='$_POST[txtemail]' , phone_number='$_POST[txttelno]'";
    $sql=$sql . " WHERE ID = '$_GET[id]'";

    

echo $sql;
//Execute sql statement
if ($conn-> query($sql) === true) {
    echo "Records changed sucessful";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>