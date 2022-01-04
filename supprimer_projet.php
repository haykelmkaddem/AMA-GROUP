<?php

$conn=mysqli_connect("localhost","root","1234") or die(mysqli_error());
$bd=mysqli_select_db($conn , "commercial") or die(mysqli_error());

$id_p=$_GET["id_p"];


$req="DELETE FROM projet
WHERE id_p='$id_p' ";
$res=mysqli_query($conn , $req) or die("erreur");
header("location:projets.php");
?>