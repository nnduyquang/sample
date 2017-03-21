var plugins = {
    owlCarousel: $('.owl-carousel')
};
$(document).ready(function () {
    function loadOwlCarousel() {
        plugins.owlCarousel.owlCarousel({
            navigation: true,
            slideSpeed: 500,
            paginationSpeed: 500,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            items: 1,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut',
            nav: true,
            dots:true

        });
    }

    if (plugins.owlCarousel.length) {
        loadOwlCarousel()
    }

});