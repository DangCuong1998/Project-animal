@extends('frontend.layouts-log.main')


@section('main')
@if(Session::has('ok'))
<div class="alert alert-success">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	{!!Session::get('ok')!!}
</div>
@endif
@if(Session::has('error'))
<div class="alert alert-danger">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	{!!Session::get('error')!!}
</div>
@endif

<form action="" method="POST" role="form" enctype="multipart/form-data">
	<div class="p-t-31 p-b-9">
		<span class="txt1" name='username'>
			Username
		</span>

	</div>
	<div class="wrap-input100 validate-input" data-validate = "Username is required">
		<input class="input100" type="text" name="username" >
		<span class="focus-input100"></span>
	</div>
	@if($errors->has('username'))
	<div class="help-block">
		{!!$errors->first('username')!!}
	</div>
	@endif






	<span class="txt1" name='full_name'>
		Fullname
	</span>
	<div class="wrap-input100 validate-input" data-validate = "Username is required">
		<input class="input100" type="text" name="full_name" >
		<span class="focus-input100"></span>
	</div>
	@if($errors->has('full_name'))
	<div class="help-block">
		{!!$errors->first('full_name')!!}
	</div>
	@endif






	<span class="m-b-20" type="password" name ="password">
		Password
	</span>

	<div class="wrap-input100 validate-input" data-validate = "Password is required">
		<input class="input100" type="text" name="password" >
	</div>
	@if($errors->has('username'))
	<div class="help-block">
		{!!$errors->first('username')!!}
	</div>
	@endif



	<span class="txt1 m-b-20" type="password2" name ="confirm_password">
		Password
	</span>

	<div class="wrap-input100 validate-input" data-validate = "Password is required">
		<input class="input100" type="text" name="password" >
		<span class="focus-input100"></span>
	</div>
	@if($errors->has('confirm_password'))
	<div class="help-block">
		{!!$errors->first('confirm_password')!!}
	</div>
	@endif





	<span class="txt1" type="text" name ="address">
		Address
	</span>
	<div class="wrap-input100 validate-input" data-validate = "Address is required">
		<input class="input100" type="text" name="address" >
		<span class="focus-input100"></span>
	</div>
	@if($errors->has('address'))
	<div class="help-block">
		{!!$errors->first('address')!!}
	</div>
	@endif






	<span class="txt1" type="email" name ="email">
		Email
	</span>
	<div class="wrap-input100 validate-input" data-validate = "Email is required">
		<input class="input100" type="email" name="email" >
		<span class="focus-input100"></span>
	</div>
	@if($errors->has('email'))
	<div class="help-block">
		{!!$errors->first('email')!!}
	</div>
	@endif




	<div class="p-t-13 p-b-9">
		<span class="txt1" type="number" name ="phone">
			Phone number
		</span>
		<div class="wrap-input100 validate-input" data-validate = "Phone number is required">
			<input class="input100" type="password" name="phone" >
			<span class="focus-input100"></span>
		</div>
		@if($errors->has('phone'))
		<div class="help-block">
			{!!$errors->first('phone')!!}
		</div>
		@endif


		
		<div class="container-login100-form-btn m-t-17">
			<button type="submit" class="login100-form-btn">
				Sign In
			</button>
		</div>
		<input type="hidden" name="_token" value="{{csrf_token()}}">

	</form>
	@stop()