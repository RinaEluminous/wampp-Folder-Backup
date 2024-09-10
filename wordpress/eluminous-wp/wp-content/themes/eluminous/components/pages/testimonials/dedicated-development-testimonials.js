jQuery(document).ready(function () {
  jQuery(".owl-carousel").owlCarousel({
    autoPlay: 3000,
    items: 4,
    itemsDesktop: [1199, 3],
    itemsDesktopSmall: [979, 3],
    loop: false,
    dots: true,
    margin: 20,
    responsiveClass: true,
    responsive: {
      300: {
        items: 1,
      },
      768: {
        items: 1,
      },
      992: {
        items: 1,
      },
      1280: {
        items: 2,
      },
    },
  });
});
