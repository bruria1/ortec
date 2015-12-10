/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - https://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {


// To understand behaviors, see https://drupal.org/node/756722#behaviors
Drupal.behaviors.my_custom_behavior = {
  attach: function(context, settings) {

/************  responsive menu  **************/

$('body').addClass("menu-close");

$('#page').on('click', function() {
      $('body').removeClass('menu-open').addClass('menu-close');
});

$('.mobile-menu').on('click', function() {
   if ( $( "body" ).hasClass( "menu-close" ) ) {
      $('body').removeClass('menu-close').addClass('menu-open');
        $i=200;
        $("#main-menu li a").each(function(index){
          $(this).delay($i).queue(function(){
          this.style.opacity = "1";
        });
        $i=$i+200;
  });
  }
  else{
      $('body').removeClass('menu-open').addClass('menu-close');
  }
});

$("#search-block-form .in-field-labels-processed").removeClass("element-invisible");

Height = $("#block-views-manufacturies-block .views-field-field-logo").height();
width = $("#block-views-manufacturies-block .views-field-field-logo").width();
$("#block-views-manufacturies-block .views-field-field-second-title").css("height", Height);
$("#block-views-manufacturies-block .views-field-field-second-title .field-content").css("height", Height);
$("#block-views-manufacturies-block .views-field-field-second-title").css("width", width);
imgheight = $("#block-views-products-block img").height();
$("#block-views-products-block .views-field-field-product-image a").css("height", imgheight);

$(window).resize(function() {
  Height = $("#block-views-manufacturies-block .views-field-field-logo").height();
  width = $("#block-views-manufacturies-block .views-field-field-logo").width();
  $("#block-views-manufacturies-block .views-field-field-second-title").css("height", Height);
  $("#block-views-manufacturies-block .views-field-field-second-title .field-content").css("height", Height);
  $("#block-views-manufacturies-block .views-field-field-second-title").css("width", width);
  imgheight = $("#block-views-products-block img").height();
  $("#block-views-products-block .views-field-field-product-image a").css("height", imgheight);
});


if ($(".en .language-link").hasClass("locale-untranslated")){
  $(".en .locale-untranslated").html('<a href="/">English</a>');
  $(".en .language-link").removeClass("locale-untranslated")
}

if ($(".he .language-link").hasClass("locale-untranslated")){
  $(".he .locale-untranslated").html('<a href="/">עברית</a>');
  $(".he .language-link").removeClass("locale-untranslated")
}

  }
};


})(jQuery, Drupal, this, this.document);
