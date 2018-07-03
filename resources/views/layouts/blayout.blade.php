<!doctype html>
<html lang="en">
<html xmlns:wb="http://open.weibo.com/wb">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')@if(request()->path() !== '/') - {{ $config['WEB_TITLE'] }} @endif</title>
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="description" content="@yield('description')" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="author" content="BLMYX01, 740292626@qq.com">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="shortcut icon" type="/image/x-icon" href="/images/favicon.ico">
    <!-- All css files are included here. -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::asset('css/core.css')}}"> {{--关系到左侧栏能否有条理地显示出来，以及一些图标的显示--}}
    <link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}"> {{--和页面的背景颜色相关--}}
    <link rel="stylesheet" href="{{URL::asset('css/buttons.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/shortcode/shortcodes.css')}}"> {{-- 这个玩意加载后会让网页的header和footer加载出来--}}
    <link rel="stylesheet" href="{{URL::asset('css/blog/style.css')}}"> {{--这个玩意挺重要，否则让content部分和header拼起来--}}
    <link rel="stylesheet" href="{{URL::asset('css/responsive.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/custom.css')}}">
    @yield('css')


</head>

<body>

    <header class="header-pos blg">
        @include('layouts._header')
    </header>

    

<div id="b-content" class="blog-area">
    @yield('content')      
</div>
<!-- 主体部分结束 -->

@include('layouts._footer')

<div class="modal fade" id="productModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
            </div>
            <div class="modal-body">
                <div class="modal-img">
                    <a href="shop.html"><img src="/images/product/1.jpg" alt="" /></a>
                </div>
                <div class="modal-pro-content">
                    <h3><a href="single-product.html">Phasellus Vel Hendrerit</a></h3>
                    <div class="pro-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <span>(2 customer reviews)</span>
                    <div class="price">
                        <span>$70.00</span>
                        <span class="old">$80.11</span>
                    </div>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet.</p>    
                    <form action="#">
                        <input type="number" value="1" />
                        <button>Add to cart</button>
                    </form>
                    <div class="product_meta">
                        <span class="posted_in">Categories: <a rel="tag" href="#">Albums</a>, <a rel="tag" href="#">Music</a></span> <span class="tagged_as">Tags: <a rel="tag" href="#">Albums</a>, <a rel="tag" href="#">Music</a></span> 
                    </div>
                    <div class="social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


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

    <!-- 百度统计开始 -->
    {!! htmlspecialchars_decode($config['WEB_STATISTICS']) !!}
    <!-- 百度统计结束 -->
    
    
{{-- 相应的css和js都不能丢，否则会没反应 --}}
<script src="{{ mix('js/app.js') }}"></script>
<script src="{{URL::asset('js/vendor/jquery-1.12.0.min.js')}}"></script>
<script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
<script src="{{URL::asset('js/ajax-mail.js')}}"></script>
<script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
<script src="{{URL::asset('js/jquery-ui.min.js')}}"></script>
<script src="{{URL::asset('js/jquery.nivo.slider.pack.js')}}"></script>
<script src="{{URL::asset('js/plugins.js')}}"></script>
<script src="{{URL::asset('js/main.js')}}"></script>
<script src="{{URL::asset('js/vendor/modernizr-2.8.3.min.js')}}"></script>
<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
@yield('js')
</body>
</html>
