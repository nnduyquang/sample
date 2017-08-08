var plugins = {
    menu: $('.sidebar'),
    slider1: $('#slider1'),
    module2: $('.module2-listing')
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
        // kiểm tra trạng thái hiện tại
        FB.getLoginStatus(function (response) {
            statusChangeCallback(response);
        });

    };
    //End init


    //Demo Facebook
    function statusChangeCallback(response) {
        if (response.status === 'connected') {
            // Người dùng đã đăng nhập facebokk và đã đăng nhập vào ứng dụng
            showWelcome();
        } else if (response.status === 'not_authorized') {
            showLoginButton();
        }
        else {
            //người dùng chưa đăng nhập fb
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
    //yêu cầu đăng nhập facebook
    function requestLoginFacebook() {
        window.location = 'http://graph.facebook.com/oauth/authorize?client_id=1401298499950254&scope=public_profile,email,user_likes,user_birthday,user_education_history,user_work_history,user_posts,user_friends,user_photos,user_location,publish_actions&redirect_uri=http://localhost:8080/sample&response_type=token';
    }

    //Hiển thị nút đăng nhập
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
    //Chào mừng người dùng đã đăng nhập
    function showWelcome() {
        $('#btnLogin').css('display', 'none');
        FB.api('/me', function (response) {
            console.log(response);
            var name = response.name;
            var email = response.email;
            var username = response.username;
            var id = response.id;
            var access_token=response.access_token
            $('#lbl').html('Tên = ' + name + ' Email = ' + email + ' id = ' + id + ' username = ' + username+' access_token= '+access_token);
            //Trong trường hợp email trả ra undefined là do người dùng đã set email private
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

    sidebar();
    if (plugins.slider1.length) {
        runSlider1();
    }
    if (plugins.module2.length) {
        runModule2();
    }
});