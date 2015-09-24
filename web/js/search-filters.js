/**
 * Created by pedro on 24-09-2015.
 */
$(document).ready(function() {
    $('#search-products').on('keyup', function(){
        var search = this.value;
        if (search == '') {
            $('#container .img').each(function(){
                $(this).fadeIn();
            });
        } else {
            $('#container .img').each(function(){
                if ($(this).data('name').toLowerCase().indexOf(search.toLowerCase()) == -1 && $(this).data('category').toLowerCase().indexOf(search.toLowerCase()) == -1) {
                    $(this).fadeOut();
                } else {
                    $(this).fadeIn();
                }
            });
        }
    });

    $('#categories-selector').on('change', function(){
        var search = this.value;
        if (search == '') {
            $('#container .img').each(function(){
                $(this).fadeIn();
            });
        } else {
            $('#container .img').each(function(){
                if ($(this).data('category').toLowerCase().indexOf(search.toLowerCase()) == -1) {
                    $(this).fadeOut();
                } else {
                    $(this).fadeIn();
                }
            });
        }
    });

    $('#collections-selector').on('change', function(){
        var search = this.value;
        if (search == '') {
            $('#container .img').each(function(){
                $(this).fadeIn();
            });
        } else {
            $('#container .img').each(function(){
                if ($(this).data('collection').toLowerCase().indexOf(search.toLowerCase()) == -1) {
                    $(this).fadeOut();
                } else {
                    $(this).fadeIn();
                }
            });
        }
    });
});
