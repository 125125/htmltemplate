$(function(){
  $('.slider-arrow').click(function(){
    if($(this).hasClass('show')){
    $( ".slider-arrow, .panel" ).animate({
      right: "+=260"
      }, 700, function() {
        // Animation complete.
      });
      $(this).html('&laquo;').removeClass('show').addClass('hide');
      $(this).toggleClass("active");
    }
    else {      
    $( ".slider-arrow, .panel" ).animate({
      right: "-=260"
      }, 700, function() {
        // Animation complete.
      });
      $(this).html('&raquo;').removeClass('hide').addClass('show');
      $(this).toggleClass("active");
    }
  });
});