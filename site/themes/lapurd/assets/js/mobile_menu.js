(function($) {

    "use strict";

    $.fn.mobileMenu = function(options) {

        var settings = $.extend({
            pageSelector: '#page',
            targetWrapper: '#main-menu'
        }, options);

        if ($(window).width() <= 991) {
            $(settings.targetWrapper).addClass('mobile-main-menu');
        }
        $(window).resize(function() {
            if ($(window).width() <= 991) {
                $(settings.targetWrapper).addClass('mobile-main-menu');
            } else {
                $(settings.targetWrapper).removeClass('mobile-main-menu');
                $('html, body').css('overflow', '');
                $('html, body').css('height', '');
                $('html, body').css('position', '');
                $(settings.pageSelector).removeClass('toggled');
                $(settings.pageSelector).find('.overlay').remove();
                $(settings.pageSelector).css('position', '');
            }
        });

        var toggleButton = this;
        this.on('click', function(e) {
            var wrapper = $(settings.pageSelector);
            if (!wrapper.hasClass('toggled')) {
                wrapper.addClass('toggled').css('position', 'relative');
                $(settings.targetWrapper).addClass('mobile-main-menu');
                if (wrapper.find('.overlay').length == 0) {
                    var overlay = $('<div class="overlay"></div>');
                    overlay.prependTo(wrapper);
                    overlay.click(function() {
                        toggleButton.trigger('click');
                    });
                    $('html, body').css('overflow', 'hidden');
                    $('html, body').css('height', '100%');
                    $('html, body').css('position', 'relative');
                }

            } else {
                var overlay = wrapper.find('.overlay');
                wrapper.css({
                    'width': '',
                    'position': ''
                });
                wrapper.removeClass('toggled');

                if (overlay.length > 0) {
                    overlay.remove();
                    $('html, body').css('overflow', '');
                    $('html, body').css('height', '');
                    $('html, body').css('position', '');
                }
            }
            e.preventDefault();
            e.stopPropagation();
        });

        $('.btn-close').on('click', function(e) {
            toggleButton.trigger('click');
            e.preventDefault();
            return false;
        });
    }

}(jQuery));
