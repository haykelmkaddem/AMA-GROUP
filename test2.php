<head>
  <style type="text/css">
    * {
  box-sizing: border-box;
}

img {
  max-width: 100%;
  width: 100%;
}

body {
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
}

.wrap {
  position: relative;
  z-index: 100;
  width: 100%;
  height: 100%;
  padding: 0 60px;
  
}

.wrap:after {
  content:'';
  position: absolute;
  z-index: 2;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;

}

.slider {
  position: relative;
  z-index: 200;
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
  margin-top: -25px;
  border: none;

  color: #fff;
  font-family: monospace;
  font-size: 5rem;
  z-index: 300;
  outline: none;
}

.slick-prev {
  left: -50px;
  text-align: left;
}

.slick-next {
  right: -50px;
  text-align: right;
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
  </style>
</head>
<body>
<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
  
<div class="wrap">  
  <div class="slider">
    
    <div class="item">
      <img src="https://images.unsplash.com/photo-1425342605259-25d80e320565?dpr=1&auto=format&fit=crop&w=568&h=379&q=60&cs=tinysrgb&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" alt="">
    </div>
    <div class="item">
      <img src="https://images.unsplash.com/photo-1489440543286-a69330151c0b?dpr=1&auto=format&fit=crop&w=568&h=379&q=60&cs=tinysrgb&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" alt="">
    </div>
    <div class="item">
      <img src="https://images.unsplash.com/photo-1490718687940-0ecadf414600?dpr=1&auto=format&fit=crop&w=568&h=378&q=60&cs=tinysrgb&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" alt="">
    </div>
    <div class="item">
      <img src="https://images.unsplash.com/photo-1507032336878-13f159192baa?dpr=1&auto=format&fit=crop&w=568&h=379&q=60&cs=tinysrgb&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" alt="">
    </div>
    <div class="item">
      <img src="https://images.unsplash.com/photo-1506268919522-a927511962a9?dpr=1&auto=format&fit=crop&w=568&h=379&q=60&cs=tinysrgb&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" alt="">
    </div>
    <div class="item">
      <img src="https://images.unsplash.com/photo-1501879779179-4576bae71d8d?dpr=1&auto=format&fit=crop&w=568&h=379&q=60&cs=tinysrgb&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" alt="">
    </div>
    <div class="item">
      <img src="https://images.unsplash.com/photo-1494253188410-ff0cdea5499e?dpr=1&auto=format&fit=crop&w=568&h=379&q=60&cs=tinysrgb&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" alt="">
    </div>
    <div class="item">
      <img src="https://images.unsplash.com/photo-1511965682784-5ec68f744ea1?dpr=1&auto=format&fit=crop&w=568&h=319&q=60&cs=tinysrgb&ixid=dW5zcGxhc2guY29tOzs7Ozs%3D" alt="">
    </div>
    
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
</script>
</body>