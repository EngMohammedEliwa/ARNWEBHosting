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
			<h1>Image &amp; Gallery</h1>
		</div>
	</div>
</div>
</div>



<section class="gallery">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-4 col-sm-6 item">
				<a href="images/news_06.jpg" class=" venobox" id="firstlink"  data-gall="gall1">
					<img src="images/news_06.jpg" width="100%" alt="logo">
				</a>
			</div>
			<div class="col-lg-3  col-md-4 col-sm-6 item">
				<a href="images/news_08.jpg" class="venobox" id="firstlink"  data-gall="gall1">
					<img src="images/news_08.jpg" width="100%" alt="logo">
				</a>
			</div>
			<div class="col-lg-3  col-md-4 col-sm-6 item">
				<a href="images/news_10.jpg" class="venobox" id="firstlink"  data-gall="gall1">
					<img src="images/news_10.jpg" width="100%" alt="logo">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6  item">
				<a href="images/news_12.jpg" class="venobox" id="firstlink"  data-gall="gall1">
					<img src="images/news_12.jpg" width="100%" alt="logo">
				</a>
			</div>
			<div class="col-lg-3  col-md-4 col-sm-6 item">
				<a href="images/news_30.jpg" class="venobox" id="firstlink"  data-gall="gall1">
					<img src="images/news_30.jpg" width="100%" alt="logo">
				</a>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6  item">
				<a href="images/news_31.jpg" class="venobox" id="firstlink"  data-gall="gall1">
					<img src="images/news_31.jpg" width="100%" alt="logo">
				</a>
			</div>
			<div class="col-lg-3  col-md-4 col-sm-6 item">
				<a href="images/news_32.jpg" class="venobox" id="firstlink"  data-gall="gall1">
					<img src="images/news_32.jpg" width="100%" alt="logo">
				</a>
			</div>
			<div class="col-lg-3  col-md-4 col-sm-6 item">
				<a href="images/news_34.jpg" class="venobox" id="firstlink"  data-gall="gall1">
					<img src="images/news_34.jpg" width="100%" alt="logo">
				</a>
			</div>
			<div class="col-lg-3  col-md-4 col-sm-6 item">
				<a href="images/news_40.jpg" class="venobox" id="firstlink"  data-gall="gall1">
					<img src="images/news_40.jpg" width="100%" alt="logo">
				</a>
			</div>
			<div class="col-lg-3  col-md-4 col-sm-6 item">
				<a href="images/news_41.jpg" class="venobox" id="firstlink"  data-gall="gall1">
					<img src="images/news_41.jpg" width="100%" alt="logo">
				</a>
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

</body>

 </html>
