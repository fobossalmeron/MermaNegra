<?php
	require_once("../inc/config.php");
	$pagetitle = 'Retail Spots';
?>

<?php include(ROOT_PATH . 'inc/header.php'); ?>

<?php include(ROOT_PATH . 'inc/nav.php'); ?>

    <main>
	  <div class="wrapper">
	     <div class="g--half">
			<h2 class="retailseparator">ZocoMX</h2>
			<img class="logo180-2"src="<?php echo BASE_URL?>images/zocomx.svg" alt="ZocoMX">
			<p><b><a href="https://www.facebook.com/elzocomx/" target="blank">https://www.facebook.com/elzocomx/</a></b></p>
		  <p>Virgilio Street, Polanquito, Mexico City.</p>

			<div class="mapcanvas" id="map_Lonja"></div>
	     </div>
	     <div class="g--half g--last">

	     	<img class="logo180-1" src="<?php echo BASE_URL?>images/zocomx.svg" alt="ZocoMx">
			<p>
				April 30th, 10:00 / 19:00.<br>
				May 1st, 10:00 / 18:00.<br>
			</p>
			<p>
				Tel: 5567250671<br>
				info@lalonja.mx<br>
				@LonjaMX<br>
				ElZocoMX<br>
			</p>
	     </div>

	     <div class="g--half">
			<h2>180 Grados Shop</h2>
			<img class="logo180-2"src="<?php echo BASE_URL?>images/180shop.svg" alt="180 Shop">
			<p><b><a href="http://www.180grados.mx" target="blank">www.180grados.mx</a></b></p>
			<p>Colima 180, Roma Norte, Mexico City, 06700 </p>

			<div class="mapcanvas" id="map_180Shop"></div>
	     </div>
	     <div class="g--half g--last">
	     	<img class="logo180-1"src="<?php echo BASE_URL?>images/180shop.svg" alt="180 Shop">
			<p>
			Mon-Sat, 11:00 / 20:00<br>
			Sun, 11:00 / 18:00<br>
			</p>
			<p>
				Tel: 55255626 <br>
				info@180grados.mx <br>
				@180gradosmx <br>
			</p>
	     </div>

	  </div>
    </main>

<?php include(ROOT_PATH . 'inc/footer.php'); ?>
