 $(document).ready(function() {
  $(window).scroll(function(){
    $("#getposition").html($(document).scrollTop());
    var top = $(this).scrollTop();
    if (top > 135) {
      $('.featured-product').fadeIn(2000);
    }
    if (top > 200) {
      $('#artparallax').fadeIn(2000);
    }
    if (top > 400) {
      $('.collections-img').fadeIn(2000);
    }
    if (top > 1000) {
      $('.moreinfo').fadeIn(2000);
    }
    if(top > 1250){
      $('#fadeitnow').fadeIn(2000);
    }
    if (top > 1550) {
      $('.whatsnew').fadeIn(2000);
    }
    if (top > 2200) {
      $('#mainwrapper-home').fadeIn(2000);
    }
  });
});