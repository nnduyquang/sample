var token = $('meta[name="csrf-token"]').attr('content');
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
$(document).ready(function () {
    $('.log-btn').click(function () {
        var data = new FormData($(this).get(0));
        data.append('email', $('#email').val());
        data.append('password', $('#password').val());
        $.ajax({
            type: "POST",
            url: getBaseURL() + "sml_login",
            dataType: 'json',
            processData: false,
            contentType: false,
            data: data,
            success: function (data) {
                if (data.success) {
                    // alert( getBaseURL() + "sml_admin/dashboard");
                    window.location = getBaseURL() + "sml_admin/dashboard";
                }
                else {
                    alert('fail');
                    $('.log-status').addClass('wrong-entry');
                    $('.alert').fadeIn(500);
                    setTimeout("$('.alert').fadeOut(1500);", 3000);
                }
            }
        });
    });
    $('.form-control').keypress(function () {
        $('.log-status').removeClass('wrong-entry');
    });

});