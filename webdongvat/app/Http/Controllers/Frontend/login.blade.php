@extends('frontend.layouts-log.main')

@section('main')
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
                
@stop()