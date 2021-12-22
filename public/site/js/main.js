//loader
$(function() {
  $('.loader-container').fadeOut();
})

// mobile menu toggle

$(document).on('click', '.mobile_menu_toggler', function() {
 $('.mobile_menu').slideToggle();
});

// scroll top button
$(function () {

  var scrollButton = $('.go-top');

  $(window).scroll(function () {

    if($(window).scrollTop() >= 500) {
      scrollButton.show();
    }else {
      scrollButton.hide();
    }
  });

  scrollButton.click(function () {
    $('html, body').animate({scrollTop: 0});
  })
});


// gallery imgs

$(function() {
  var gallery = $('.lightbox').simpleLightbox({

  });
});



	
