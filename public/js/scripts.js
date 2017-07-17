var plugins = {
    menu: $('.sidebar'),
    slider1: $('#slider1'),
    module2:$('.module2-listing')
};
$(document).ready(function () {
    function sidebar() {
        var trigger = $('#trigger,#close');
        trigger.on('click', function () {
            $(this).toggleClass('active');
            plugins.menu.toggleClass('closed');
            $('#blurrMe').toggleClass('blurred')
        })
        $('#wrap-container').on('click', function () {
            if ($('#blurrMe').hasClass('blurred')) {

                $('#blurrMe').toggleClass('blurred')
                plugins.menu.toggleClass('closed');
            }
        })
    }
    function runSlider1() {
        plugins.slider1.nivoSlider({
            effect: 'fade',
            animSpeed: 500,
            pauseTime: 3000,
            pauseOnHover: true,
            controlNav: false,
        });
    }
    function runModule2(){
        // plugins.module2.on('initialized.owl.carousel', function(e){
        //     plugins.module2.find('.owl-dots').before('<div class="stm-owl-prev"><i class="fa fa-angle-left"></i></div>');
        //     plugins.module2.find('.owl-dots').after('<div class="stm-owl-next"><i class="fa fa-angle-right"></i></div>');
        // });
        var owlRtl = false;
        if( $('body').hasClass('rtl') ) {
            owlRtl = true;
        }
        plugins.module2.owlCarousel({
            rtl: owlRtl,
            items: 3,
            dots: true,
            autoplay: false,
            slideBy: 3,
            loop: true,
            responsive:{
                0:{
                    items:1,
                    slideBy: 1
                },
                768:{
                    items:2,
                    slideBy: 2
                },
                992:{
                    items:3,
                    slideBy: 3
                }
            }
        });
        plugins.module2.find('.owl-dots').wrap("<div class='owl-controls'></div>");
        plugins.module2.find('.owl-dots').before('<div class="stm-owl-prev"><i class="fa fa-angle-left"></i></div>');
        plugins.module2.find('.owl-dots').after('<div class="stm-owl-next"><i class="fa fa-angle-right"></i></div>');
        plugins.module2.on('click','.stm-owl-prev', function(){
            plugins.module2.trigger('prev.owl.carousel');
        });
        plugins.module2.on('click','.stm-owl-next', function(){
            plugins.module2.trigger('next.owl.carousel');
        });
    }
    sidebar();
    if (plugins.slider1.length) {
        runSlider1();
    }
    if(plugins.module2.length){
        runModule2();
    }
});