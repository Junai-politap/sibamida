<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Teknik Informatika</title>
    <link rel="icon" href="<?php echo e(url('public/admin')); ?>/logo.ico" type="image/x-icon">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body#LoginForm {
            background-image: url("https://hdwallsource.com/img/2014/9/blur-26347-27038-hd-wallpapers.jpg");
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            padding: 10px;
        }

        .form-heading {
            color: #fff;
            font-size: 23px;
        }

        .panel h2 {
            color: #444444;
            font-size: 18px;
            margin: 0 0 8px 0;
        }

        .panel p {
            color: #777777;
            font-size: 14px;
            margin-bottom: 30px;
            line-height: 24px;
        }

        .login-form .form-control {
            background: #f7f7f7 none repeat scroll 0 0;
            border: 1px solid #d4d4d4;
            border-radius: 4px;
            font-size: 14px;
            height: 50px;
            line-height: 50px;
        }

        .main-div {
            background: #ffffff none repeat scroll 0 0;
            border-radius: 2px;
            margin: 10px auto 30px;
            max-width: 38%;
            padding: 50px 70px 70px 71px;
        }

        .login-form .form-group {
            margin-bottom: 10px;
        }

        .login-form {
            text-align: center;
        }

        .forgot a {
            color: #777777;
            font-size: 14px;
            text-decoration: underline;
        }

        .login-form .btn.btn-primary {
            background: #f0ad4e none repeat scroll 0 0;
            border-color: #f0ad4e;
            color: #ffffff;
            font-size: 14px;
            width: 100%;
            height: 50px;
            line-height: 50px;
            padding: 0;
        }

        .forgot {
            text-align: left;
            margin-bottom: 30px;
        }

        .botto-text {
            color: #ffffff;
            font-size: 14px;
            margin: auto;
        }

        .login-form .btn.btn-primary.reset {
            background: #ff9900 none repeat scroll 0 0;
        }

        .back {
            text-align: left;
            margin-top: 10px;
        }

        .back a {
            color: #444444;
            font-size: 13px;
            text-decoration: none;
        }

    </style>
</head>

<body id="LoginForm">
    <div class="container">

        <div class="login-form" style="margin-top: 10%;">
            <div class="main-div">

                <div class="panel">
                    <div id="logo">
                        <img src="https://politap.ac.id/wp-content/uploads/2018/08/logo-poli-website.png"
                            style="width: 100%">
                    </div>
                    <br>
                </div>

                <form id="Login" action="<?php echo e(url('login')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" id="inputEmail"
                            placeholder=" Username">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="inputPassword"
                            placeholder="Password">
                    </div>

                    <div class="forgot">

                    </div>
                    <button class="btn btn-primary"> Login</button>
                </form>
            </div>
            <p class="botto-text"> Teknik Informatika</p>
        </div>
    </div>



</body>

</html>
<?php /**PATH E:\xampp\htdocs\informatika\system\resources\views/login.blade.php ENDPATH**/ ?>