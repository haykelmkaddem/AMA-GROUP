<?php
session_start();
  $conn=mysqli_connect("localhost","root","1234") or die(mysqli_error());
$bd=mysqli_select_db($conn,"commercial") or die(mysqli_error());
$u_mail="";
if (isset($_POST['username']) and isset($_POST['password'])) {
$query = "SELECT * FROM commercial";  
                $result = mysqli_query($conn,$query);  
                while($row = mysqli_fetch_array($result))  
                {  
                   $u_nom=$row[1];
                   $u_mail=$row[4];
                   $u_password=$row[7];
             
	if ($_POST['username'] == $u_mail) {
		if ($_POST['password'] == $u_password) {

			$_SESSION['user']=$_POST['username'];
			$_SESSION['nom']=$u_nom;
			header("location:index.php");

		}else{
			header("location:index.php?error=password");
		}
	}else{
		header("location:index.php?error=username");
	}
}

   }
?>
	