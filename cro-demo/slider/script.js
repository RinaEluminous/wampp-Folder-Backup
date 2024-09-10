jQuery(function() {
  
    jQuery('#aniimated-thumbnials').lightGallery({
      thumbnail: true,
    });
  // Card's slider
    var jQuerycarousel = jQuery('.slider-for');  
    jQuerycarousel
    .slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        adaptiveHeight: false,
        asNavFor: '.slider-nav'
    });
    jQuery('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        arrows: false,
        dots: false,
        centerMode: false,
        focusOnSelect: true,
        variableWidth: true
    });
  });