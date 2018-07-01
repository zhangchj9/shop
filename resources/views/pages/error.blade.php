@extends('layouts.app')
@section('title', '错误')

@section('content')
<div class="space-custom"></div>
<div class="breadcrumb-area">
		<div class="container">
			<ol class="breadcrumb">
                <li><a href="{{route('root')}}"><i class="fa fa-home"></i></a></li>
                <!-- <li><a href="#">Shop</a></li> -->
                <li class="active">error</li>
			</ol>			
		</div>
</div>  
<!-- <div class="panel panel-default">
    <div class="panel-heading">错误</div>
    <div class="panel-body text-center">
        <h1>{{ $msg }}</h1>
        <a class="btn btn-primary" href="{{ route('root') }}">返回首页</a>
    </div>
</div> -->
<br><br><br><br><br>
<div  class="user-login pb-60">
		<div class="container">
			<div class="row">
				<div class="centered-title text-center">
                    <h2>{{ $msg }}!</h2>
                    
                    <div class="clear"></div>
                    <!-- <h2>{{ $msg }}</h2> -->
                    <br><br><br><br><br>
					<a class="btn btn-primary" href="{{ route('root') }}">返回首页</a>
                </div> 
            </div>
        </div>
</div>
<br><br><br><br><br>
@endsection
