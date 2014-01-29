<?php include('include/common/explore_more.php') ?>
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