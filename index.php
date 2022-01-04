<?php
	session_start();
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
  	
	<title>ama group</title>
</head>
<body>
<?php
	include_once "includes/header.php";
?>
	<main class="cd-main-content" style="background: none !important;">
		<div class="container">
			<div class="home-left">
				<h1 style="font-size: 50px; text-align: center;margin-top: 70px;">QUALITY FIRST</h1>
				<p style="font-size: 20px;margin-top: 70px;">Safety before</p><br/>
				<p style="font-size: 20px;">3 Métiers complémentaires pour une offre clé en main</p>
				<?php
					if (!isset($_SESSION['user']))
					{
				?>
					<a class="btn btn-grad" href="#" data-toggle="modal" data-target="#modalLoginForm">Connexion</a>
				<?php
					}else{
				?>
				<?php
					if($_SESSION['user'] == "admin@ama.tn"){
					?>
          <table>
          <a  class="btn btn-grad" href="#" data-toggle="modal" data-target="#modalAjouterForm">Ajouter</a><br>
					<a style="margin-top: 5px;" class="btn btn-grad" href="supprimer_comm.php">Supprimer</a>
        </table>
				<?php
						}
					}
				?>
			</div>
			<div class="home-right">
        <div id="slideshow">
   <div>
     <img src="images/index-photo.png" style="float: right; margin-top: -50px; height: 75vh;">
   </div>
   <div>
    <img src="images/admin.png" style="float: right; margin-top: -50px; height: 75vh;">
   </div>
</div>
				
        <a  href="#" data-toggle="modal" data-target="#modalvideo">
        <img src="images/btn-vid.png" style="float: right; margin-right: 200px; height: 16vh; margin-top: -42px;"></a>
			</div>
		</div>
	</main>





	<!-- popup --> 
	<form action="login.php" method="post">
	<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold"><img src="images/logo.png" style="height: 100px;"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>

      <div class="modal-body mx-3" align="center">
        <div class="md-form mb-5">
          <div class="input-box">
   		<input type="text" id="username" name="username" class="input-box-input" placeholder="username">
		<label for="username" class="input-label-fa"><i class="far fa-user"></i></label>
    	</div>
        </div>
         <div class="md-form mb-5">
          <div class="input-box">
   		<input type="password" id="password" name="password" class="input-box-input" placeholder="mot de passe">
		<label for="username" class="input-label-fa"><i class="fas fa-unlock-alt"></i></label>
    	</div>
        </div>

        <div class="md-form mb-4">
          <input type="submit"  class="btn btn-grad" style="color: white;" value="LOGIN">
        </div>

      </div>

    </div>
  </div>

</div>
</form>



	<div class="modal fade" id="modalAjouterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold"><img src="images/logo.png" style="height: 100px;"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      
      <div class="modal-body mx-3" align="center">






        <form action="ajouter_com.php" method="post">
        <div class="md-form mb-5">
          <div class="input-box">
   		<input type="text" id="nom" name="nom" class="input-box-input-1" placeholder="nom">
		<label for="nom" class="input-label-fa">Nom :</i></label>
    	</div>
        </div>
         <div class="md-form mb-5">
          <div class="input-box">
   		<input type="text" id="prenom" name="prenom" class="input-box-input-1" placeholder="prénom">
		<label for="prenom" class="input-label-fa">Prénom: </label>
    	</div>
        </div>
        <div class="md-form mb-5">
          <div class="input-box">
      <input type="text" id="adresse" name="adresse" class="input-box-input-1" placeholder="adresse">
    <label for="adresse" class="input-label-fa">Adresse: </label>
      </div>
        </div>
         <div class="md-form mb-5">
          <div class="input-box">
   		<input type="mail" id="mail" name="mail" class="input-box-input-1" placeholder="mail">
		<label for="mail" class="input-label-fa">Mail: </label>
    	</div>
        </div>
         <div class="md-form mb-5">
          <div class="input-box">
   		<input type="number" id="number" name="num" class="input-box-input-1" placeholder="telephone">
		<label for="number" class="input-label-fa">Telephone: </label>
    	</div>
        </div>
         <div class="md-form mb-5">
          <div class="input-box">
   		<input type="text" id="mission" name="mission" class="input-box-input-1" placeholder="mission">
		<label for="mission" class="input-label-fa">Mission: </label>
    	</div>
        </div>

        <div class="md-form mb-4">
          <input type="submit"  class="btn btn-grad" style="color: white;" value="AJOUTER">
        </div>

        </form>
      </div>
		
	</div>
    </div>
  </div>






<div class="modal fade" id="modalvideo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold"><img src="images/logo.png" style="height: 100px;"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>

      <div class="modal-body mx-3" align="center">
        
         <video></video>

      </div>

    </div>
  </div>

</div>
<?php
if (isset($_SESSION['user'])) {
  if ($_SESSION['user'] <> "admin@ama.tn") {
  
?>

<div class="nav-buttons-bottom">
  <div class="row">
    <a class="nav-btn"  href="index.php" title="home">
      
    </a>
    <a class="nav-btn-right" href="projets.php" title="rendez-vous">
      <i class="fas fa-caret-right"></i>
    </a>
  </div>
</div>
<?php
}  
  }
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script>
	if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
</script>
<script src="js/modernizr-custom.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
<script>
  $("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
    .fadeOut(2)
    .next()
    .fadeIn(2)
    .end()
    .appendTo('#slideshow');
},  5000);
</script>
</body>
</html>

