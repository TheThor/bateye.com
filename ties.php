<!DOCTYPE html>
<html>
	<head>
		<?php
			require 'top.php';
		?>
		<title>Bat Eye | Ties</title>
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
			<h6>Ties</h6>
			<h5>Bench</h5>
		</div>
		<div class="fluid_container">
	        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
	            <div data-thumb="images/slides/thumbs/bridge.jpg" data-src="images/slides/ties/ties1.jpg">
	            </div>
	            <div data-thumb="images/slides/thumbs/leaf.jpg" data-src="images/slides/ties/ties2.jpg">
	            </div>
	            </div>
	        </div><!-- #camera_wrap_1 -->
		</div>
		<div id="nada"></div>
        <div id="text">
        <br><br>
        	<p>‘Sometimes, you just feel stranded in one place. Some other times that same place, is just the
best one to be.’</p><br><br>

        	<hr>
        </div>
        <div id="desc">
        	<p>Departure Port. Arrival Port. Security Port.</p>
        	<p>Mixed emotions sensed in various ports around the world. Especially in Porto as the brave Portuguese sailors were anxiously expected, from where they were seen leaving, searching for new adventures, and discovering places where explored before. Based on these mooring cleats, Marco Sousa created Ties, where these feelings are symbolized in this bench where the twisted cables are symbolized at the base of support and the simple cables of smaller ships are represented around the base.</p>
        </div>
        <div id="info_peca">
        	<div style="float: left; width: 135px">
        		<b>name</b><br>
        		Ties<br><br>
        		<b>type</b><br>
        		Bench<br><br>
        		<b>designer</b><br>
        		Marco Sousa<br><br>
        	</div>
        	<div style="float: left; width: 135px">
	        	<b>dimensions</b><br>
	        	h 50cm<br>
	        	dmr 40 cm | 15,8”<br><br>
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
