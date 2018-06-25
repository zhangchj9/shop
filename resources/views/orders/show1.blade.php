@extends('layouts.app') //extends继承layouts.app中的布局
@section('title', '查看订单')  //section将内容注入指定片段，这里是将'查看订单'注入'title'

@section('content')  //将下面这一大段（5-132）html注入content中
<h1>test</h1>
@endsection

@section('scriptsAfterJs')  //将下面这段js注入scriptAfterJs中
<script>
  $(document).ready(function() {
    // 微信支付按钮事件
    $('#btn-wechat').click(function() {
      swal({
        // content 参数可以是一个 DOM 元素，这里我们用 jQuery 动态生成一个 img 标签，并通过 [0] 的方式获取到 DOM 元素
        content: $('<img src="{{ route('payment.wechat', ['order' => $order->id]) }}" />')[0],
        // buttons 参数可以设置按钮显示的文案
        buttons: ['关闭', '已完成付款'],
      })
      .then(function(result) {
      // 如果用户点击了 已完成付款 按钮，则重新加载页面
        if (result) {
          location.reload();
        }
      })
    });

    // 确认收货按钮点击事件
    $('#btn-receive').click(function() {
      // 弹出确认框
      swal({
        title: "确认已经收到商品？",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        buttons: ['取消', '确认收到'],
      })
      .then(function(ret) {
        // 如果点击取消按钮则不做任何操作
        if (!ret) {
          return;
        }
        // ajax 提交确认操作
        axios.post('{{ route('orders.received', [$order->id]) }}')
          .then(function () {
            // 刷新页面
            location.reload();
          })
      });
    });

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