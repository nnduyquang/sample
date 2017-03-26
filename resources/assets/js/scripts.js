var plugins = {
    owlCarousel: $("#slider"),
    menu1:$("#menu")
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

    function loadMenu1(){
        plugins.menu1.mmenu({
            //option
            autoHeight: false
        },{
            // configuration
            // offCanvas: {
            //     pageSelector: "#menubar"
            // }
        });
    }

    if (plugins.owlCarousel.length) {
        loadOwlCarousel();
    }
    if(plugins.menu1.length){
        loadMenu1();
    }

    $('#nav li').hover(function() {
        var posit = $(this).position();
        if (posit.left > 980) {
            $('.submnu1', this).css({
                'left': '-100%'
            });
        }
        $('ul:first', this).stop().slideDown(200);
    }, function() {
        $('ul', this).stop().slideUp(100);
    });
    $('#nav li').hover(function() {
        $('div', this).stop().slideDown(200);
    }, function() {
        $('div', this).stop().slideUp(100);
    });
    $('.mobile-lang-bar').hover(function(){
        $('.droplang',this).stop().slideToggle();
    });
    $('#btn_search_mobile').click(function(){
        $('menu-mobile-fix nav li').removeClass('active');
        $(this).parent().addClass('active');
        $('.mobile-search').stop().slideToggle();
    });


});