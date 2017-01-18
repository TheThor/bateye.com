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
    //initialize swiper when document ready
    var mySwiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',

        // Optional parameters
        loop: true,
        slidesPerView: 8,
        //centeredSlides: true,
        paginationClickable: true,
        spaceBetween: 0,
        resizeEvent: 'auto',
        disableAutoResize: false,
        initialSlide: 8,
        //slidesOffsetBefore: 60,

        // // Responsive breakpoints
        // breakpoints: {
        //     // when window width is <= 320px
        //     320: {
        //         slidesPerView: 1,
        //         spaceBetweenSlides: 10
        //     },
        //     // when window width is <= 480px
        //     480: {
        //         slidesPerView: 1,
        //         spaceBetweenSlides: 20
        //     },
        //     // when window width is <= 640px
        //     840: {
        //         slidesPerView: 3,
        //         spaceBetweenSlides: 30
        //     },
        //     840: {
        //         slidesPerView: 3,
        //         spaceBetweenSlides: 30
        //     },
        //     1024: {
        //         slidesPerView: 4,
        //         spaceBetweenSlides: 30
        //     },
        //     1280: {
        //         slidesPerView: 5,
        //         spaceBetweenSlides: 30
        //     },
        //     1440: {
        //         slidesPerView: 8,
        //         spaceBetweenSlides: 30
        //     },
        //     // Navigation arrows
        //     nextButton: '.swiper-button-next .swiper-button-grey',
        //     prevButton: '.swiper-button-prev .swiper-button-grey',
        // },

        // Navigation arrows
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
    })
});