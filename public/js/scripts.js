var plugins = {
    owlCarousel: $("#slider")
};
// $(document).ready(function () {
//     function loadOwlCarousel() {
//         plugins.owlCarousel.owlCarousel({
//             navigation: true,
//             slideSpeed: 500,
//             paginationSpeed: 500,
//             navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
//             items: 1,
//             animateIn: 'fadeIn',
//             animateOut: 'fadeOut',
//             nav: true,
//             dots:true,
//             autoplay:true,
//             autoplayTimeout:3000,
//             autoplayHoverPause:true,
//             loop:true
//
//         });
//     }
//
//     if (plugins.owlCarousel.length) {
//         loadOwlCarousel()
//     }
//
// });


$(document).ready(function () {

    function loadOwlCarousel() {
        var owl = plugins.owlCarousel.owlCarousel({
            items: 1,
            // slideSpeed : 2000,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            nav: true,
            autoplay: true,
            dots: true,
            loop: true,
            responsiveRefreshRate: 200,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        })
        owl.trigger('refresh.owl.carousel');
    }

    if (plugins.owlCarousel.length) {
        loadOwlCarousel()
    }


});