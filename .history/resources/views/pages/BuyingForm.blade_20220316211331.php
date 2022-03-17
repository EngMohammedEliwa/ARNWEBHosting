
<!doctype html>
<html>

<head>
<meta charset="utf-8">
<title>BuyingForm  ARM Metal Recycling CO.</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Description" content="Buying Form ARM Metal Recycling CO.">
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
<link rel="stylesheet" href="css/web.css">

<h1 style="display:none">Buying Form  ARM Metal Recycling CO.</h1>


</head>





<div class="form-group">
    <input type="text" class="form-control" placeholder="Name *" value="">
    </div>

    <div class="form-group">
        <select class="form-control">
        <option class="hidden" selected="" disabled="">Please select the type of Scrape</option>
        <option>FERROUS METAL</option>
        <option>NON-FERROUS METAL</option>
        </select>
        </div>


        <div class="form-group">

            <input type="number" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your d Phone *" value="" required>
            </div>




<body>

    @include('headre\header')


<section  >
	<div class="container" style="width: 100%;">

		<div class="row" >
			<div class="col-lg-12" style="padding: 0px;">
				<div class="container register">
					<div class="row">
					<div class="col-md-3 register-left">
					<img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="">
					<h3>Welcome</h3>
					<p>You are 30 seconds away from earning your own money!</p>
					<a href="Login_v18/index.html"  > Login </a><br>
					</div>
					<div class="col-md-9 register-right">
					<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					<h3 class="register-heading">Apply as a Employee</h3>
					<div class="row register-form">
					<div class="col-md-6">
					<div class="form-group">
					<input type="text" class="form-control" placeholder="Your Name *" value="">
					</div>
					<div class="form-group">
                        <select class="form-control">
                            <option class="hidden" selected="" disabled="">Please select the type of Scrape</option>
                            <option>FERROUS METAL</option>
                            <option>NON-FERROUS METAL</option>
                            </select>
					</div>
					<div class="form-group">
					<input type="password" class="form-control" placeholder="Password *" value="">
					</div>
					<div class="form-group">
					<input type="password" class="form-control" placeholder="Confirm Password *" value="">
					</div>
					<div class="form-group">
					<div class="maxl">
					<label class="radio inline">
					<input type="radio" name="gender" value="male" checked="">
					<span> Male </span>
					</label>
					<label class="radio inline">
					<input type="radio" name="gender" value="female">
					<span>Female </span>
					</label>
					</div>
					</div>
					</div>
					<div class="col-md-6">
					<div class="form-group">
					<input type="email" class="form-control" placeholder="Your Email *" value="">
					</div>
					<div class="form-group">
					<input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="">
					</div>
					<div class="form-group">
					<select class="form-control">
					<option class="hidden" selected="" disabled="">Please select your Sequrity Question</option>
					<option>What is your Birthdate?</option>
					<option>What is Your old Phone Number</option>
					<option>What is your Pet Name?</option>
					</select>
					</div>
					<div class="form-group">
					<input type="text" class="form-control" placeholder="Enter Your Answer *" value="">
					</div>
					<input type="submit" class="btnRegister" value="Register">
					</div>
					</div>
					</div>

					</div>
			</div>

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
