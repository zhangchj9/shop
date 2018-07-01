
@extends('layouts.app')
@section('title', 'Register')
@section('content')
	<div class="space-custom"></div>
	<!-- breadcrumb start -->
	<div class="breadcrumb-area">
		<div class="container">
			<ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i></a></li>
                <!-- <li><a href="#">Shop</a></li> -->
                <li class="active">Register</li>
			</ol>			
		</div>
	</div>
	<!-- breadcrumb end -->
	<!-- login-area start -->
	<div  class="user-login pb-60">
	<!-- <div class="login-area mb-50"> -->
        <div class="container">
            <div class="row">
                <div class="centered-title text-center mb-40">
                    <h2>Sign <span class="light-font">Up</span></h2>
                    <div class="clear"></div>
                    <em>register and get your account</em>
                </div>
				<style type="text/css">
					input::-webkit-input-placeholder{ /*WebKit browsers*/
					/* color: orange; */
					font-size: 13px;
					}
					input::-moz-input-placeholder{ /*Mozilla Firefox*/
					/* color: orange; */
					font-size: 13px;
					}
					input::-ms-input-placeholder{ /*Internet Explorer*/ 
					/* color: orange; */
					font-size: 13px;
					}
				</style>
                <div class="clear"></div>
                <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                    <div class="billing-fields row">
						<form action="{{route('zhanshi')}}" name="zhanshi" method="post" class="login-form">
							{{ csrf_field() }}
                            <!--<p class="form-row col-sm-6">
                                <label for="billing_first_name">First Name<abbr title="required" class="required">*</abbr></label>
                                <input type="text" name="billing_first_name" id="billing_first_name" class="form-controller">
                            </p>-->
                            <p class="form-row col-sm-10">
                                <label for="labelname"><strong><i>Username</i></strong><abbr title="required" class="required"></abbr></label>
								<input type="text" name="name" id="labelname" placeholder="用户名"class="form-controller" value="{{ old('name') }}" required autofocus>
								@if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </p>
                            <!--<p class="form-row col-sm-12">
                                <label for="billing_company">Company Name</label>
                                <input type="text" name="billing_company" id="billing_company" class="form-controller">
                            </p>-->
                            <p class="form-row col-sm-10">		
                                <label for="labelemail"><strong><i>Email Address</i></strong><abbr title="required" class="required"></abbr></label>
								<input type="text" name="email" id="labelemail"  placeholder="请填写正确的邮箱地址，注册成功后会发送激活邮件" class="form-controller" value="{{ old('email') }}" required>
								@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </p>
                            <p class="col-sm-10">
                                <label class="" for="account_password"><strong><i>Account password</i></strong><abbr title="required" class="required"></abbr></label>
								<input type="password" value="" placeholder="密码不能少于六位" id="account_password" name="password" class="form-controller" required>
								@if ($errors->has('password'))
									<span class="help-block">
										<strong>{{ $errors->first('password') }}</strong>
									</span>
								@endif
                            </p>
                            <p class="col-sm-10" >
                                <label class="" for="confirm_password"><strong><i>Confirm password</i></strong><abbr title="required" class="required"></abbr></label>
                                <input type="password" value="" placeholder="确认密码" id="confirm_password" name="password_confirmation" class="form-controller" required>
                            </p>
							<!--<p class="col-sm-12">
                                <input type="checkbox" value="forever" id="rememberme" name="rememberme">
                                <label class="inline" for="rememberme">I agree <a href="#">Terms & Condition</a></label>
                            </p>-->
                            <p class="col-sm-10">
                            <button type="submit" class="btn btn-primary">
                                dd($request)
                            </button>
                            </p>
						</form>
					</div>
                </div>
                <!-- /.col-md-6 -->
                <div class="col-md-6 marTB30"></div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>			
	</div>
@endsection

    <!-- jquery latest version -->
    <!-- <script src="js/vendor/jquery-1.12.0.min.js"></script> -->
    <!-- Bootstrap framework js -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <!-- ajax-mail js -->
    <!-- <script src="js/ajax-mail.js"></script> -->
    <!-- owl.carousel js -->
    <!-- <script src="js/owl.carousel.min.js"></script> -->
    <!-- owl.carousel js -->
    <!-- <script src="js/jquery-ui.min.js"></script> -->
    <!-- jquery.nivo.slider js -->
    <!-- <script src="js/jquery.nivo.slider.pack.js"></script> -->
    <!-- All js plugins included in this file. -->
    <!-- <script src="js/plugins.js"></script> -->
    <!-- Main js file that contents all jQuery plugins activation. -->
    <!-- <script src="js/main.js"></script> -->
<!-- </body> -->

<!-- </html> -->