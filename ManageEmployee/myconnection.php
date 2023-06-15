<?php
    $con = new mysqli('localhost','root','','employeedeta');
    if(!$con){
        die(mysqli_error($con));
     }
?>