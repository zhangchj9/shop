@extends('layouts.app')
@section('title', '商品列表')
@section('content')
<div class="space-custom"></div>
<!-- 面包屑导航 start -->
<div class="breadcrumb-area">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="index"><i class="fa fa-home"></i></a></li>
      
      <li class="active">商品</li>
    </ol>
  </div>
</div>
<!-- 面包屑导航 end -->
<!-- shop-area start -->
<div class="shop-area">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-4">
        <div class="column">
          <h2 class="title-block">分类</h2>
          <div class="sidebar-widget">
            <h3 class="sidebar-title">品牌</h3>
            <ul class="sidebar-menu">
              <li><a href="#">A </a></li>
              <li><a href="#">B </a></li>
            </ul>
          </div>
          <div class="sidebar-widget">
            <h3 class="sidebar-title">运行内存</h3>
            <ul class="sidebar-menu">
              <li><a href="#">2GB以下 </a></li>
              <li><a href="#">2GB </a></li>
              <li><a href="#">3GB </a></li>
              <li><a href="#">4GB </a></li>
              <li><a href="#">6GB </a></li>
              <li><a href="#">8GB </a></li>
            </ul>
          </div>
          <div class="sidebar-widget">
            <h3 class="sidebar-title">机身内存</h3>
            <ul class="sidebar-menu">
              <li><a href="#">8GB以下 </a></li>
              <li><a href="#">16GB </a></li>
              <li><a href="#">32GB </a></li>
              <li><a href="#">64GB </a></li>
              <li><a href="#">128GB </a></li>
              <li><a href="#">256GB </a></li>
              <li><a href="#">512GB及以上 </a></li>
            </ul>
          </div>
          <div class="sidebar-widget">
            <h3 class="sidebar-title">价格</h3>
            <div class="price-filter">
              <p>
                <label for="amount">Range:</label>
                <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
              </p>
              <div id="slider-range"></div>
            </div>
          </div>
          <div class="sidebar-widget">
            <h3 class="sidebar-title">CPU核数</h3>
            <ul class="sidebar-menu">
              <li><a href="#">单核 </a></li>
              <li><a href="#">双核 </a></li>
              <li><a href="#">四核 </a></li>
              <li><a href="#">八核 </a></li>
              <li><a href="#">十核 </a></li>
              <li><a href="#">其他 </a></li>
            </ul>
          </div>
          <div class="sidebar-widget">
            <h3 class="sidebar-title">分辨率</h3>
            <ul class="sidebar-menu">
              <li><a href="#">高清HD </a></li>
              <li><a href="#">全高清FHD </a></li>
              <li><a href="#">超高清UHD </a></li>
              <li><a href="#">标清SD </a></li>
              <li><a href="#">其他 </a></li>
            </ul>
          </div>
          <div class="sidebar-widget">
            <h3 class="sidebar-title">屏幕尺寸</h3>
            <ul class="sidebar-menu">
              <li><a href="#">8GB以下 </a></li>
              <li><a href="#">16GB </a></li>
              <li><a href="#">32GB </a></li>
              <li><a href="#">64GB </a></li>
              <li><a href="#">128GB </a></li>
              <li><a href="#">256GB </a></li>
              <li><a href="#">512GB及以上 </a></li>
            </ul>
          </div>
          <div class="sidebar-widget">
            <h3 class="sidebar-title">系统</h3>
            <ul class="sidebar-menu">
              <li><a href="#">   Casual  </a></li>
              <li><a href="#"> Dressy  </a></li>
              <li><a href="#"> Girly  </a></li>
            </ul>
          </div>
          <div class="sidebar-widget">
            <h3 class="sidebar-title">像素</h3>
            <ul class="sidebar-menu">
              <li><a href="#">Colorful Dress <span>(2)</span></a></li>
              <li><a href="#">Maxi Dress <span>(4)</span></a></li>
              <li><a href="#">Midi Dress <span>(4)</span></a></li>
              <li><a href="#">Short Dress <span>(3)</span></a></li>
              <li><a href="#">Short Sleeve <span>(2)</span></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-9 col-sm-8">
        <h2 class="page-heading mt-40">
        <span class="cat-name">全部结果</span>
        <?php
        $counts = 0;
        foreach($products as $product)
        $counts += 1;
        ?>
        <span class="heading-counter">There are {{ $counts }} products.</span>
        </h2>
        <div class="shop-page-bar">
          <div>
            <div class="shop-bar">
              <!-- Nav tabs -->
              
              <div class="selector-field ml-20 hidden-xs">
                <form action="{{ route('products.index') }}" class="form-inline search-form">
                  <label>排序</label>
                  <select name="order">
                    <option value="">排序方式</option>
                    <option value="price_asc">价格从低到高</option>
                    <option value="price_desc">价格从高到低</option>
                    <option value="sold_count_desc">销量从高到低</option>
                    <option value="sold_count_asc">销量从低到高</option>
                    <option value="rating_desc">评价从高到低</option>
                    <option value="rating_asc">评价从低到高</option>
                  </select>
                  
                  
                  <div class="f-right">
                    <label>搜索</label>
                    <input type="text" class="form-control input-xs" name="search" placeholder="Search" />
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <button class="button-search"></button>
                  </div>
                  <!-- </div>  -->
                  
                </form>
              </div>
              
            </div>
            <!-- Tab panes -->
            
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="home">
                <div class="row products-list">
                  @foreach($products as $product)
                  <div class="col-md-4 col-sm-6">
                    <div class="product-wrapper mb-40">
                      <div class="product-img">
                        <a href="{{ route('products.show', ['product' => $product->id]) }}">
                          <img src="{{ $product->image_url }}" alt="">
                        </a>
                        <!-- <span class="new-label">New</span> -->
                        <!-- <div class="product-action">
                          <a href="#"><i class="pe-7s-cart"></i></a>
                          <a href="#"><i class="pe-7s-like"></i></a>
                          <a href="#"><i class="pe-7s-folder"></i></a>
                          <a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
                        </div> -->
                      </div>
                      <div class="product-content">
                        <div class="pro-title">
                          <h3><a href="{{ route('products.show', ['product' => $product->id]) }}">{{ $product->title }}</a></h3>
                        </div>
                        <div class="price-reviews">
                          <div class="price-box">
                            <span class="price product-price"><b>￥</b>{{ $product->price }}</span>
                            <!-- <span class="old-price product-price"><b>￥</b>{{ $product->price }}</span> -->
                          </div>
                          <div class="pro-rating">
                            销量 <span>{{ $product->sold_count }}笔</span>
                            &nbsp;&nbsp;&nbsp;
                            评价 <span>{{ $product->review_count }}条</span>
                            <!-- <a href="#"><i class="fa fa-star-o"></i></a>
                            <a href="#"><i class="fa fa-star-o"></i></a>
                            <a href="#"><i class="fa fa-star-o"></i></a>
                            <a href="#"><i class="fa fa-star-o"></i></a> -->
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                  
                  
                </div>
                <div class="pull-right">{{ $products->appends($filters)->render() }}</div>
              </div>
              
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- shop-area end -->
<!-- brand-area start -->
<!-- brand-area end -->
<!-- service-area start -->
@endsection
@section('scriptsAfterJs')
<script>
var filters = {!! json_encode($filters) !!};
$(document).ready(function () {
$('.search-form input[name=search]').val(filters.search);
$('.search-form select[name=order]').val(filters.order);
$('.search-form select[name=order]').on('change', function() {
$('.search-form').submit();
});
})
</script>
@endsection