/*(function($, window) {
  $(".button-collapse").sideNav();

  window.contact = function (event) {
    event.preventDefault();

    var form = $('form[name="contact"]');
    var messageOk = $('#contact-thanks');
    var messageError = $('#contact-error');

    messageOk.slideUp('fast');
    messageError.slideUp('fast');

    var url = "https://formspree.io/contact@docit.dk";

    $.ajax({
      url: url,
      method: "POST",
      data: form.serializeArray(),
      dataType: "json",
      success: function () {
        messageOk.slideDown('fast');
        form.trigger('reset');
      },
      error: function () {
        messageError.slideDown('fast');
      },
    });
  }
}(jQuery, window));
*/

(function($, window) {
  // The default positions of the window.
  var lastScrollX = window.scrollX;
  var lastScrollY = window.scrollY;

  // If scrolling is currently being done.
  var isScrolling = false;

  // When DOM is ready.
  $(function() {
    // Attach event listener for the menu links.
    $('.top-bar-link').on('click', function () {
      startScroll('sideways', $(this));
    });
    // Attach event listener for vertical scroll button.
    $('.trigger-vertical-scroll').on('click', function () {
      $(window).scrollTop($(window).scrollTop() + 1);
    });
  });

  /**
   * Listen to the scroll event.
   *
   * When starting scroll either Y or X scroll, auto scroll to the next page.
   */
  window.addEventListener('scroll', function() {
    // If the user is scrolling right.
    if (!isScrolling) {
      var direction = false;
      var element = null;

      if (window.scrollX !== lastScrollX) {
        // Find the direction and the anchor element.
        direction = 'sideways';
        element = $('.top-bar-link-active').parent().next().find('.top-bar-link');
        if (window.scrollX < lastScrollX) {
          element = $('.top-bar-link-active').parent().prev().find('.top-bar-link');
        }
      } else if (window.scrollY !== lastScrollY) {
        direction = window.scrollY > lastScrollY ? 'down' : 'up';
      }

      if (direction) {
        startScroll(direction, element);

        // Update the states.
        lastScrollY = window.scrollY;
        lastScrollX = window.scrollX;
      }
    }
  });

  /**
   * Start a scroll either horizontal or vertical.
   *
   * Update the scrolling flags, and disable user scrolling.
   *
   * @param {string} direction
   *   Either "up", "down", "sideways".
   * @param {object} element
   *   A jQuery element of the anchor to scroll to.
   *   Used for sideways scrolling.
   */
  var startScroll = function (direction, element) {
    if (!isScrolling) {
      isScrolling = true;
      disableScroll();
      if (direction === 'up' || direction === 'down') {
        scrollY(direction);
      } else if (direction === 'sideways') {
        scrollX(element);
      }
    }
  };

  var scrollComplete = function () {
    // Update the scrolling state.
    isScrolling = false;
    // Update the last scroll positions.
    lastScrollX = window.scrollX;
    lastScrollY = window.scrollY;
    // Enable or dis-able the vertical scrolling for the new page.
    toggleVerticalScroll();
    enableScroll();
  };

  var scrollX = function (anchor) {
    // De-active any active link.
    $('.top-bar-link-active').removeClass('top-bar-link-active');

    // Add new active link.
    anchor.addClass('top-bar-link-active');

    // Calculate the new X position by the number of previous siblings times the width of the window.
    var scrollPosition = anchor.parent().prevAll().length * $(window).width();

    // Always start by scroll to the top of the page, when scrolling horizontal.
    doScrollY(0, function () {
      $('body').animate({ scrollLeft: scrollPosition }, { duration: 800, done: scrollComplete });
    });
  };

  var scrollY = function (direction) {
    var currentScrollHeight = $(window).height() + $(window).scrollTop();
    var scrollMultiplier = Math.ceil(currentScrollHeight / $(window).height() - 1);

    var scrollPosition = $(window).height() * scrollMultiplier;

    if (direction === 'up') {
      scrollPosition = scrollPosition - $(window).height();
    }

    doScrollY(scrollPosition, scrollComplete);
  };

  /**
   * Scrolls to the top of the page.
   *
   * @param {int} position
   *   The Y position to scroll to.
   * @param {function} callback
   *   Called when the scroll is done, or instantly if no scrolling is needed.
   */
  var doScrollY = function (position, callback) {
    if (window.scrollY !== position) {
      // Scroll to the top deck.
      $('body').animate({ scrollTop: position }, {
        duration: 400, done: callback
      });
    } else {
      callback();
    }
  };

  /**
   * Toggle if vertical scroll is possible.
   */
  var toggleVerticalScroll = function () {
    var name = $('.top-bar-link-active').attr('name');
    if ($('#level2').find('[data-name="' + name + '"] ').children().length) {
      $('body').removeClass('disable-scroll');
    } else {
      $('body').addClass('disable-scroll');
    }
  };


  /**
   * Disable and enable scrolling.
   */
  var keys = {37: 1, 38: 1, 39: 1, 40: 1};
  function preventDefault(e) {
    e = e || window.event;
    if (e.preventDefault) {
      e.preventDefault();
    }
    e.returnValue = false;
  }

  function preventDefaultForScrollKeys(e) {
    if (keys[e.keyCode]) {
      preventDefault(e);
      return false;
    }
  }

  function disableScroll() {
    if (window.addEventListener) {
      window.addEventListener('DOMMouseScroll', preventDefault, false);
    }
    window.onwheel = preventDefault;
    window.onmousewheel = document.onmousewheel = preventDefault;
    window.ontouchmove  = preventDefault;
    document.onkeydown  = preventDefaultForScrollKeys;
  }

  function enableScroll() {
    if (window.removeEventListener) {
      window.removeEventListener('DOMMouseScroll', preventDefault, false);
    }
    window.onmousewheel = document.onmousewheel = null;
    window.onwheel = null;
    window.ontouchmove = null;
    document.onkeydown = null;
  }

  // On init scroll to the first page.
  //startScroll('sideways', $('.top-bar-link-active'));

  $(document).foundation();
}(jQuery, window));