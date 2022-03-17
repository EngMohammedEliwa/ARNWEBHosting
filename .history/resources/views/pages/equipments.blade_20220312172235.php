<!doctype html>
<html>
 <head>
<meta charset="utf-8">
<title>Equipments ARM Metal Recycling CO.</title>
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
<link rel="stylesheet" href="assets/img-eff.css" >
<link rel="stylesheet" href="assets/style10.css" >
<link rel="stylesheet" href="assets/layout.css" >
<link rel="stylesheet" href="assets/equipments.css" >



<h1 style="display:none">Equipments ARM Metal Recycling CO.</h1>

</head>


<body>

    @include('headre\header')



    <section class="services-sec-two">
        <div class="container">
    <h2>Modern Equipents & Eficient employees</h2>
    <p>We purchase scrap steel materials both local and overseas. We use heavy equipment’s, machineries and manual labor to sort the scrap into various metals classifications and produce recycled scrap metal products so it can be used to manufacture new metal products</p>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="row services-boxes">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="view view-tenth">
                        <img src="images/equipments_13.jpg" width="100%"/>
                        <div class="mask">
                           <h2 class=" ser-text-h2 ">Recycling Equipent</h2>
                           <p>Equipent of  ARM Metal Recycling CO. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="view view-tenth">
                        <img src="images/equipments_15.jpg" width="100%"/>
                        <div class="mask">
                           <h2 class=" ser-text-h2 ">Recycling Equipent</h2>
                           <p>Equipent of  ARM Metal Recycling CO. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="view view-tenth">
                        <img src="images/equipments_17.jpg" width="100%"/>
                        <div class="mask">
                           <h2 class=" ser-text-h2 ">Recycling Equipent</h2>
                           <p>Equipent of  ARM Metal Recycling CO. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="view view-tenth">
                        <img src="images/equipments_26.jpg" width="100%"/>
                        <div class="mask">
                           <h2 class=" ser-text-h2 ">Recycling Equipent</h2>
                           <p>Equipent of  ARM Metal Recycling CO. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="view view-tenth">
                        <img src="images/pic7.PNG" width="100%"/>
                        <div class="mask">
                           <h2 class=" ser-text-h2 ">Recycling Product</h2>
                           <p>Product of  ARM Metal Recycling CO. </p>
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
document.getElementById("Equipments").classList.add("current");
</script>

</body>
 </html>
