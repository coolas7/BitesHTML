<!DOCTYPE html>
<html>
<head>
	<title>Bitės</title>
		<?php include 'head.php'; ?>
</head>
<body class="container1">
<div>
	<!-- Navigacija -->
	<?php include 'nav.php'; ?>
	<!-- Video -->
	<div class="homepage-hero-module">
   		<div class="video-container">
   		 	<div>
   		 		<h1>Sveiki atvykę!</h1>
   		 	</div>
       		<div class="filter"></div>
		        <video autoplay loop class="fillWidth">
		            <source src="../video/Flower.mp4" type="video/mp4" />Your browser does not support the video tag. Upgrade your browser.
        	    	<source src="../video/Flower.webm" type="video/webm" />Your browser does not support the video tag. Upgrade your browser.
       			 </video>
      		<div class="poster hidden">
           		 <img src="../video/Flower.jpg" alt="">
        	</div>
    	</div>
	</div>
	<!-- Apie -->
	<div class="apie sectionpadding ProzaLibre">
		<h2 class="textcenter-green">Apie mus</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
	</div>
	<!-- Hero -->
	<div class="hero sectionpadding">
		<img src="img/hero.png" alt="hero">
	</div>
	<!-- Produktai -->
	<div class="flex sectionpadding ProzaLibre geltonazalia">
		<div class="produktai borders">
			<img src="img/bit5.jpg" alt="produktas1">
			<h3>Medus 500ml</h3>
			<div>
				<h4>Kaina: <span>7 &euro;</span></h4>
				<a href="produktai.php" class="btnpirkti">Pirkti</a>
			</div>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
		</div>
		<div class="produktai borders">
			<img src="img/biciupikis.jpg" alt="produktas2">
			<h3> Bičių pikis 100ml</h3>
			<div>
				<h4>Kaina: <span>8 &euro;</span></h4>
				<a href="produktai.php" class="btnpirkti">Pirkti</a>
			</div>
			<p>dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
		</div>
		<div class="produktai borders">
			<img src="img/duonele.jpg" alt="produktas3">
			<h3> Bičių duonelė 200g</h3>
			<div>
				<h4>Kaina:<span>10 &euro;</span></h4>
				<a href="produktai.php" class="btnpirkti">Pirkti</a>
			</div>
			<p>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
		</div>
		<div class="produktai borders">
			<img src="img/avilys.jpg" alt="produktas4">
			<h3>Avilys</h3>
			<div>
				<h4>Kaina:<span>900 &euro;</span></h4>
				<a href="produktai.php" class="btnpirkti">Pirkti</a>
			</div>
			<p>exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit</p>
		</div>
	</div>
	
	<!-- Kontaktai -->
	<div id="kontaktai" class="flex sectionpadding background-green ProzaLibre">
		<div class="borders sectionpadding"> 
			<h2 class="textcenter-green"><i class="far fa-compass"></i> Kaip mus rasti</h2>
			<p><i class="fas fa-phone"></i> Skambinkite: <span><a class="kontaktai" href="tel:+37065479709">865479709</a></span></p>
			<p><i class="fas fa-envelope"></i> Rašykite: <span><a class="kontaktai" href="mailto:vytautas.uoga@gmail.com">vytautas.uoga@gmail.com</a></span></p>
			<p><i class="fab fa-facebook-square"></i> Facebook: <a class="kontaktai" href="https://facebook.com">Vytautas Uoga</a></p>
			<p><i class="fas fa-home"></i> Adresas: Kretingos raj. Reketės km.</p>
		</div>
		<div class="borders" id="googleMap"></div>
	</div>
	<div class="clearfloat"></div>
<?php include 'form.php' ?>
<?php include 'footer.php'; ?>
</div>

<?php include 'scripts.php'; ?>
</body>
</html>