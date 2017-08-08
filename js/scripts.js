var plugins = {
    menu: $('.sidebar'),
    slider1: $('#slider1'),
    module2:$('.module2-listing'),
    module5:$('.module5')
};
$(document).ready(function () {
    //Faceboook Init
    window.fbAsyncInit = function () {
        FB.init({
            appId: '1401298499950254',
            cookie: true,
            xfbml: true,
            version: 'v2.8'
        });
        // ki?m tra tr?ng th�i hi?n t?i
        FB.getLoginStatus(function (response) {
            statusChangeCallback(response);
        });

    };
    //End init


    //Demo Facebook
    function statusChangeCallback(response) {
        if (response.status === 'connected') {
            // Ngu?i d�ng d� dang nh?p facebokk v� d� dang nh?p v�o ?ng d?ng
            showWelcome();
        } else if (response.status === 'not_authorized') {
            showLoginButton();
        }
        else {
            //ngu?i d�ng chua dang nh?p fb
            showLoginButton();
        }
    }

    (function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    //y�u c?u dang nh?p facebook
    function requestLoginFacebook() {
        window.location = 'http://graph.facebook.com/oauth/authorize?client_id=1401298499950254&scope=public_profile,email,user_likes,user_birthday,user_education_history,user_work_history,user_posts,user_friends,user_photos,user_location,publish_actions&redirect_uri=http://localhost:8080/sample&response_type=token';
    }

    //Hi?n th? n�t dang nh?p
    function showLoginButton() {
        $('#btnLogin').css('display', 'block');
        $('#lbl').css('display', 'none');
    }
    function showInfo(){
        FB.api('/1401298499950254', function(response) {
            console.log(response.access_token);
        });
    }

    $('#btnLogin').click(function () {
        requestLoginFacebook();
    });
    $('#btnInfo').click(function () {
        showInfo()
    });
    //Ch�o m?ng ngu?i d�ng d� dang nh?p
    function showWelcome() {
        $('#btnLogin').css('display', 'none');
        FB.api('/me', function (response) {
            console.log(response);
            var name = response.name;
            var email = response.email;
            var username = response.username;
            var id = response.id;
            var access_token=response.access_token
            $('#lbl').html('T�n = ' + name + ' Email = ' + email + ' id = ' + id + ' username = ' + username+' access_token= '+access_token);
            //Trong tru?ng h?p email tr? ra undefined l� do ngu?i d�ng d� set email private
            $('#lbl').css('display', 'block');
        });
    }


    //End demo Facebook


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

    function runModule2() {
        // plugins.module2.on('initialized.owl.carousel', function(e){
        //     plugins.module2.find('.owl-dots').before('<div class="stm-owl-prev"><i class="fa fa-angle-left"></i></div>');
        //     plugins.module2.find('.owl-dots').after('<div class="stm-owl-next"><i class="fa fa-angle-right"></i></div>');
        // });
        var owlRtl = false;
        if ($('body').hasClass('rtl')) {
            owlRtl = true;
        }
        plugins.module2.owlCarousel({
            rtl: owlRtl,
            items: 3,
            dots: true,
            autoplay: false,
            slideBy: 3,
            loop: true,
            responsive: {
                0: {
                    items: 1,
                    slideBy: 1
                },
                768: {
                    items: 2,
                    slideBy: 2
                },
                992: {
                    items: 3,
                    slideBy: 3
                }
            }
        });
        plugins.module2.find('.owl-dots').wrap("<div class='owl-controls'></div>");
        plugins.module2.find('.owl-dots').before('<div class="stm-owl-prev"><i class="fa fa-angle-left"></i></div>');
        plugins.module2.find('.owl-dots').after('<div class="stm-owl-next"><i class="fa fa-angle-right"></i></div>');
        plugins.module2.on('click', '.stm-owl-prev', function () {
            plugins.module2.trigger('prev.owl.carousel');
        });
        plugins.module2.on('click', '.stm-owl-next', function () {
            plugins.module2.trigger('next.owl.carousel');
        });
    }
    function runModule5() {
        plugins.module5.not('.slick-initialized').slick({
            autoplay: true,
            autoplaySpeed: 2000,
            prevArrow: '.arrow-prev1',
            nextArrow: '.arrow-next1',
            mobileFirst: true,
            responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1,
                }
            }, {

                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            }, {
                breakpoint: 480,
                slidesToShow: 1,
                slidesToScroll: 1,
            }]
        });
    }
    sidebar();
    if (plugins.slider1.length) {
        runSlider1();
    }
    if (plugins.module2.length) {
        runModule2();
    }
    if(plugins.module5.length){
        runModule5();
    }
});