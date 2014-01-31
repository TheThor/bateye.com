<!DOCTYPE html>
<html>
	<head>
		<?php
			require 'top.php';
		?>
		<title>Bat Eye | Elegance</title>
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
			<h6>Elegance</h6>
			<h5>Sideboard</h5>
		</div>
		<div class="fluid_container">
	        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
	            <div data-thumb="images/slides/thumbs/bridge.jpg" data-src="images/slides/elegance/elegance1.jpg">
	            </div>
	            <div data-thumb="images/slides/thumbs/leaf.jpg" data-src="images/slides/elegance/elegance2.jpg">
	            </div>
	        </div><!-- #camera_wrap_1 -->
		</div>
		<div id="nada"></div>
        <div id="text">
        <br><br>
        	<p>‘Lions Square bustles! Black-cloaked students with bodies that prepare a trip into the
nightlife, waer pouring from the fountain.’</p><br><br>

        	<hr>
        </div>
        <div id="desc">
        	<p>“Praça dos Leões” (“Lions’ Square”) always had an elitist character, with a very strong link to the academy and commerce. In 1803, the Royal Academy of the Navy and Com- merce was founded by the Prince Regent D. João, to answer the needs of the rising mer- cantile bourgeoisie of the city. The big warehouses from Lisbon, “Grandes Aramazens do Chiado”, have also opened a branch in this square, due to its importance and centrality. The elitism of the square was reinforced by the installation, in 1885, of the “Fonte dos Leões” (Lions’ Fount), a public facility built by the French “Compaigne Générale de Eauz pour L’Entranger”, concessionaire of the city’s water supply.</p>

        	<p>The “Elegance” console is based on this same fountain, in its movement and shape. It is quite slim, elegant and with an aspect of superiority, typical of the elitist “Lions’ Square”. Made in “Pau Santo” and “Pau Cetim” on the inside, with the movement of water that gets out from the lions mouth at its base of support and the secrecy typical of the elite represented in a secret drawer in which its interior form accompanies the exterior.</p>
        </div>
        <div id="info_peca">
        	<div style="float: left; width: 135px">
        		<b>name</b><br>
        		Elegance<br><br>
        		<b>type</b><br>
        		Sideboard<br><br>
        		<b>designer</b><br>
        		Marco Sousa<br><br>
        	</div>
        	<div style="float: left; width: 135px">
	        	<b>dimensions</b><br>
	        	h 90 cm | 35,4”<br>
	        	w 50 cm |19,7”<br>
	        	d 50 cm | 19,7”<br>
	        	<br>
	        	<b>materials</b><br>
	        	Noble woods <br>
				“Pau Santo” <br>
				“Pau Cetim” <br>
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
