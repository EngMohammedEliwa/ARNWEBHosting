<!doctype html>
<html>
 <head>
<meta charset="utf-8">
<title>Equipments</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Description" content="  ARM Metal Recycling CO.">
<meta name="Keywords" content="  ARM Metal Recycling CO.">
<link rel="shortcut icon" href="images/logo.png" type = 'image/png'>
<meta name="robots" content="index,follow">
<meta name="robots" content="index,all">

<!-- CSS -->
<link rel="stylesheet" href="assets/bootstrap.min.css" >
<link href="assets/owl/owl.carousel.css" rel="stylesheet">
<link href="assets/owl/owl.theme.css" rel="stylesheet">
<link rel="stylesheet" href="assets/layout.css" >
<link rel="stylesheet" href="assets/news-and-events.css" >


<h1 style="display:none">About ARM Metal Recycling CO.</h1>

</head>


<body>
    @include('headre\header')




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




@include('footer\footer2')


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
document.getElementById("NEWS").classList.add("current");
</script>

</body>
 </html>
