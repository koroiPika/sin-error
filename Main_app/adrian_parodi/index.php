<?php
session_start();
if(isset($_SESSION['usuario'])){
	if ($_SESSION['usuario']['Tipo_usuario']!="adrian_parodi") {
		header('Location:../alberto_cardenas/');

	
		header('Location:../alberto_sulllca_huaman/');
		header('Location:../alejandro_huaman/');
    }
	} else{
		header('Location:../../');
	}
	
 ?>
 <!DOCTYPE html>
<html>

<head>
		<!-- META information -->
		<meta charset="UTF-8">
   	<meta name="viewport" content="width=device-width, initial-scale=1">
   	<meta name="description" content="">

	<title>TITLE</title>

	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css" type='text/css'>

	<!-- Fonts -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type='text/css'>
	<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:800' rel='stylesheet' type='text/css'>

	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css"> 
	<title>CONDUCTORES PIKANGO</title>
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
<style>
#content {
    width: 23.72881%;
    float: left;
    margin-right: 1.69492%;
}
 
@media (min-width: 768px) {
    #content {
        // estos estilos se aplican en tablets + desktops
    }

}
 
@media (min-width: 1024px) {
    #content {
        // estos estilos se aplican sólo en desktops
    }
}
@import "//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css";

.social {
    margin: 0;
    padding: 0;
}

.social ul {
    margin: 0;
    padding: 5px;
}

.social ul li {
    margin: 5px;
    list-style: none outside none;
    display: inline-block;
}

.social i {
    width: 40px;
    height: 40px;
    color: #FFF;
    background-color: #909AA0;
    font-size: 22px;
    text-align:center;
    padding-top: 12px;
    border-radius: 50%;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    -o-border-radius: 50%;
    transition: all ease 0.3s;
    -moz-transition: all ease 0.3s;
    -webkit-transition: all ease 0.3s;
    -o-transition: all ease 0.3s;
    -ms-transition: all ease 0.3s;
}

.social i:hover {
    color: #FFF;
    text-decoration: none;
    transition: all ease 0.3s;
    -moz-transition: all ease 0.3s;
    -webkit-transition: all ease 0.3s;
    -o-transition: all ease 0.3s;
    -ms-transition: all ease 0.3s;
}
.social .fa-twitter:hover {
    background: #00ABE3;
}
.social .fa-instagram:hover {
    background: #375989;
}
.social .fa-youtube:hover {
    background: #FF1F25;
}



html, body {
    height:100%;
}



h1 {
	font-family: 'Raleway';
	letter-spacing: 2px;
	font-size: 70px;
	color: #fff;
	margin: 25px 0 10px;
	text-transform: uppercase;
	font-weight: 700;
	text-align: center;
}

h1, h2, h3, h4, h5, h6 {
	line-height: 1.15;
}
.dark {
	background: #333333;
	color: #fff;
}

.dark h1, .dark h2, 
.dark h3, .dark h4, 
.dark h5, .dark h6, 
.dark p, .dark a {
	color: #fff;
}

/* Divider */

.divider {
	height: 30px;
	padding: 25px 0 35px;
}

.hr {
	content: "";
	height: 1px;
	width: 16%;
	background: #d9d9d9;
	left: 42%;
	position: absolute;
	display: block;
}

.hr-dot {
	width: 10px;
	height: 10px;
	border: 2px solid #d9d9d9;
	background: #fff;
	border-radius: 100%;
	margin-top: -5px;
	left: 50%;
	margin-left: -5px;
	display: block;
	position: absolute;
}

.hr-dark {
	background: #626262;
}

.divider-left .hr {
	left: 15px;
}

.divider-left .hr-dot {
	left: 5px;
}

.white {
	color: #fff;
}

.bold {
	font-weight: 700;
}

.hr-dark .hr-dot {
	border: 2px solid #626262;
	background: #333333;
}

section {
	padding-bottom: 80px;
}


.col-centered {
	display: inline-block;
    text-align: center;
}
.col-centered .col-md-1,
.col-centered .col-md-2,
.col-centered .col-md-3,
.col-centered .col-md-4,
.col-centered .col-md-5,
.col-centered .col-md-6,
.col-centered .col-md-7,
.col-centered .col-md-8,
.col-centered .col-md-9,
.col-centered .col-md-10,
.col-centered .col-md-11,
.col-centered .col-md-12 {
	margin: 0 auto;
	float: none;
}
.overlay:after {
    content: "";
	background: rgba(0,0,0,.2);
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    position: absolute;
}

.top {
    text-shadow: 0 0 25px rgba(0,0,0,.2);
}

.top .content-a {
	z-index: 100;
}

.background {
    background-repeat: no-repeat;
    background-position: 50% 50%;
    /* ie8 degradation */
    background-position: 50% 50%\9 !important;
}

.fullscreen,
.content-a {
    width: 100%;
    min-height: 100%;
}

.not-fullscreen,
.not-fullscreen .content-a,
.fullscreen.not-overflow,
.fullscreen.not-overflow .content-a {
    height: 100%;
}

.content-a {
	display: table;
}

.content-b {
	display: table-cell;
    position: relative;
	vertical-align: middle;
	text-align: center;
}

.dark-line {
	background: rgba(0,0,0,.15);
	padding: 50px 0;
	margin-left: -2px;
}

.content-b p {
	font-size: 16px;
	color: #fff;
}

.not-fullscreen {
    height:50%;
}

.nav-content {
	min-height: 64px;
}

.navbar {
	background: #333333;
	border: none;
	min-height: 64px;
}

