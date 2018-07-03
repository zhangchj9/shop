@extends('layouts.app')
@section('title', '提示')

@section('content')
<div class="space-custom"></div>
<div class="breadcrumb-area">
		<div class="container">
			<ol class="breadcrumb">
                <li><a href="{{route('root')}}"><i class="fa fa-home"></i></a></li>
                <!-- <li><a href="#">Shop</a></li> -->
                <li class="active">VIPregister</li>
			</ol>			
		</div>
</div> 
<div  class="user-login pb-60">
		<div class="container">
			<div class="row">
				<div class="centered-title text-center">
					<h3>成为Hand Chicken尊贵的VIP会员</h3>
					<div class="clear"></div>
					<br>
					<em><font size="4">你将获得更多尊享权益</font></em>
				</div> 
				<div class="clear"></div>
				<div class="col-md-8 col-sm- col-md-offset-2 col-sm-offset-3">
					<form action="www.baidu.com" method="post" class="login-form">
						<p class="form">
							<input type="radio" value="1" name="typeoftime" id="type1" style="height:15px;width:20px">
							<label for="type1">三个月444元，平均每月148元</label>
						</p>
						<br><br><br>
						<p class="form">
							<input type="radio" value="2" name="typeoftime"id="type2" style="height:15px;width:20px">
							<label for="type2">六个月666元，平均每月只需111元</label>
						</p>
						<br><br><br>
						<p class="form">
							<input type="radio" value="3" name="typeoftime"id="type3" style="height:15px;width:20px"checked>
							<label for="type3">一年999元，平均每月83.25元</label>
						</p>
						<br><br><br><br>
						<div class="centered-title text-center">
						<p class="form-row ">
							<button type="submit" class="btn btn-primary">
							确认
							</button>
						</p>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection