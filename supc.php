<?php

$conn=mysqli_connect("localhost","root","1234") or die(mysqli_error());
$bd=mysqli_select_db($conn,"commercial") or die(mysqli_error());

$id_com=$_GET["id_com"];


$req="DELETE FROM commercial
WHERE id_com='$id_com' ";
$res=mysqli_query($conn,$req) or die("erreur");
header("location:supprimer_comm.php");
?>