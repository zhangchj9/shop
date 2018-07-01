@extends('layouts.app')
@section('title', 'VIP')

@section('content')
<div class="space-custom"></div>
<div class="breadcrumb-area">
		<div class="container">
			<ol class="breadcrumb">
                <li><a href="{{route('root')}}"><i class="fa fa-home"></i></a></li>
                <!-- <li><a href="#">Shop</a></li> -->
                <li class="active">VIP</li>
			</ol>			
		</div>
</div>  
<div  class="user-login pb-60">
	<div class="container">
		<div class="row">
			<div class="centered-title text-center">
                <br><br><br><br>
                <h2>VIP</h2>
                <br><br><br>
                <h6>这是VIP区域</h6>
                <br><br><br>
                
                <br><br><br>
                <div class="clear"></div>
            </div>
        </div>
    </div>
</div>
@endsection