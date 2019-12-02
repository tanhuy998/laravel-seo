@extends('layouts.master')

@section('content')


<div class="single-product-area">

    <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
            @include('layouts\leftSideBar')
                <div class="col-md-8">
                    <div class="product-content-right">
                        <!-- <div class="product-breadcroumb">
                            <a href="index.html">Trang chủ</a>
                            <a href="shop-ao.html">Áo</a>
                            <a href="#">Áo cộc tay dài GUCCI</a>
                        </div> -->
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="{{ asset('resources/img/'. (($product->images->first())? $product->images->first()->path : '' )) }}" alt={{ $product->slug }}>
                                    </div>
                                    
                                    <div class="product-gallery">
                                        <img src="img/ao3.1.jpg" alt="">
                                        <img src="img/ao3.2.jpg" alt="">
                                        <img src="img/ao3.3.jpg" alt="">
                                        <img src="img/ao3.4.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name">{{ $product->name }}</h2>
                                    <div class="product-inner-price">
                                        <ins>{{ $product->price }}</ins>
                                    </div>    
                                    
                                    <form action="" class="cart">
                                        <div class="quantity">
                                            <input id="#quantity" type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        </div>
                                        <button onclick="AddProduct({{ $product->id }},GetQuantity('#quantity'))" class="add_to_cart_button" type="button">Add to cart</button>
                                        
                                    </form>  

                                    @include('layouts.shareSDK')
                                    @include('layouts.shareButton')

                                    <div class="product-inner-category">
                                        <p>Category: <a href={{ route('shop', ['category' => $product->category->slug]) }}> {{ $product->category->name }}</a>. Tags:  <a href="">Black</a>, <a href="">sale</a>, <a href="">Cổ điển</a>. </p>
                                    </div> 

                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Mô tả sản phẩm</h2>  
                                                <p>{{ $product->detail }}</p>

                                                
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Reviews</h2>
                                                <div class="submit-review">
                                                    <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                    <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                    <div class="rating-chooser">
                                                        <p>Your rating</p>

                                                        <div class="rating-wrap-post">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input type="submit" value="Submit"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>                    
                </div><!-- .phai -->
            </div>
        </div>
    </div>

@endsection