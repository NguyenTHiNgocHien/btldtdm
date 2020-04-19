<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kl-webmedia.com/demo/trendify/home-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 Sep 2018 07:40:31 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        Beutiful Shop - @yield('title')
    </title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="{{ asset('front-end-2/css/bootstrap.min.css')}}">
  
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('front-end-2/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{ asset('front-end-2/css/eleganticon.css')}}">
	
	<!-- MAGNIFIC POPUP -->
    <link rel="stylesheet" href="{{ asset('front-end-2/css/magnific-popup.css')}}">
	
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="{{ asset('front-end-2/css/owl.carousel.css')}}">
	
    <!-- ANIMATE CSS -->
    <link rel="stylesheet" href="{{ asset('front-end-2/css/animate.css')}}">
	
    <!-- SLIDER REVOLUTION -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end-2/assets/plugins/rs-plugin/css/settings-ie8.css')}}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end-2/assets/plugins/rs-plugin/css/settings.css')}}" media="screen" />
    <link rel="stylesheet" href="{{ asset('front-end-2/css/slider.css')}}">
    
	<!-- STYLESHEET -->
	<link rel="stylesheet" href="{{ asset('front-end-2/css/header.css')}}">
    <link rel="stylesheet" href="{{ asset('front-end-2/css/footer.css')}}">
	<link rel="stylesheet" href="{{ asset('front-end-2/style.css')}}">
	<link rel="stylesheet" href="{{ asset('front-end-2/css/responsive.css')}}">
	
	<!-- GOOGLE FONTS -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,600,500,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Playfair+Display' rel='stylesheet' type='text/css'>
	
	<!-- FAVICON -->
	<link rel="icon" href="img/favicon.ico">
	<link rel="apple-touch-icon" href="{{ asset('front-end-2/img/apple-touch-icon.png') }}')}}">
	<link rel="apple-touch-icon" sizes="72x72" href="{{ asset('front-end-2/img/apple-touch-icon-72x72.png') }}')}}">
	<link rel="apple-touch-icon" sizes="114x114" href="{{ asset('front-end-2/img/apple-touch-icon-114x114.png') }}')}}">
    <script src="{{ asset('front-end-2/js/jquery.min.js') }}"></script>
    
</head>

<body class="home1">

    <!-- header -->
    <div class="header">
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="left"> Công ty mỹ phẩm Asley<span><i class="fa fa-phone"></i>Call us</span> +84 589 20 2409</div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="right">
                            <ul>
                                {{-- <li class="toggle">
                                    <span>USD</span> <i class="fa fa-angle-down"></i>
                                    <ul>
                                        <li>USD</li>
                                        <li>EUR</li>
                                    </ul>
                                </li> --}}
                                <li>
                                    <a href="{{ route('dangnhapkhachhang') }}">Đăng nhập</a>
                                    /
                                    <a href="{{ route('dangkykhachhang') }}">Đăng ký</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="logo-part">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12 search">
                        <form>
                            <input type="text" name="search" placeholder="Tìm kiếm sản phẩm" />
                            <button type="submit"><span class="arrow_right"></span></button>
                        </form>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 text-center">
                        <img src="{{ asset('front-end-2/img/logo.png') }}" width="120" height="100" alt="Trendify logo" />
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-6 cart-icon">
                        <div class="cart">
                            <a href="#">
                                <img alt="cart" src="{{ asset('front-end-2/img/cart.png') }}">
                                <span>2</span>
                            </a>
                        
							<div class="cart-list hidden-xs">
								<h5 class="title">your shopping cart <span>(2 items)</span></h5>
								<div class="cart-item">
									<img class="img-responsive" alt="Single product" src="{{ asset('front-end-2/img/products/1.jpg') }}">
									<span class="icon_close close-icon"></span>
									<div class="product-info">
										<h5>New Yorker Suit</h5>
										<div class="star-rating">
											<ul>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star-half-full"></i></li>
											</ul>
										</div><br>
										<div class="price">
											<del> $399 </del> $259
										</div>
									</div>
								</div>
								
								<div class="order-total">
									<h5 class="title">TOTAL ON YOUR CART<span class="amount">$166</span></h5>
								</div>
								<a href="cart.html" class="trendify-btn black-bordered">View Cart</a>
								<a href="checkout.html" class="trendify-btn black-bordered">Checkout</a>
							</div>
						</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="navbar trendify-nav megamenu">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="{{ Request::path() == '/' ? 'active' : '' }}"><a href="{{ route('trangchu') }}">Trang chủ</a></li>
                        <li class="
                                @if (Request::path() == 'san-pham')
                                active
                                @endif
                                @if (Request::path() == 'san-pham-2')
                                active
                                @endif
                                "><a href="{{ route('tatcasanpham') }}">Sản phẩm</a></li>
                        <li class="dropdown
                            @if (Request::path() == 'loai-san-pham/1' ||
                                Request::path() == 'loai-san-pham/2' ||
                                Request::path() == 'loai-san-pham/3' )
                            active
                            @endif

                        ">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Loại sản phẩm</a>
                            <ul class="dropdown-menu">
                                @foreach ($loai as $item)
                                    <li><a href="{{ route('loaisanpham', ['idCategory'=> $item->l_id]) }}">{{ $item->l_ten }}</a></li>
                                @endforeach
                            </ul>
                        </li>
						{{-- <li class="dropdown {{ Request::path() == '/loai-san-pham' ? 'active' : '' }}">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Công dụng</a>
                            <ul class="dropdown-menu">
                                @foreach ($congdung as $item)
                                    <li><a href="">{{ $item->cd_ten }}</a></li>
                                @endforeach
                            </ul>
                        </li> --}}
                        <li class="{{ Request::path() == 'gioi-thieu' ? 'active' : '' }}"><a href="{{ route('gioithieu') }}">Giới thiệu</a></li>
                        <li><a href="{{ route('lienhe') }}">Liên hệ</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

            </div>
            <!-- /.container-fluid -->
        </div>

    </div>
    <!-- / header -->