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
			<?php  
				$id=$_GET['idd'];
                $query = "SELECT * FROM projet where id_p='$id' ";  
                $result = mysqli_query($conn,$query);  
                while($r = mysqli_fetch_array($result))  
                {  
                   ?>
			<div class="project-img-l">
				
				 <?php echo ' <img class="project-img" src="'.$r[10].'">' ?>
			</div>

			<div class="project-info-r">
				<div class="project-name">
          <a href="#" data-toggle="modal" data-target="#modalNote">
					<h1 style="font-size: 40px; color: #81ACFA;"> <?php echo $r[2]; ?></h1></a>
				</div>
				<div class="project-info-p">
					<p style="font-size: 20px; padding-bottom: 7px;">
						Pays  :  <?php echo $r[3]; ?>
						</p>
					<p style="font-size: 20px; padding-bottom: 7px;">
						Lieu  :  <?php echo $r[4]; ?></p>
						<p style="font-size: 20px; padding-bottom: 7px;">
						Client : <?php echo $r[5]; ?>
					</p>
					<p style="font-size: 20px; padding-bottom: 7px;">
						Surface : <?php echo $r[6]; ?></p>
						<p style="font-size: 20px; padding-bottom: 7px;">
						Montant : <?php echo $r[7]; ?></p>
						<p style="font-size: 20px; padding-bottom: 7px;">
						Année de réalisation : <?php echo $r[8]; ?><br></p><p style="font-size: 20px; padding-bottom: 7px;">
						Mission : <?php echo $r[9]; ?></p>
					</p>
				</div>
				
			</div>
			<?php
          
                }
                
                ?>
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
<div class="nav-buttons-bottom-r" style="margin-right: 50px;">
	<div class="row">
	<a class="btn btn-grad" href="supprimer_projet.php?id_p=<?php echo $id; ?>" >Supprimer</a>
	</div>
</div>
<div class="nav-buttons-bottom-r" style="margin-right: 200px;">
	<div class="row">
	<a class="btn btn-grad" href="#" data-toggle="modal" data-target="#modalModifierProjet">Modifier</a>
	</div>
</div>


  <div class="modal fade" id="modalModifierProjet" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold"><img src="images/logo.png" style="height: 100px;"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
<form action="editprojet.php" method="post" enctype="multipart/form-data">
	<input type="hidden" name="idd" value="<?php echo $_GET['idd'];  ?>">
      <div class="modal-body mx-3" align="center">
        <div class="md-form mb-5">
          <div class="input-box">
      <input type="text" id="nom" name="nom" class="input-box-input-1" placeholder="Projet" value="<?php echo $r[2]; ?>"/>
    <label for="nom" class="input-label-fa">Projet: </label>
      </div>
        </div>
         <div class="md-form mb-5">
          <div class="input-box">
      <input type="text" id="Pays" name="pays" class="input-box-input-1" placeholder="Pays" value="<?php echo $r[3]; ?>"/>
    <label for="Pays" class="input-label-fa">Pays: </label>
      </div>
        </div>
         <div class="md-form mb-5">
          <div class="input-box">
      <input type="text" id="lieu" name="lieu" class="input-box-input-1" placeholder="lieu" value="<?php echo $r[4]; ?>" />
    <label for="lieu" class="input-label-fa">lieu: </label>
      </div>
        </div>
         <div class="md-form mb-5">
          <div class="input-box">
      <input type="text" id="client" name="client" class="input-box-input-1" placeholder="client" value="<?php echo $r[5]; ?>"/>
    <label for="client" class="input-label-fa">client: </label>
      </div>
        </div>
         <div class="md-form mb-5">
          <div class="input-box">
      <input type="text" id="surface" name="surface" class="input-box-input-1" placeholder="surface" value="<?php echo $r[6]; ?>" />
    <label for="surface" class="input-label-fa">Surface: </label>
      </div>
        </div>
         <div class="md-form mb-5">
          <div class="input-box">
      <input type="text" id="montant" name="montant" class="input-box-input-1" placeholder="montant" value="<?php echo $r[7]; ?>" />
    <label for="montant" class="input-label-fa">montant: </label>
      </div>
        </div>
         <div class="md-form mb-5">
          <div class="input-box">
      <input type="text" id="annee" name="annee" class="input-box-input-1" placeholder="annee" value="<?php echo $r[8]; ?>">
    <label for="annee" class="input-label-fa">annee: </label>
      </div>
        </div>
         <div class="md-form mb-5">
          <div class="input-box">
      <input type="text" id="mission" name="mission" class="input-box-input-1" placeholder="mission" value="<?php echo $r[9]; ?>"/>
    <label for="mission" class="input-label-fa">mission: </label>
      </div>
        </div>
        <div class="md-form mb-5">
          <div class="input-box">
      <input style="padding-top: 7px;" type="file" id="photo" name="photo" class="input-box-input-1" />
    <label for="image" class="input-label-fa">image: </label>
      </div>
        </div>


        <div class="md-form mb-4">
          <input type="submit"  class="btn btn-grad" style="color: white;" value="Modifier"/>
        </div>

      </div></form>

    </div>
  </div>

</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<script src="js/modernizr-custom.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<form action="ajouternote.php" method="post">
  <div class="modal fade" id="modalNote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Notes</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>

      <div class="modal-body mx-3" align="center">
       <div class="notes-container" id="style-2">
         <?php
                   $date="";
                    $soci="";
                    $lieu="";
                    $heure="";
if (isset($_SESSION['user'])){
    $conn=mysqli_connect("localhost","root","") or die(mysqli_error());
    $bd=mysqli_select_db($conn,"commercial") or die(mysqli_error());

    $query = "SELECT * FROM remarque where id_projet='$id'";  
                $result = mysqli_query($conn,$query);  
                while($row1 = mysqli_fetch_array($result))  
                {  
                    
                    $note=$row1[1];
                   
                   

                  ?>  

       <div class="md-form mb-5">
          <div class="input-box">
                  <input type="text" class="input-box-input-1 "name="titre" readonly value="<?php echo $note;?>">
                   <label for="Note" class="input-label-fa">Note: </label>
      </div>
        </div>
    
                    <?php
                }
             }
          
    ?>
       </div>
         <div class="md-form mb-5">
          <div class="input-box">
            <input type="hidden" name="id" value="<?php echo $id; ?>">

      <input type="text" id="note" name="note" class="input-box-input-1" placeholder="note">
    <label for="Note" class="input-label-fa">Note: </label>
      </div>
        </div>
         

        <div class="md-form mb-4">
          <input type="submit"  class="btn btn-grad" style="color: white;" value="ajouter une Note">
        </div>

      </div>

    </div>
  </div>

</div>
</form>


</body>

</html>