var plugins = {
    menu: $('.sidebar'),
    slider1: $('#slider1'),
    module2: $('.module2-listing'),
    module5: $('.member-carousel'),
    module7: $('#hieuSuat'),
    module12:$('#btnSendMail'),
    footer1:$('.backToTop')
};
$(document).ready(function () {
    //Faceboook Init
    var AppID = '1401298499950254';
    var Access_Token = '';
    var FBLoaded = false;
    window.fbAsyncInit = function () {
        FB.init({
            appId: AppID,
            cookie: true,
            xfbml: true,
            version: 'v2.8'
        });
        FBLoaded = true;
        // ki?m tra tr?ng thái hi?n t?i
        FB.getLoginStatus(function (response) {
            statusChangeCallback(response);
        });

    };
    //End init


    //Demo Facebook
    function statusChangeCallback(response) {
        if (response.status === 'connected') {
            // Ngu?i dùng dã dang nh?p facebokk và dã dang nh?p vào ?ng d?ng
            Access_Token = response.authResponse.accessToken;
            showWelcome();
        } else if (response.status === 'not_authorized') {
            showLoginButton();
        }
        else {
            //ngu?i dùng chua dang nh?p fb
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
        // window.location = 'http://graph.facebook.com/oauth/authorize?client_id=' + AppID + '&scope=public_profile,email,user_likes,user_birthday,user_education_history,user_work_history,user_posts,user_friends,user_photos,user_location,publish_actions&redirect_uri=http://localhost:8080/sample/facebook&response_type=token';
        FB.login(function (response) {
            console.log(response);
            console.log(response.authResponse.accessToken);
            Access_Token = response.authResponse.accessToken;
            window.location = 'http://localhost:8080/sample/facebook';
        }, {scope: 'public_profile,email,user_likes,user_birthday,user_education_history,user_work_history,user_posts,user_friends,user_photos,user_location,pages_show_list,publish_pages,manage_pages,user_managed_groups,publish_actions'});
    }

    //Hi?n th? nút dang nh?p
    function showLoginButton() {
        $('#btnLogin').css('display', 'block');
        $('#btnLogout').css('display', 'none');
        $('#lbl').css('display', 'none');
    }

    function showInfo() {
        FB.api('/1401298499950254', function (response) {
            console.log(response.access_token);
        });
    }


    //Chào m?ng ngu?i dùng dã dang nh?p
    function showWelcome() {
        $('#btnLogin').css('display', 'none');
        $('#btnLogout').css('display', 'block');
        FB.api('/me', function (response) {
            console.log(response);
            var name = response.name;
            var email = response.email;
            var username = response.username;
            var id = response.id;
            var access_token = Access_Token;
            $('#lbl').html('Tên = ' + name + ' Email = ' + email + ' id = ' + id + ' username = ' + username + ' access_token= ' + access_token);
            //Trong tru?ng h?p email tr? ra undefined là do ngu?i dùng dã set email private
            $('#lbl').css('display', 'block');
        });
    }

    function postNewFeeds() {
        if (FBLoaded) {
            var ms = $('#message').val();
            var lk = $('#link').val();
            FB.api('/me/feed', 'post', {message: ms, link: lk}, function (response) {
                if (!response || response.error) {
                    alert('Có Lỗi Khi Post Bài');
                } else {
                    $('#postId').val(response.id);
                    alert(response.id);
                }
            });
        } else {
            setTimeout('postNewFeeds()', 100);
        }
    }

    function postOnPage() {
        //Cần Dùng 3 quyền pages_show_list,publish_pages,manage_pages
        if (FBLoaded) {
            var ms = $('#message').val();
            var lk = $('#link').val();
            var atp = 'EAAT6eTtQVq4BAHZCD6TriQXf1wKHp8ms1V9pV99zMfrV14llKZBuqHbZAnzcsZC4OxRXvUAi1g4WPry4VOgv8QDQt4empVYodYICt02UsJrHyZAu2Tx3zS3MF29HUHkrFULWzQju9nGfvGP2m8MnhqKztZCZB2IVE5nIHEZC4YGWI9k6MGxdktAL8wjhZCuNw7qcZD';
            FB.api('/me/feed', 'post', {message: ms, link: lk, access_token: atp}, function (response) {
                if (!response || response.error) {
                    alert('Có Lỗi Khi Post Bài');
                } else {
                    $('#postId').val(response.id);
                    alert(response.id);
                }
            });
        } else {
            setTimeout('postNewFeeds()', 100);
        }
    }

    //Lưu Ý Chỉ Xóa Đc Bài Viết Do App Post
    function deleteNewFeeds() {
        if (FBLoaded) {
            var postId = $('#postId').val();
            FB.api(postId, 'delete', function (response) {
                if (!response || response.error) {
                    alert('Có Lỗi Khi Xóa Bài');
                } else {
                    alert('Đã Xóa Thành Công');
                }
            });
        } else {
            setTimeout('deleteNewFeeds()', 100);
        }
    }

    function deletePostOnPage() {
        if (FBLoaded) {
            var postId = $('#postId').val();
            var atp = 'EAAT6eTtQVq4BAHZCD6TriQXf1wKHp8ms1V9pV99zMfrV14llKZBuqHbZAnzcsZC4OxRXvUAi1g4WPry4VOgv8QDQt4empVYodYICt02UsJrHyZAu2Tx3zS3MF29HUHkrFULWzQju9nGfvGP2m8MnhqKztZCZB2IVE5nIHEZC4YGWI9k6MGxdktAL8wjhZCuNw7qcZD';
            FB.api(postId, 'delete', {access_token: atp}, function (response) {
                if (!response || response.error) {
                    alert('Có Lỗi Khi Xóa Bài');
                } else {
                    alert('Đã Xóa Thành Công');
                }
            });
        } else {
            setTimeout('deleteNewFeeds()', 100);
        }
    }

// Đăng Xuất Người DÙng Khỏi Ứng Dụng Facebook
    function logoutFacebook() {
        if (FBLoaded) {
            FB.logout();
            //Kiểm tra lại trạng thái đăng nhập
            FB.getLoginStatus(function (response) {
                statusChangeCallback(response);
            });
        } else {
            setTimeout('logoutFacebook()', 100);
        }
    }

    /********************************************************************************************/
    //Danh sách group id cần post
    var _list;
    //Index của group đã post
    var _listIndex = -1;
    //Nội dung cần post
    var _message = '';
    //Url Hình Ảnh
    var _picture = '';
    //Object monitor
    var _monitor;
    // Thời Gian Chờ Giữa 2 lần gửi
    var _waitTime = 0;
    //Tự gọi lại sau mỗi giây
    function _autoCall() {
        var canContinue = true;
        if (_waitTime == 0) {
            _waitTime = parseInt($('#time').val());
            _listIndex++;
            if (_listIndex < _list.length) {
                _postToGroupID(_list[_listIndex]);
            } else {
                canContinue = false;
            }
        } else {
            _waitTime--;
            $('#timer').html(_waitTime);
        }
        //tự gọi lại chính nó sau 1s
        if (canContinue)
            setTimeout(_autoCall, 1000);
        else
            _monitor.append('<p>Đã Hết Nhóm Cần Post</p> ');
    }

    //Hàm khởi đầu
    function _startPost() {
        //Phải có quyền user_managed_groups, publish_actions
        _monitor = $('#response');
        _picture = $('#picture').val();
        _message = $('#message_area').val();
        _list = $('#groups').val().split(';');
        console.log('List: '+_list);
        _listIndex = -1;
        _waitTime = parseInt($('#time').val());// đổi ra giây
        setTimeout(_autoCall, 1000);
    }

    //Gửi bài viết mới lên group id đã đưa vào
    function _postToGroupID(_groupId) {
        FB.api('/' + _groupId + '/photos', 'post', {message: _message, url: _picture}, function (response) {
            if (!response || response.error) {
                _monitor.append('<p>Có Lỗi Khi Post Bài lên group id= ' + _groupId + ' Lỗi: ' + response.error);
            } else {
                _monitor.append('<p>Đã Post Bài Lên Group Có group id= ' + _groupId);
            }
        });
    }



    $('#start').click(function () {
        _startPost();
    });


    /********************************************************************************************/

    $('#btnLogin').click(function () {
        requestLoginFacebook();
    });
    $('#btnLogout').click(function () {
        logoutFacebook();
    });
    $('#btnInfo').click(function () {
        showInfo();
    });
    $('#postNewFeeds').click(function () {
        postNewFeeds();
    });
    $('#postOnPage').click(function () {
        postOnPage();
    });
    $('#deleteNewFeeds').click(function () {
        deleteNewFeeds();
    });
    $('#deletePostPage').click(function () {
        deletePostOnPage();
    });


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
    function runModule7(){
        var waypoint = new Waypoint({
            element: document.getElementById('hieuSuat'),
            handler: function () {
                var options1 = {
                    useEasing: true,
                    useGrouping: false,
                    separator: ',',
                    decimal: '.',
                    prefix: '',
                    suffix: '+'
                };
                var options2 = {
                    useEasing: true,
                    useGrouping: false,
                    separator: ',',
                    decimal: '.',
                    prefix: '',
                    suffix: '%'
                };
                var numHs1 = new CountUp("hs1", 0, 500, 0, 1.5, options1);
                var numHs2 = new CountUp("hs2", 0, 1000, 0, 2, options1);
                var numHs3 = new CountUp("hs3", 0, 100, 0, 2.2, options2);
                var numHs4 = new CountUp("hs4", 0, 500, 0, 2, options1);
                numHs1.start();
                numHs2.start();
                numHs3.start();
                numHs4.start();

                waypoint.disable();
            },
            offset: '85%'
        })
    }
    function getBaseURL() {
        var url = location.href;  // entire url including querystring - also: window.location.href;
        var baseURL = url.substring(0, url.indexOf('/', 14));
        if (baseURL.indexOf('http://localhost') != -1) {
            // Base Url for localhost
            var url = location.href;  // window.location.href;
            var pathname = location.pathname;  // window.location.pathname;
            var index1 = url.indexOf(pathname);
            var index2 = url.indexOf("/", index1 + 1);
            var baseLocalUrl = url.substr(0, index2);
            return baseLocalUrl + "/";
        }
        else {
            // Root Url for domain name
            return baseURL + "/";
        }

    }
    function runModule12(){
        $('.loadingSending').css('display','inline-block');
        $('.errorEmail').css('display','none');
        $('.errorName').css('display','none');
        $('.errorInfo').css('display','none');
        var data = new FormData($(this).get(0));
        data.append('name', $("input[name='name']").val());
        data.append('email', $("input[name='email']").val());
        data.append('phone', $("input[name='phone']").val());
        data.append('website', $("input[name='website']").val());
        data.append('keyword', $("textarea[name='keyword']").val());
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: getBaseURL() + "sendmail",
            dataType: 'json',
            processData: false,
            contentType: false,
            data: data,
            success: function (data) {
                if (data.success) {
                    $('.loadingSending').css('display','none');
                    $('.successSending').css('display','inline-block');
                    $('.successSending').fadeIn(500);
                    setTimeout("$('.successSending').fadeOut(1500);", 3000);
                    $("input[name='name']").val("");
                    $("input[name='email']").val("");
                    $("input[name='phone']").val("");
                    $("input[name='website']").val("");
                    $("textarea[name='keyword']").val("");
                }
                else {
                    alert('fail');
                }
            },
            error: function(data){
                $('.loadingSending').css('display','none');
                var errors = $.parseJSON(data.responseText);
                if(errors.hasOwnProperty('email')){
                    $('.errorEmail').css('display','inline-block');
                    $('.errorEmail').attr('data-original-title',errors['email']);
                }
                if(errors.hasOwnProperty('name')){
                    $('.errorName').css('display','inline-block');
                    $('.errorName').attr('data-original-title',errors['name']);
                }
                if(errors.hasOwnProperty('keyword')){
                    $('.errorInfo').css('display','inline-block');
                    $('.errorInfo').attr('data-original-title',errors['keyword']);
                }
                // console.log((errors.hasOwnProperty('email'))?errors['email']:'Không có lỗi email');
                // Render the errors with js ...
            }
        });
    }

    function footer1BackTopTop(){
        plugins.footer1.click(function(){
            $('html, body').animate({scrollTop:0}, 'slow');
            return false;
        });
    }

    sidebar();
    if (plugins.slider1.length) {
        runSlider1();
    }
    if (plugins.module2.length) {
        runModule2();
    }
    if (plugins.module5.length) {
        runModule5();
    }
    if (plugins.module7.length) {
        runModule7();
    }
    if(plugins.module12.length){
        $("[rel=popover]").tooltip();
        plugins.module12.click(function(){
            runModule12();
        });
    }
    if(plugins.footer1.length){
        footer1BackTopTop();
    }

    new WOW().init();
});