<?php

$servername = "localhost";
$username = "root";
$pwd = "1234";
$dbname = "commercial";
if (isset($_POST['uId'])) {
$id=$_POST['uId'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$num=$_POST['num'];
$adresse=$_POST['adresse'];
$mail=$_POST['mail'];
$mission=$_POST['mission'];
$password=$_POST['password'];

// Create connection
$conn = mysqli_connect($servername, $username, $pwd, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "UPDATE commercial SET nom='$nom',prenom='$prenom', num ='$num', adresse= '$adresse', mail='$mail', mission='$mission', password='$password'  WHERE id_com=$id";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
    header("location:index.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
}
?>
