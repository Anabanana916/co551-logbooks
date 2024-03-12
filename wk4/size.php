<html>
    <head><title>Select colour page</title></head>
    <?php session_start(); ?>
    <body>
            <form action="selectcolour.php"  method="post">
	            Select the size for the <?php echo $_POST["selqty"] ?> widgets you are ordering
   	            <?php
                    $_SESSION["qty"] = (int)$_POST["selqty"];
                    ?>
                <select name="selsize">
   	                    <option>Small 15.75</option>
	                    <option>Medium 16.75</option>
	                    <option>Large 17.75</option>
	                    <option>Extra large 18.75</option>
                    </select>
                <br/><br/>

                

                <input type="submit" value="Buy"/>
                    
            </form>

    </body>

</html>