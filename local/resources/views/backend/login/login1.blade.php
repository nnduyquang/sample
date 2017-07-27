<!DOCTYPE html>
<html >
<meta name="csrf-token" content="{{ csrf_token() }}">
<head>
    <meta charset="UTF-8">
    <title>Login form shake effect</title>


    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/login.css">

</head>

<body id="login">
<div class="login-form">
    <h1>Vini</h1>
    <div class="form-group ">
        <input type="text" class="form-control" placeholder="Email " id="email">
        <i class="fa fa-user"></i>
    </div>
    <div class="form-group log-status">
        <input type="password" class="form-control" placeholder="Password" id="password">
        <i class="fa fa-lock"></i>
    </div>
    <span class="alert">Invalid Credentials</span>
    <a class="link" href="#">Lost your password?</a>
    <button type="button" class="log-btn" >Đăng Nhập</button>


</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script src="js/login.js"></script>

</body>
</html>
