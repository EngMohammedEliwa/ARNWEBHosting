<!doctype html>
<html>
 <head>
<meta charset="utf-8">
<title>News</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Description" content="  ARM Metal Recycling CO.">
<meta name="Keywords" content="  ARM Metal Recycling CO.">
<link rel="shortcut icon" type="image/png" href="images/logo.png">
<meta name="robots" content="index,follow">
<meta name="robots" content="index,all">

<!-- CSS -->
<link rel="stylesheet" href="assets/bootstrap.min.css" >
<link href="assets/owl/owl.carousel.css" rel="stylesheet">
<link href="assets/owl/owl.theme.css" rel="stylesheet">
<link rel="stylesheet" href="assets/layout.css" >
<link rel="stylesheet" href="assets/news.css" >

<h1 style="display:none">News ARM Metal Recycling CO.</h1>

</head>


<body  >


    @include('headre\header')


<section class="services">
	<div class="container">
		<div class="row services-boxes">


			<div     class="col-lg-8 col-centered  col-md-10 col-sm-12 col-xs-12">
				<div class="item">
					<div style="background: white;">
						<div class="writer_111">
							<div class="img_33">
								<img src="./images/ch2.png" alt="">
							</div>

							<div class="writer_22">
								<h3 class="fix_text">Hasan Zakaria</h3>
								<h5 class="fix_text">Chief Executive Officer</h5>
							</div>
						</div>

						<p class="text desc_11 fix_text tx">
							July 2, 2020
						</p>
						<h2 class="text_1 fix_text fix_text_1  title_33"  >Creating awareness and promoting standard operating practices & policies</h2>

						 <img class="img_44" src="./images/msi.jpg"   alt="">
						<p class="text fix_text fix_text_2 desc_33" style="font-size: 16px; font-weight: 400;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,</p>
						 </div>
				</div>
			</div>





		</div>
	</div>
</section>




<section class="clients">
	<div class="container">
		<div class="row">
			<div class=" u-align-center-lg col-lg-offset-1 col-lg-11 col-md-11 col-sm-12 col-xs-12">
				<div id="clients" class="owl-carousel row">
					<div class="item">
						<div class="col_11">
							<a href="{{route('News')}}">
							    <div class="img_11">
									<img src="./images/img2.jpg" alt="">
								</div>
								<div class="news_11">

									<p class="text desc_11">
										July 2, 2020
									</p>

									<h2 class="text_1 title_11">
										Creating awareness and promoting standard operating practices & policies
									</h2>

									<p class="text desc_11">
										It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
									</p>

									<div class="writer_11">
										<div class="img_22">
											<img src="./images/ch2.png" alt="">
										</div>

										<div class="writer_22">
											<h3>Hasan Zakaria</h3>
											<h5>Chief Executive Officer</h5>
										</div>
									</div>

									<div class="fix_1">
										<a  href="{{route('News')}}"></a>
									</div>

								</div>
							</a>
						</div>

					</div>

					<div class="item">
						<div class="col_11">
							<a href="news.html">
							    <div class="img_11">
									<img src="./images/img2.jpg" alt="">
								</div>
								<div class="news_11">

									<p class="text desc_11">
										July 2, 2020
									</p>

									<h2 class="text_1 title_11">
										Creating awareness and promoting standard operating practices & policies
									</h2>

									<p class="text desc_11">
										It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
									</p>

									<div class="writer_11">
										<div class="img_22">
											<img src="./images/ch2.png" alt="">
										</div>

										<div class="writer_22">
											<h3>Hasan Zakaria</h3>
											<h5>Chief Executive Officer</h5>
										</div>
									</div>

									<div class="fix_1">
										<a  href="{{route('News')}}"></a>
									</div>

								</div>
							</a>
						</div>

					</div>
					<div class="item">
						<div class="col_11">
							<a href="news.html">
							    <div class="img_11">
									<img src="./images/img2.jpg" alt="">
								</div>
								<div class="news_11">

									<p class="text desc_11">
										July 2, 2020
									</p>

									<h2 class="text_1 title_11">
										Creating awareness and promoting standard operating practices & policies
									</h2>

									<p class="text desc_11">
										It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
									</p>

									<div class="writer_11">
										<div class="img_22">
											<img src="./images/ch2.png" alt="">
										</div>

										<div class="writer_22">
											<h3>Hasan Zakaria</h3>
											<h5>Chief Executive Officer</h5>
										</div>
									</div>

									<div class="fix_1">
										<a  href="{{route('News')}}"></a>
									</div>

								</div>
							</a>
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




$(document).ready(function() {
	  $("#clients").owlCarousel({
        autoPlay: 3000,
        items : 1,
		slideSpeed : 3000,
        itemsDesktop : [1000,1], //5 items between 1000px and 901px
        itemsDesktopSmall : [900,1], // betweem 900px and 601px
        itemsTablet: [600,1], //2 items between 600 and 0
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
