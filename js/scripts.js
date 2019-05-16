$ = jQuery.noConflict();

$(document).ready(function() {
  $('.mobile-menu a').on('click', function() {
    $('nav.site-nav').toggle('slow');
  });

  let breakpoint = 768;
  $(window).resize(function(){
    if($(document).width() >= breakpoint){
      $('nav.site-nav').show();
    } else {
      $('nav.site-nav').hide();
    }
  })
});


//Alternative way for no conflict jQuery
// jQuery(document).ready(function($) {
//   console.log("It works");
// });
