<?php
//checking submit
if(isset($_POST['submit']))
{

    //include connection file

    require 'config.php';


    $NoPerson=$_POST['Noperson'];
    $Mobile=$_POST['Mobile'];
    $Date=$_POST['Date'];
    $VType=$_POST['cars'];
    $Location=$_POST['cars1'];
    $PkgType=$_POST['cars2'];
    $tpay=$_POST['tot'];
    $dpay=$_POST['dis'];
    $apay=$_POST['amo'];


    
    //insert data

    $sql="INSERT INTO payment VALUES ('','$NoPerson','$Mobile','$Date',' $VType','$Location','$PkgType','$tpay','$dpay','$apay')";

    if($con->query($sql))
    {
        header("Location:http://localhost/MLB_06.01_04%20Wild-Life%20Safari%20Trip%20Management%20System/IT21306440/html/Payment.html");
    }
    else
    {
        echo "error". $con->error;
    }


    
}

$con->close();



?>