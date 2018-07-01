@extends('layouts.app')
@section('title', '订单详情')

@section('content')
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
	<!-- cart-main-area start -->
	<div class="cart-main-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<form action="#">				
						<div class="table-content table-responsive">
							<table>
								<thead>
									<tr>
										<th class="product-thumbnail">图片</th>
										<th class="product-name">商品名</th>
										<th class="product-price">商品价格</th>
										<th class="product-quantity">商品数量</th>
										<th class="product-subtotal">商品总价</th>
									</tr>
								</thead>
								<tbody>
								    @foreach($order->items as $index => $item)
									<tr>
										<td class="product-thumbnail"><img src="{{$item->product->image_url}}" alt="" /></td>
										<td class="product-name">{{$item->productSku->title}}</td>
										<td class="product-price"><span class="amount">{{$item->price}}</span></td>
										<td class="product-quantity">{{$item->amount}}</td>
										<td class="product-subtotal">￥{{number_format($item->price * $item->amount, 2, '.', '')}}</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
						<div class="row">
							<div class="col-md-8 col-sm-7 col-xs-12">
								@if($order->paid_at)
									@if($order->refund_status === \App\Models\Order::REFUND_STATUS_PENDING)
										<a class="btn btn-primary btn-xs" href="{{ route('orders.show', ['order' => $order->id]) }}" id="refund">申请退款</a>
										@if($order->reviewd)
										    <a class="btn btn-primary btn-xs" href="{{ route('orders.review.show')}}" id="review">查看评价</a>
										@else
											<a class="btn btn-primary btn-xs" id="sendreview">提交评价</a>
										@endif
									@else
										<a class="btn btn-primary btn-xs" href="javascript:void(0)">订单退款处理中</a>
									@endif
								@elseif($order->closed)
									<a class="btn btn-primary btn-xs" href="javascript:void(0)">订单已关闭</a>
								@else
									<a class="btn btn-primary btn-xs" href="{{ route('orders.show', ['order' => $order->id]) }}" id="pay">支付订单</a>
									<a class="btn btn-primary btn-xs" id="cancel">取消订单</a>
								@endif
							</div>
							<div class="col-md-4 col-sm-5 col-xs-12">
								<div class="buttons-cart">
									<table>
										<tbody>
										  <tr class="cart-subtotal">
											  <td>
												  <label>收货人：</label>
											  </td>
										  </tr>
										  <tr class="cart-subtotal">
											  <td>
												  <label>收货地址：{{join(' ', $order->address)}}</label>
											  </td>
										  </tr>
										  <tr class="cart-subtotal">
											  <td>
												  <label>订单总金额：￥{{$order->total_amount}}</label>
											  </td>
										  </tr>
										</tbody>
									</table>
									<div class="wc-proceed-to-checkout">
										<a href="{{route('orders.allorders')}}">Back to your order list</a>
									</div>
								</div>
							</div>
						</div>
					</form>	
				</div>
			</div>
		</div>
	</div>
	<!-- cart-main-area end -->	
	<!-- service-area start -->
@endsection

@section('scriptsAfterJs')
	<script>
        $(document).ready(function () {
            // 退款按钮点击事件
            $('#refund').click(function () {
                swal({
                    text: '请输入退款理由',
                    content: "input",
                }).then(function (input) {
                    // 当用户点击 swal 弹出框上的按钮时触发这个函数
                    if(!input) {
                        swal('退款理由不可空', '', 'error');
                        return;
                    }
                    // 请求退款接口
                    axios.post('{{ route('orders.apply_refund', [$order->id]) }}', {reason: input})
                        .then(function () {
                            swal('申请退款成功', '', 'success').then(function () {
                                // 用户点击弹框上按钮时重新加载页面
                                location.reload();
                            });
                        });
                });
            });
            $('#sendreview').click(function(){
                swal({
                    text: '请输入您的评价',
                    content: "input",
                }).then(function (input) {
                    // 当用户点击 swal 弹出框上的按钮时触发这个函数
                    if(!input) {
                        swal('评价不可空', '', 'error');
                        return;
                    }
                    // 请求退款接口
					axios.post('{{ route('orders.review.store', [$order->id])}}')
					      .then(function(){
                                swal('提交评价成功', '', 'success').then(function (){
                                   location.reload();
						        });
						  });
                });
			});
            $('#cancel').click(function(){
                swal("确认取消订单？","取消后将无法支付！","warning")
					.then(function(){
                        axios.post('{{ route('orders.cancel', [$order->id])}}')
							.then(function(){
                                location.reload();
							});
                        });
			});

        });
	</script>
@endsection

