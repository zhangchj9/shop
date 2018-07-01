
@extends('layouts.app')
@section('title', 'Login')
@section('content')
<div class="space-custom"></div>
<div class="breadcrumb-area">
		<div class="container">
			<ol class="breadcrumb">
                <li><a href="{{route('root')}}"><i class="fa fa-home"></i></a></li>
                <!-- <li><a href="#">Shop</a></li> -->
                <li class="active">Login</li>
			</ol>			
		</div>
</div>  
	<div  class="user-login pb-60">
		<div class="container">
			<div class="row">
				<div class="centered-title text-center">
					<h2>Login</h2>
					<div class="clear"></div>
					<em>We have any phone you want</em>
				</div> 
				<div class="clear"></div>
				<div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3">
						<form action="{{ route('login') }}" method="post" class="login-form">
							{{ csrf_field() }}
							<p class="form-row pd-right">
								<label for="email">Email address <span class="required">*</span></label>
								<input type="email" name="email" id="email" class="form-controller" value="{{ old('email') }}" required autofocus>
								@if ($errors->has('email'))
									<span class="help-block">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
								@endif
							</p>
							<p class="form-row pd-left">
								<label for="password">Password <span class="required">*</span></label>
								<input type="password" name="password" id="password" class="form-controller" required>
								@if ($errors->has('password'))
									<span class="help-block">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
								@endif
							</p>

                            <p class="form-inline">
                                    <div class="form-group">
                                        <label for="code">CODE<span class="required">*</span></label>
                                        <input type="text" id="code" class="form-control {{$errors->has('captcha')?'parsley-error':''}}" autocomplete="off" name="captcha" placeholder="验证码">
                                    </div>
                                    <div class="form-group" >
                                        <img src="{{captcha_src()}}" style="cursor: pointer" onclick="this.src='{{captcha_src()}}'+Math.random()">
                                        @if($errors->has('captcha'))
                                            <span class="help-block">
                                                 <strong>{{$errors->first('captcha')}}</strong>
                                            </span>
                                        @endif
                                    </div>
                            </p>
							<!-- {!! Geetest::render() !!} -->
							<p class="form-row ">
								<!-- <input type="submit" value="Login" name="login" class="theme-button marL0"> -->
								<button type="submit" class="btn btn-primary">
                                Log in
                           	    </button>
								<label class="inline" for="rememberme">
									<input type="checkbox" value="forever" id="rememberme" name="remember"{{ old('remember') ? 'checked' : '' }} >Remember me
								</label>
							</p>
							<p class="lost_password">
								<!-- <a href="{{ route('password.request') }}">Lost your password?</a> -->
								<a href="{{ route('password.request') }}">Lost your password?</a>
							</p>
							<p class="Register_now">
								<a href="{{ route('register') }}">Do not have an account? Register now!</a>
							</p>
						</form>
					</div>
				</div>
				<!-- /.col-md-6 -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container -->

@endsection