nav.affix {
    position: fixed;
    top: 0;
    width: 100%;
    z-index:10;
}

@media (min-width: 768px) {
	#navbar {
	   float:left;
	   width:100%;
	   overflow:hidden;
	   position:relative;
	}

	#navbar ul {
	   clear:left;
	   float:left;
	   position:relative;
	   left:50%;
	   text-align:center;
	}

	#navbar ul li {
	   display:block;
	   float:left;
	   position:relative;
	   right:50%;
	}
}
.nav {
	position: relative;
}

.nav li a {
	color: #fff;
	font-weight: 700;
	padding: 22px 35px;
	-webkit-transition: all 300ms ease-out;
    -moz-transition: all 300ms ease-out;
    -o-transition: all 300ms ease-out;
    transition: all 300ms ease-out;
}

.nav li a:hover li, .nav li a:hover,
.nav li.active, .nav li.active a {
	background: #fff;
	color: #1e1e1e;
	-webkit-transition: all 300ms ease-out;
    -moz-transition: all 300ms ease-out;
    -o-transition: all 300ms ease-out;
    transition: all 300ms ease-out;
}
.navbar-toggle {
	border: 1px solid#fff;
	margin-top: 15px;
}

.navbar-toggle .icon-bar {
	background: #fff;
}
footer {
	border-top: 1px solid #626262;
	height: 60px;
}


.copyright {
	color: #878787;
	line-height: 59px;
}

footer ul {
	float: right;
	margin-bottom: 0;
}

footer ul li {
	display: inline-block;
}

footer ul li a{
	line-height: 59px;
	padding: 16px 10px;
}

</style>
<script>
	function fullscreenFix(){
    var h = $('body').height();
    // set .fullscreen height
    $(".content-b").each(function(i){
        if($(this).innerHeight() <= h){
            $(this).closest(".fullscreen").addClass("not-overflow");
        }
    });
}
$(window).resize(fullscreenFix);
fullscreenFix();


function backgroundResize(){
    var windowH = $(window).height();
    $(".background").each(function(i){
        var path = $(this);
        // variables
        var contW = path.width();
        var contH = path.height();
        var imgW = path.attr("data-img-width");
        var imgH = path.attr("data-img-height");
        var ratio = imgW / imgH;
        var diff = parseFloat(path.attr("data-diff"));
        diff = diff ? diff : 0;
        var remainingH = 0;
        if(path.hasClass("parallax") && !$("html").hasClass("touch")){
            var maxH = contH > windowH ? contH : windowH;
            remainingH = windowH - contH;
        }
        imgH = contH + remainingH + diff;
        imgW = imgH * ratio;
        if(contW > imgW){
            imgW = contW;
            imgH = imgW / ratio;
        }
        //
        path.data("resized-imgW", imgW);
        path.data("resized-imgH", imgH);
        path.css("background-size", imgW + "px " + imgH + "px");
    });
}

 
	</script>
</head>

<body>

   
	<!-- Top section -->
	<div class="top fullscreen background parallax" id="top" style="background-image:url=;" data-img-width="1920" 
	data-img-height="1080" data-diff="250">
   		<div class="content-a">
   			<div class="overlay"></div>
       		<div class="content-b">
       			<div class="dark-line">
					<h1>PIKANGO</h1>
					<p>HEADLINE ||</p>
<div class="container">
        <div class="row">
                <div class="social">
            <ul>
                <li><a href="TWITTER_LINK"><i class="fa fa-lg fa-twitter"></i></a></li>
                <li><a href="INSTAGRAM_LINK"><i class="fa fa-lg fa-instagram"></i></a></li>
                <li><a href="YOUTUBE_LINK"><i class="fa fa-lg fa-youtube"></i></a></li>
            </ul>
        </div>
        </div>
</div>

  <div id="navbar" class="navbar-collapse collapse">
                                 <ul class="nav navbar-nav navbar-center">
            			<li><a href="../salir.php">CERRAR SESIÓN |</a></li>
						
            		 <!-- <li><a href="NAV_||_Link">NAV ||</a></li>
            			<li><a href="NAV_|||_Link">NAV |||</a></li> 
						 -->
          			</ul>

					
        		</div>
			
      		</div>
                                 
                                  </ul>
                        </div>
				</div>
					<div class="arrows">
					<h5>  Bienvenido <?php echo $_SESSION['usuario'] ['Nombre']?> ESCRIBA EL MES QUE DESEAS CONSULTAR </h5>
					
					</div>
					
	       	</div>
   		</div>
   	</div>

	   <section class="content">
<!-- <form action='cerrar_sesion.php'>
    <input type="submit" name="sesionDestroy" value="Cerrar sesion"/>
</form> -->


	

	<div class="content">
		<label for="caja_busqueda">Buscar</label>
		<input type="text" name="caja_busqueda" id="caja_busqueda"></input>

		
	</div>

	<div id="datos"></div>
	
	
</section>

<!-- <section> -->
    <!-- <div class="dark"> -->
<!-- <h1>HERE YOU CAN PUT SECTIONS. THEY ARE BETWEEN THE HEADER AND THE FOOTER. SOME EDITING EXAMPLES ARE IN THE CSS PATH. YOU CAN ADD/REMOVE ALL THEM :)</h1> -->

<!-- </div> -->
<!-- </section> -->


	<!-- Footer -->
	<footer class="dark">
		<div class="container">
			<span class="copyright"><a >Av. del Ejercito 250, oficina 501
Miraflores
Lima-Perú
Teléfono 511 7152163</a></span>

 		
	</footer>





<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
</body>

</html>
