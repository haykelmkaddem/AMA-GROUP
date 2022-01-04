	<?php

  session_start();
    if (!isset($_SESSION['user'])) {
     header("location:index.php");
    }
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
	<div class="slider">
		<ul>
			<li><img style="border-radius: 50%;" src="images/projet1.jpg"></li>
			<li><img style="border-radius: 50%;" src="images/projet1.jpg"></li>
			<li><img style="border-radius: 50%;" src="images/projet1.jpg"></li>
			<li><img style="border-radius: 50%;" src="images/projet1.jpg"></li>
			
		</ul>
	</div>
	<div class="sliderControl"></div>
	<div class="timer">
		<div class="percentage">
			<div class="percentage0"></div>
			<div class="percentage1"></div>
			<div class="percentage2"></div>
			<div class="percentage3"></div>
			<div class="percentage4"></div>
		</div>
  </div>

  		<div class="nav-buttons-bottom-hh">
  			<div class="row">
  			<a class="btn btn-grad" href="#" data-toggle="modal" data-target="#modalLoginForm">Ajouter Projet</a>
  			</div>
  		</div>

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
<script>
	if( !window.jQuery ) document.write('<script src="js/jquery-3.0.0.min.js"><\/script>');
	$(function(){

	var sliderWidth = $('.slider').width();
	var nowLi = 2;
	var li_count = $('.slider li').length;

	$('.slider ul').css({width:li_count * sliderWidth});
	$('.slider li').css({width:sliderWidth});

	for(var i=0; i<li_count;i++){
		$('.sliderControl').append('<a></a>');
	}


	$('.sliderControl a, .slider li').click(function(){
		nowLi = $(this).index();
		sliderChange();
		$('.sliderControl a').eq(nowLi).css({'background-color':'#30AED8'});
		$('.sliderControl a').eq(nowLi).siblings().css({'background-color':'#333'});
		$('.slider li').eq(nowLi).css({'transform':'rotateY(0)'});
		$('.slider li').eq(nowLi).css({'width':'350px'});
		$('.slider li').eq(nowLi).css({'height':'350px'});
		$('.slider li').eq(nowLi).prevAll().css({'transform':'rotateY(60deg)'});
		$('.slider li').eq(nowLi).prevAll().css({'width':'250px'});
		$('.slider li').eq(nowLi).prevAll().css({'height':'250px'});
		$('.slider li').eq(nowLi).prevAll().css({'margin-top':'50px'});
		$('.slider li').eq(nowLi).nextAll().css({'transform':'rotateY(-60deg)'});
		$('.slider li').eq(nowLi).nextAll().css({'height':'250px'});
		$('.slider li').eq(nowLi).nextAll().css({'width':'250px'});
		$('.slider li').eq(nowLi).nextAll().css({'margin-top':'50px'});

		$('.slider li').eq(0).css({'left':'-60px'});
	})


	function sliderChange(){
		$('.slider ul').stop(true, false).animate({left: sliderWidth * nowLi * -1}, 500);
	}

	var timer = setInterval(perpic, 5000);

	function perpic(){		
		console.log( 'nowLi = ' + nowLi)
		nowLi++;
		if(nowLi>=li_count){
			nowLi=0;
		};
		sliderChange();
		$('.sliderControl a').eq(nowLi).css({'background-color':'#30AED8'});
		$('.sliderControl a').eq(nowLi).siblings().css({'background-color':'#333'});
		$('.slider li').eq(nowLi).css({'transform':'rotateY(0)'});
		$('.slider li').eq(nowLi).prevAll().css({'transform':'rotateY(60deg)'});
		$('.slider li').eq(nowLi).nextAll().css({'transform':'rotateY(-60deg)'});
	}

	$('.slider').hover(function(){
		clearInterval(timer);
		$('.timer .percentage').removeClass('gogo');
	},function(){
		timer = setInterval(perpic, 5000);
		$('.timer .percentage').addClass('gogo');
	})

})
</script>
<script src="js/modernizr-custom.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>