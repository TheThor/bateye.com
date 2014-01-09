<!DOCTYPE html>
<html>
	<head>
		<?php
			require 'top.php';
		?>
		<title>Bat Eye | Sensuality</title>
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
			<h6>Sensuality</h6>
			<h5>armchair</h5>
		</div>
		<div class="fluid_container">
	        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
	            <div data-thumb="images/slides/thumbs/bridge.jpg" data-src="images/slides/sensuality/sensuality1.jpg">
	            </div>
	            <div data-thumb="images/slides/thumbs/leaf.jpg" data-src="images/slides/sensuality/sensuality2.jpg">
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
        	<p>Like a body of a woman. Naked. Stripped. Challenger.</p>
			<p>Marco Sousa designed for Bat eye an armchair with fine features, aggressive gestures, mysterious but real, with all its complexity that seduces with its look, inspiring the creative process of Sensuality.</p>
        	<p>The chair was created from noble wood and a subtle tissue of pure colors that can arouse strong emotions and harmony, highlighting the elegance, art and design, factors that are brand identifiers.</p>
        	<p>With Sensuality, we became part of the piece and feel all its attributes, which become an unforgettable and exciting experience.</p>
        </div>
        <div id="info_peca">
        	<div style="float: left; width: 135px">
        		<b>name</b><br>
        		Sensuality<br><br>
        		<b>type</b><br>
        		Arm Chair<br><br>
        		<b>designer</b><br>
        		Marco Sousa<br><br>
        	</div>
        	<div style="float: left; width: 135px">
	        	<b>dimensions</b><br>
	        	h 100 cm | 30,4”<br>
	        	w 80 cm | 31,5”<br>
	        	d 80 cm | 31,5”<br><br>
	        	<b>materials</b><br>
	        	noble wood <br>
cotton and silk tissue
        	</div>
        	<div  style="float: left; width: 540px; height: 128px;">
        		<span style="position:absolute; margin-left: 85px; font-weight: bold">You might like....</span>
				<span style="width: 180px; margin-left: 65px">
					<a href="arc.php">
						<img style="width: 140px; " src="images/portocollection/Arc.png" alt="">
					</a>
				</span>
				<span style="width: 180px; margin-left: 20px">
					<a href="reflection.php">
						<img style="width: 140px;" src="images/portocollection/Reflection.png" alt="">
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
