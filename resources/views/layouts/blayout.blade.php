<!doctype html>
<html lang="en">
<html xmlns:wb="http://open.weibo.com/wb">
<head>
    <meta charset="UTF-8">
    <link rel="logo" href="favicon.ico">
    <title>@yield('title')@if(request()->path() !== '/') - {{ $config['WEB_TITLE'] }} @endif</title>
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="description" content="@yield('description')" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="author" content="BLMYX01, 740292626@qq.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- All css files are included here. -->
    <!-- Bootstrap framework main css -->
    <link href="{{ mix('css/app_blog.css') }}" rel="stylesheet">
    <link href="{{ mix('css/admin_blog.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{URL::asset('css/core.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="{{URL::asset('css/buttons.css')}}">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="{{URL::asset('css/shortcode/shortcodes.css')}}">
    <!-- Theme main style -->
    <link rel="stylesheet" href="{{URL::asset('css/blog_css/style.css')}}">
    <!-- Responsive css -->
    <link rel="stylesheet" href="{{URL::asset('css/responsive.css')}}">
    <!-- User style -->
    <link rel="stylesheet" href="{{URL::asset('css/custom.css')}}">
    <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
    <script src="{{URL::asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
    @yield('css')


</head>

<body>

    <header class="header-pos blg">
        @include('layouts._header')
    </header>

    

<div id="b-content" class="container">
    <div class="row">
        @yield('content')      
    <div class="row">
</div>
<!-- 主体部分结束 -->

@include('layouts._footer')


{{-- <!-- 登录模态框开始 -->
<div class="modal fade" id="b-modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content row">
                <div class="col-xs-12 col-md-12 col-lg-12">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title b-ta-center" id="myModalLabel">无需注册，用以下帐号即可直接登录</h4>
                    </div>
                </div>
                <div class="col-xs-12 col-md-12 col-lg-12 b-login-row">
                    <ul class="row">
                        <li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
                            <a href="{{ url('auth/oauth/redirectToProvider/qq') }}"><img src="{{ asset('images/home/qq-login.png') }}" alt="QQ登录" title="QQ登录"></a>
                        </li>
                        <li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
                            <a href="{{ url('auth/oauth/redirectToProvider/weibo') }}"><img src="{{ asset('images/home/sina-login.png') }}" alt="微博登录" title="微博登录"></a>
                        </li>
                        <!--
                        <li class="col-xs-6 col-md-4 col-lg-4 b-login-img">
                            <a href="{{ url('auth/oauth/redirectToProvider/github') }}"><img src="{{ asset('images/home/github-login.jpg') }}" alt="github登录" title="github登录"></a>
                        </li>
                        -- >
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- 登录模态框结束 --> --}}

{{-- 相应的css和js都不能丢，否则会没反应 --}}
<script src="{{URL::asset('js/blog/index.js')}}"></script>
<script src="{{URL::asset('js/blog/comment.js')}}"></script>

<script src="{{ mix('js/blog/app.js') }}"></script>
<script src="{{ mix('js/blog/admin.js') }}"></script> 
<!-- 百度统计开始 -->
{!! htmlspecialchars_decode($config['WEB_STATISTICS']) !!}
<!-- 百度统计结束 -->
<!-- jquery latest version -->
<script src="{{URL::asset('js/vendor/jquery-1.12.0.min.js')}}"></script>
<!-- Bootstrap framework js -->
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<!-- ajax-mail js -->
<script src="{{URL::asset('js/ajax-mail.js')}}"></script>
<!-- owl.carousel js -->
<script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
<!-- owl.carousel js -->
<script src="{{URL::asset('js/jquery-ui.min.js')}}"></script>
<!-- jquery.nivo.slider js -->
<script src="{{URL::asset('js/jquery.nivo.slider.pack.js')}}"></script>
<!-- All js plugins included in this file. -->
<script src="{{URL::asset('js/plugins.js')}}"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="{{URL::asset('js/main.js')}}"></script>


@yield('js')
</body>
</html>
