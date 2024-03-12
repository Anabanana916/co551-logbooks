<?php include("class_lib.php"); ?>
<?php
    $stefan = new person("Stefan Mischook") ;
    echo "Stefan's full name: " . $stefan->get_name() ;
    
    $james = new employee("Johnny Fingers");
    echo "--> " . $james->get_name() ;
?>