@extends('layouts.app')
@section('title', $product->title)
@section('content')
<div class="space-custom"></div>
<!-- breadcrumb start -->
<div class="breadcrumb-area">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-home"></i></a></li>
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
                <!-- <div id="img2" value="{{ $product->image_url }}" > -->
                <img src="{{ $product->image_url }}" alt="" />
              <!-- </div> -->
                <a class="popup-link" href="{{ $product->image_url }}">View larger <i class="fa fa-search-plus" aria-hidden="true"></i></a>
              </div>
            </div>
            <!-- <div class="tab-pane" id="profile">
              <div class="pro-large-img">
                <img src="img/product/2.jpg" alt="" />
                <a class="popup-link" href="/img/product/2.jpg">View larger <i class="fa fa-search-plus" aria-hidden="true"></i></a>
              </div>
            </div>
            <div class="tab-pane" id="messages">
              <div class="pro-large-img">
                <img src="img/product/3.jpg" alt="" />
                <a class="popup-link" href="/img/product/3.jpg">View larger <i class="fa fa-search-plus" aria-hidden="true"></i></a>
              </div>
            </div>
            <div class="tab-pane" id="settings">
              <div class="pro-large-img">
                <img src="img/product/4.jpg" alt="" />
                <a class="popup-link" href="/img/product/4.jpg">View larger <i class="fa fa-search-plus" aria-hidden="true"></i></a>
              </div>
            </div>
            <div class="tab-pane" id="settings2">
              <div class="pro-large-img">
                <img src="img/product/5.jpg" alt="" />
                <a class="popup-link" href="/img/product/5.jpg">View larger <i class="fa fa-search-plus" aria-hidden="true"></i></a>
              </div>
            </div>
            <div class="tab-pane" id="settings3">
              <div class="pro-large-img">
                <img src="img/product/6.jpg" alt="" />
                <a class="popup-link" href="/img/product/6.jpg">View larger <i class="fa fa-search-plus" aria-hidden="true"></i></a>
              </div>
            </div> -->
          </div>
          <!-- Nav tabs -->
          <ul class="details-tab">
            <li class="active"><a href="#home" data-toggle="tab"><img src="{{ $product->image_url }}" alt="" /></a></li>
            <!-- <li><a href="#profile" data-toggle="tab"><img src="img/product/2.jpg" alt="" /></a></li>
            <li><a href="#messages" data-toggle="tab"><img src="img/product/3.jpg" alt="" /></a></li>
            <li><a href="#settings" data-toggle="tab"><img src="img/product/4.jpg" alt="" /></a></li>
            <li><a href="#settings2" data-toggle="tab"><img src="img/product/5.jpg" alt="" /></a></li>
            <li><a href="#settings3" data-toggle="tab"><img src="img/product/6.jpg" alt="" /></a></li> -->
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
              <input type="number" value="1" /><span class="stock"></span>
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
        <li class="active"><a href="#home3" data-toggle="tab">More info</a></li>
        <li><a href="#profile3" data-toggle="tab">Data sheet</a></li>
        <li><a href="#messages3" data-toggle="tab">Reviews</a></li>
      </ul>
      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane active" id="home3">
          <div class="pro-desc">
            <p>It’s all screen. With iPhone X, the device is the display. An all‑new 5.8‑inch Super Retina screen fills the hand and dazzles the eyes. The display employs new techniques and technology to precisely follow the curves of the design, all the way to the elegantly rounded corners. A tiny space houses some of the most sophisticated technology we’ve ever developed, including the cameras and sensors that enable Face ID.The most durable glass ever in a smartphone, front and back. Surgical‑grade stainless steel. Wireless charging. Water and dust resistance.</p>
          </div>
        </div>
        <div class="tab-pane" id="profile3">
          <div class="pro-desc">
            <table class="table-data-sheet">
              <tbody>
                <tr class="odd">
                  <td>Compositions</td>
                  <td>Cotton</td>
                </tr>
                <tr class="even">
                  <td>Styles</td>
                  <td>Casual</td>
                </tr>
                <tr class="odd">
                  <td>Properties</td>
                  <td>Short Sleeve</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="tab-pane" id="messages3">
          <div class="pro-desc">
            <a href="#">Be the first to write your review!</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- pro-info-area end -->
