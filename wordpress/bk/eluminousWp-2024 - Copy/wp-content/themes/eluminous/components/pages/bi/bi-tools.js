jQuery(document).ready(function () {
  $("#client_logo_slider").owlCarousel({
    loop: !0,
    autoplay: !0,
    margin: 15,
    nav: !1,
    autoplayTimeout: 3e3,
    responsiveClass: !0,
    responsive: {
      0: { items: 1, loop: !0 },
      768: { items: 2, loop: !0 },
      992: { items: 3, loop: !0 },
      1200: { items: 4, loop: !0 },
      1440: { items: 5, loop: !0 },
    },
  });
});
