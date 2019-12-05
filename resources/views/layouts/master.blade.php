<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="domain" content="{{ route('home') }}">

    <meta property="og:url"                    content="{{route('home')}}"/>
    <meta property="og:type"                   content="website"/>
    <meta property="og:title"         content="eFashion - Thời trang" />
    <meta property="og:description"   content="Giao Hàng Nhanh Miễn Phí ✓ Bảo Hành 365 Ngày ✓ 7 Ngày Đổi Hàng Miễn Phí. Mua Online Giá Rẻ Bất Ngờ." />
    <meta property="og:image"         content="" />

    @if ($page == 6)
    <meta name="description" content="RSS ( viết tắt từ Really Simple Syndication ) là một tiêu chuẩn định dạng tài liệu dựa trên XML nhằm giúp người sử dụng dễ dàng cập nhật và tra cứu thông tin một cách nhanh chóng và thuận tiện nhất bằng cách tóm lược thông tin vào trong một đoạn dữ liệu ngắn gọn, hợp chuẩn.

Dữ liệu này được các chương trình đọc tin chuyên biệt ( gọi là News reader) phân tích và hiển thị trên máy tính của người sử dụng. Trên trình đọc tin này, người sử dụng có thể thấy những tin chính mới nhất, tiêu đề, tóm tắt và cả đường link để xem toàn bộ tin." />
    @else 
    <meta name="description" content="Giao Hàng Nhanh Miễn Phí ✓ Bảo Hành 365 Ngày ✓ 7 Ngày Đổi Hàng Miễn Phí. Mua Online Giá Rẻ Bất Ngờ." />
    @endif
    
    <meta name="robots" content="notranslate">

    <meta name="geo.region" content="VN" />
    <meta name="geo.placename" content="Ward 3" />
    <meta name="geo.position" content="10.760788;106.682337" />
    <meta name="ICBM" content="10.760788, 106.682337" />

    <title>eFashion - Thời trang</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('/resources/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('/resources/css/responsive.css')}}">
    <link rel="stylesheet" href="{{ asset('/resources/css/dropstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('/resources/css/rss.css') }}">
    <link rel="stylesheet" href="{{ asset('/resources/css/owl.carousel.css') }}">

    <script type="text/javascript" src="{{ asset('/resources/js/lib.js') }}"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-153492348-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-153492348-1');
        
    </script>



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body onload="Update()">
   
    <!-- <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <li><a href="#"><i class="fa fa-user"></i> My Account</a></li>
                            <li><a href="#"><i class="fa fa-user"></i> Login</a></li>
                        </ul>
                    </div>
                </div>
            
            </div>
        </div>
    </div> End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="index.html">e<span>Fashion</span></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.html" id="cart-notification">Cart<!-- - <span class="cart-amunt">$800</span>--><i class="fa fa-shopping-cart"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li {{ ($page == 1)? 'class=active': '' }}><a href="{{ route('home') }}">TRANG CHỦ</a></li>
                        <li {{ ($page == 2)? 'class=active': '' }}>
                            <div class="dropdown">
                                <button class="dropbtn">SẢN PHẨM</button>
                                <div class="dropdown-content">
                                    @foreach( $category_list as $category)
                                  <a href="{{ route('shop', ['category' => $category->slug]) }}">{{ $category->name }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </li>
                        <li {{ ($page == 3)? 'class=active': '' }}><a href="{{ route('cart') }}">Giỏ hàng</a></li>
                        <li {{ ($page == 4)? 'class=active': '' }}><a href="{{ route('checkout') }}">Thanh toán</a></li>
                        <!-- <li><a href="#">Category</a></li> -->
                        <!-- <li><a href="#">Others</a></li> -->
                        <li>
                            <div class="dropdown">
                                <button class="dropbtn">LIÊN HỆ</button>
                                <div class="dropdown-content">
                                    <a href="#">Facebook</a>
                                    <a href="#">Instagram</a>
                                    <a href="#">Địa chỉ shop</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    @yield('content')
    
    
    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>e<span>Fashion</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User Navigation </h2>
                        <ul>
                            <li><a href="#">My account</a></li>
                            <li><a href="#">Order history</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Vendor contact</a></li>
                            <li><a href="#">Front page</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            <li><a href="#">Mobile Phone</a></li>
                            <li><a href="#">Home accesseries</a></li>
                            <li><a href="#">LED TV</a></li>
                            <li><a href="#">Computer</a></li>
                            <li><a href="#">Gadets</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Type your email">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2015 eFashion. All Rights Reserved. Coded with <i class="fa fa-heart"></i> by <a href="http://wpexpand.com" target="_blank">WP Expand</a></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="{{ asset('/resources/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/resources/js/jquery.sticky.js') }}"></script>
    
    <!-- jQuery easing -->
    <script src="{{ asset('/resources/js/jquery.easing.1.3.min.js') }}"></script>
    
    <!-- Main Script -->
    <script src="{{ asset('/resources/js/main.js') }}"></script>
    @include('layouts.fbMessenger')
  </body>
</html>