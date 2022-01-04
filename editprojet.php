<?php




include('connecti.php');


$fileinfo=PATHINFO($_FILES["photo"]["name"]);
	$newFilename=$fileinfo['filename'] ."_". time() . "." . $fileinfo['extension'];
	move_uploaded_file($_FILES["photo"]["tmp_name"],"images/" . $newFilename);
	$location="images/" . $newFilename;



$conn=mysqli_connect("localhost","root","1234") or die(mysqli_error());
$bd=mysqli_select_db($conn,"commercial") or die(mysqli_error());
$idd = $_POST['idd'];
$nom=$_POST['nom'];
$pays=$_POST['pays'];
$lieu=$_POST['lieu'];
$client=$_POST['client'];
$surface=$_POST['surface'];
$montant=$_POST['montant'];
$annee=$_POST['annee'];
$mission=$_POST['mission'];

	 

$sql = "UPDATE projet SET nom='$nom',pays='$pays', lieu ='$lieu', client= '$client', surface='$surface', mission='$mission', montant='$montant', image='$location', annee='$annee'  WHERE id_p=$idd";

$result = mysqli_query($conn,$sql);
echo $nom.'-'.$pays.'-'.$lieu.'-'.$client.'-'.$surface.'-'.$montant.'-'.$annee.'-'.$mission.'-'.$location;
header("location:projets.php");


?>
