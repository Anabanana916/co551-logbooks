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
    
    $sql = "SELECT * from test where ID = '$_GET[id]'";
    //Execute query
    $result = $conn-> query($sql);
    $row = mysqli_fetch_assoc($result);
?>
<html>
    <body>
        <form action = "wk6ex2save.php?id=<?php echo $row["ID"] ?>" method = 'post'>
            Name:
            <input type = text name = txtname value = "<?php echo $row["name"] ?>" readonly/>
            </br>
            Phone number :
	        <input type=text name=txttelno value="<?php echo $row["phone_number"] ?>" />
	        </br>
	        Email :
	        <input type=text name=txtemail value="<?php echo $row["email"] ?>" />
	        </br>
	        <input type=submit name=btnsubmit value="save"/>
        </form>

        <form action = "wk6ex2delete.php?id=<?php echo $row["ID"] ?>" method = 'post'>
        </br>Do you wish to delete your file? </br>
	        <input type=submit name=btnsubmit value="delete"/>
        </form>
    </body>