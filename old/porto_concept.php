<!DOCTYPE html>
<html>
	<head>
		<?php
			require 'top.php';
		?>
		<title>Bat Eye | Porto Concept</title>
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
				max-width: 1000px;
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
	                loader:'bar',
	                playPause: false
				});
	
			});
		</script>
	</head>
	<body>
		<div id="title_colecao">
			<h3>Porto</h3>
			<h2>Collection</h2>
		</div>
		<div class="fluid_container">
	        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
	            <div data-thumb="images/slides/thumbs/bridge.jpg" data-src="images/slides/porto/1.jpg">
	            </div>
	            <div data-thumb="images/slides/thumbs/leaf.jpg" data-src="images/slides/porto/2.jpg">
	            </div>
	        </div><!-- #camera_wrap_1 -->
		</div>
		<div id="nada"></div>
        <div id="red">
        	<p>the collection</p>
        </div>
        <div id="desc_colecao">
        	<p>Porto is the inspiration for this collection. It is also a port of departure for those who see the city for a long time, and now have decided to review it and redesign it, and so provide it its proper homage.</p>
        	<p>In Porto, we see the Douro that reflects us, the Luiz I bridge linking the two banks; there are the colors, gestures and light from who knows the city by heart. "This is the city of the places where time became rooted in the history." (Helder Pacheco).</p>
        	<p>The collection has the courage and sympathy, the materials have the nobility and tradition of the people of Porto. While walking around town, aimlessly, Marco Sousa draws what arouses his attention, captures the details that may go unno- ticed to those who do not look closely. Traverses it with a pad and a pen between his fingers, and when the inspiration comes, he sits and draws. "From the impetus, which leads me to beat on beat, always with a common dominator, the concept, the purest of thoughts became spiritual and cultural expressions of Porto”.</p>
        </div>
        <?php 
			require 'explore.php';
		?>
	</body>
</html>