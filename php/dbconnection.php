<?php
    $db_SERVER="localhost";
    $db_USER="root";
    $db_pass="";
    $db_name="trialdb";

    $conn="";


    try{
        $conn=mysqli_connect($db_SERVER,$db_USER,$db_pass,$db_name);
    echo "you are connected";
    }
    catch(mysqli_sql_exception){
        echo "you are not connected";
    }

    


?>