
(function ($, Drupal) {

    "use strict";
    Drupal.behaviors.ThumbnailSlider = {
        attach: function (context, settings) { 
            $(window).load(function() {
                Drupal.Lapurd.fixSliderHtml();
                Drupal.Lapurd.flexSlider();
            });
        }
    }

    Drupal.Lapurd.fixSliderHtml = function() {
        var parent = $('#thumbslider-container');
        var slide = $(parent).children().wrapAll('<div id="slider" class="flexslider"></div>');
        $(slide).wrapAll('<ul class="slides"></ul>');
        var slider = $(parent).children().slice(0,1).clone();
        
        var carousel = slider.clone().attr('id','carousel');
        $(carousel).find('.views-field-body , .views-field-view-node').remove();
        
        parent.empty();
        parent.append(slider);
        parent.append(carousel);
    }

    Drupal.Lapurd.flexSlider = function(){


        $('#thumbslider-container #carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 100,
            itemMargin: 29,
            asNavFor: '#slider'
        });

        $('#thumbslider-container #slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#carousel",
            start: function(slider){
                $('body').removeClass('loading');
            }   
        });
    }
})(jQuery, Drupal);

