<!DOCTYPE html>
<html>
	<head>
		<?php
			require 'top.php';
		?>
		<title>Bat Eye | Silhouette</title>
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
			<h6>Silhouette</h6>
			<h5>Sideboard</h5>
		</div>
		<div class="fluid_container">
	        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
	            <div data-thumb="images/slides/thumbs/bridge.jpg" data-src="images/slides/silhouette/silhouette1.jpg">
	            </div>
	            <div data-thumb="images/slides/thumbs/leaf.jpg" data-src="images/slides/silhouette/silhouette2.jpg">
	            </div>
	        </div><!-- #camera_wrap_1 -->
		</div>
		<div id="nada"></div>
        <div id="text">
        <br><br>
        	<p>‘The city’s silhouette is not wiped from our memory, even when our eyes are closed’</p><br><br>

        	<hr>
        </div>
        <div id="desc">
        	<p>It is unknown if it is because of the irony of the destiny, or because of a destiny of any irony, but it happens that the best view of Porto is from Gaia.
And, so, the city skyline doesn’t get out of our memory, even less when we close our eyes.</p>
        	<p>From this memory alive, Bat eye was inspired, and created Silhouette.
Presented for the first time at Decorex, in London, this sideboard with architectural for- ms, generous size and an interior thought for several uses; it has, among other features, drawers in stick cetin and a wine cellar with a capacity for 12 bottles.</p>
        	<p>Supported in a base made of stainless steel, Silhoutte uses a variety of noble woods, such as rose wood and caviuna, allied with the refinement of the typical tile, painted and placed manually, which makes this an unique piece.</p>
        </div>
        <div id="info_peca">
        	<div style="float: left; width: 135px">
        		<b>name</b><br>
        		Silhouette<br><br>
        		<b>type</b><br>
        		Sideboard<br><br>
        		<b>designer</b><br>
        		Marco Sousa<br><br>
        	</div>
        	<div style="float: left; width: 135px">
	        	<b>dimensions</b><br>
	        	h 103 cm | 40,55”<br>
	        	w 227 cm | 89,37”<br>
	        	d 80 cm | 31,5”<br><br>
	        	<b>materials</b><br>
	        	rose wood and caviuna wood <br>
hand painted portuguese tiles
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
