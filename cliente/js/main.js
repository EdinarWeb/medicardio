// Preloader
$(window).on('load', function() {
    $('#preloader').delay(1000).fadeOut('slow',function(){$(this).remove();
    });
  });
  