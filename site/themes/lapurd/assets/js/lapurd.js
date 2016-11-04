(function ($, Drupal) {
	
	Drupal.Lapurd = Drupal.Lapurd || {};
  Drupal.Lapurd.masonry_container = false;
  Drupal.Lapurd.columnWidth = 200;
	"use strict";
 	Drupal.behaviors.Lapurd = {
    	attach: function (context, settings) {
    		$(window).load(function() {
    			$('.article-hightlight-list .views-row').first().addClass('active');
          $('.article-hightlight-detail .views-row').first().addClass('active');


                // make hightlight
    			      Drupal.Lapurd.hightlight();
                 // Make faq accordion
                Drupal.Lapurd.addFaqAccordion();
                //$('#featured').remove();
                Drupal.Lapurd.mobileMenu();
                /*Drupal.Lapurd.commentForm();*/
                Drupal.Lapurd.scrollClass();

                Drupal.Lapurd.groupBanner();

                Drupal.Lapurd.backToTop();
                $(window).scroll(Drupal.Lapurd.scrollClass);

                // Set side grid
                $('.views-grid-blogs').height(392);

                
                fixImageSources();

     		});
    	}
  	};

    Drupal.Lapurd.scrollClass = function(){

        var scroll = $(window).scrollTop();
        if (scroll >= 10) {
          $(".page").addClass("scrolled");
        }
        else {
          $(".page").removeClass("scrolled");
        }
    }

   	Drupal.Lapurd.hightlight = function() {
        $('.article-hightlight-list .views-row').on("click",function (){
        var self = (jQuery)(this);
        var rows_class = self.attr('class');
        var class_var = (rows_class.split(' '))[0];
        if(!$('.article-hightlight-list .'+ class_var + '.active').length)
        {
         	$('.article-hightlight-list .views-row').removeClass('active');
         	$('.article-hightlight-detail .views-row').removeClass('active');
         	$('.article-hightlight-detail .' + class_var).addClass('active');
         	$('.article-hightlight-list .'+ class_var).addClass('active');
        }
       });
    }
    Drupal.Lapurd.backToTop = function () {
    $(window).load(function () {
      if($(this).scrollTop()){
        $('.btn-btt').fadeIn();
      }
      else{
        $('.btn-btt').fadeOut();
      }
    });
    $(window).scroll(function () {
      if($(this).scrollTop()){
        $('.btn-btt').fadeIn();
      }
      else{
        $('.btn-btt').fadeOut();
      }
    });

    $('.btn-btt').click(function () {
      $('html, body').animate({scrollTop : 0}, 700);
      return false;
    })
  };
    Drupal.Lapurd.addFaqAccordion =function(){
        var wrap_class = "panel-collapse collapse";
        var parent = jQuery("#block-mainpagecontent .faq-block .view-content");
        $(parent).addClass("panel-group").attr("role","tablist").attr("id","accordion");
        
        parent.children().each(function() {

            $(this).addClass("panel panel-default");

            var title =jQuery(this).children().slice(0,1).find('a');
            var id = title.attr('href').split('#')[1];
            var href = '#'+id;
            title.attr('href',href);
            title.attr('data-toggle','collapse');
            title.attr('data-parent',"#accordion");

            $(this).children().slice(1).wrapAll(
                '<div id="'+id+'" class="field-group-wrapper views-fieldset '+wrap_class+'"></div>'
            );
        });

        parent.children().slice(0,1).children().slice(1).addClass("in");
        parent.children().slice(0,1).find('.collapsed').removeClass('collapsed');
    }

    Drupal.Lapurd.mobileMenu = function() {
        $('.navbar-toggle').mobileMenu({
            targetWrapper: '#block-lapurd-main-menu'
        });
    }

    function fixImageSources() {
      var _path = drupalSettings.path.baseUrl;
                (jQuery)('.block .text-formatted img').each(function (i, e) {
                  var self = (jQuery)(this);
                  var src = self.attr('src');
                  if (_path == '/') {
                    var tmphref = src;
                  }else{
                    var tmphref = _path + src;
                  }                
                  self.attr('src', tmphref);
                
            });

            }
    Drupal.Lapurd.groupBanner = function() {
        $('.region.region-banner').append('<div class= "banner-inner"></div>');
        var parent = $('.region.region-banner .banner-inner');
        var banner = $('#block-banner-2');
        var breadcrumbs =  $('#block-lapurd-breadcrumbs');
        var page_title = $('#block-pagetitle');
        $('.region.region-banner').append(page_title);
        parent.append(banner);
        parent.append(breadcrumbs);
    }

})(jQuery, Drupal);