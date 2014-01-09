<!DOCTYPE html>
<html>
	<head>
		<?php
			require 'top.php';
		?>
		<title>Bat Eye | Stone</title>
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
			<h6>Stone</h6>
			<h5>Sideboard</h5>
		</div>
		<div class="fluid_container">
	        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
	            <div data-thumb="images/slides/thumbs/bridge.jpg" data-src="images/slides/stone/stone1.jpg">
	            </div>
	            <div data-thumb="images/slides/thumbs/leaf.jpg" data-src="images/slides/stone/stone2.jpg">
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
        	<p>Granite is an integral part of the city of Porto; it is upon it that the city is built. To observe Porto is to rediscover the images of a hidden dream we hold within us. Dense images, as
impenetrable as the morning mist. The Douro River accompanies the natural extension of the quay, exposing the towering granite escarpments, steep slopes and high cliffs, where history has its roots.</p>
			<p>Bat eye presents its latest creation: ‘Stone’, a piece that reflects the beauty of the stone that
lights up the city. ‘Stone’, an unique sideboard handmade crafted, coated with golden leaf and
a blue satin interior depicting the radiant involvement of whole Porto absorbing the river...</p>
        </div>
        <div id="info_peca">
        	<div style="float: left; width: 135px">
        		<b>name</b><br>
        		Stone<br><br>
        		<b>type</b><br>
        		Sideboard<br><br>
        		<b>designer</b><br>
        		Marco Sousa<br><br>
        	</div>
        	<div style="float: left; width: 135px">
	        	<b>dimensions</b><br>
	        	h 100 cm | 39,3” <br>
	        	w 243 cm | 95,7”<br>
	        	d 50 cm | 19,7” <br>
				<br>
	        	<b>materials</b><br>
	        	golden leaf
blue satin

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
