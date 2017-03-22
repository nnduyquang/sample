var plugins = {
    owlCarousel: $("#slider")
};
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