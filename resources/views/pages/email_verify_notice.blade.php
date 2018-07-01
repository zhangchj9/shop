@extends('layouts.app')
@section('title', '提示')

@section('content')
<div class="space-custom"></div>
<div class="breadcrumb-area">
		<div class="container">
			<ol class="breadcrumb">
                <li><a href="{{route('root')}}"><i class="fa fa-home"></i></a></li>
                <!-- <li><a href="#">Shop</a></li> -->
                <li class="active">email_notice</li>
			</ol>			
		</div>
</div>  
<!-- <div class="panel panel-default">
    <div class="panel-heading">提示</div>
    <div class="panel-body text-center">
        <h1>请先验证邮箱</h1>
        <a class="btn btn-primary" href="{{ route('email_verification.send') }}">重新发送验证邮件</a>
    </div>
</div> --> 
<!-- <br><br><br><br>
<div class="panel panel-default">
    <div class="panel-heading">提示</div>
    <div class="panel-body text-center">
        <h1>请先验证邮箱</h1>
        <a class="btn btn-primary" href="{{ route('email_verification.send') }}">重新发送验证邮件</a>
    </div>
</div>
<br><br><br><br><br><br><br><br><br><br> -->
<br><br><br><br><br>
<div  class="user-login pb-60">
		<div class="container">
			<div class="row">
				<div class="centered-title text-center">
                    <h2>请先验证邮箱！</h2>
                    <br><br><br><br><br>
                    <!-- <div class="clear"></div>
                    <font size="5" color="#303030">请先验证邮箱</font> -->
                    
					<a class="btn btn-primary" href="{{route('email_verification.send') }}">重新发送验证邮件</a>
                </div> 
            </div>
        </div>
</div>
<br><br><br>
@endsection