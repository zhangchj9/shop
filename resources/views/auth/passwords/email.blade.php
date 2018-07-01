@extends('layouts.app')
@section('title', 'Email')
@section('content')
{{--<div class="container">--}}
<div class="space-custom"></div>
<!-- breadcrumb start -->
<div class="breadcrumb-area">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{route('root')}}"><i class="fa fa-home"></i></a></li>
            <!-- <li><a href="#">Shop</a></li> -->
            <li class="active">Reset</li>
        </ol>
    </div>
</div>

    <div  class="user-login pb-60">
        <div class="container">
            <div class="row">
                <div class="centered-title text-center mb-40">
                    <h2>Reset <span class="light-font">Password</span></h2>
                    <div class="clear"></div>
                    <em>我们会将密码重置链接发送至您的邮箱，请注意查收</em>
                </div>
                <div class="clear"></div>
                    <div class="col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Send Password Reset Link
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
