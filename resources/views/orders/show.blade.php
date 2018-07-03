@extends('layouts.app')
@section('title', '提交订单')

@section('content')
    <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<div class="space-custom"></div>
<!-- breadcrumb start -->
<div class="breadcrumb-area">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i></a></li>
            <li><a href="#">Shop</a></li>
            <li class="active">Checkout</li>
        </ol>
    </div>
</div>
<!-- breadcrumb end -->
<!-- coupon-area start -->

<!-- coupon-area end -->
<!-- checkout-area start -->
<div class="checkout-area">
    <div class="container">
        <div class="row">
            <form id="order-confirmed">
                <div class="col-lg-6 col-md-6">
                    <div class="checkbox-form">
                        <h3>Billing Details</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>地址 <span class="required"></span></label>
                                    <lable>{{($order->address)['address']}}</lable>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>邮编 <span class="required"></span></label>
                                    <label>{{($order->address)['zip']}}</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>姓名 <span class="required"></span></label>
                                    <label>{{($order->address)['contact_name']}}</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>电话 <span class="required"></span></label>
                                    <label>{{($order->address)['contact_phone']}}</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="your-order">
                        <h3>Your order</h3>
                        <div class="your-order-table table-responsive">
                            <table>
                                <thead>
                                <tr>
                                    <th class="product-name">Product</th>
                                    <th class="product-name">Amount</th>
                                    <th class="product-total">Total</th>
                                </tr>
                                </thead>
                                @foreach($order->items as $item)
                                  <tbody>
                                     <tr class="cart_item">
                                         <td class="product-title">{{ $item->product->title }} {{$item->productSku->title}}</td> <!--显示商品名称-->
                                         <td class="product-amount">{{$item->amount}}</td><!--显示商品数量-->
                                         <td class="product-price">￥{{number_format($item->productSku->price * $item->amount, 2, '.', '')}}</td>
                                     </tr>
                                  </tbody>
                                @endforeach
                                <tfoot>
                                <tr class="order-total">
                                    <th>Order Total</th>
                                    <td></td>
                                    <td>
                                        <strong>
                                            <span class="amount">
                                                ￥{{$order->total_amount}}
                                            </span>
                                        </strong>
                                    </td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="payment-method">
                            <div class="payment-accordion">
                                <div class="payment-buttons">
                                    <div align="center">
                                        @if(!$order->paid_at && !$order->closed)
                                          <a class="btn btn-primary btn-sm" href="{{ route('payment.alipay', ['order' => $order->id]) }}">立即支付</a>
                                          <a class="btn btn-primary btn-sm" href="{{ route('orders.allorders') }}">暂不支付</a>
                                        @else
                                          <label>订单已支付！</label>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- checkout-area end -->
<!-- service-area start -->
<!-- service-area end -->
<!-- footer start -->
<!-- footer end -->
<!-- Modal -->
<div class="modal fade" id="productModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
            </div>
            <div class="modal-body">
                <div class="modal-img">
                    <a href="shop.html"><img src="img/product/1.jpg" alt="" /></a>
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
<!-- Modal end -->
@endsection