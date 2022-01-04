<?php


include('connecti.php');


$fileinfo=PATHINFO($_FILES["photo"]["name"]);
	$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
	move_uploaded_file($_FILES["photo"]["tmp_name"],"images/" . $newFilename);
	$location="images/" . $newFilename;



$conn=mysqli_connect("localhost","root","1234") or die(mysqli_error());
$bd=mysqli_select_db($conn,"commercial") or die(mysqli_error());

$nom=$_POST['nom'];
$pays=$_POST['pays'];
$lieu=$_POST['lieu'];
$client=$_POST['client'];
$surface=$_POST['surface'];
$montant=$_POST['montant'];
$annee=$_POST['annee'];
$mission=$_POST['mission'];

	 
	 

$sql ="INSERT INTO `projet` (`id_p`, `id_com`, `nom`, `pays`, `lieu`, `client`, `surface`, `montant`, `annee`, `mission`, `image`) VALUES (NULL, NULL, '$nom', '$pays', '$lieu','$client', '$surface', '$montant', '$annee', '$mission', '$location')";


$result = mysqli_query($conn,$sql);
echo $nom.'-'.$pays.'-'.$lieu.'-'.$client.'-'.$surface.'-'.$montant.'-'.$annee.'-'.$mission.'-'.$location;
header("location:projets.php");

?>