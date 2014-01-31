<!DOCTYPE html>
<html>
	<head>
		<?php
			require 'top.php';
		?>
		<title>Bat Eye | Reflection</title>
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
			<h6>Reflection</h6>
			<h5>Sideboard</h5>
		</div>
		<div class="fluid_container">
	        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
	            <div data-thumb="images/slides/thumbs/bridge.jpg" data-src="images/slides/reflection/reflection1.jpg">
	            </div>
	            <div data-thumb="images/slides/thumbs/leaf.jpg" data-src="images/slides/reflection/reflection2.jpg">
	            </div>
	        </div><!-- #camera_wrap_1 -->
		</div>
		<div id="nada"></div>
        <div id="text">
        <br><br>
        	<p>‘Giong up this river, the sun casts a silver reflection and a bright blue colour.’</p><br><br>

        	<hr>
        </div>
        <div id="desc">
        	<p>This piece represents the reflex of the Douro River, which brings us great memories of the city, the walks, the courtships, the sunny afternoons of conversations with friends and the nights, the nights ...</p>
        	<p>When we walk through the downtown we see different colors, provided by different luminosities focus on Douro, parts of the river are lighter, other parts darker. </p>
        	<p>In “Reflection”, this contrast is represented; the table top is silver plated with a special lacquer gradient that gives it the sense of bi-color: with different luminosities, we will have different tones. Marco Sousa designed for Bat eye this piece which is carefully sculpted by the best artisans, in ebony wood.</p>
        </div>
        <div id="info_peca">
        	<div style="float: left; width: 135px">
        		<b>name</b><br>
        		Reflection<br><br>
        		<b>type</b><br>
        		Sideboard<br><br>
        		<b>designer</b><br>
        		Marco Sousa<br><br>
        	</div>
        	<div style="float: left; width: 135px">
	        	<b>dimensions</b><br>
	        	h 100 cm | 30,4”<br>
	        	w 160 cm | 63”<br>
	        	d 40 cm | 15,8”<br><br>
	        	<b>materials</b><br>
	        	silver plated with <br> a special lacquer<br> gradient
ebony wood.
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
