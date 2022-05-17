<!DOCTYPE html>
<html lang="en">
<head> 
	<title>Login V5</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{url('/')}}/images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/vendor/animate/animate.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/vendor/select2/select2.min.css">
	<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{url('/')}}/css/main.css">
	<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url(/images/bg-01.jpg');">
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
					@yield('main')
					
				


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
<script src="{{url('/')}}/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="{{url('/')}}/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="{{url('/')}}/vendor/bootstrap/js/popper.js"></script>
<script src="{{url('/')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="{{url('/')}}/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="{{url('/')}}/vendor/daterangepicker/moment.min.js"></script>
<script src="{{url('/')}}/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="{{url('/')}}/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="{{url('/')}}/js/main.js"></script>

</body>
</html>