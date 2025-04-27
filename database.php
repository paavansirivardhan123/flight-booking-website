<?php
    $db_server="127.0.0.1:3307";
    $db_user= "root";
    $db_pass= "";
    $db_name= "project";
    try {
        $conn=mysqli_connect($db_server,$db_user,$db_pass,$db_name);  
    }
    catch (mysqli_sql_exception) {
        echo "<h1>not connected</h1>";}
?>