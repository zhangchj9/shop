<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'HandChicken')</title>
    
    <link rel="shortcut icon" type="/image/x-icon" href="/images/favicon.ico">
    
    <!-- All css files are included here. -->
    <!-- Bootstrap framework main css -->

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="/css/buttons.css">
    <!-- This core.css file contents all plugings css file. -->
    
    <link rel="stylesheet" href="/css/core.css">
    <!-- Theme shortcodes/elements style -->
    
    <link rel="stylesheet" href="/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    
    <link rel="stylesheet" href="/style.css">
    <!-- Responsive css -->
    
    <link rel="stylesheet" href="/css/responsive.css">
    <!-- User style -->
    
    <link rel="stylesheet" href="/css/custom.css">
    
    
    <!-- Modernizr JS -->
    <!-- <script src="vue.js"></script> -->
    <!-- <script src="/js/app.js"></script> -->
    <!-- <script src="{{ mix('js/app.js') }}"></script> -->
    <!-- <script src="/app.js"></script> -->
    
    <script src="/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- <script src="{{ mix('js/app.js') }}"></script> -->
    <!-- 样式 -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app" class="{{ route_class() }}-page">
        @include('layouts._header')
        <div class="container">
            @yield('content')
        </div>
        <br>
        @include('layouts._footer')
    </div>
    <!-- JS 脚本 -->
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
<script src="/js/vendor/jquery-1.12.0.min.js"></script>

    
<!-- Bootstrap framework js -->
<!-- <script src="js/app.js"></script> -->
<script src="/js/bootstrap.min.js"></script>

<!-- ajax-mail js -->
<script src="/js/ajax-mail.js"></script>

<!-- owl.carousel js -->
<script src="/js/owl.carousel.min.js"></script>

<!-- owl.carousel js -->
<script src="/js/jquery-ui.min.js"></script>

<!-- jquery.nivo.slider js -->

<script src="/js/jquery.nivo.slider.pack.js"></script>

<!-- All js plugins included in this file. -->
<script src="/js/plugins.js"></script>

<!-- Main js file that contents all jQuery plugins activation. -->
<script src="/js/main.js"></script>
<!-- <script src="{{ mix('js/app.js') }}"></script> -->

<!-- <script src="/js/app.js"></script> -->
<script src="{{ mix('js/app.js') }}"></script>
    @yield('scriptsAfterJs')
</body>
</html>