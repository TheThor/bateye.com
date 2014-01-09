
<?php include('include/common/explore_more.php') ?>
<!-- <div id="explore">
	<hr>
	<h1>explore more</h1>
	<div id="boxes">
		<div class="img_boxes">
			  <a  href="#">
			  <img src="images/explore.jpg" alt="#" width="160" height="90">
			  </a>
			  <div class="desc_boxes">The Brand</div>
			</div>
			<div class="img_boxes">
			  <a  href="#">
			  <img src="images/explore.jpg" alt="#" width="160" height="90">
			  </a>
			  <div class="desc_boxes">Events</div>
			</div>
			<div class="img_boxes">
			  <a  href="#">
			  <img src="images/explore.jpg" alt="#" width="160" height="90">
			  </a>
			  <div class="desc_boxes">Lovers</div>
			</div>
			<div class="img_boxes">
			  <a  href="#">
			  <img src="images/explore.jpg" alt="#" width="160" height="90">
			  </a>
			  <div class="desc_boxes">Blog</div>
			</div>
		</div>
	</div> -->
	<?php require_once('include/common/footer.php');?>
     <script type="text/javascript">
      $(document).ready(function() {
        //Smallbox right bottom
        var container = $( "#produ" );
        $( "#closeit" ).click(
          function(event){
            if (container.is( ":visible" )){
              // Hide - slide up.
              container.slideUp( 2000 );

              } else {

              // Show - slide down.
              container.slideDown( 2000 );
            }
          }
        );
      });
    </script>
    <script type='text/javascript' src='scripts/jquery.min.js'></script>
    <script type='text/javascript' src='scripts/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='scripts/jquery.easing.1.3.js'></script>
    <script type='text/javascript' src='scripts/camera.min.js'></script>