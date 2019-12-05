@extends('layouts.master')

@section('content')
<div class="slider-area">
        <div class="zigzag-bottom"></div>
        <div id="slide-list" class="carousel carousel-fade slide" data-ride="carousel">
            
            <div class="slide-bulletz">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ol class="carousel-indicators slide-indicators">
                                <li data-target="#slide-list" data-slide-to="0" class="active"></li>
                                <li data-target="#slide-list" data-slide-to="1"></li>
                                <li data-target="#slide-list" data-slide-to="2"></li>
                            </ol>                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <div class="single-slide">
                        <div class="slide-bg slide-one"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>We are awesome</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dolorem, excepturi. Dolore aliquam quibusdam ut quae iure vero exercitationem ratione!</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi ab molestiae minus reiciendis! Pariatur ab rerum, sapiente ex nostrum laudantium.</p>
                                                <a href="" class="readmore">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-slide">
                        <div class="slide-bg slide-two"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>We are great</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe aspernatur, dolorum harum molestias tempora deserunt voluptas possimus quos eveniet, vitae voluptatem accusantium atque deleniti inventore. Enim quam placeat expedita! Quibusdam!</p>
                                                <a href="" class="readmore">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="single-slide">
                        <div class="slide-bg slide-three"></div>
                        <div class="slide-text-wrapper">
                            <div class="slide-text">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6 col-md-offset-6">
                                            <div class="slide-content">
                                                <h2>We are superb</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eius?</p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti voluptates necessitatibus dicta recusandae quae amet nobis sapiente explicabo voluptatibus rerum nihil quas saepe, tempore error odio quam obcaecati suscipit sequi.</p>
                                                <a href="" class="readmore">Learn more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>        
    </div> <!-- End slider area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-refresh"></i>
                        <p>30 Ngày đổi trả</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-truck"></i>
                        <p>Miễn phí giao hàng</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-lock"></i>
                        <p>Thanh toán an toàn</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo">
                        <i class="fa fa-gift"></i>
                        <p>Mẫu mã mới</pi>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <!-- <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Sản phẩn mới nhất</h2>
                        <div class="product-carousel">
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/ao2.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="" onclick="AddCartProductCookie('Sơ mi công tước thêu GUCCI','1300000',1,'img/ao2.jpg','2.html')" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                        <a href="2.html" class="view-details-link"><i class="fa fa-link"></i>Chi tiết</a>
                                    </div>
                                </div>

                                <h2><a href="2.html">Sơ mi công tước thêu GUCCI</a></h2>

                                <div class="product-carousel-price">
                                    <ins>1.300.000đ </ins> <del>1.500.000đ</del>
                                </div> 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/ao3.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="" onclick="AddCartProductCookie('Áo cộc tay dài GUCCI','1300000',1,'img/ao3.jpg','3.html')" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                        <a href="3.html" class="view-details-link"><i class="fa fa-link"></i>Chi tiết</a>
                                    </div>
                                </div>

                                <h2><a href="3.html">Áo cộc tay-dài GUCCI</a></h2>
                                <div class="product-carousel-price">
                                     <ins>1.300.000đ </ins> <del>1.500.000đ</del>
                                </div> 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/ao4.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="" onclick="AddCartProductCookie('Áo tay dài họa tiết hoa GUCCI','1300000',1,'img/ao4.jpg','4.html')" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                        <a href="4.html" class="view-details-link"><i class="fa fa-link"></i>Chi tiết</a>
                                    </div>
                                </div>

                                <h2><a href="4.html">Áo tay dài-họa tiết hoa GUCCI</a></h2>

                                <div class="product-carousel-price">
                                    <ins>1.300.000đ </ins> <del>1.500.000đ</del>
                                </div>                                 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/ao5.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="" onclick="AddCartProductCookie('Áo lụa với cà vạt cổ GUCCI','1300000',1,'img/ao5.jpg','5.html')" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                        <a href="5.html" class="view-details-link"><i class="fa fa-link"></i>Chi tiết</a>
                                    </div>
                                </div>

                                <h2><a href="5.html">Áo lụa với cà vạt cổ GUCCI</a></h2>

                                <div class="product-carousel-price">
                                    <ins>1.300.000đ </ins> <del>1.500.000đ</del>
                                </div>                                 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/ao6.jpg" alt="">
                                    <div class="product-hover">
                                        <a href="" onclick="AddCartProductCookie('Áo sơ mi tay dài','1300000',1,'img/ao6.jpg','6.html')" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                        <a href="6.html" class="view-details-link"><i class="fa fa-link"></i>Chi tiết</a>
                                    </div>
                                </div>

                                <h2><a href="6.html">Áo sơ mi tay dài</a></h2>

                                <div class="product-carousel-price">
                                    <ins>1.300.000đ </ins> <del>1.500.000đ</del>
                                </div>                                 
                            </div>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="img/ao1.png" alt="">
                                    <div class="product-hover">
                                        <a href="" onclick="AddCartProductCookie('Sơ mi kẻ soc-họa tiết ong','1300000',1,'img/ao1.png','1.html')" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                                        <a href="1.html" class="view-details-link"><i class="fa fa-link"></i>Chi tiết</a>
                                    </div>
                                </div>

                                <h2><a href="1.html">Sơ mi kẻ soc-họa tiết ong</a></h2>

                                <div class="product-carousel-price">
                                    <ins>1.300.000đ </ins> <del>1.500.000đ</del>
                                </div>                                 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> End main content area -->
    
     <!-- End brands area -->
    
     <!-- End product widget area -->

@endsection