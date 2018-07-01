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
                                    <label>Address <span class="required">*</span></label>
                                    <select class="form-control" id="address" name="address">
                                        @foreach($addresses as $address)
                                            <option value="{{ $address->id }}">{{ $address->full_address}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Name <span class="required">*</span></label>
                                    <input type="text" placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Company Name</label>
                                    <input type="text" placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Email Address <span class="required">*</span></label>
                                    <input type="email" placeholder="" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="checkout-form-list">
                                    <label>Phone  <span class="required">*</span></label>
                                    <input type="text" placeholder="Postcode / Zip" />
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
                                         <td class="product-title">{{$item->productSku->title}}</td> <!--显示商品名称-->
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
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <style>
                                        input[type=radio],input[type=radio]+img{
                                            vertical-align: middle;
                                        }
                                    </style>
                                    <div class="radio_container">
                                        <input type="radio" name="pay" id="cc" style="transform: scale(0.5,0.5);width: 25px;height: 25px">
                                        <img src="{{URL::asset('images/creditcard.jpg')}}">
                                        <input type="radio" name="pay" id="ali" style="transform: scale(0.5,0.5);width: 25px;height: 25px">
                                        <img src="{{URL::asset('images/alipay.jpg')}}">
                                        <input type="radio" name="pay" id="wx" style="transform: scale(0.5,0.5);width: 25px;height: 25px">
                                        <img src="{{URL::asset('images/wechat.jpg')}}">
                                    </div>
                                </div>
                                <div class="payment-buttons">
                                    <div align="center">
                                        <a class="btn btn-primary btn-sm" href="{{ route('payment.alipay', ['order' => $order->id]) }}">支付订单</a>
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

@section('scriptsAfterJs')
    <script>
        $(document).ready(function() {
            // 支付宝支付按钮事件
            //var  myselect = document.getElementById("address"); //选取选中的地址
            //var index = myselect.selectedIndex;  //获取选项索引
            var req = {
                address: $("#address:selected").options.text(),
                items: [],
            };
            axios.post('{{ route('payment.alipay',['order' => $order->id])}}', req);
            var ident = $("input[name = 'pay']:checked").val();
            $('#btn-pay').click(function() {
                if(ident=='ali') {
                    swal({
                        // content 参数可以是一个 DOM 元素，这里我们用 jQuery 动态生成一个 img 标签，并通过 [0] 的方式获取到 DOM 元素
                        content: $('<img src="{{ route('payment.alipay', ['order' => $order->id]) }}" />')[0],
                        // buttons 参数可以设置按钮显示的文案
                        buttons: ['关闭', '已完成付款'],
                    })
                        .then(function (result) {
                            // 如果用户点击了 已完成付款 按钮，则重新加载页面
                            if (result) {
                                location.reload();
                            }
                        })
                }
            });
        });
    </script>
@endsection