$(document).ready(function() {
  $( "#newsletter, #closeform" ).click(function() {
    $( "#newsletteroverlay" ).fadeIn( "slow" );
  });

  $(".newsubscribe").click(function(){ return false; });

  $( "#newsletteroverlay, #closeform" ).click(function() {
    $( "#newsletteroverlay" ).fadeOut( "slow" );
  });

  var newsletter = $("#newsletter");
  $( "#newsletter" ).hover(
    // Mouse Over
    function(){
      newsletter.stop( true, true).animate({ "left": "+=4" }, 200);
    },
    // Mouse Out
    function(){
      newsletter.stop( true, true).animate({ 'left': '-6' }, 200);
    }
  );
  var catalogue = $("#catalogue");
  $( "#catalogue" ).hover(
    // Mouse Over
    function(){
      catalogue.stop( true, true).animate({ "left": "+=4" }, 200);
    },
    // Mouse Out
    function(){
      catalogue.stop( true, true).animate({ 'left': '-6' }, 200);
    }
  );
});