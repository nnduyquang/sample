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