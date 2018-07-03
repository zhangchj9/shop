@extends('layouts.app')
@section('title', $product->title)
@section('content')
<div class="space-custom"></div>
<!-- breadcrumb start -->
<div class="breadcrumb-area">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="{{route('root')}}"><i class="fa fa-home"></i></a></li>
      <li><a href="{{route('products.index')}}"> 商品</a></li>
      
      <li class="active">{{ $product->title }}</li>
    </ol>
  </div>
</div>
<!-- breadcrumb end -->
<!-- shop-area start -->
<div class="shop-area">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-5">
        <div class="product-zoom">
          <!-- Tab panes -->
          <div class="tab-content">
            <div class="tab-pane active" id="home">
              <div class="pro-large-img">
                <img src="{{ $product->image_url }}" alt="" />
                <a class="popup-link" href="{{ $product->image_url }}">View larger <i class="fa fa-search-plus" aria-hidden="true"></i></a>
              </div>
            </div>
            <?php
            $temp="ttt";
            ?>
            @foreach($product->image_url_ai as $img)
            <div class="tab-pane" id="{{$temp}}">
              <div class="pro-large-img">
                <img src="{{ $img }}" alt="" />
                <a class="popup-link" href="{{ $img }}">View larger <i class="fa fa-search-plus" aria-hidden="false"></i></a>
              </div>
            </div>
            <?php
            $temp=$temp."t";
            ?>
            @endforeach
            
          </div>
          <!-- Nav tabs -->
          <ul class="details-tab">
            <li class="active"><a href="#home" data-toggle="tab"><img src="{{ $product->image_url }}" alt="" /></a></li>
            <?php
            $temp2="ttt";
            ?>
            @foreach($product->image_url_ai as $img)
            <li><a href="#{{$temp2}}" data-toggle="tab"><img src="{{ $img }}" alt="" /></a></li>
            <?php
            $temp2=$temp2."t";
            ?>
            @endforeach
            
          </ul>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-7">
        <div class="product-details">
          <h2 class="pro-d-title">{{ $product->title }}</h2>
          <div class="price-box">
            <span class="price product-price">现 价：￥{{ $pri }}</span>
            <br />
            <!-- <span class="old-price product-price">$999.00</span> -->
          </div>
          <div class="usefull_link_block">
            <ul>
              <b><li><i class="fa fa-envelope-o">&nbsp;&nbsp;&nbsp;</i>销&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;量&nbsp;&nbsp;&nbsp;{{$sc}}</a></li>
              <li><i class="fa fa-print">&nbsp;&nbsp;&nbsp;</i>评价数&nbsp;&nbsp;&nbsp;{{$rc}}</a></li>
              <li><i class="fa fa-heart-o">&nbsp;&nbsp;&nbsp;</i>评&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;分&nbsp;&nbsp;&nbsp;{{$rt}}</a></li></b>
            </ul>
          </div>
          <div class="short-desc">
            <p>{{ $product->description }}</p>
          </div>
          
          <div class="select-size">
            <form action="{{ route('products.show',$product) }}"  class="search-form">
              <label>型号</label>
              <select name = 'sku'>
                <!-- <option value="">型号</option> -->
                @foreach($product->skus as $sku)
                <option value="{{ $sku->id }}" >{{ $sku->title }}</option>
                @endforeach
              </select>
            </form>
          </div>
          <br />
          <div class="box-quantity">
            <div class="cart_amount">
              <label></label>
              <input type="text" value="1" /><span class="stock"></span>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;剩余 {{$co}} 件
            
            
            @if($favored)
            <button class="btn-disfavor">取消收藏</button>
            @else
            <button class="btn-favor">收藏该商品</button>
            @endif
            <button class="btn-add-to-cart">加入购物车</button>
          </div>
          
          
          
          
        </div>
      </div>
    </div>
  </div>
