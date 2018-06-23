@extends('layouts.app')
@section('title', '我的收藏')

@section('content')
<div class="space-custom"></div>
  <!-- breadcrumb start -->
  <div class="breadcrumb-area">
    <div class="container">
      <ol class="breadcrumb">
                <li><a href="/index"><i class="fa fa-home"></i></a></li>
                <li><a href="/products">Shop</a></li>
                <li class="active">Wishlist</li>
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
                      <th class="product-remove"><span class="nobr">Remove</span></th>
                      <th class="product-thumbnail">Image</th>
                      <th class="product-name"><span class="nobr">Product Name</span></th>
                      <th class="product-price"><span class="nobr"> Unit Price </span></th>
                      <th class="product-stock-stauts"><span class="nobr"> Stock Status </span></th>
                      <th class="product-add-to-cart"><span class="nobr">add-to-cart </span></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="product-remove"><a href="#">×</a></td>
                      <td class="product-thumbnail"><a href="#"><img src="img/product/1.jpg" alt="" /></a></td>
                      <td class="product-name"><a href="#">Vestibulum suscipit</a></td>
                      <td class="product-price"><span class="amount">£165.00</span></td>
                      <td class="product-stock-status"><span class="wishlist-in-stock">In Stock</span></td>
                      <td class="product-add-to-cart"><a href="#"> Add to Cart</a></td>
                    </tr>
                    <tr>
                      <td class="product-remove"><a href="#">×</a></td>
                      <td class="product-thumbnail"><a href="#"><img src="img/product/1.jpg" alt="" /></a></td>
                      <td class="product-name"><a href="#">Vestibulum dictum magna</a></td>
                      <td class="product-price"><span class="amount">£50.00</span></td>
                      <td class="product-stock-status"><span class="wishlist-in-stock">In Stock</span></td>
                      <td class="product-add-to-cart"><a href="#"> Add to Cart</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>  
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
