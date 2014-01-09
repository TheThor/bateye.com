<!DOCTYPE html>
<html>
	<head>
		<?php
			require 'top.php';
		?>
		<title>Bat Eye | Cask</title>
		<!--///////////////////////////////////////////////////////////////////////////////////////////////////
	    //
	    //		Styles
	    //
	    ///////////////////////////////////////////////////////////////////////////////////////////////////-->
	    <link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'>
	    <style>
			#back_to_camera {
				clear: both;
				display: block;
				line-height: 40px;
				padding: 20px;
			}
			.fluid_container {
				margin: 50px auto;
				max-width: 800px;
				width: 90%;
			}
		</style>
		<!--///////////////////////////////////////////////////////////////////////////////////////////////////
	    //
	    //		Scripts
	    //
	    ///////////////////////////////////////////////////////////////////////////////////////////////////-->

	    <script type='text/javascript' src='scripts/jquery.min.js'></script>
	    <script type='text/javascript' src='scripts/jquery.mobile.customized.min.js'></script>
	    <script type='text/javascript' src='scripts/jquery.easing.1.3.js'></script>
	    <script type='text/javascript' src='scripts/camera.min.js'></script>

	    <script>
			jQuery(function(){

				jQuery('#camera_wrap_1').camera({
					thumbnails: false,
					loader: 'none',
					fx: 'scrollLeft',
	                playPause: false
				});

			});
		</script>
	</head>
	<body>
		<div id="seta-prod">
			<a href="porto_collection.php"><img src="images/setas.png"></a>
		</div>
		<div id="title">
			<h6>Cask</h6>
			<h5>Mirror</h5>
		</div>
		<div class="fluid_container">
	        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
	            <div data-thumb="images/slides/thumbs/bridge.jpg" data-src="images/slides/cask/cask1.jpg">
	            </div>
	            <div data-thumb="images/slides/thumbs/leaf.jpg" data-src="images/slides/cask/cask2.jpg">
	            </div>
	        </div><!-- #camera_wrap_1 -->
		</div>
		<div id="nada"></div>
        <div id="text">
        <br><br>
        	<p>'It says that Porto is grey,</p>
        	<p> but when it shines there’s no doubts:</p>
        	<p>it‘s a true gold reflected n stone.'</p><br><br>

        	<hr>
        </div>
        <div id="desc">
        	<p>Talking about Porto is talking about the nectar that, through its name, made known not only one of the small wonders of the region, but the region itself, and the country. Porto wine is internationally known as the nectar of gods. Because of its soft taste, bond and sweet, is the drink chosen to sponsor the most diverse celebrations, not missing in any house of Porto.</p>
        	<p>Alien to everything, runs Douro, which, unaware of its function, plays it in the most per- fect form. The Porto wine was placed in barrels that were overlapping on Rabelo boats, and came down the river to Vila Nova de Gaia to be stored.
It was from these overlapping movements of barrels in Rabelo boats that Marco Sousa was inspired and designed the mirror Cask for Bat eye “a mirror that reflects more than the silhouette of who observes it, reflects some of the history of the wine and the city of Porto”.</p>
        	<p>This mirror stands out for the refined finish, which can be lacquered black or white and plated copper, silver or gold.</p>
        </div>
        <div id="info_peca">
        	<div style="float: left; width: 135px">
        		<b>name</b><br>
        		Cask<br><br>
        		<b>type</b><br>
        		Mirror<br><br>
        		<b>designer</b><br>
        		Marco Sousa<br><br>
        	</div>
        	<div style="float: left; width: 135px">
	        	<b>dimensions</b><br>
	        	h 120 cm | 47,2”<br>
	        	w 160 cm | 63”<br>
	        	d 5 cm | 1,97”<br><br>
	        	<b>materials</b><br>
	        	lacquered black or <br>white and plated copper, <br> silver or gold.
        	</div>
        	<div  style="float: left; width: 540px; height: 128px;">
        		<span style="position:absolute; margin-left: 85px; font-weight: bold">You might like....</span>
				<span style="width: 180px; margin-left: 65px">
					<a href="arc.php">
						<img style="width: 140px; " src="images/portocollection/Arc.png" alt="">
					</a>
				</span>
				<span style="width: 180px; margin-left: 20px">
					<a href="sensuality.php">
						<img style="width: 140px;" src="images/portocollection/Sensuality.png" alt="">
					</a>
				</span>
				<span style="width: 180px; margin-left: 20px">
					<a href="movements.php">
						<img style="width: 140px;" src="images/portocollection/RhytmicMovements.png" alt="">
					</a>
				</span>
	       	</div>
        </div>
        	<?php
			require 'explore.php';
		?>
	</body>
</html>
