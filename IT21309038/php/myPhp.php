<?php

    //on button click
    if(isset($_POST["log"]))
    {
        //calling config php file
        require_once 'config.php';
        $count = 0;
        $res = mysqli_query($con,"SELECT * FROM user WHERE uname = '$_POST[Uname]' && password = '$_POST[pwd]'");
        $count = mysqli_num_rows($res);

        //condition checking
        if($count > 0)
        {
            ?>
            <script type = "text/javascript">
                location.replace('http://localhost/MLB_06.01_04%20Wild-Life%20Safari%20Trip%20Management%20System/IT21309038/html/welcome.html');
            </script>
            <?php
        }
        else
        {
            ?>
            <script type = "text/javascript">
                alert("Incorrect Username or Password");
                location.replace('http://localhost/MLB_06.01_04%20Wild-Life%20Safari%20Trip%20Management%20System/IT21309038/html/Login.html');
            </script>
            <?php
        }
    }

    //connection close
    $con -> close();

?>