<!doctype html>
<html>
 <head>
<meta charset="utf-8">
<title>Services ARM Metal Recycling CO.</title>
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
<link rel="stylesheet" href="assets/services.css" >


<h1 style="display:none">Services ARM Metal Recycling CO.</h1>

<style>
	@font-face {


	font-family: 'fontello';
    src: url('assets/fontello3f9f.eot?39349329');
    src: url('assets/fontello3f9f.eot?39349329#iefix') format('embedded-opentype'),
	    url('assets/fontello3f9f.woff?39349329') format('woff'),
	    url('assets/fontello3f9f.ttf?39349329') format('truetype'),
	    url('assets/fontello3f9f.svg?39349329#fontello') format('svg');
    font-weight: normal;
    font-style: normal;

    }
</style>

</head>


<body>

    @include('headre\header')




    <section class="services-sec-two">
        <div class="container">
    <h2>300+ Employees  And a Million Smiles</h2>
    <p>The company maintains its dedication to produce a high quality of shredded materials and scrap metal products that meets our customer’s quality standards. Our main goal is to deliver quality product and services for our customer’s satisfaction.  </p>
        </div>
    </section>

    <section class="services">
        <div class="container">
            <div class="row services-boxes">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="item">
                         <i class="demo-icon icon-tool">&#xe80c;</i>
                         <h2>Buying & Selling Ferrous Materials</h2>
                         <p>We buy and sell all kinds of ferrous scrap materials from raw materials to finished products. </p>
                         <div class="make_btn_1">
                            <a class="make_a_1" href="http://">Buy & Sell</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="item">
                         <i class="demo-icon icon-net">&#xe815;</i>
                         <h2>Buying & Selling Non-Ferrous Scrap Products</h2>
                         <p>We buy and sell non-ferrous products such zorba and all type of Alum. Scrap products. </p>
                         <div class="make_btn_1">
                             <a class="make_a_1" href="http://">Buy & Sell</a>
                         </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="item">
                         <i class="demo-icon icon-lego-pieces">&#xe812;</i>
                         <h2>Buying & Selling Plastic Scraps</h2>
                         <p>We also buy and sell selective plastic scrap products</p>
                         <div class="make_btn_1">
                            <a class="make_a_1" href="http://">Buy & Sell</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 ">
                    <div class="item">
                         <i class="demo-icon icon-bulleted-list">&#xe81a;</i>
                         <h2>Metal Scrap Shredding Services</h2>
                         <p>We also cater metals scrap shredding services as very affordable shredding charges.</p>
                         <div class="make_btn_1">
                            <a class="make_a_1" href="http://">Buy & Sell</a>
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




    var colors = new Array(
      [62,35,255],
      [60,255,60],
      [255,35,98],
      [45,175,230],
      [255,0,255],
      [255,128,0]);

    var step = 0;
    //color table indices for:
    // current color left
    // next color left
    // current color right
    // next color right
    var colorIndices = [0,1,2,3];

    //transition speed
    var gradientSpeed = 0.002;

    function updateGradient()
    {

      if ( $===undefined ) return;

    var c0_0 = colors[colorIndices[0]];
    var c0_1 = colors[colorIndices[1]];
    var c1_0 = colors[colorIndices[2]];
    var c1_1 = colors[colorIndices[3]];

    var istep = 1 - step;
    var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
    var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
    var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
    var color1 = "rgb("+r1+","+g1+","+b1+")";

    var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
    var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
    var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
    var color2 = "rgb("+r2+","+g2+","+b2+")";

     $('#gradient').css({
       background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
        background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});

      step += gradientSpeed;
      if ( step >= 1 )
      {
        step %= 1;
        colorIndices[0] = colorIndices[1];
        colorIndices[2] = colorIndices[3];

        //pick two new target color indices
        //do not pick the same as the current one
        colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
        colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;

      }
    }

    setInterval(updateGradient,10);


        //new

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
