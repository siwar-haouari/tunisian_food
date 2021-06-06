<?php

    $con=mysqli_connect('localhost','root','','app_web');

    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>