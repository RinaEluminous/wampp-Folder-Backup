jQuery(document).ready(function () {
    jQuery("#development_team").owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        items: 4,
        margin: 15,
        loop: true,
        nav: false,
        responsiveClass: true,
        responsive: {
            320: {
                items: 1,
                margin: 0,
                dotsEach: 2 // Show only one dot
            },
            576: {
                items: 2,
                margin: 5,
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            },
            1200: {
                items: 3
            },
            1600: {
                items: 4
            }
        }
    });
});