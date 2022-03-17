
<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>Career  ARM Metal Recycling CO.</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Description" content="Career ARM Metal Recycling CO.">
<meta name="Keywords" content="  ARM Metal Recycling CO.">
<link rel="shortcut icon" type="image/png" href="images/logo.png">
<meta name="robots" content="index,follow">
<meta name="robots" content="index,all">

<!-- CSS -->
<link rel="stylesheet" href="assets/bootstrap.min.css" >
<link href="assets/owl/owl.carousel.css" rel="stylesheet">
<link href="assets/owl/owl.theme.css" rel="stylesheet">
<link rel="stylesheet" href="assets/contact.css" >
<link rel="stylesheet" href="assets/layout.css" >


<h1 style="display:none">Career  ARM Metal Recycling CO.</h1>


</head>


<body>

    @include('headre\header')
<div class="page-title" >
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			<h1>Career Jobs</h1>
		</div>
	</div>
</div>
</div>



<section class="contact">
	<div class="container">

		<div class="row">
			<div class="col-md-2">
				<h2>Career Jobs</h2>
			</div>
			<div class="col-md-12" style="font-size: large; font-weight: 900;">
				If you think you are enthusiastic, energetic and have the right set of skills to take our company to new heights? Come join us. We will provide you with the best workplace environment to embellish your professional skills and nurture your growth.
			</div>
		</div>


		<div class="row">
			<div class="col-md-4">
				<h3>Al-Rukn
					Sharjah
					United Arab Emirates</h3>
				<p>P.O. Box 95911,<br> Industrial Area 12,<br> Sharjah – UAE</p>
			</div>

			<div class="col-md-5">
				<h3>Mail Us</h3>
				<p>ammar@alruknmetal.com</br>info@alruknmetal.com</p>
			</div>

			<div class="col-md-3">
				<h3>Call Us</h3>
				<p>+971 56 411 3933</br>+971 6 535 9604 </p>
			</div>
		</div>



		<div class="row map-form">

			<div class="col-md-6">
				<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1Uvp9Uv622yJ4TgTs5pLfz2TwU9I" width="100%" height="450"></iframe>
			</div>

			<div class="col-md-6">
				<div class="form">
					<h2>Career Jobs</h2>
                    <form method="POST" action="{{ route('contact1') }}">
                        @csrf
						<div class="flex_row"><label class="lab_1" for="name">Full Name : </label><input class="input_1" type="text" name="name" placeholder="Enter Your Name"/></div>
						<div class="flex_row"><label class="lab_1" for="email">Email : </label><input class="input_1" type="email" name="email" placeholder="Enter email address"/></div>
						<div class="flex_row"><label class="lab_1" for="mob">contact Number : </label><input class="input_1" type="text" name="mob" placeholder="Enter phone number"/></div>
						<div class="flex_row"><label class="lab_1" for="msg">Message : </label><textarea  class="input_2" name="msg" placeholder="Your Message.."></textarea></div>


						<button name="sub" class="btn btn-blue">Apply<i class="demo-icon icon-right-open">&#xf006;</i> </button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>



@include('footer\footer2')

<script src="assets/js/min.js"></script>
<script src="assets/owl/owl.carousel.min.js"></script>
<script>



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
