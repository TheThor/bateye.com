 $(document).ready(function() {
  $(window).scroll(function(){
    $("#getposition").html($(document).scrollTop());
    var top = $(this).scrollTop();
    if(top > 155){
      $('#artparallax').fadeIn(2000);
    }
    if(top > 300){
      $('.collections-img').fadeIn(2000);
    }
    if(top > 800){
      $('.moreinfo').fadeIn(2000);
    }
    if(top > 1250){
      $('#fadeitnow').fadeIn(2000);
    }
    if(top > 1750){
      $('.whatsnew').fadeIn(2000);
    }
    if(top > 1900){
      $('#mainwrapper').fadeIn(2000);
    }
    if(top > 2506){
      $('#footer').fadeIn(2000);
    }

    $('#porto-collect > a').css("top", top/28 + "%");
    $('#london-collect > a').css("top", top/29 + "%");
  });
});