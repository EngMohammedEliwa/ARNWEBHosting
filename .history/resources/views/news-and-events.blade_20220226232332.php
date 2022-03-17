<!doctype html>
<html>
 <head>
<meta charset="utf-8">
<title>Equipments</title>
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
<link rel="stylesheet" href="assets/news-and-events.css" >


<h1 style="display:none">About Metal Recycling CO. LTD</h1>

</head>


<body>
<section class="header clearfix">
	<div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-8 col-xs-8 logo-section">
				<div class="logo">
					<a href="index.html">
						<img src="images/logo.png" alt="Metal Recycling Co. LTD">
					</a>

                </div>
            </div>

            <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6 menu-cntnr pos_1">


  <div class="menu-open"><img src="images/menu.png"/></div>
			<div class="menu">

      <ul>
        <li><a href="{{route('home') }}">Home</a></li>
		<li><a class="current"  href="{{route('about') }}">About </a></li>
		<li><a  href="{{route('services') }}">Services </a></li>
		<li><a  href="{{route('products') }}">Products</a></li>
		<li><a  href="{{route('equipments') }}">Equipments</a></li>
		<li><a href="{{route('image-gallery') }}">Media</a></li>
		<li class="menu-contact"><a href="{{route('contact') }}">Contact Us</a></li>
		<li><div class="close">Close Menu</div></li>
      </ul>

			</div>

            </div>

			<div class="col off">
					<div class="contact-btn">
						<a href="{{route('contact') }}" class="btn btn-blue">Contact Us <i class="demo-icon icon-right-open">&#xf006;</i> </a>
					</div>
				</div>
            </div>
		</div>
	</div>
</section>
<div class="page-title" >
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			<h1>News &amp; Events</h1>
		</div>
	</div>
</div>
</div>



<section class="services">
	<div class="container">
		<div class="row services-boxes">
			<div class="col-lg-6">
				<div class="item">
					<h2>Creating awareness and promoting standard operating practices & policies</h2>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="item">
					<h2>Creating awareness and promoting standard operating practices & policies</h2>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="item">
					<h2>Creating awareness and promoting standard </h2>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="item">
					<h2>Creating awareness and promoting standard operating practices & policies</h2>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="item">
					<h2>Creating awareness and promoting </h2>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="item">
					<h2>Creating awareness and promoting standard operating practices & policies</h2>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="item">
					<h2>Creating awareness and promoting standard operating practices & policies</h2>
					<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
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


@include('footer2')


<script src="assets/js/min.js"></script>
<script src="assets/owl/owl.carousel.min.js"></script>
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

</body>
 </html>
