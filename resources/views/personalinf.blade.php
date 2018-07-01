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
                        <form action="{{ route('personalinf.uploads') }}" method="post" class="login-form"enctype="multipart/form-data>
                        {{csrf_field()}}
                            <div>
                            <p class="form">
                                <label for="userlabel" class="inline"><font size="4">用户名</font></label>
                                <input type="text" value="{{Auth::user()->name}}" name="newname" id="userlabel" style="height:40px;width:250px">
                            </p>
                            </div>
                            <div>
                            <p class="form">
                                <label for="tx"><font size="4">头像</font></label>
                                <input type="file" name="newavatar" id="tx" >
                            </p>
                            </div>
                            <div>
                            <p class="form-row">
                                <font size="4">会员状态：</font>
                                 @if(Auth::user()->isvip)
                                 <font size="4">时间到期</font>
                                    <a href="{{route('vipregister')}}">
                                        <button><font size="4">续费</font></button>
                                    </a>
                                 
                                 @else
                                    <font size="4">否</font>
                                    <a href="{{route('vipregister')}}">
                                        <button><font size="4">开通</font></button>
                                    </a>
                                @endif
                            </p>
                            </div>
                            <div>
                            <p class="form-row ">
                                 <font size="4">邮箱地址:{{Auth::user()->email}}</font>
                            </p>
                            </div>
                            <div class="centered-title text-center">
                            <p class="form-row ">
								<button type="submit" class="btn btn-primary">
                                保存
                           	    </button>
                            </p>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection