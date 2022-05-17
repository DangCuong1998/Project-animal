
<!DOCTYPE html>
<html lang="en">
<head> 
    <title>Login V5</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="{{url('/')}}/public/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/vendor/animate/animate.css">
    <!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/vendor/select2/select2.min.css">
    <!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/public/css/main.css">
    <!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100" style="background-image: url(http://imageshack.com/a/img924/4154/GVaS9f.jpg);">
            <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                <form class="login100-form validate-form flex-sb flex-w" method="post">  {{ csrf_field()}}


                    <span class="login100-form-title p-b-53">
                        Sign In With
                    </span>

                    <a href="#" class="btn-face m-b-20">
                        <i class="fa fa-facebook-official"></i>
                        Facebook
                    </a>

                    <a href="#" class="btn-google m-b-20">
                        <img src="images/icons/icon-google.png" alt="GOOGLE">
                        Google
                    </a>
               <div class="p-t-31 p-b-9">
    <span class="txt1" name='username'>
        Username
    </span>
</div>
<div class="wrap-input100 validate-input" data-validate = "Username is required">
    <input class="input100" type="text" name="username" >
    <span class="focus-input100"></span>
</div>

<div class="p-t-13 p-b-9">
    <span class="txt1" type="password" name ="password">
        Password
    </span>
    <a href="#" class="txt2 bo1 m-l-5">
        Forgot?
    </a>
</div>
<div class="wrap-input100 validate-input" data-validate = "Phone number is required">
                    <input class="input100" type="password" name="password" >
                    <span class="focus-input100"></span>
                </div>
                <div class="container-login100-form-btn m-t-17">
        <button type="submit" class="login100-form-btn" name="submit">
            Sign In
        </button>
    </div>

                


            <input type="hidden" name="_token" value="{{csrf_token()}}">
            


                <div class="w-full text-center p-t-55">
                    <span class="txt2">
                        Not a member?
                    </span>

                    <a href="{{route('signup')}}" class="txt2 bo1">
                        Sign up now
                    </a>
                    
                </div>
                <a href="{{route('loginmain')}}" class="txt2 bo1 text-center" style="margin-left: 200px; margin-top: 40px">
                        Sign in now
                    </a>
    <input type="hidden" name="_token" value="{{csrf_token()}}">
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="{{url('/')}}/public/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="{{url('/')}}/public/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="{{url('/')}}/public/vendor/bootstrap/js/popper.js"></script>
<script src="{{url('/')}}/public/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="{{url('/')}}/public/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="{{url('/')}}/public/vendor/daterangepicker/moment.min.js"></script>
<script src="{{url('/')}}/public/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="{{url('/')}}/public/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="{{url('/')}}/public/js/main.js"></script>

</body>
</html>










