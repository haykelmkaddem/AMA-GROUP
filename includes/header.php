	<?php
	if (isset($_GET['logout'])) {
		session_destroy();
		header("location:index.php");
	}
  
    if (!isset($_SESSION['user']) ) {
    	include_once "includes/header1.php";
    	if (isset($_GET['error'])) {
    		if ($_GET['error']=="username") {	
    ?>
   <div class="alert alert-danger">
   veuillez verifier votre login ou mot de passe
</div>

	<?php
}
}
    }else{
    		if ($_SESSION['user'] != "admin@ama.tn") {
    		
    	?>

    		<header class="cd-morph-dropdown">
		<a href="#0" class="nav-trigger">Open Nav<span aria-hidden="true"></span></a>
				<img class="rotate-vert-center" style="height: 70px; float: left; margin-left: 120px;" src="images/logo.png">
		<nav class="main-nav">
			<ul>
				<li class=" gallery" >
					<a class="menu-buttons" href="index.php">Acceuil</a>
				</li>

				<li class=" links" >
					<a class="menu-buttons" href="projets.php">Projets</a>
				</li>

				<li class=" button" >
					<a class="menu-buttons" href="rendez-vous.php">Rendez-vous</a>
				</li>

				<li class="has-dropdown button" data-content="Accueil">
					<a class="menu-buttons" href="#0">Expertises</a>
				</li>
				<li class="button">
					<a class="menu-buttons" data-toggle="modal" data-target="#prfileForm" href="#0"><?php echo $_SESSION['nom']; ?></a>
					
				</li>
				<li class="has-dropdown button" data-content="pricing">
					 <img  src="http://placehold.it/50x50" alt="" class="avatar menu-buttons" id="navbar-menu" data-content="Accueil">
				</li>

				</ul>
		</nav>
		
		<div class="morph-dropdown-wrapper">
			<div class="dropdown-list">
				<ul>
					<li id="Accueil" class="dropdown gallery">
						<a href="#0" class="label">Accueil</a>
						
						<div class="content">	
							<ul>
								<li>
									<a href="ingenierie.php">
										<em>Ingenierie</em>
										<span>A brief description here</span>
									</a>
								</li>

								<li>
									<a href="innovation.php">
										<em>Innovation</em>
										<span>A brief description here</span>
									</a>
								</li>

								<li>
									<a href="bim.php">
										<em>BIM</em>
										<span>A brief description here</span>
									</a>
								</li>
							</ul>
						</div>
					</li>

					<li id="pricing" class="dropdown links"  >
						<a href="#0" class="label">Pricing</a>

						<div class="content">
							<ul >
								<li>
									

									<ul class="links-list">
										<li><a class="decon-a" href="index.php?logout=1">Déconnexion</a></li>
									</ul>
								</li>

							</ul>
						</div>
					</li>

					<li id="contact" class="dropdown button">
						<a href="#0" class="label">Contact</a>
						
						<div class="content">	
							<ul class="links-list">
								<li><a href="#0">Link #1</a></li>
								<li><a href="#0">Link #2</a></li>
								<li><a href="#0">Link #3</a></li>
								<li><a href="#0">Link #4</a></li>
								<li><a href="#0">Link #5</a></li>
								<li><a href="#0">Link #6</a></li>
							</ul>

							<a href="#0" class="btn">Get in Touch</a>
						</div>
					</li>
				</ul>

				<div class="bg-layer" aria-hidden="true"></div>
			</div> <!-- dropdown-list -->
		</div> <!-- morph-dropdown-wrapper -->
	</header>
   <?php
    }else{
    	include_once "includes/header1.php";
    }
    		}
    			   $u_nom="";
                   $u_prenom="";
                   $u_adress="";
                   $u_mail="";
                   $u_num="";
                   $u_id="";
