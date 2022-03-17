<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Image Gallery  Metal Recycling CO. LTD</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Description" content="  Metal Recycling CO. LTD">
<meta name="Keywords" content="  Metal Recycling CO. LTD">
<link rel="shortcut icon" href="images/favicon.png">
<meta name="robots" content="index,follow">
<meta name="robots" content="index,all">

<!-- CSS -->
<link rel="stylesheet" href="assets/bootstrap.min.css" >
<link href="assets/owl/owl.carousel.css" rel="stylesheet">
<link href="assets/owl/owl.theme.css" rel="stylesheet">
<link rel="stylesheet" href="assets/layout.css" >
<link rel="stylesheet" href="assets/image-gallery.css" >
<link rel="stylesheet" href="assets/venobox.css" >


<h1 style="display:none">Image Gallery Metal Recycling CO. LTD</h1>

</head>

<body>

    @include('header')

<div class="page-title" >
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			<h1> <i>  Live photos inside the company  </i></h1>
		</div>
	</div>
</div>
</div>



<section class="gallery">
	<div class="container">
		<div class="grid-container">
            <div class="grid-item">
                <a href="images/news_06.jpg" class=" venobox">
					<img src="images/news_06.jpg" width="100%" alt="logo">
				</a>

            </div>
            <div class="grid-item">

                <a href="images/news_06.jpg" class=" venobox">
					<img src="images/news_06.jpg" width="100%" alt="logo">
				</a>

            </div>
            <div class="grid-item">

                <a href="images/news_06.jpg" class=" venobox">
					<img src="images/news_06.jpg" width="100%" alt="logo">
				</a>

            </div>
            <div class="grid-item">

                <a href="images/news_06.jpg" class=" venobox">
					<img src="images/news_06.jpg" width="100%" alt="logo">
				</a>

            </div>
            <div class="grid-item">

                <a href="images/news_06.jpg" class=" venobox">
					<img src="images/news_06.jpg" width="100%" alt="logo">
				</a>

            </div>
            <div class="grid-item">6</div>
            <div class="grid-item">7</div>
            <div class="grid-item">8</div>
            <div class="grid-item">9</div>
		</div>
	</div>
</section>

<section class="clients">
	<div class="container">
		<div class="row">
			<div class=" col-lg-offset-1 col-lg-10 col-md-10 col-sm-12 col-xs-12">
				<div id="clients" class="owl-carousel row">
					<div class="item"><img src="images/c-1.jpg"/></div>
					<div class="item"><img src="images/c-2.jpg"/></div>
					<div class="item"><img src="images/c-3.jpg"/></div>
					<div class="item"><img src="images/c-4.jpg"/></div>
					<div class="item"><img src="images/c-1.jpg"/></div>
					<div class="item"><img src="images/c-2.jpg"/></div>
				</div>
			</div>
		</div>
	</div>
</section>

@include('footer2')

<script src="assets/js/min.js"></script>
<script src="assets/owl/owl.carousel.min.js"></script>
<script src="assets/js/venobox.min.js"></script>
	<script type="text/javascript">
   $(document).ready(function(){
   $('.venobox').venobox({
    numeratio: true,
    infinigall: true,
    border: '20px'
   });
   $('.venoboxvid').venobox({
    bgcolor: '#000'
   });
   $('.venoboxframe').venobox({
    border: '6px'
   });
   $('.venoboxinline').venobox({
    framewidth: '300px',
    frameheight: '250px',
    border: '6px',
    bgcolor: '#f46f00'
   });
   $('.venoboxajax').venobox({
    border: '30px;',
    frameheight: '220px'
   });
  })
	</script>

<script>

    $(document).ready(function() {
	  $("#clients").owlCarousel({
        autoPlay: 2000,
        items : 5,
		slideSpeed : 2000,
        itemsDesktop : [1000,4], //5 items between 1000px and 901px
        itemsDesktopSmall : [900,4], // betweem 900px and 601px
        itemsTablet: [600,3], //2 items between 600 and 0
      });



    });

$('.menu-open').click(function(){
  $('.menu').slideDown("slow");
  $('.menu').css("display", "block");
});

$('.close').click(function(){
  $('.menu').slideUp();
});






</script>

<style>
.grid-container {
  display: grid;
  gap: 20px 20px;
  grid-template-columns: auto auto auto auto;

  padding: 1px;
}
.grid-item {


  text-align: center;

  grid-row-start: 1;
  grid-row-end: 3;
}


.item1 {

}
    </style>

</body>

 </html>
