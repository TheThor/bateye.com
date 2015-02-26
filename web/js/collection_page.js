/**
 * Created by pedro on 20-02-2015.
 */
$(document).ready(function(){
    $('.collection-link').find('a').on('mouseenter', function(){
        var collectionId = $(this).find('img').attr('collection_id');
        $('.collection-images > img').stop().not('#collection-image-' + collectionId).each(function(){
            $(this).stop().fadeOut('slow', function(){
                  $('#collection-image-' + collectionId).stop().fadeTo('slow', 1);
            });
        });
    });

    $("a").click(function(event){
        event.preventDefault();
        linkLocation = this.href;
        $("body").fadeOut(1000, redirectPage);
    });

    function redirectPage() {
        window.location = linkLocation;
    }
});