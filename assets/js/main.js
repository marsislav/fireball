(function ($) {

$(".mobile-menu").click(function(){
  $('.modal').css('display','flex')
  $(".modal").fadeIn("fast");
});

$(".times").click(function(){
  $(".modal").fadeOut("fast");
})
})(jQuery);
