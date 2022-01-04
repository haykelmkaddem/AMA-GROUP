<?php

include('connecti.php');

$conn=mysqli_connect("localhost","root","1234") or die(mysqli_error());
$bd=mysqli_select_db($conn,"commercial") or die(mysqli_error());

$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$adresse=$_POST['adresse'];
$num=$_POST['num'];
$mission=$_POST['mission'];
$mail=$_POST['mail'];
$pass="password";
	 

$sql = "INSERT INTO commercial VALUES (null,'$nom','$prenom','$adresse','$mail','$num','$mission','$pass')";

$result = mysqli_query($conn,$sql);


header("location:index.php");

?>