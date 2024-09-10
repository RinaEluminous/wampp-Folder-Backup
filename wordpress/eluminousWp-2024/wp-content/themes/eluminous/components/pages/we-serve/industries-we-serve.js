jQuery(document).ready(function () {
  jQuery(".owl-industries").owlCarousel({
    autoPlay: 3000, //Set AutoPlay to 3 seconds
    items: 4,
    itemsDesktop: [1199, 3],
    itemsDesktopSmall: [979, 3],
    loop: false,
    //margin: 7,
    nav: false,
    responsiveClass: true,
    responsive: {
      300: {
        items: 1,
      },
      768: {
        items: 2,
      },
      992: {
        items: 2,
      },
      1599: {
        items: 3,
      },
      1600: {
        items: 3,
      },
    },
  });
});
