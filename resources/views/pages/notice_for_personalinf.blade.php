@extends('layouts.app')
@section('title', 'notice')

@section('content')
<div class="space-custom"></div>
<div class="breadcrumb-area">
		<div class="container">
			<ol class="breadcrumb">
                <li><a href="{{route('root')}}"><i class="fa fa-home"></i></a></li>
                <!-- <li><a href="#">Shop</a></li> -->
                <li class="active">notice</li>
			</ol>			
		</div>
</div>  
<!-- <br><br><br>
<div class="panel panel-default">
    <div class="panel-heading">操作成功</div>
    <div class="panel-body text-center">
        <h1>{{ $msg }}</h1>
        <a class="btn btn-primary" href="{{ route('root') }}"><font size=4>返回首页</font></a>
    </div>
</div>
<br><br><br> -->
<br><br><br><br><br>
<div  class="user-login pb-60">
		<div class="container">
			<div class="row">
				<div class="centered-title text-center">
                    <h2>{{ $msg }}!</h2>
                    <br><br><br><br><br>
                    
                    <!-- <h2>{{ $msg }}</h2> -->
                    
					<a class="btn btn-primary" href="{{ route('personalinf.index') }}">返回</a>
                </div> 
            </div>
        </div>
</div>
<br><br><br><br><br><br>
@endsection
