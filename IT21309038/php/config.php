<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "safari_trip";

    //connect variables

    $con = new mysqli($servername,$username,$password,$dbname);

    //error checking

    if($con -> connect_error)
    {
        die ("connection failed:".$con->connect_error);
    }
?>