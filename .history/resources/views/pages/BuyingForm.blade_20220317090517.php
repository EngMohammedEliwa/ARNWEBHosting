
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




<!-- CSS

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

-->

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
					<p>Here you can sell to us your scrap for make money!</p>
					<a h href="{{route('services')}}"> Back </a><br>
					</div>
					<div class="col-md-9 register-right">
					<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					<h3 class="register-heading">Sell your scrap </h3>
					<div class="row register-form">
					<div class="col-md-6">

                        <form method="POST" action="{{ route('contact1') }}">
                            @csrf

					<div class="form-group">
					<input type="text" class="form-control" placeholder="Your Name *" value="">
					</div>

					<div class="form-group">
                        <input type="number" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value=""  required>
					</div>

					<div class="form-group">
                        <input type="number" name="txtEmpPhone" class="form-control" placeholder="Your quantity *" value=""  required>
					</div>

					<div class="form-group">

                        <textarea style="resize:none" name="name" cols="24" rows="4" class="form-control" name="message" placeholder="Your Message.."></textarea>

					</div>


					</div>
					<div class="col-md-6">

					<div class="form-group">
					<input type="email" class="form-control" placeholder="Your Email *" value="">
					</div>

					<div class="form-group">
                        <select class="form-control">
                            <option class="hidden" selected="" disabled="">Please select the type of Scrape</option>
                            <option>FERROUS METAL</option>
                            <option>NON-FERROUS METAL</option>
                            </select>
					</div>

					<div class="form-group">
                        <select class="form-control">
                            <option class="hidden" selected="" disabled="">kind of FERROUS METAL</option>
                            <option>Bicycles</option>
                            <option>Cookers</option>
                            <option>Iron</option>
                            <option>Steel</option>
                            </select>
					</div>




					<input type="submit" class="btnRegister" value="Register">
					</div>

                </form>
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
