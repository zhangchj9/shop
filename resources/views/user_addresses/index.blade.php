@extends('layouts.app')
@section('title', '收货地址列表')

@section('content')
<div class="space-custom"></div>
<div class="breadcrumb-area">
		<div class="container">
			<ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i></a></li>
                <!-- <li><a href="#">Shop</a></li> -->
                <li class="active">Address</li>
			</ol>			
		</div>
</div>  
<div  class="user-login pb-60">
<div class="container">
  <div class="row">
    <div class="centered-title text-center mb-40">
       <h3>收货地址</span></h3>
       <div class="clear"></div>
       <!-- <em>register and get your account</em> -->
    </div>
  <div class="col-md-15 col-md-offset-1">
  <!-- <div class="col-lg-10 col-lg-offset-1"> -->
      <div class="panel panel-default">
        <div class="panel-heading">
            收货地址列表
            <a href="{{ route('user_addresses.create') }}" class="pull-right">新增收货地址</a>
        </div>
        <div class="panel-body">
        <form>
            <table class="table table-bordered table-striped" style="margin:auto;" >
              <thead>
                <tr>
                  <th align="center">收货人</th>
                  <th align="center">地址</th>
                  <th align="center">邮编</th>
                  <th align="center">电话</th>
                  <th align="center">操作</th>
                </tr>
              </thead>
              <tbody>
               @foreach($addresses as $address)
               <tr height=60 valign="middle">
                  <td align="center" valign="middle"><font size="4">{{ $address->contact_name }}</font></td>
                  <td align="center" valign="middle"><font size="4">{{ $address->full_address }}</font></td>
                  <td align="center" valign="middle"><font size="4">{{ $address->zip }}</font></td>
                  <td align="center" valign="middle"><font size="4">{{ $address->contact_phone }}</font></td>
                  <td align="center" valign="middle">
                      <a href="{{ route('user_addresses.edit', ['user_address' => $address->id]) }}" class="btn btn-primary">修改</a> 
                      <button class="btn btn-danger btn-del-address" type="button" style="text-align:center"data-id="{{ $address->id }}" >删除</button>
    
                  </td>
                      
                </tr>
                @endforeach
              </tbody>
            </table>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

@section('scriptsAfterJs')
<script>
$(document).ready(function() {
  // 删除按钮点击事件
  $('.btn-del-address').click(function() {
    // 获取按钮上 data-id 属性的值，也就是地址 ID
    var id = $(this).data('id');
    // 调用 sweetalert
    swal({
        title: "确认要删除该地址？",
        icon: "warning",
        buttons: ['取消', '确定'],
        dangerMode: true,
      })
    .then(function(willDelete) { // 用户点击按钮后会触发这个回调函数
      // 用户点击确定 willDelete 值为 true， 否则为 false
      // 用户点了取消，啥也不做
      if (!willDelete) {
        return;
      }
      // 调用删除接口，用 id 来拼接出请求的 url
      axios.delete('/user_addresses/' + id)
        .then(function () {
          // 请求成功之后重新加载页面
          location.reload();
        })
    });
  });
});
</script>
@endsection