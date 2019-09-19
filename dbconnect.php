<?php 
// this will avoid mysql_connect() deprecation error.
error_reporting( ~E_DEPRECATED & ~E_NOTICE );

 	$servername = "localhost" ;
    $username = "root";
    $password = "";
    $dbname = "darbee";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    // Check connection
    if  (!$conn) {
       die("Connection failed: " . mysqli_connect_error() . "\n" );
    }

?>