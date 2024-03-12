<?php
    $sql="INSERT INTO test (name, email, phone_number)";
    $sql=$sql . "values ('$_POST[txtName]', '$_POST[txtEmail]', '$_POST[txtPhoneNumber]')";

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

//Execute sql statement
if ($conn-> query($sql) === true) {
    echo "New record created sucessfully";
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql= "SELECT * from test";
$result = $conn-> query($sql);
//Execute sql statement
if ($result->num_rows > 0) {
    while($row=$result->fetch_assoc()) {
        echo "Name: " . $row["name"] . "Email: " . $row["email"] . "Phone: " . $row["phone_number"] ."<br/>";
    }
}
else {
    echo "0 Results";
}
$conn->close();
?>