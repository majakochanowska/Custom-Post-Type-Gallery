$(document).ready(function() {
  $('.custom-image').click(function() {
    var image = $(this).attr('src');
    $('#light-img').attr('src', image);
    $('#lightbox').fadeIn('fast')
  });
  $(window).keyup(function(e) {
    if(e.which==27) {
      $('#lightbox').fadeOut('fast')
    }
  })
})