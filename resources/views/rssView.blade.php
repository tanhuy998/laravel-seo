@extends('layouts\master')

@section('content')
<div class="single-product-area">

    <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="row">
                        <h2>RSS Feed</h2>
                    </div>

                    <div class="rss-title">
                        <h3>Category</h3>
                    </div>
                    @foreach ($categories as $category)
                    <div class="rss-link">
                        <a href="{{ route('rss-api', ['category' => $category->slug]) }}"><h4>{{ $category->name }}</h4></a>
                    </div>
                    @endforeach
                </div>

                <div class="col-md-8">
                    <div class="product-content-right">
                        <!-- <div class="product-breadcroumb">
                            <a href="index.html">Trang chủ</a>
                            <a href="shop-ao.html">Áo</a>
                            <a href="#">Áo cộc tay dài GUCCI</a>
                        </div> -->
                        
                                                <h4>Khái niệm RSS</h4>  
                                                <div class="content">RSS ( viết tắt từ Really Simple Syndication ) là một tiêu chuẩn định dạng tài liệu dựa trên XML nhằm giúp người sử dụng dễ dàng cập nhật và tra cứu thông tin một cách nhanh chóng và thuận tiện nhất bằng cách tóm lược thông tin vào trong một đoạn dữ liệu ngắn gọn, hợp chuẩn.

Dữ liệu này được các chương trình đọc tin chuyên biệt ( gọi là News reader) phân tích và hiển thị trên máy tính của người sử dụng. Trên trình đọc tin này, người sử dụng có thể thấy những tin chính mới nhất, tiêu đề, tóm tắt và cả đường link để xem toàn bộ tin.</div>

                                                
                                            </div>
                        
                        
                    </div>                    
                </div><!-- .phai -->
            </div>
        </div>
    </div>



   
    
@endsection