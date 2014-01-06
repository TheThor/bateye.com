<!DOCTYPE html>
<html>
	<head>
		<?php
			require 'top.php';
		?>
		<title>Bat Eye | Arc</title>
		<!--///////////////////////////////////////////////////////////////////////////////////////////////////
	    //
	    //		Styles
	    //
	    ///////////////////////////////////////////////////////////////////////////////////////////////////-->
	    <link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'>
	    <style>
			text-decoration: none;
			}
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
			<h6>Arc</h6>
			<h5>Sideboard</h5>
		</div>
		<div class="fluid_container">
	        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
	            <div data-thumb="images/slides/thumbs/bridge.jpg" data-src="images/slides/arc/arc1.jpg">
	            </div>
	            <div data-thumb="images/slides/thumbs/leaf.jpg" data-src="images/slides/arc/arc2.jpg">
	            </div>
	            </div>
	        </div><!-- #camera_wrap_1 -->
		</div>
		<div id="nada"></div>
        <div id="text">
        <br><br>
        	<p>‘What nature divided, man dared to unite. One bridge between two shores led the
conversation on.’</p><br><br>

        	<hr>
        </div>
        <div id="desc">
        	<p>What nature separated, man wanted to unite. Two margins and a bridge that led them talking. 125
years were enough for the D. Luís I bridge became one of the most iconic places of Porto. Although
the official name of the bridge is “Luiz I”, as attested by the inscriptions on the plates of the pillars on
the entries of the lower deck, the population of Porto has always called it “D. Luís Bridge”, excepting
the title of the king with whom the city was very close to. However, the Arc Sideboard seems its
antithesis. Instead of a magnanimous piece of engineering, Marco Sousa designed for Bat eye a singular
piece worked by the hand of the artisan, with an interior carefully designed and finished in satin wood;
the metal joining the margins is now the support base.</p>
        	<p>Finally, we leave aside the monochrome and dress up the piece with hand painted tiles. The same that
dress up the city of Porto, and by which tourists fall in love, reflex of a culture of a People.</p>
        </div>
        <div id="info_peca">
        	<div style="float: left; width: 135px">
        		<b>name</b><br>
        		Arc<br><br>
        		<b>type</b><br>
        		Sideboard<br><br>
        		<b>designer</b><br>
        		Marco Sousa<br><br>
        	</div>
        	<div style="float: left; width: 135px">
	        	<b>dimensions</b><br>
	        	h 103 cm | 40,6”<br>
	        	w 227 cm | 89,4”<br>
	        	d 80 cm	 | 31,5”<br><br>
	        	<b>materials</b><br>
	        	satin wood <br>
hand painted portuguese tiles
        	</div>
        	<div style="float: left; width: 540px; height: 128px;">
        		<span style="position:absolute; margin-left: 85px; font-weight: bold">You might like....</span>
				<span style="width: 180px; margin-left: 65px">
					<a href="silhouette.php">
						<img style="width: 140px; " src="images/portocollection/Silhouette.png" alt="">
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
