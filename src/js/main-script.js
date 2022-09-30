// jQuery(function() {
//     var current = location.pathname;
//     jQuery('.top-menu li a').each(function() {
//         var $this = jQuery(this);
//         // if the current path is like this link, make it active
//         if ($this.attr('href').indexOf(current) !== -1) {
//             $this.addClass('active');
//         }
//     })
// })

jQuery(document).ready(function() {
    if (jQuery('.courses-slider').length) {
        var viewedSlider = jQuery('.courses-slider');

        viewedSlider.owlCarousel({
            loop: true,
            margin: 42,
            autoplay: false,
            autoplayTimeout: 5000,
            nav: true,
            dots: false,
            mouseDrag: true,
            smartSpeed: 500,
            navText: ["", ""],
            responsive: {
                0: {
                    items: 1,
                    margin: 20
                },
                575: {
                    items: 1,
                    margin: 30
                },
                767: {
                    items: 4,
                    margin: 30
                },
            }
        });
    }
});