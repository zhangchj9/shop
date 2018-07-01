@extends('layouts.app')
@section('title', '所有订单')

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
	<!-- breadcrumb end -->
	<!-- wishlist-area start -->
	<div class="wishlist-area">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="wishlist-content">
						<form action="#">
							<div class="wishlist-table table-responsive">
								<table>
									<thead>
										<tr>
											<th class="product-no"><span class="nobr">订单号</span></th>
											<th class="product-total-amount">订单总金额</th>
											<th class="product-time"><span class="nobr">订单生成时间</span></th>
											<th class="pay-stauts"><span class="nobr">支付状态</span></th>
											<th class="refund-stauts"><span class="nobr">退款状态</span></th>
											<th class="ship-stauts"><span class="nobr">货运状态</span></th>
										</tr>
									</thead>
									@foreach($orders as $order)
									<tbody>
										<tr>
											<td class="product-no"><a href="{{route('orders.details',['order'=>$order])}}">{{ $order->no }}</a></td>
											<td class="product-total-amount">￥{{$order->total_amount}}</td>
											<td class="product-time"><span class="amount">{{$order->created_at->format('Y-m-d H:i:s')}}</span></td>
											<td class="pay-status">
											    @if($order->paid_at)
												    @if($order->refund_status === \App\Models\Order::REFUND_STATUS_PENDING)
													    已支付
												    @else
													    {{ \App\Models\Order::$refundStatusMap[$order->refund_status] }}
												    @endif
											    @elseif($order->closed)
													    已关闭
											    @else
													    未支付<br>
													    请于 {{ $order->created_at->addSeconds(config('app.order_ttl'))->format('H:i') }} 前完成支付<br>
													    否则订单将自动关闭
											    @endif
											</td>
											<td class="pay-status">{{$order->refund_status}}</td>
											<td class="pay-status">{{$order->ship_status}}</td>
										</tr>
									</tbody>
									@endforeach
								</table>
							</div>	
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
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
@endsection

@section('scriptsAfterJs')
	<script>
        $(document).ready(function () {
            // 退款按钮点击事件
            $('#btn-apply-refund').click(function () {
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

        });
	</script>
@endsection