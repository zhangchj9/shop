@extends('layouts.app')
@section('title', '提示')

@section('content')
<div class="space-custom"></div>
<div class="breadcrumb-area">
		<div class="container">
			<ol class="breadcrumb">
                <li><a href="{{route('root')}}"><i class="fa fa-home"></i></a></li>
                <!-- <li><a href="#">Shop</a></li> -->
                <li class="active">Personalinf</li>
			</ol>			
		</div>
</div>  

<div  class="user-login pb-60">
		<div class="container">
			<div class="row">
				<div class="clear"></div>
				<div class="col-md-10 col-sm-10 col-md-offset-1 col-sm-offset-3">
                        <form action="{{ route('personalinf.uploads') }}" name="ooo"method="post" class="login-form" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <hr>
                            <div>
                            <p class="form">
                                <label for="userlabel" class="inline"><font size="4">用户名</font></label>
                                <input type="text" value="{{Auth::user()->name}}" name="newname" id="userlabel" style="height:30px;width:250px">
                            </p>
                            </div>
                            <br><br>
                            <div>
                            <p class="form">
                                <label for="tx" class="inline"><font size="4">头像</font></label>
                                <br>
                                <input type="file" name="newavatar" data-maxid="tx" onclick="checkfile()" style="height:30px;width:500px" >
                                <br><br>
                                <img src="{{ URL::asset(Auth::user()->avatar) }}" class="img-responsive img-circle" width="100px" height="100px">
                            </p>
                            </div>
                            <br><br>
                            <div>
                            <p class="form-row">
                                <font size="4">会员状态：</font>
                                 @if(Auth::user()->isvip)
                                 <font size="4">时间到期</font>
                                    <a href="{{ route('vipregister') }}">
                                        <!-- <button onclick="renew()"><font size="4">续费</font></button> -->
                                        <button type="button"><font size="4">续费</font></button>
                                    </a>
                                 
                                 @else
                                    <font size="4">否</font>&nbsp&nbsp
                                    <!-- <p class="lost_password"> -->
                                    <a href="{{ route('vipregister') }}">
                                    <button type="button"><font size="4">开通</font></button>
                                    <!-- <input onclick="http://178.62.122.111/vipregister" type="button" value='链接'> -->
                                    <!-- <button onclick="register()" ><font size="4">开通</font></button> -->
                                    </a>
                                    <!-- </p> -->
                                @endif
                            </p>
                            </div>
                            <br><br>
                            <div>
                            <p class="form-row ">
                                 <font size="4">邮箱地址:{{Auth::user()->email}}</font>
                            </p>
                            </div>
                            <div class="centered-title text-center">
                            <p class="form-row ">
								<!-- <button class="btn btn-primary" onclick="save()"> -->
                                <button class="btn btn-primary" type="submit">
                                保存
                           	    </button>
                            </p>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <script >
function register(){
    document.ooo.action="{{ route('vipregister') }}";
    document.ooo.submit();
}
function save(){
    document.ooo.action="{{ route('personalinf.uploads') }}";
    document.ooo.submit();
}
function renew(){
    document.ooo.action="{{ route('vipregister') }}";
    document.ooo.submit();
</script> -->
@endsection