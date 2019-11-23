@extends('layouts.master')

@section('content')

<div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>{{ $category }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                @include('layouts\leftSideBar')

                @foreach ($products as $product) 
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="{{ asset('resources/img/'. (($product->images->first())? $product->images->first()->path : '' )) }}" alt="{{ $product->slug }}">
                        </div>
                        <h2><a href="{{ route('product', ['id' => $product->slug ]) }}"> {{ $product->name }} </a></h2>
                        <div class="product-carousel-price">
                            <ins> {{ $product->price }} </ins>
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" onclick="AddCartProductCookie('Sơ mi kẻ sọc-họa tiết ong GUCCI','1400000',1,'img/ao1.png','1.html')" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                        </div>                       
                    </div>
                </div>
                @endforeach
            </div>
            
            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                    {{ $products->links() }}
                        <!-- <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li><a href="">1</a></li>
                             <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li> 
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav> -->
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection