



<!doctype html>
<html>

<!-- Mirrored from metalsrecyclingco.com/contact by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Feb 2022 13:03:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta charset="utf-8">
<title>Contact  Metal Recycling CO. LTD</title>
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
<link rel="stylesheet" href="assets/contact.css" >
<link rel="stylesheet" href="assets/layout.css" >


<h1 style="display:none">Contact  Metal Recycling CO. LTD</h1>

</head>


<body>

    @include('header')

<div class="page-title" >
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			<h1>Contact Us</h1>
		</div>
	</div>
</div>
</div>



<section class="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1>How we can help You?</h1>
				<p>Whether you want to find out more about a trip or just want a helping hand, you can always get us online or over the phone.</p>
			</div>

			<div class="col-md-4">
				<h3>Metals Recycling Co. LTD.</h3>
				<p>P.O . Box 4618  <br>Dammam 34354,<br> Kingdom of Saudi Arabia</p>
			</div>

			<div class="col-md-5">
				<h3>Mail Us</h3>
				<p>info@metalsrecyclingco.com</br>customerservice@metalsrecyclingco.com</p>
			</div>

			<div class="col-md-3">
				<h3>Call Us</h3>
				<p>+966 802 2235</br></p>
			</div>
		</div>

		<div class="row">
			<div class="col-md-4 col-xs-12">
				<div class="depart"><h3>Customer Service Department</h3><p><b>Tel:</b> +966 802 2235<br> <b>mail:</b> customerservice@metalsrecyclingco.com<br> </p></div>
			</div>
			<div class="col-md-4  col-xs-12">
				<div class="depart"><h3>Office of the General Manager</h3><p><b>Mr. Ahmed Ibrahim</b><br> <b>mail:</b> a.qahtani@metalsrecyclingco.com<br></p></div>
			</div>
			<div class="col-md-4  col-xs-12">
				<div class="depart"><h3>Finance Department</h3><p><b>Mr. Jerry Loquias</b><br> <b>mail:</b> Jerry.accts@metalsrecyclingco.com<br></p></div>
			</div>
		</div>
		<div class="row map-form">
			<div class="col-md-4">
				<div class="form">
					<h2>Quick Enquiry</h2>
					<form method="POST">
						<input type="text" name="name" placeholder="enter name"/>
						<input type="text" name="mail" placeholder="email id"/>
						<input type="text" name="mob" placeholder="contact number"/>
						<textarea name="msg" placeholder="message"></textarea>
						<button name="sub" class="btn btn-yellow">SEND ENQUIRY <i class="demo-icon icon-right-open">&#xf006;</i> </button>
					</form>
				</div>
			</div>
			<div class="col-md-8">
				<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1Uvp9Uv622yJ4TgTs5pLfz2TwU9I" width="100%" height="450"></iframe>
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
document.getElementById("Home").classList.add("current");
</script>

</body>
 </html>
