@extends('layouts.app')
@section('title', '购物车')
@section('content')
<div class="space-custom"></div>
<!-- breadcrumb start -->
<div class="breadcrumb-area">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="{{route('root')}}"><i class="fa fa-home"></i></a></li>
      <li><a href="{{route('products.index')}}">商品</a></li>
      <li class="active">购物车</li>
    </ol>
  </div>
</div>
<!-- breadcrumb end -->
<!-- cart-main-area start -->
<div class="cart-main-area">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="table-content table-responsive">
          <table>
            <thead>
              <tr>
                <th><input style="transform: scale(0.5,0.5);width: 25px;height: 25px" type="checkbox" class="sele" id="select-all"></th>
                <th class="product-thumbnail">商品</th>
                <th class="product-name">商品名</th>
                <th class="product-name">型号</th>
                <th class="product-price">价格（元）</th>
                <th class="product-quantity">数量</th>
                <th class="product-subtotal">小计（元）</th>
                <th class="product-remove">移除</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $abc="aa";
              ?>
              @foreach($cartItems as $item)
              <tr data-id="{{ $item->productSku->id }}">
                <td>
                  <input style="transform: scale(0.5,0.5);width: 25px;height: 25px" type="checkbox" class="sele" name="select" value="{{ $item->productSku->id }}" {{ $item->productSku->product->on_sale ? '' : 'disabled' }}>
                </td>
                <td class="product-thumbnail"><a href="{{ route('products.show', [$item->productSku->product_id]) }}">
                <img src="{{ $item->productSku->product->image_url }}" alt="" /></a></td>
                <div @if(!$item->productSku->product->on_sale) class="not_on_sale" @endif>
                  <td class="product-name"><a href="{{ route('products.show', [$item->productSku->product_id]) }}">{{ $item->productSku->product->title }}</a></td>
                  <td class="product-name">{{ $item->productSku->title }}</td>
                  @if(!$item->productSku->product->on_sale)
                  <span class="warning">该商品已下架</span>
                  @endif
                </div>
                <script type="text/javascript">
                function immediately() {
                var element = document.getElementById("mytext");
                if ("\v" == "v") {
                element.onpropertychange = webChange;
                } else {
                element.addEventListener("input", webChange, false);
                }
                function webChange() {
                if (element.value) {
                document.getElementById("test").innerHTML = element.value
                };
                }
                }
                </script>
                <?php
                $abc=$abc."a";
                ?>
                <td class="product-price"><span class="amount">{{ $item->productSku->price }}</span></td>
                <td class="product-quantity"><input class="sele" type="number" @if(!$item->productSku->product->on_sale) disabled @endif name="amount" value="{{ $item->amount }}" oninput="document.getElementById('{{$abc}}').innerHTML=this.value * {{ $item->productSku->price }};" onpropertychange="document.getElementById('{{$abc}}').innerHTML=this.value;" /></td>
                <td class="product-subtotal" name="subtotal" id="{{$abc}}">{{ $item->amount * $item->productSku->price }}</td>
                <td class="product-remove"><button class="btn btn-xs btn-danger btn-remove">移除</button></td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <form class="form-horizontal" role="form" id="order-form">
          <div class="form-group">
            @if(count($addresses)!=0)
            <input type="hidden" name="address" value="{{$addresses[0]->id}}"></input>
            @endif
          </div>
          <div class="row">
            <div class="col-md-8 col-sm-7 col-xs-12">
              <div class="buttons-cart">
                <a href="{{route('products.index')}}">继续购物</a>
              </div>
              
              <div class="coupon">
                <h3>优惠券</h3>
                <p>请在此输入您要使用的优惠券码</p>
                <input type="text" name="coupon_code" placeholder="优惠码" />
                
                <div class="col-sm-3">
                  <button type="button" class="btn btn-success" id="btn-check-coupon">检查</button>
                  <button type="button" class="btn btn-danger" style="display: none;" id="btn-cancel-coupon">取消</button>
                </div>优惠信息：<div id='coupon_desc'>无</div>
              </div>
            </div>
            <div class="col-md-4 col-sm-5 col-xs-12">
              <div class="cart_totals">
                <h2>购物车总金额</h2>
                <table>
                  <tbody>
                    <tr class="cart-subtotal">
                        <th>小计</th>
                        <td><span class="amount"><div id='dv2'></div></span></td>
                      </tr>
                    <br /><br />
                    <tr class="order-total">
                      <th>总价（元）</th>
                      <td>
                        <strong><span class="amount"><div id='dv'></div></span></strong>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <div class="wc-proceed-to-checkout">
                  <button type="button" class="btn btn-primary btn-create-order">提交订单</button>
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
// 监听 移除 按钮的点击事件
$('.btn-remove').click(function () {
// $(this) 可以获取到当前点击的 移除 按钮的 jQuery 对象
// closest() 方法可以获取到匹配选择器的第一个祖先元素，在这里就是当前点击的 移除 按钮之上的 <tr> 标签
  // data('id') 方法可以获取到我们之前设置的 data-id 属性的值，也就是对应的 SKU id
  var id = $(this).closest('tr').data('id');
  swal({
  title: "确认要将该商品移除？",
  icon: "warning",
  buttons: ['取消', '确定'],
  dangerMode: true,
  })
  .then(function(willDelete) {
  // 用户点击 确定 按钮，willDelete 的值就会是 true，否则为 false
  if (!willDelete) {
  return;
  }
  axios.delete('/cart/' + id)
  .then(function () {
  location.reload();
  })
  });
  });
  // 监听 全选/取消全选 单选框的变更事件
  $('#select-all').change(function() {
  // 获取单选框的选中状态
  // prop() 方法可以知道标签中是否包含某个属性，当单选框被勾选时，对应的标签就会新增一个 checked 的属性
  var checked = $(this).prop('checked');
  // 获取所有 name=select 并且不带有 disabled 属性的勾选框
  // 对于已经下架的商品我们不希望对应的勾选框会被选中，因此我们需要加上 :not([disabled]) 这个条件
  $('input[name=select][type=checkbox]:not([disabled])').each(function() {
  // 将其勾选状态设为与目标单选框一致
  $(this).prop('checked', checked);
  });
  });
  var check=$("input[name='select']:checked");
  var total=0.0;
  check.each(function() {
  var row=$(this).parent("td").parent("tr");
  var sub=row.find("[name=subtotal]").text();
  sub=parseFloat(sub);
  total+=sub;
  });
  var d = document.getElementById('dv');
  d.innerHTML = total;

  $('.sele').change(function() {
  var check=$("input[name='select']:checked");
  var total=0;
  check.each(function() {
  var row=$(this).parent("td").parent("tr");
  var sub=row.find("[name=subtotal]").text();
  sub=parseFloat(sub);
  total+=sub;
  });
  var d = document.getElementById('dv');
  d.innerHTML = total;
  document.getElementById('dv2').innerHTML = total;

//变动打折后的价格
  var str1=document.getElementById('coupon_desc');
  str1=str1.innerHTML;
    var a = str1.indexOf('%');
    if(a!=-1) {   //包含%时的操作
    var d = document.getElementById('dv');
    var tem = d.innerHTML;
    tem=parseFloat(tem);
    var re1=/[0-9]\.?[0-9]*/g;
    str1=str1.match(re1);
    var tem2 = parseInt(str1[str1.length-1]);
    tem=tem*(1-(tem2*0.01));
    d.innerHTML = tem;
    }
    else {
      var d = document.getElementById('dv');
    var tem = d.innerHTML;
    tem=parseFloat(tem);
    var re1=/[0-9]\.?[0-9]*/g;
    str1=str1.match(re1);
    var tem2 = parseInt(str1[str1.length-1]);
    tem=tem-tem2;
    d.innerHTML = tem;
    }
  });
  
  //获取div的节点
  
  // 监听创建订单按钮的点击事件
  $('.btn-create-order').click(function () {
  var abc = $('#order-form').find('input[name=address]').val();
  if(!abc) {
  swal('请到用户中心填写收货信息', '', 'warning');
  return;
  }
  // 构建请求参数，将用户选择的地址的 id 和备注内容写入请求参数
  var req = {
  address_id: $('#order-form').find('input[name=address]').val(),
  items: [],
  remark: $('#order-form').find('textarea[name=remark]').val(),
  coupon_code: $('input[name=coupon_code]').val(), // 从优惠码输入框中获取优惠码
  };
  // 遍历 <table> 标签内所有带有 data-id 属性的 <tr> 标签，也就是每一个购物车中的商品 SKU
    $('table tr[data-id]').each(function () {
    // 获取当前行的单选框
    var $checkbox = $(this).find('input[name=select][type=checkbox]');
    // 如果单选框被禁用或者没有被选中则跳过
    if ($checkbox.prop('disabled') || !$checkbox.prop('checked')) {
    return;
    }
    // 获取当前行中数量输入框
    var $input = $(this).find('input[name=amount]');
    // 如果用户将数量设为 0 或者不是一个数字，则也跳过
    if ($input.val() == 0 || isNaN($input.val())) {
    return;
    }
    // 把 SKU id 和数量存入请求参数数组中
    req.items.push({
    sku_id: $(this).data('id'),
    amount: $input.val(),
    })
    });
    axios.post('{{ route('orders.store') }}', req)
    .then(function (response) {
    swal('订单提交成功', '', 'success')
    .then(() => {
    location.href = '/orders/' + response.data.id;
    });
    }, function (error) {
    if (error.response.status === 422) {
    // http 状态码为 422 代表用户输入校验失败
    var html = '<div>';
      _.each(error.response.data.errors, function (errors) {
      _.each(errors, function (error) {
      html += error+'<br>';
      })
      });
    html += '</div>';
    swal({content: $(html)[0], icon: 'error'})
    } else if (error.response.status === 403) { // 这里判断状态 403
    swal(error.response.data.msg, '', 'error');
    } else {
    // 其他情况应该是系统挂了
    swal('系统错误', '', 'error');
    }
    });
    });
    // 检查按钮点击事件
    $('#btn-check-coupon').click(function () {
    
    // 获取用户输入的优惠码
    var code = $('input[name=coupon_code]').val();
    // 如果没有输入则弹框提示
    if(!code) {
    swal('请输入优惠码', '', 'warning');
    return;
    }
    // 调用检查接口
    axios.get('/coupon_codes/' + encodeURIComponent(code))
    .then(function (response) {  // then 方法的第一个参数是回调，请求成功时会被调用
    $('#coupon_desc').text(response.data.description); // 输出优惠信息
    var str1=document.getElementById('coupon_desc');
    str1=str1.innerHTML;
    var a = str1.indexOf('%');
    if(a!=-1) {   //包含%时的操作
    var d = document.getElementById('dv');
    var tem = d.innerHTML;
    tem=parseFloat(tem);
    var re1=/[0-9]\.?[0-9]*/g;
    str1=str1.match(re1);
    var tem2 = parseInt(str1[str1.length-1]);
    tem=tem*(1-(tem2*0.01));
    d.innerHTML = tem;
    }
    else {
    var d = document.getElementById('dv');
    var tem = d.innerHTML;
    tem=parseFloat(tem);
    var re1=/[0-9]\.?[0-9]*/g;
    str1=str1.match(re1);
    var tem2 = parseInt(str1[str1.length-1]);
    tem=tem-tem2;
    d.innerHTML = tem;
    }
    $('input[name=coupon_code]').prop('readonly', true); // 禁用输入框
    $('#btn-cancel-coupon').show(); // 显示 取消 按钮
    $('#btn-check-coupon').hide(); // 隐藏 检查 按钮
    }, function (error) {
    // 如果返回码是 404，说明优惠券不存在
    if(error.response.status === 404) {
    swal('优惠码不存在', '', 'error');
    } else if (error.response.status === 403) {
    // 如果返回码是 403，说明有其他条件不满足
    swal(error.response.data.msg, '', 'error');
    } else {
    // 其他错误
    swal('系统内部错误', '', 'error');
    }
    })
    
    });
    // 隐藏 按钮点击事件
    $('#btn-cancel-coupon').click(function () {
    $('#coupon_desc').text('无'); // 隐藏优惠信息

  var check=$("input[name='select']:checked");
  var total=0;
  check.each(function() {
  var row=$(this).parent("td").parent("tr");
  var sub=row.find("[name=subtotal]").text();
  sub=parseFloat(sub);
  total+=sub;
  });
  var d = document.getElementById('dv');
  d.innerHTML = total;
    $('input[name=coupon_code]').prop('readonly', false);  // 启用输入框
    $('#btn-cancel-coupon').hide(); // 隐藏 取消 按钮
    $('#btn-check-coupon').show(); // 显示 检查 按钮
    });
    });
    </script>
    @endsection