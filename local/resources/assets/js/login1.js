$(document).ready(function () {
    $('.log-btn').click(function () {
        // $('.log-status').addClass('wrong-entry');
        // $('.alert').fadeIn(500);
        // setTimeout( "$('.alert').fadeOut(1500);",3000 );
        var data = new FormData($(this).get(0));
        // data.append('_token', token);
        data.append('email', $('#email').val());
        data.append('password', $('#password').val());
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: getBaseURL() + "sml_login",
            dataType: 'json',
            processData: false,
            contentType: false,
            data: data,
            success: function (data) {
                if (data.success) {
                    alert('success');
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