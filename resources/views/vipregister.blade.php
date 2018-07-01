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
				<div class="col-md-15 col-sm-15 col-md-offset-1 col-sm-offset-3">
					<form action="www.baidu.com" method="post" class="login-form">
						<p class="form">
							<label for="type1">三个月</label>
							<input type="radio" value="1" name="typeoftime" id="type1" style="height:15px;width:20px">
						</p>
						<br><br><br>
						<p class="form">
							<label for="type2">六个月</label>
							<input type="radio" value="2" name="typeoftime"id="type2" style="height:15px;width:20px">
						</p>
						<br><br><br>
						<p class="form">
							<label for="type3">一年</label>
							<input type="radio" value="3" name="typeoftime"id="type3" style="height:15px;width:20px"checked>
						</p>
						<br><br><br><br>
						<div class="centered-title text-center">
						<p class="form-row ">
							<button type="submit" class="btn btn-primary">
							保存
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