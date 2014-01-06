<!DOCTYPE html>
<html>
	<head>
		<?php
			require 'top.php';
		?>
		<title>Bat Eye | Ballet</title>
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
			<h6>Fairytale</h6>
			<h5>Bar</h5>
		</div>
		<div class="fluid_container">
	        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
	            <div data-thumb="images/portocollection/Fairytale.png" data-src="images/portocollection/Fairytale.png">
	            </div>
	            </div>
	        </div><!-- #camera_wrap_1 -->
		</div>
		<div id="nada"></div>
        <div id="text">
        <br><br>
        	<p>‘A simple dance scattering into a ray of light. Miss, do you dance?’</p><br><br>

        	<hr>
        </div>
        <div id="desc">
        	<p>In the city of the six bridges, the blacksmith was considered the king of all crafts. Only he was able to create the necessary tools for all the jobs. Learning the art of forging iron became a lengthy process that lasted years of training and dedication.</p>
            <p>Today, the blacksmith creations tell stories, present in the intersected iron lines on the balconies of the houses of Porto. In tribute to the art of forging iron and to the memories of the city, Bat eye creates ‘Fairytale’, an elegant bar that confers an exquisite and distinctive touch to any environment. ‘Fairytale’ lives the history of the city. Its slender legs reflect the nobility of the soul of Porto. The carefully hand painted tiles and the forged iron, plated in 24k gold, reflect centuries of memories and habits that remain over the time. A unique piece, which combines refinement and the tradition of a nation.</p>
        </div>
        <div id="info_peca">
        	<div style="float: left; width: 135px">
        		<b>name</b><br>
        		Ballet<br><br>
        		<b>type</b><br>
        		lamp<br><br>
        		<b>designer</b><br>
        		Marco Sousa<br><br>
        	</div>
        	<div style="float: left; width: 135px">
	        	<b>dimensions</b><br>
	        	w 70 cm | 27,6” <br>
	        	h 160 cm | 63”<br>
	        	d 70 cm | 27,6”<br><br>
	        	<b>materials</b><br>
	        	noble wood <br>
hand painted portuguese tiles <br>
forged iron plated in 24k gold.
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