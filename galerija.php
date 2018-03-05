<!DOCTYPE html>
<html>
<head>
	<title>Galerija</title>
		<?php include 'head.php'; ?>

</head>
<body class="bluebg">
    <?php include 'nav.php'; ?>

	<div class="flexcenter">
	    <div class="title">
		    <h2><i class="far fa-images"></i> Galerija</h2>
	    </div>
    </div>
    <div class="ProzaLibre" id="carousel">
       <div class="hideLeft">
       		<p>Bitynas sode.</p>
        	<img src="img/bit1.jpg">
      	</div>

     	<div class="prevLeftSecond">
      		<p>Naujasis bitynas prie sodo.</p>
       		<img src="img/bit2.jpg">
      	</div>

     	<div class="prev">
      		<p>Pirmasis medus iš netoli<br> miško laikomų avilių.</p>
        	<img src="img/bit3.jpg">
      	</div>

      	<div class="selected">
      	 	<p>Kabiname ką tik supilstytą medų,<br> iš sukimo mašinos.</p>
        	<img src="img/bit4.jpg">
      	</div>

      	<div class="next">
      		<p>Pievų medus.</p>
        	<img src="img/bit5.jpg">
      	</div>

      	<div class="nextRightSecond">
      		<p>Pradedame darbus anksti ryte.</p>
        	<img src="img/bit6.jpg">
      	</div>

      	<div class="hideRight">
      		<p>Žiemos metas...</p>
        	<img src="img/bit7.jpg">

     	</div>
    </div>

    <div class="buttons flexcenter">
    	<button id="prev"><span>Atgal</span></button>
    	<button id="next"><span>Pirmyn</span></button>
    </div>
    <div class="bottom0">
    	<?php include 'footer.php'; ?>
    </div>
    <script src= "scripts/jquery-3.3.1.min.js" type="text/javascript"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <script src="scripts/galerija.js" type="text/javascript"></script>
</body>
</html>