'use strict'
// Scroll with jQuery
$(document).ready(function () {
  $('.scroll-anch').click(function () {
    var scroll_el = $(this).data('target');
    if ($(scroll_el).length != 0) {
      $('html, body').animate({ scrollTop: $(scroll_el).offset().top }, 750);
    }
    return false;
  });

  $('.scroll-anch').click(function () {
    $('#mobileMenu').modal('hide');
    $('html body').animate({
      scrollTop: $(this).offset().top
    }, 1050)
  });

  // Animation
  new WOW().init();

  // Form script
  $('.form').submit(function () {
    $.ajax({
      type: "POST",
      url: "telegram.php",
      data: $(this).serialize()
    }).done(function () {
      // $('.form__note').removeClass('display-none');
      $(this).find('input').val('');
      $('.form').trigger('reset');
      // setTimeout(function() {
        // $('.form__note').addClass('display-none');
      // }, 1000);
    });
    return false;
  });
});