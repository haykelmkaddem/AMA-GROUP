<?php
session_start();
include('connecti.php');


$conn=mysqli_connect("localhost","root","1234") or die(mysqli_error());
$bd=mysqli_select_db($conn,"commercial") or die(mysqli_error());

$azert=$_POST['azert'];
$soc=$_POST['soc'];
$lieu=$_POST['lieu'];
$heure=$_POST['heure'];
$mail=$_SESSION['user']; 

$sql = "INSERT INTO rend VALUES (null,'$azert','$soc','$lieu','$heure','$mail')";

$result = mysqli_query($conn,$sql);


header("location:rendez-vous.php");

?>