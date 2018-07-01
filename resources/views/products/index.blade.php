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
<form action="{{ route('products.index') }}" class="form-inline search-form">
<div class="shop-area">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-4">
        <div class="column">
          <h2 class="title-block">分类<button name="classify" class="button button-box button-tiny f-right"><i class="fa fa-plus"></i></button></h2>
          <div class="sidebar-widget">            
            <h3 class="sidebar-title">品牌</h3>            
            <select name="brand">
                    <option value="">全部</option>
                    <option value="Apple">Apple</option>
                    <option value="OPPO">OPPO</option>
                    <option value="HUAWEI">HUAWEI</option>
                    <option value="VIVO">VIVO</option>
                    <option value="SAMSUNG">SAMSUNG</option>
                    <option value="MEIZU">MEIZU</option>
                    <option value="MI">MI</option>
                    <option value="SONY">SONY</option>
                    <option value="NOKIA">NOKIA</option>
                    <option value="b_other">其他品牌</option>
                  </select>                       
          </div>
          <div class="sidebar-widget">            
            <h3 class="sidebar-title">运行内存</h3>           
            <select name="memo">
                    <option value="">全部</option>
                    <option value="m_down">2GB以下</option>
                    <option value="内存：2GB">2GB</option>
                    <option value="内存：3GB">3GB</option>
                    <option value="内存：4GB">4GB</option>
                    <option value="内存：6GB">6GB</option>
                    <option value="内存：8GB">8GB</option>
                    <option value="m_up">8GB以上</option>
                  </select>                       
          </div>
          <div class="sidebar-widget">            
            <h3 class="sidebar-title">机身存储</h3>            
            <select name="disk">
                    <option value="">全部</option>
                    <option value="d_down">8GB以下</option>
                    <option value="机身存储：8GB">8GB</option>
                    <option value="机身存储：16GB">16GB</option>
                    <option value="机身存储：32GB">32GB</option>
                    <option value="机身存储：64GB">64GB</option>
                    <option value="机身存储：128GB">128GB</option>
                    <option value="机身存储：256GB">256GB</option>
                    <option value="机身存储：512GB">512GB</option>
                    <option value="d_up">512GB以上</option>
                  </select>                       
          </div>          
          <div class="sidebar-widget">
            <h3 class="sidebar-title">价格区间</h3>
            <input type="number" class="form-control input-xs" name="floor" placeholder="最低价格" />
            <br /><br />
            <input type="number" class="form-control input-xs" name="highest" placeholder="最高价格" />
          </div>
          <div class="sidebar-widget">            
            <h3 class="sidebar-title">CPU核数</h3>            
            <select name="cpu">
                    <option value="">全部</option>
                    <option value="单核">单核</option>
                    <option value="双核">双核</option>
                    <option value="四核">四核</option>
                    <option value="八核">八核</option>
                    <option value="十核">十核</option>
                    <option value="c_other">其他</option>
                  </select>                       
          </div> 
          <div class="sidebar-widget">            
            <h3 class="sidebar-title">屏幕分辨率</h3>            
            <select name="pixel">
              <!-- 录入参数时的格式为（屏幕分辨率：1920×1080(p_lv3)） -->
                    <option value="">全部</option>
                    <option value="p_lv1">标清SD</option>
                    <option value="p_lv2">高清HD</option>
                    <option value="p_lv3">全高清FHD</option>
                    <option value="p_lv4">超高清UHD</option>
                  </select>                       
          </div>
          <div class="sidebar-widget">            
            <h3 class="sidebar-title">屏幕尺寸</h3>            
            <select name="siz">
              <!-- 录入参数时的格式为（屏幕尺寸：5.5英寸(z_lv5)） -->
                    <option value="">全部</option>
                    <option value="z_lv1">4.0英寸以下</option>
                    <option value="z_lv2">4.0-4.4英寸</option>
                    <option value="z_lv3">4.5-4.9英寸</option>
                    <option value="z_lv4">5.0-5.4英寸</option>
                    <option value="z_lv5">5.5-5.9英寸</option>
                    <option value="z_lv6">6.0英寸及以上</option>
                  </select>                       
          </div>
          <div class="sidebar-widget">            
            <h3 class="sidebar-title">操作系统</h3>            
            <select name="sys">
              <!-- 录入其他操作系统数据时的格式为（操作系统：BlackBerryOS(s_other)） -->
                    <option value="">全部</option>
                    <option value="IOS">IOS</option>
                    <option value="Android">Android</option>
                    <option value="s_other">其他</option>
                  </select>                       
          </div>
          <div class="sidebar-widget">            
            <h3 class="sidebar-title">后置摄像头像素</h3>            
            <select name="bpix">
              <!-- 向下取整，如1200万算入1200-2000档。录入数据时的格式为（后置摄像头像素：1200万(b_lv3)） -->
                    <option value="">全部</option>
                    <option value="b_lv1">800万以下</option>
                    <option value="b_lv2">800万-1200万</option>
                    <option value="b_lv3">1200万-2000万</option>
                    <option value="b_lv4">2000万-4000万</option>
                    <option value="b_lv5">4000万以上</option>
                  </select>                       
          </div>
          <div class="sidebar-widget">            
            <h3 class="sidebar-title">前置摄像头像素</h3>            
            <select name="fpix">
              <!-- 向下取整，如1200万算入1200-2000档。录入数据时的格式为（前置摄像头像素：1200万(f_lv4)） -->
                    <option value="">全部</option>
                    <option value="f_lv1">400万以下</option>
                    <option value="f_lv2">400万-800万</option>
                    <option value="f_lv3">800万-1200万</option>
                    <option value="f_lv4">1200万-2000万</option>
                    <option value="f_lv5">2000万以上</option>
                  </select>                       
          </div>
        </div>
      </div>
      <div class="col-md-9 col-sm-8">
        <h2 class="page-heading mt-40">
        <span class="cat-name">全部结果</span>
        <span class="heading-counter">共有 {{ $counts }} 个结果.</span>
        </h2>
        <div class="shop-page-bar">
          <div>
            <div class="shop-bar">
              <!-- Nav tabs -->
              
              <div class="selector-field ml-20 hidden-xs">
                <!-- <form action="{{ route('products.index') }}" class="form-inline search-form"> -->
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
                  
                <!-- </form> -->
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
                          <img src="{{$product->image_url}}" alt="">
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
</form>
<!-- shop-area end -->
<!-- brand-area start -->
<!-- brand-area end -->
<!-- service-area start -->
<div class="service-area pt-70 pb-40 gray-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-6">
        <div class="single-service mb-30">
          <div class="service-icon">
            <i class="pe-7s-world"></i>
          </div>
          <div class="service-title">
            <h3>FREE SHIPPING</h3>
            <p>Free shipping on all UK orders</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="single-service mb-30">
          <div class="service-icon">
            <i class="pe-7s-refresh"></i>
          </div>
          <div class="service-title">
            <h3>FREE EXCHANGE</h3>
            <p>30 days return on all items</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="single-service mb-30 sm-mrg">
          <div class="service-icon">
            <i class="pe-7s-headphones"></i>
          </div>
          <div class="service-title">
            <h3>PREMIUM SUPPORT</h3>
            <p>We support online 24 hours a day</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="single-service mb-30 xs-mrg sm-mrg">
          <div class="service-icon">
            <i class="pe-7s-gift"></i>
          </div>
          <div class="service-title">
            <h3>BLACK FRIDAY</h3>
            <p>Shocking discount on every friday</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
@section('scriptsAfterJs')
<script>
var filters = {!! json_encode($filters) !!};
$(document).ready(function () {
$('.search-form input[name=search]').val(filters.search);
$('.search-form select[name=order]').val(filters.order);
$('.search-form select[name=memo]').val(filters.memo);
$('.search-form select[name=disk]').val(filters.disk);
$('.search-form select[name=brand]').val(filters.brand);
$('.search-form input[name=floor]').val(filters.floor);
$('.search-form input[name=highest]').val(filters.highest);
$('.search-form select[name=cpu]').val(filters.cpu);
$('.search-form select[name=pixel]').val(filters.pixel);
$('.search-form select[name=sys]').val(filters.sys);
$('.search-form select[name=siz]').val(filters.siz);
$('.search-form select[name=bpix]').val(filters.bpix);
$('.search-form select[name=fpix]').val(filters.fpix);
$('.search-form select[name=order]').on('change', function() {
$('.search-form').submit();
});
$('.search-form button[name=classify]').on('change', function() {
$('.search-form').submit();
});
})
</script>
@endsection