@extends('layouts.app')
@section('title', '提示')

@section('content')
<div class="space-custom"></div>
<div class="breadcrumb-area">
		<div class="container">
			<ol class="breadcrumb">
                <li><a href="{{route('root')}}"><i class="fa fa-home"></i></a></li>
                <!-- <li><a href="#">Shop</a></li> -->
                <li class="active">VIPnotice</li>
			</ol>			
		</div>
</div>  
<div  class="user-login pb-60">
	<div class="container">
		<div class="row">
			<div class="centered-title text-center">
                <br><br><br><br>
                <h2>提示</h2>
                <br><br><br>
                <h6>您还不是VIP，不能进入该区域!</h6>
                <br><br><br>
                <em><font size="5" color="#FFD700">VIP会员享有购物返现、优惠券赠送、VIP商品尊享等权益，只需60元每月哦!</font></em>
                
                <br><br><br>
                <div class="clear"></div>
                <a class="btn btn-primary" href="{{ route('vipregister') }}">前去注册</a>
                <a class="btn btn-primary" href="javascript:history.back();">返回上一页</a>
            </div>
        </div>
    </div>
</div>
@endsection