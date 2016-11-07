(function ($, Drupal) {
  "use strict";

  var onScroll = function(){
    var scroll = $(window).scrollTop();
    if (scroll >= 10) {
      $(".page").addClass("scrolled");
    }
    else {
      $(".page").removeClass("scrolled");
    }
  };

  var backToTop = function () {
    // Start by deciding whether or not to show or hide.
    var toggle = function() {
      if ($(this).scrollTop()) {
        $('.btn-btt').fadeIn();
      }
      else {
        $('.btn-btt').fadeOut();
      }
    };
    toggle();
    $(window).scroll(function () {
      toggle();
    });

    $('.btn-btt').click(function () {
      $('html, body').animate({scrollTop : 0}, 700);
      return false;
    })
  };

  $(function() {
    // Add scroll listener.
    $(window).scroll(onScroll);
    backToTop();
    // Set mobile menu.
    $('.navbar-toggle').mobileMenu({
      targetWrapper: '#block-lapurd-main-menu'
    });
  });
})(jQuery, Drupal);