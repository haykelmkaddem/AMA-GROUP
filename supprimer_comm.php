	<?php

  session_start();
    if (!isset($_SESSION['user'])) {
     header("location:index.php");
    }
  ?>
<?php

$conn=mysqli_connect("localhost","root","1234") or die(mysqli_error());
$bd=mysqli_select_db($conn,"commercial") or die(mysqli_error());


?>
<!doctype html>
<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
  	
	<title>AMA GROUP</title>
</head>
<body>
	
<?php
	include_once "includes/header.php";
?>

	<main class="cd-main-content">
		<div class="project-content">
			<div class="project-info-r">



				<table style="margin-left: 200px; margin-top: -80px; border: 1px solid #5E96F8; border-collapse: collapse;width: 150%;">
					<tr style="background-color:#5E96F8; height: 50px; " >
						<th style="width : 80px; padding-top: 16px; color: white; border: 1px solid #5E96F8; text-align: center;">Nom</th>
						<th style="width : 30px; padding-top: 16px; color: white; border: 1px solid #5E96F8; text-align: center;">Prenom</th>
						<th style="width : 30px; padding-top: 16px; color: white; border: 1px solid #5E96F8; text-align: center;">Adresse</th>
						<th style="width : 30px; padding-top: 16px; color: white; border: 1px solid #5E96F8; text-align: center;">Email</th>
						<th style="width : 30px; padding-top: 16px; color: white; border: 1px solid #5E96F8; text-align: center;">Num</th>
						<th style="width : 30px; padding-top: 16px; color: white; border: 1px solid #5E96F8; text-align: center;">Mission</th>
						<th style="width : 30px; padding-top: 16px; color: white; border: 1px solid #5E96F8; text-align: center;">Action</th>
					</tr>


<?php  
                $query = "SELECT * FROM commercial ORDER BY id_com DESC";  
                $result = mysqli_query($conn,$query);  
                
                while($row = mysqli_fetch_array($result))  
                {  
                   ?>

					<tr>
						<th style="padding: 8px; ; text-align: center; border: 1px solid #5E96F8"><?php echo $row[1]; ?></th>
						<th style="padding: 8px; text-align: center; border: 1px solid #5E96F8"><?php echo $row[2]; ?></th>
						<th style="padding: 8px; text-align: center; border: 1px solid #5E96F8"><?php echo $row[3]; ?></th>
						<th style="padding: 8px; text-align: center; border: 1px solid #5E96F8"><?php echo $row[4]; ?></th>
						<th style="padding: 8px; text-align: center; border: 1px solid #5E96F8"><?php echo $row[5]; ?></th>
						<th style="padding: 8px; text-align: center; border: 1px solid #5E96F8"><?php echo $row[6]; ?></th>
						<th style="padding: 8px; text-align: center; border: 1px solid #5E96F8"><a href="supc.php?id_com=<?php echo $row['id_com'];?>">Supprimer</a></th>
					</tr>

<?php
					
								}
								
								?>

				</table>
				





			</div>
		</div>
	</main>


<div class="nav-buttons-bottom">
	<div class="row">
		<a class="nav-btn"  href="index.php" title="home">
			<i class="fas fa-caret-left"></i>
		</a>
		<a class="nav-btn-right" href="home.php" title="rendez-vous">
			<i class="fas fa-caret-right"></i>
		</a>
	</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<script src="js/modernizr-custom.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>