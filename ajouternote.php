

<?php


include('connecti.php');




$conn=mysqli_connect("localhost","root","1234") or die(mysqli_error());
$bd=mysqli_select_db($conn,"commercial") or die(mysqli_error());

$nom=$_POST['note'];
$id=$_POST['id'];

	 
	 

$sql ="INSERT INTO remarque (note, id_projet) VALUES ( '$nom', '$id')";


$result = mysqli_query($conn,$sql);

header("location:projet.php?idd=$id");

?>