<!-- best-sell-area start -->
<div class="best-sell-area">
  <div class="container">
    <div class="row">
      <div class="section-title text-center mb-50">
        <h2>Accessories</h2>
      </div>
    </div>
    <div class="row">
      <div class="product-carousel">
        <div class="col-md-12">
          <div class="product-wrapper mb-40 mrg-nn-xs">
            <div class="product-img">
              <a href="#"><img src="img/product/4.jpg" alt="" /></a>
              <span class="new-label">New</span>
              <div class="product-action">
                <a href="#"><i class="pe-7s-cart"></i></a>
                <a href="#"><i class="pe-7s-like"></i></a>
                <a href="#"><i class="pe-7s-folder"></i></a>
                <a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
              </div>
            </div>
            <div class="product-content">
              <div class="pro-title">
                <h3><a href="product-details.html">Cras Neque Metus</a></h3>
              </div>
              <div class="price-reviews">
                <div class="price-box">
                  <span class="price product-price">$999.00</span>
                  <span class="old-price product-price">$999.00</span>
                </div>
                <div class="pro-rating">
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="product-wrapper mb-40 mrg-nn-xs">
            <div class="product-img">
              <a href="#"><img src="img/product/12.jpg" alt="" /></a>
              <span class="new-label">New</span>
              <div class="product-action">
                <a href="#"><i class="pe-7s-cart"></i></a>
                <a href="#"><i class="pe-7s-like"></i></a>
                <a href="#"><i class="pe-7s-folder"></i></a>
                <a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
              </div>
            </div>
            <div class="product-content">
              <div class="pro-title">
                <h3><a href="product-details.html">Cras Neque Metus</a></h3>
              </div>
              <div class="price-reviews">
                <div class="price-box">
                  <span class="price product-price">$999.00</span>
                  <span class="old-price product-price">$999.00</span>
                </div>
                <div class="pro-rating">
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="product-wrapper mb-40 mrg-nn-xs">
            <div class="product-img">
              <a href="#"><img src="img/product/3.jpg" alt="" /></a>
              <span class="new-label">New</span>
              <div class="product-action">
                <a href="#"><i class="pe-7s-cart"></i></a>
                <a href="#"><i class="pe-7s-like"></i></a>
                <a href="#"><i class="pe-7s-folder"></i></a>
                <a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
              </div>
            </div>
            <div class="product-content">
              <div class="pro-title">
                <h3><a href="product-details.html">Cras Neque Metus</a></h3>
              </div>
              <div class="price-reviews">
                <div class="price-box">
                  <span class="price product-price">$999.00</span>
                  <span class="old-price product-price">$999.00</span>
                </div>
                <div class="pro-rating">
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="product-wrapper mb-40 mrg-nn-xs">
            <div class="product-img">
              <a href="#"><img src="img/product/5.jpg" alt="" /></a>
              <span class="new-label">New</span>
              <div class="product-action">
                <a href="#"><i class="pe-7s-cart"></i></a>
                <a href="#"><i class="pe-7s-like"></i></a>
                <a href="#"><i class="pe-7s-folder"></i></a>
                <a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
              </div>
            </div>
            <div class="product-content">
              <div class="pro-title">
                <h3><a href="product-details.html">Cras Neque Metus</a></h3>
              </div>
              <div class="price-reviews">
                <div class="price-box">
                  <span class="price product-price">$999.00</span>
                  <span class="old-price product-price">$999.00</span>
                </div>
                <div class="pro-rating">
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="product-wrapper mb-40 mrg-nn-xs">
            <div class="product-img">
              <a href="#"><img src="img/product/5.jpg" alt="" /></a>
              <span class="new-label">New</span>
              <div class="product-action">
                <a href="#"><i class="pe-7s-cart"></i></a>
                <a href="#"><i class="pe-7s-like"></i></a>
                <a href="#"><i class="pe-7s-folder"></i></a>
                <a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
              </div>
            </div>
            <div class="product-content">
              <div class="pro-title">
                <h3><a href="product-details.html">Cras Neque Metus</a></h3>
              </div>
              <div class="price-reviews">
                <div class="price-box">
                  <span class="price product-price">$999.00</span>
                  <span class="old-price product-price">$999.00</span>
                </div>
                <div class="pro-rating">
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="product-wrapper mb-40 mrg-nn-xs">
            <div class="product-img">
              <a href="#"><img src="img/product/6.jpg" alt="" /></a>
              <span class="new-label">New</span>
              <div class="product-action">
                <a href="#"><i class="pe-7s-cart"></i></a>
                <a href="#"><i class="pe-7s-like"></i></a>
                <a href="#"><i class="pe-7s-folder"></i></a>
                <a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
              </div>
            </div>
            <div class="product-content">
              <div class="pro-title">
                <h3><a href="product-details.html">Cras Neque Metus</a></h3>
              </div>
              <div class="price-reviews">
                <div class="price-box">
                  <span class="price product-price">$999.00</span>
                  <span class="old-price product-price">$999.00</span>
                </div>
                <div class="pro-rating">
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="product-wrapper mb-40 mrg-nn-xs">
            <div class="product-img">
              <a href="#"><img src="img/product/7.jpg" alt="" /></a>
              <span class="new-label">New</span>
              <div class="product-action">
                <a href="#"><i class="pe-7s-cart"></i></a>
                <a href="#"><i class="pe-7s-like"></i></a>
                <a href="#"><i class="pe-7s-folder"></i></a>
                <a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
              </div>
            </div>
            <div class="product-content">
              <div class="pro-title">
                <h3><a href="product-details.html">Cras Neque Metus</a></h3>
              </div>
              <div class="price-reviews">
                <div class="price-box">
                  <span class="price product-price">$999.00</span>
                  <span class="old-price product-price">$999.00</span>
                </div>
                <div class="pro-rating">
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- best-sell-area end -->
<!-- best-sell-area start -->
<div class="best-sell-area ptb-60">
  <div class="container">
    <div class="row">
      <div class="section-title text-center mb-50">
        <h2>12 other products in the same category: </h2>
      </div>
    </div>
    <div class="row">
      <div class="product-carousel">
        <div class="col-md-12">
          <div class="product-wrapper mb-40 mrg-nn-xs">
            <div class="product-img">
              <a href="#"><img src="/img/product/1.jpg" alt="" /></a>
              <span class="new-label">New</span>
              <div class="product-action">
                <a href="#"><i class="pe-7s-cart"></i></a>
                <a href="#"><i class="pe-7s-like"></i></a>
                <a href="#"><i class="pe-7s-folder"></i></a>
                <a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
              </div>
            </div>
            <div class="product-content">
              <div class="pro-title">
                <h3><a href="product-details.html">Cras Neque Metus</a></h3>
              </div>
              <div class="price-reviews">
                <div class="price-box">
                  <span class="price product-price">$999.00</span>
                  <span class="old-price product-price">$999.00</span>
                </div>
                <div class="pro-rating">
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="product-wrapper mb-40 mrg-nn-xs">
            <div class="product-img">
              <a href="#"><img src="img/product/2.jpg" alt="" /></a>
              <span class="new-label">New</span>
              <div class="product-action">
                <a href="#"><i class="pe-7s-cart"></i></a>
                <a href="#"><i class="pe-7s-like"></i></a>
                <a href="#"><i class="pe-7s-folder"></i></a>
                <a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
              </div>
            </div>
            <div class="product-content">
              <div class="pro-title">
                <h3><a href="product-details.html">Cras Neque Metus</a></h3>
              </div>
              <div class="price-reviews">
                <div class="price-box">
                  <span class="price product-price">$999.00</span>
                  <span class="old-price product-price">$999.00</span>
                </div>
                <div class="pro-rating">
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="product-wrapper mb-40 mrg-nn-xs">
            <div class="product-img">
              <a href="#"><img src="img/product/9.jpg" alt="" /></a>
              <span class="new-label">New</span>
              <div class="product-action">
                <a href="#"><i class="pe-7s-cart"></i></a>
                <a href="#"><i class="pe-7s-like"></i></a>
                <a href="#"><i class="pe-7s-folder"></i></a>
                <a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
              </div>
            </div>
            <div class="product-content">
              <div class="pro-title">
                <h3><a href="product-details.html">Cras Neque Metus</a></h3>
              </div>
              <div class="price-reviews">
                <div class="price-box">
                  <span class="price product-price">$999.00</span>
                  <span class="old-price product-price">$999.00</span>
                </div>
                <div class="pro-rating">
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="product-wrapper mb-40 mrg-nn-xs">
            <div class="product-img">
              <a href="#"><img src="img/product/8.jpg" alt="" /></a>
              <span class="new-label">New</span>
              <div class="product-action">
                <a href="#"><i class="pe-7s-cart"></i></a>
                <a href="#"><i class="pe-7s-like"></i></a>
                <a href="#"><i class="pe-7s-folder"></i></a>
                <a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
              </div>
            </div>
            <div class="product-content">
              <div class="pro-title">
                <h3><a href="product-details.html">Cras Neque Metus</a></h3>
              </div>
              <div class="price-reviews">
                <div class="price-box">
                  <span class="price product-price">$999.00</span>
                  <span class="old-price product-price">$999.00</span>
                </div>
                <div class="pro-rating">
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="product-wrapper mb-40 mrg-nn-xs">
            <div class="product-img">
              <a href="#"><img src="img/product/7.jpg" alt="" /></a>
              <span class="new-label">New</span>
              <div class="product-action">
                <a href="#"><i class="pe-7s-cart"></i></a>
                <a href="#"><i class="pe-7s-like"></i></a>
                <a href="#"><i class="pe-7s-folder"></i></a>
                <a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
              </div>
            </div>
            <div class="product-content">
              <div class="pro-title">
                <h3><a href="product-details.html">Cras Neque Metus</a></h3>
              </div>
              <div class="price-reviews">
                <div class="price-box">
                  <span class="price product-price">$999.00</span>
                  <span class="old-price product-price">$999.00</span>
                </div>
                <div class="pro-rating">
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="product-wrapper mb-40 mrg-nn-xs">
            <div class="product-img">
              <a href="#"><img src="img/product/3.jpg" alt="" /></a>
              <span class="new-label">New</span>
              <div class="product-action">
                <a href="#"><i class="pe-7s-cart"></i></a>
                <a href="#"><i class="pe-7s-like"></i></a>
                <a href="#"><i class="pe-7s-folder"></i></a>
                <a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
              </div>
            </div>
            <div class="product-content">
              <div class="pro-title">
                <h3><a href="product-details.html">Cras Neque Metus</a></h3>
              </div>
              <div class="price-reviews">
                <div class="price-box">
                  <span class="price product-price">$999.00</span>
                  <span class="old-price product-price">$999.00</span>
                </div>
                <div class="pro-rating">
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="product-wrapper mb-40 mrg-nn-xs">
            <div class="product-img">
              <a href="#"><img src="img/product/7.jpg" alt="" /></a>
              <span class="new-label">New</span>
              <div class="product-action">
                <a href="#"><i class="pe-7s-cart"></i></a>
                <a href="#"><i class="pe-7s-like"></i></a>
                <a href="#"><i class="pe-7s-folder"></i></a>
                <a href="#" data-toggle="modal" data-target="#productModal"><i class="pe-7s-look"></i></a>
              </div>
            </div>
            <div class="product-content">
              <div class="pro-title">
                <h3><a href="product-details.html">Cras Neque Metus</a></h3>
              </div>
              <div class="price-reviews">
                <div class="price-box">
                  <span class="price product-price">$999.00</span>
                  <span class="old-price product-price">$999.00</span>
                </div>
                <div class="pro-rating">
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                  <a href="#"><i class="fa fa-star-o"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- best-sell-area end -->
<!-- brand-area start -->
<div class="brand-area">
  <div class="container">
    <div class="brand-sep ptb-50">
      <div class="row">
        <div class="brand-active">
          <div class="col-lg-12">
            <div class="single-brand">
              <a href="#"><img src="img/brand/1.jpg" alt="" /></a>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="single-brand">
              <a href="#"><img src="img/brand/2.jpg" alt="" /></a>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="single-brand">
              <a href="#"><img src="img/brand/3.jpg" alt="" /></a>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="single-brand">
              <a href="#"><img src="img/brand/4.jpg" alt="" /></a>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="single-brand">
              <a href="#"><img src="img/brand/5.jpg" alt="" /></a>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="single-brand">
              <a href="#"><img src="img/brand/1.jpg" alt="" /></a>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="single-brand">
              <a href="#"><img src="img/brand/2.jpg" alt="" /></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
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