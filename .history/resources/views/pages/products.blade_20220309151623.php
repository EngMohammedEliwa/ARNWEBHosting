<!doctype html>
<html>
 <head>
<meta charset="utf-8">
<title>Products Metal Recycling CO. LTD</title>
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
<link rel="stylesheet" href="assets/prodcuts.css" >
<link rel="stylesheet" href="assets/venobox.css" >


<h1 style="display:none">Products Metal Recycling CO. LTD</h1>

</head>


<body>

    @include('headre\header')



<section class="services-sec-two">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2>Recycled Scrap Metals</h2>
				<p>We are the leading scrap metal recycling company in the kingdom of Saudi Arabia.  </p>
			</div>
		</div>
	</div>
</section>

<section class="products">
	<div class="container">
		<div class="row products-boxes">
			<h1 class="col-md-12">Scrap ferrous metals</h1>
			<div class="col-lg-4 col-md-4 col-sm-6">
				<div class="item">
					<a href="images/pro-1.jpg" class="venobox" id="firstlink"  data-gall="gall1">
						<img src="images/pro-1.jpg" width="100%"/>
						<h2>No. 1 Heavy Melting Steel	</h2>
					 </a>
				</div>
			</div>
			<div class="col-lg-4  col-md-4 col-sm-6">
				<div class="item">
					<a href="images/pro-2.jpg" class="venobox" id="firstlink"  data-gall="gall1">
						<img src="images/pro-2.jpg" width="100%"/>
						<h2>No. 2 Heavy Melting Steel</h2>
					</a>
				</div>
			</div>
			<div class="col-lg-4  col-md-4 col-sm-6">
				<div class="item">
					<a href="images/pro-3.jpg" class="venobox" id="firstlink"  data-gall="gall1">
						<img src="images/pro-3.jpg" width="100%"/>
						<h2>Shredded Scrap Material </h2>
					</a>
				</div>
			</div>
			<h1 class="col-md-12">Other Non-Ferrous Metals</h1>
			<div class="col-lg-4  col-md-4 col-sm-6">
				<div class="item">
					<a href="images/pro-4.jpg" class="venobox" id="firstlink"  data-gall="gall1">
						<img src="images/pro-4.jpg" width="100%"/>
						<h2>Zorba Shredded Nonferrous Metal</h2>
					</a>
				</div>
			</div>

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

@include('footer\footer2')

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
document.getElementById("Products").classList.add("current");
</script>

</body>
 </html>
