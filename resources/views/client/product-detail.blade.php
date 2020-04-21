@extends('client.template.master')

@section('title')
    {{ $product->sp_ten }}
@endsection

@section('content')
<div class="page_title_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="page_title">
                    <h1>Chi tiết sản phẩm</h1>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="bredcrumb">
                    <ul>
                        {{-- <li><a href="#">Home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Men's</a></li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- content area -->
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="col-md-6">
                    <div class="single-slider-item">
                        <ul class="owl-slider">
                            @foreach ($productImage as $item => $value)
                            <li class="item">
                                <img src="{{ asset('upload/sanpham/'.$value->ha_ten) }}" alt="" class="img-responsive">
                            </li>
                            @endforeach
                        </ul>
                        <ul class="thumbnails-wrapper">
                            @foreach ($productImage as $item => $value)
                            <li class="thumbnail">
                                <a href="#"><img src="{{ asset('upload/sanpham/'.$value->ha_ten) }}" alt="" class="img-responsive"></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-content">
                        <a href="#"><h3>{{ $product->sp_ten }}</h3></a>
                        <div class="rated">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li class="un-rated"><i class="fa fa-star"></i></li>
                            </ul>
                            <span>(24 reviews)</span>
                        </div>
                        @if ($product->sp_giakhuyenmai == '')
                            <span class="amount">{{ number_format($product->sp_giaban) }}đ</span>
                        @else
                            <span class="amount off">{{ number_format($product->sp_giaban) }}đ</span>
                            <span class="amount">{{ number_format($product->sp_giakhuyenmai) }}đ</span>
                        @endif
                        <br>
                        <span class="sku">Còn {{ $product->sp_soluong }} sản phẩm trong kho</span>
                        
                        <div class="product-desc">
                            <span class="item-number"><b>Mã sản phẩm:</b>  SP-{{ $product->sp_id }}</span><br>
                            <span class="item-cat"><b>Loại sản phẩm:</b>  {{ $category->l_ten }}</span>
                        </div>
                        <div>
                            <div class="quantity">
                                <label>Số lượng</label><input type="number" step="1" min="0" max="99" name="cart" value="1" title="Qty" class="qty">
                            </div>
                            <div class="add-to-cart">
                                <a href="#" class="trendify-btn black-bordered">Add To Cart</a>
                            </div>
                        </div>
                        <br>
                        <div class="fb-like" data-href="{{ asset('') }}{{ Request::path() }}" data-width="" data-layout="button" data-action="like" data-size="large" data-share="false">
                        </div>
                        <div class="fb-share-button" data-href="{{ asset('') }}{{ Request::path() }}" data-layout="button" data-size="large">
                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">
                            Chia sẻ</a>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="product-tab">
                        <ul class="nav nav-tabs">
                            <li class="nav active"><a data-toggle="tab" href="#tab1">MÔ TẢ SẢN PHẨM</a></li>
                            <li><a data-toggle="tab" href="#tab2">ĐÁNH GIÁ KHÁCH HÀNG</a></li>
                            <li><a data-toggle="tab" href="#tab3">ĐÁNH GIÁ MẠNG XÃ HỘI</a></li>
                        </ul>

                        <div class="tab-content">
                            <div id="tab1" class="tab-pane active">
                                <h3>Thông tin chi tiết về sản phẩm</h3>
                                <p>{{ $product->sp_thongtin }}</p>
                                <p>Tác dụng: </p>
                                <p>Tác dụng phụ: </p>
                            </div>
                            <div id="tab2" class="tab-pane">
                                <h3>Bình luận bằng tài khoản khách hàng</h3>
                                <p>Sử dụng tài khoản khách hàng để bình luận</p>
                            </div>
                            <div id="tab3" class="tab-pane">
                                <h3>Bình luận bằng Facebook</h3>
                                <p>Sử dụng tài khoản facebook để bình luận về sản phẩm</p>
                                <div class="fb-comments" data-href="{{ asset('') }}{{ Request::path() }}" data-numposts="5" data-width=""></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="related-products margin-top-70px">
                        <h4>Sản phẩm vừa xem</h4>
                        <ul class="related-products-slider">
                            <li class="item">
                                <div class="product-single">
                                    <div class="product-img">
                                        <img class="img-responsive" alt="Single product" src="{{ asset('front-end-2') }}/img/single_1.jpg">
                                        <div class="actions">
                                            <ul>
                                                <li><a class="zoom" href="{{ asset('front-end-2') }}/img/single_1.jpg"><i class="fa fa-search"></i></a></li>
                                                <li><a href="#"><i class="fa fa-heart-o"></i></a></li>
                                                <li><a href="product-details-1.html"><i class="fa fa-expand"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <h2>New Look Stripe T-Shirt</h2>
                                        <div class="star-rating">
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star-half-full"></i></li>
                                            </ul>
                                        </div>
                                        <div class="price">
                                            <del> $50 </del> $40
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- pagination -->
                    <div class="pagination">
                        
                    </div>
                    <!-- / pagination -->
                </div>
            </div>

            
        </div>
    </div>
</div>
<!-- / content area -->
@endsection