if (isset($_SESSION['user'])){
    $conn=mysqli_connect("localhost","root","1234") or die(mysqli_error());
	$bd=mysqli_select_db($conn,"commercial") or die(mysqli_error());
	$query = "SELECT * FROM commercial where mail='".$_SESSION['user']."'";  
                $result = mysqli_query($conn,$query);  
                while($row = mysqli_fetch_array($result))  
                {  $u_id=$row[0];
                   $u_nom=$row[1];
                   $u_prenom=$row[2];
                   $u_adress=$row[3];
                   $u_mail=$row[4];
                   $u_num=$row[5];
                }
          }
    ?>
  

	<div class="modal fade" id="prfileForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold"><img src="images/logo.png" style="height: 100px;"></h4><br>
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>

      </div>
         <h4 align="center" style="color: #2EB8E7;">Bienvenue dans votre profil</h4>
      <div class="modal-body mx-3" align="center">
        <div class="md-form mb-5" style="margin-bottom: 5px !important;">
          <div class="input-box">
   		<input type="text" id="nom" readonly name="nom" class="input-box-input-1" placeholder="nom"  value="<?php echo $u_nom; ?>">
		<label for="nom" class="input-label-fa">Nom :</i></label>
    	</div>
        </div>
         <div class="md-form mb-5" style="margin-bottom: 5px !important;">
          <div class="input-box">
   		<input type="text" id="prenom" readonly name="prenom" class="input-box-input-1" placeholder="prénom" value="<?php echo $u_prenom; ?>">
		<label for="prenom" class="input-label-fa">Prénom: </label>
    	</div>
        </div>
        <div class="md-form mb-5" style="margin-bottom: 5px !important;">
          <div class="input-box">
      <input type="text" id="adresse" readonly name="adresse" class="input-box-input-1" placeholder="adresse" value="<?php echo $u_adress; ?>">
    <label for="adresse" class="input-label-fa">Adresse: </label>
      </div>
        </div>
         <div class="md-form mb-5" style="margin-bottom: 5px !important;">
          <div class="input-box">
   		<input type="mail" id="mail" readonly name="mail" class="input-box-input-1" placeholder="mail" value="<?php echo $u_mail; ?>">
		<label for="mail" class="input-label-fa">Mail: </label>
    	</div>
        </div>
         <div class="md-form mb-5" style="margin-bottom: 5px !important;">
          <div class="input-box">
   		<input type="number" id="number" readonly name="num" class="input-box-input-1" placeholder="telephone" value="<?php echo $u_num; ?>">
		<label for="number" class="input-label-fa">Telephone: </label>
    	</div>
        </div>

        <div class="md-form mb-4">
          <a data-toggle="modal" data-dismiss="modal" aria-label="Close" data-target="#prfileFormEdit" href="#0" class="btn btn-grad">Modifier</a>
        </div>

      </div>

    </div>
  </div>

</div>


  	<form action="editinfo.php" method="post">
  		<input type="hidden" name="uId" value="<?php echo $u_id;  ?>">
	<div class="modal fade" id="prfileFormEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold"><img src="images/logo.png" style="height: 100px;"></h4><br>
       
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>

      </div>
         <h4 align="center" style="color: #2EB8E7;">Bienvenue dans votre profil</h4>
      <div class="modal-body mx-3" align="center">
        <div class="md-form mb-5" style="margin-bottom: 5px !important;">
          <div class="input-box">
   		<input type="text" id="nom"  name="nom" class="input-box-input-1" placeholder="nom"  value="<?php echo $u_nom; ?>">
		<label for="nom" class="input-label-fa">Nom :</i></label>
    	</div>
        </div>
         <div class="md-form mb-5" style="margin-bottom: 5px !important;">
          <div class="input-box">
   		<input type="text" id="prenom"  name="prenom" class="input-box-input-1" placeholder="prénom" value="<?php echo $u_prenom; ?>">
		<label for="prenom" class="input-label-fa">Prénom: </label>
    	</div>
        </div>
        <div class="md-form mb-5" style="margin-bottom: 5px !important;">
          <div class="input-box">
      <input type="text" id="adresse"  name="adresse" class="input-box-input-1" placeholder="adresse" value="<?php echo $u_adress; ?>">
    <label for="adresse" class="input-label-fa">Adresse: </label>
      </div>
        </div>
         <div class="md-form mb-5" style="margin-bottom: 5px !important;">
          <div class="input-box">
   		<input type="mail" id="mail"  name="mail" class="input-box-input-1" placeholder="mail" value="<?php echo $u_mail; ?>">
		<label for="mail" class="input-label-fa">Mail: </label>
    	</div>
        </div>
         <div class="md-form mb-5" style="margin-bottom: 5px !important;">
          <div class="input-box">
   		<input type="number" id="number"  name="num" class="input-box-input-1" placeholder="telephone" value="<?php echo $u_num; ?>">
		<label for="number" class="input-label-fa">Telephone: </label>
    	</div>
        </div>

        <div class="md-form mb-5" style="margin-bottom: 5px !important;">
          <div class="input-box">
   		<input type="text" id="mission" name="mission" class="input-box-input-1" placeholder="mission">
		<label for="mission" class="input-label-fa">Mission: </label>
    	</div>
        </div>
        <div class="md-form mb-5" style="margin-bottom: 5px !important;">
          <div class="input-box">
   		<input type="password" id="passsword" name="password" class="input-box-input-1" placeholder="password">
		<label for="password" class="input-label-fa">Password:</label>
    	</div>
        </div>

        <div class="md-form mb-4">
          <input type="submit"  class="btn btn-grad" style="color: white;" value="Modifier">
        </div>

      </div>

    </div>
  </div>

</div>
</form>