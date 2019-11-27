@extends('layouts\master')

@section('content')

<div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shopping Cart</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                @include('layouts\leftSideBar')
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="woocommerce">
                            <!--<form method="post" action="#">-->
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Sản phẩm</th>
                                            <th class="product-price">Giá</th>
                                            <th class="product-quantity">Số lượng</th>
                                            <th class="product-subtotal">Tổng cộng</th>
                                        </tr>
                                    </thead>
                                    <tbody id = "cart-list" onload="PrintProductToCartTable()">
                                        <!-- cart list -->
                                    @foreach( $products as $product)
                                    
                                        <tr id="" class="cart_item">
                                            <td class="product-remove" onclick="AddProduct({{$product->id}},-($product->qty)); window.location.reload">
                                                <a title="Remove this item" class="remove" href="">×</a> 
                                            </td>
            
                                            <td class="product-thumbnail">
                                                <a href="{{ route('product', ['id' => $product->slug]) }}">
                                                    <img width="145" height="145" alt="{{ $product->slug }}" class="shop_thumbnail" src="{{ asset('resources/img/'.($product->images->first())? $product->images->first()->path: '') }}">
                                                </a>
                                            </td>
                            
                                            <td class="product-name">
                                                <a href="{{ route('product', ['id' => $product->slug]) }}">
                                                    {{ $product->name }}
                                                </a>
                                            </td>
                                            
                                            <td class="product-price">
                                                <span class="amount">{{ $product->price }} VNĐ</span>
                                            </td>
    
                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">
                                                    <input id="{{ $product->id }}" type="number" size="4" class="input-text qty text" title="Qty" value="{{ $product->qty }}" min="1" onchange="AddProduct({{$product->id}}, GetQuantity({{$product->id}}) - $product->qty)" step="1">
                                                </div>
                                            </td>
                                    
                                            <td class="product-subtotal">
                                                <span class="amount">{{ $product->price*$product->qty }} VNĐ</span>
                                            </td>
                                        </tr>

                                    @endforeach
                
                                    </tbody>
                                </table>
                            <!--</form>-->

                            <div class="cart-collaterals">


                            <div class="cross-sells">
                                
                            </div>


                            <div class="cart_totals ">
                                <h2>Chi phí giỏ hàng</h2>

                                <table cellspacing="0">
                                    <tbody>
                                        <tr class="cart-subtotal">
                                            <th>Tạm tính</th>
                                            <td><span class="amount">{{ $total }}</span></td>
                                        </tr>

                                        <tr class="order-total">
                                            <th>Tổng cộng</th>
                                            <td><strong><span class="amount">{{ $total }}</span></strong> </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            </div>
                        </div>                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>

@endsection