</div>
<!-- shop-area end -->
<!-- pro-info-area start -->
<div class="pro-info-area ptb-80">
  <div class="container">
    <div class="pro-info-box">
      <!-- Nav tabs -->
      <ul class="pro-info-tab" role="tablist">
        <li class="active"><a href="#home3" data-toggle="tab">商品详情</a></li>
        <li><a href="#profile3" data-toggle="tab">规格参数</a></li>
        <li><a href="#messages3" data-toggle="tab">商品评价</a></li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane active" id="home3">
          <div class="pro-desc">
            <p>{{ $des }}</p>
            <br />
            @foreach($product->image_url_bi as $img)
            <p style="text-align:center"><img src="{{ $img }}" alt="" /></p>
            @endforeach
          </div>
        </div>
        <div class="tab-pane" id="profile3">
          <div class="pro-desc">
            <table class="table-data-sheet">
              <tbody>
                @foreach($param as $para)
                <tr class="odd">
                  <td>{{ explode('：', $para)[0] }}</td>
                  @if(isset(explode('：', $para)[1]))
                  <td>{{ explode('（', explode('：', $para)[1])[0] }}</td>
                  @endif
                </tr>
                @endforeach
                <!-- <tr class="even">
                  <td>Styles</td>
                  <td>Casual</td>
                </tr>
                <tr class="odd">
                  <td>Properties</td>
                  <td>Short Sleeve</td>
                </tr> -->
              </tbody>
            </table>
          </div>
        </div>
        <br />
        <div class="tab-pane" id="messages3">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <td>用户</td>
                <td>商品</td>
                <td>评分</td>
                <td>评价</td>
                <td>时间</td>
              </tr>
            </thead>
            <tbody>
              @foreach($reviews as $review)
              <tr>
                <td>{{ $review->order->user->name }}</td>
                <td>{{ $review->productSku->title }}</td>
                <td>{{ str_repeat('★', $review->rating) }}{{ str_repeat('☆', 5 - $review->rating) }}</td>
                <td>{{ $review->review }}</td>
                <td>{{ $review->reviewed_at->format('Y-m-d H:i') }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- pro-info-area end -->
<!-- best-sell-area start -->
@if($idd=="000")
<div class="best-sell-area">
  <div class="container">
    <div class="row">
      <div class="section-title text-center mb-50">
        <h2>猜你喜欢</h2>
      </div>
    </div>
    <div class="row">
      <div class="product-carousel">
        @foreach($rans as $ran)
        <div class="col-md-12">
          <div class="product-wrapper mb-40 mrg-nn-xs">
            <div class="product-img">
              <a href="{{ route('products.show', ['product' => $ran->id]) }}"><img src="{{$ran->image_url}}" alt="" /></a>
            </div>
            <div class="product-content">
              <div class="pro-title">
                <h3><a href="{{ route('products.show', ['product' => $ran->id]) }}">{{ $ran->title }}</a></h3>
              </div>
              <div class="price-reviews">
                <div class="price-box">
                  <span class="price product-price"><b>￥</b>{{ $ran->price }}</span>
                  <!-- <span class="old-price product-price">$999.00</span> -->
                </div>
                <div class="pro-rating">
                  销量 <span>{{ $ran->sold_count }}笔</span>
                  &nbsp;&nbsp;&nbsp;
                  评价 <span>{{ $ran->review_count }}条</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@else
<div class="best-sell-area">
  <div class="container">
    <div class="row">
      <div class="section-title text-center mb-50">
        <h2>为您推荐</h2>
      </div>
    </div>
    <div class="row">
      <div class="product-carousel">
        @foreach($foryou as $top)
        <div class="col-md-12">
          <div class="product-wrapper mb-40 mrg-nn-xs">
            <div class="product-img">
              <a href="{{ route('products.show', ['product' => $top->id]) }}"><img src="{{$top->image_url}}" alt="" /></a>
            </div>
            <div class="product-content">
              <div class="pro-title">
                <h3><a href="{{ route('products.show', ['product' => $top->id]) }}">{{ $top->title }}</a></h3>
              </div>
              <div class="price-reviews">
                <div class="price-box">
                  <span class="price product-price"><b>￥</b>{{ $top->price }}</span>
                  <!-- <span class="old-price product-price">$999.00</span> -->
                </div>
                <div class="pro-rating">
                  销量 <span>{{ $top->sold_count }}笔</span>
                  &nbsp;&nbsp;&nbsp;
                  评价 <span>{{ $top->review_count }}条</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endif
<!-- best-sell-area end -->
<!-- best-sell-area start -->
<div class="best-sell-area ptb-60">
  <div class="container">
    <div class="row">
      <div class="section-title text-center mb-50">
        <h2>销量最高</h2>
      </div>
    </div>
    <div class="row">
      <div class="product-carousel">
        @foreach($top5 as $top)
        <div class="col-md-12">
          <div class="product-wrapper mb-40 mrg-nn-xs">
            <div class="product-img">
              <a href="{{ route('products.show', ['product' => $top->id]) }}"><img src="{{$top->image_url}}" alt="" /></a>
            </div>
            <div class="product-content">
              <div class="pro-title">
                <h3><a href="{{ route('products.show', ['product' => $top->id]) }}">{{ $top->title }}</a></h3>
              </div>
              <div class="price-reviews">
                <div class="price-box">
                  <span class="price product-price"><b>￥</b>{{ $top->price }}</span>
                  <!-- <span class="old-price product-price">$999.00</span> -->
                </div>
                <div class="pro-rating">
                  销量 <span>{{ $top->sold_count }}笔</span>
                  &nbsp;&nbsp;&nbsp;
                  评价 <span>{{ $top->review_count }}条</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
<!-- best-sell-area end -->
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
$(document).ready(function () {
$('[data-toggle="tooltip"]').tooltip({trigger: 'hover'});
$('.sku-btn').click(function () {
$('.product-info .price span').text($(this).data('price'));
$('.product-info .stock').text('库存：' + $(this).data('stock') + '件');
});
$('.btn-favor').click(function () {
axios.post('{{ route('products.favor', ['product' => $product->id]) }}')
.then(function () {
swal('操作成功', '', 'success')
.then(function () {  // 这里加了一个 then() 方法
location.reload();
});
}, function(error) {
if (error.response && error.response.status === 401) {
swal('请先登录', '', 'error');
} else {
swal('系统错误', '', 'error');
}
});
});
$('.btn-disfavor').click(function () {
axios.delete('{{ route('products.disfavor', ['product' => $product->id]) }}')
.then(function () {
swal('操作成功', '', 'success')
.then(function () {
location.reload();
});
});
});
// 加入购物车按钮点击事件
$('.btn-add-to-cart').click(function () {
// 请求加入购物车接口
axios.post('{{ route('cart.add') }}', {
sku_id: $('select[name=sku]').val(),
amount: $('.cart_amount input').val(),
})
.then(function () { // 请求成功执行此回调
swal('加入购物车成功', '', 'success')
.then(function() {
location.href = '{{ route('cart.index') }}';
});
}, function (error) { // 请求失败执行此回调
if (error.response.status === 401) {
// http 状态码为 401 代表用户未登陆
swal('请先登录', '', 'error');
} else if (error.response.status === 422) {
// http 状态码为 422 代表用户输入校验失败
var html = '<div>';
  _.each(error.response.data.errors, function (errors) {
  _.each(errors, function (error) {
  html += error+'<br>';
  })
  });
html += '</div>';
swal({content: $(html)[0], icon: 'error'})
} else {
// 其他情况应该是系统挂了
swal('系统错误', '', 'error');
}
})
});
});
var filters = {!! json_encode($filters) !!};
$(document).ready(function () {
$('.search-form select[name=sku]').val(filters.sku);
$
$('.search-form select[name=sku]').on('change', function() {
$('.search-form').submit();
});
})
// var str = $("#img2").attr("value");
// document.getElementById("img1").src=str.split(';')[0];
// document.getElementById("img3").href=str.split(';')[0];
</script>
@endsection