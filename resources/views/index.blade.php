@extends('layouts.app')
@section('title', 'HandChicken')
@section('content')
	<!-- slider-container start -->
	<div class="slider-container">
		<!-- Slider Image -->
		<div id="mainSlider" class="nivoSlider slider-image">
			<img src="images/slider/1.jpg" alt="" title="#htmlcaption1"/>
			<img src="images/slider/2.jpg" alt="" title="#htmlcaption2"/>
		</div>
		<!-- Slider Caption 1 -->
		<div id="htmlcaption1" class="nivo-html-caption slider-caption-1">
			<div class="container">
				<div class="slide1-text">
					<div class="middle-text">
						<div class="cap-dec cap-1 wow bounceInRight" data-wow-duration="0.9s" data-wow-delay="0s">
							<h2>iPhone X</h2>
						</div>	
						<div class="cap-dec cap-2 wow bounceInRight" data-wow-duration="1.2s" data-wow-delay="0.2s">
							<!-- <h2>NEW ARRIVALS</h2> -->
						</div>	
						<div class="cap-text wow bounceInRight" data-wow-duration="1.2s" data-wow-delay="0.3s">
							One so immersive the device itself disappears into the experience. And so intelligent it can respond to a tap, your voice, and even a glance. 
							Say hello to the future.
						</div>
						<div class="cap-readmore wow bounceInUp" data-wow-duration="1.3s" data-wow-delay=".5s">
							<a href="http://shop.blmyx.me/products/69">Shopping</a>
						</div>	
					</div>	
				</div>				
			</div>
		</div>
		<!-- Slider Caption 2 -->
		<div id="htmlcaption2" class="nivo-html-caption slider-caption-2">
			<div class="container">
				<div class="slide1-text">
					<div class="middle-text">
						<div class="cap-dec cap-1 wow bounceInRight" data-wow-duration="0.9s" data-wow-delay="0s">
							<!-- <h2>A BRAND</h2> -->
						</div>	
						<div class="cap-dec cap-2 wow bounceInRight" data-wow-duration="1.2s" data-wow-delay="0.2s">
							<!-- <h2>NEW ARRIVALS</h2> -->
						</div>	
						<div class="cap-text wow bounceInRight" data-wow-duration="1.2s" data-wow-delay="0.3s">
							<!-- Fascinating outdoor lounge chair with wooden chairs for outdoor ideas with outdoor chaise lounge chair. -->
						</div>
						<div class="cap-readmore wow bounceInUp" data-wow-duration="1.3s" data-wow-delay=".5s">
							<a href="http://shop.blmyx.me/products/62">Shopping</a>
						</div>	
					</div>	
				</div>					
			</div>
		</div>
	</div>
	<br /><br />
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
	<!-- Modal end -->

@endsection

{{-- @section('scriptsAfterJs')
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
@endsection --}}
