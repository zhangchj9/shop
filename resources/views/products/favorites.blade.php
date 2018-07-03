@extends('layouts.app')
@section('title', '我的收藏')
@section('content')
<div class="space-custom"></div>
<!-- breadcrumb start -->
<div class="breadcrumb-area">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="{{route('root')}}"><i class="fa fa-home"></i></a></li>
      <li><a href="{{route('products.index')}}">商品</a></li>
      <li class="active">我的收藏</li>
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
                <tbody>
                  @foreach($products as $product)
                  <tr>
                    <td class="product-thumbnail"><a href="{{ route('products.show', ['product' => $product->id]) }}">
                    <img src="{{ $product->image_url }}" alt="" /></a></td>
                    <td class="product-name"><a href="{{ route('products.show', ['product' => $product->id]) }}">{{ $product->title }}</a></td>                  
                    <td class="product-price"><span class="amount">低至：<b>￥</b>
                     {{ DB::table('product_skus')->where('id', DB::table('product_skus')->where('product_id', $product->id)->value('id'))->value('price')}}
                    </span></td>
                    <?php
                    $onsale=0;
                    $arr=array();
                    $i=1;
                    $temp = DB::table('product_skus')->where('product_id',$product->id)->select('stock')->get();
                    foreach($temp as $te) {                      
                      $arr[$i]= ($te)->stock; 
                      if($arr[$i]!= 0) {
                        $onsale=1;
                      }
                      $i=$i+1;
                    }
                     ?>
                    @if($onsale == 1)
                    <td class="product-stock-status"><span class="wishlist-in-stock">有货</span></td>
                    @else
                    <td class="product-stock-status"><span class="wishlist-in-stock">无货</span></td>
                    @endif
                    <td class="product-add-to-cart"><a href="{{ route('products.show', ['product' => $product->id]) }}">前往购买</a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<br><br><br><br><br><br><br><br><br><br>
@endsection
