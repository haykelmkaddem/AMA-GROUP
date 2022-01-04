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
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="slick/slick.css"/>

<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
  	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
  	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/reset.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>AMA GROUP</title>
	<style>
		
.item img {
  max-width: 100%;
  width: 100%;
  border-radius: 50%;
}

.item {
	  border-radius: 50%;
}

.slider {
  position: relative;
  z-index: 0;
  padding: 0 0px;
  margin: 5rem auto;
  max-width: 800px;
  width: 100%;
}

.slick-arrow {
  position: absolute;
  top: 50%;
  width: 40px;
  height: 50px;
  line-height: 50px;
  margin-top: -70px;
  border: none;
  background: transparent;
  color: #fff;
  font-family: monospace;
  font-size: 5rem;
  z-index: 300;
  outline: none;
}

.slick-prev {
  left: -50px;
  text-align: left;

  color:#2A95B9 !important; 
}

.slick-next {
  right: -50px;
  text-align: right;

  color:#2A95B9 !important; 

}



.item.slick-slide {
  width: 400px;
  height: 400px !important;
  transition: transform .4s;
  position: relative; 
}

.slick-slide:after {
  content:'';
  position: absolute;
  z-index: 2;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;

  transition: transform .4s;
}

.item.slick-slide {
  transform: scale(0.7)  translate(640px);
}

.item.slick-slide.slick-center + .slick-slide {
  transform: scale(0.8) translate(-250px);
  z-index: 10;
}

.item.slick-slide.slick-center + .slick-slide + .item.slick-slide {
  transform: scale(0.7)  translate(-640px);
  z-index: 5;
}

.item.slick-slide.slick-active {
  transform: scale(0.8) translate(250px);
}

.item.slick-slide.slick-center {
  /* margin: 0 -10%; */
  transform: scale(1);
  z-index: 30;
}

.slick-center:after {
  opacity: 0;
}
.slide-info {
 position: absolute;
 top: 50%;
 left: 50%;

 -webkit-transform: translate(-50%, -50%);
 transform: translate(-50%, -50%);
 color: white;
 font-size: 46px;
 -webkit-transition: all 300ms ease;
 transition: all 300ms ease;
 text-transform: uppercase;

}
	</style>

</head>
<body>

<div class="container">

<?php
	include_once "includes/header.php";
?>

<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
 	<main class="cd-main-content">
<div class="wrap">  
  <div class="slider">
    

<?php  
                $query = "SELECT * FROM projet ORDER BY id_p DESC";  
                $result = mysqli_query($conn,$query);  
                while($row = mysqli_fetch_array($result))  
                {  
                   ?>

    <div class="item" >
     <?php echo ' <img src="'.$row[10].'">' ?><a  href="projet.php?idd=<?php echo $row[0]; ?>"></a>
    <div class="slide-info">
 
    </div>
    </div>


<?php
          
                }
                
                ?>


    </div>
    
  </div>
</main>
</div>
<div class="nav-buttons-bottom">
	<div class="row">
		<a class="nav-btn"  href="index.php" title="home">
			<i class="fas fa-caret-left"></i>
		</a>
		<a class="nav-btn-right" href="rendez-vous.php" title="rendez-vous">
			<i class="fas fa-caret-right"></i>
		</a>
	</div>
</div>
<div class="nav-buttons-bottom-r">
  <div class="row">

  <a class="btn btn-grad" href="#" data-toggle="modal" data-target="#modalAjouterProjet">Ajouter</a>
  
      
  </div>
  <p></p>
</div>
</div>

<script >
  $('.slider').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  arrows: true,
  dots: false,
  centerMode: true,
  variableWidth: true,
  infinite: true,
  focusOnSelect: true,
  cssEase: 'linear',
  touchMove: true,
  prevArrow:'<button class="slick-prev"> < </button>',
  nextArrow:'<button class="slick-next"> > </button>',
  
  //         responsive: [                        
  //             {
  //               breakpoint: 576,
  //               settings: {
  //                 centerMode: false,
  //                 variableWidth: false,
  //               }
  //             },
  //         ]
});


var imgs = $('.slider img');
imgs.each(function(){
  var item = $(this).closest('.item');
  item.css({
    'background-image': 'url(' + $(this).attr('src') + ')', 
    'background-position': 'center',            
    '-webkit-background-size': 'cover',
    'background-size': 'cover', 
  });
  $(this).hide();
});

$('#slider').on('dragstart', function(e){ return false; });
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script>
	if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
</script>
<script src="js/modernizr-custom.js"></script>
<script src="js/main.js"></script>



  <div class="modal fade" id="modalAjouterProjet" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold"><img src="images/logo.png" style="height: 100px;"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
<form action="ajouter_projet.php" method="post" enctype="multipart/form-data">
  
      <div class="modal-body mx-3" align="center">
        <div class="md-form mb-5">
          <div class="input-box">
      <input type="text" id="nom" name="nom" class="input-box-input-1" placeholder="Projet"/>
    <label for="nom" class="input-label-fa">Projet: </label>
      </div>
        </div>
         <div class="md-form mb-5">
          <div class="input-box">
      <input type="text" id="Pays" name="pays" class="input-box-input-1" placeholder="Pays"/>
    <label for="Pays" class="input-label-fa">Pays: </label>
      </div>
        </div>
         <div class="md-form mb-5">
          <div class="input-box">
      <input type="text" id="lieu" name="lieu" class="input-box-input-1" placeholder="lieu" />
    <label for="lieu" class="input-label-fa">lieu: </label>
      </div>
        </div>
         <div class="md-form mb-5">
          <div class="input-box">
      <input type="text" id="client" name="client" class="input-box-input-1" placeholder="client"/>
    <label for="client" class="input-label-fa">client: </label>
      </div>
        </div>
         <div class="md-form mb-5">
          <div class="input-box">
      <input type="text" id="surface" name="surface" class="input-box-input-1" placeholder="surface" />
    <label for="surface" class="input-label-fa">Surface: </label>
      </div>
        </div>
         <div class="md-form mb-5">
          <div class="input-box">
      <input type="text" id="montant" name="montant" class="input-box-input-1" placeholder="montant" />
    <label for="montant" class="input-label-fa">montant: </label>
      </div>
        </div>
         <div class="md-form mb-5">
          <div class="input-box">
      <input type="text" id="annee" name="annee" class="input-box-input-1" placeholder="annee">
    <label for="annee" class="input-label-fa">annee: </label>
      </div>
        </div>
         <div class="md-form mb-5">
          <div class="input-box">
      <input type="text" id="mission" name="mission" class="input-box-input-1" placeholder="mission"/>
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
          <input type="submit"  class="btn btn-grad" style="color: white;" value="Ajouter"/>
        </div>

      </div></form>

    </div>
  </div>

</div>

</body>
</html>