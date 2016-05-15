/**
 * Created by pedro on 1/13/14.
 */
$(document).ready(function() {
    //Definições para carousel
    $('.carousel').carousel({
        interval: 6000
    });

    //Menu fixo
    function fixDiv() {
        var $cache;
        $cache = $('#menu');
        if ($(window).scrollTop() > 700)
            $cache.css({'position': 'fixed', 'z-index': '4', 'top': '0px'});
        else
            $cache.css({'position': 'absolute', 'top': 'auto'});
    }
    $(window).scroll(fixDiv);
    fixDiv();

    //Debugg
    $(document).on('mousemove', function(e){
        $('#numbers').css({
            left:  e.pageX,
            top:   e.pageY
        });
    });

    //Smallbox right bottom
    var container = $( "#produ" );
    $( "#closeit" ).click(
        function(){
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