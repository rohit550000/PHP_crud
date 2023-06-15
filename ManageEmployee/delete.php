<?php
include 'myconnection.php';
$id = $_GET['id'];
$name = $_GET['name'];
$phone = $_GET['phone'];
$email = $_GET['email'];

$q = " INSERT INTO `archivedemployee`(`id`,`name`,`phone`,`email`) VALUES ( '$id','$name', '$phone', '$email' )";
$query = mysqli_query($con,$q);

$q = " DELETE FROM `employeetable` WHERE id = $id ";
mysqli_query($con, $q);
header('location:viewEmployee.php');
?>