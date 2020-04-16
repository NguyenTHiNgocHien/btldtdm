
@section('title')
    {{ $product->sp_ten }}
@endsection
@include('client.template.header')

	<!-- page title -->
	<div class="page_title_area">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div class="page_title">
						<h1>SẢN PHẨM</h1>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="bredcrumb">
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Shop</a></li>
							<li><a href="#">Men's</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ page title -->
	
	
	<!-- content area -->
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="col-md-6">
						<div class="single-slider-item">
							<ul class="owl-slider">
                                @foreach ($productImage as $item)
								<li class="item">
									<img src="{{ asset('upload/sanpham') }}/{{ $item->ha_ten }}" alt="" class="img-responsive">
                                </li>
                                @endforeach
							</ul>
							<ul class="thumbnails-wrapper">
                                @foreach ($productImage as $item)
								<li class="thumbnail">
									<a href="#"><img src="{{ asset('upload/sanpham') }}/{{ $item->ha_ten }}" alt="" class="img-responsive"></a>
                                </li>
                                @endforeach
							</ul>
						</div>
					</div>
					<div class="col-md-6">
						<div class="right-content">
							<h3>{{ $product->sp_ten }}</h3>
							<div class="rated">
								<ul>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li class="un-rated"><i class="fa fa-star"></i></li>
								</ul>
							</div>
                            {{-- <span class="amount off"></span> --}}
                            <br>
							<span class="amount">@if (number_format($product->sp_giakhuyenmai) == 0)
								{{ number_format($product->sp_giaban) }} đ
							@else
								<p style="text-decoration: line-through">{{ number_format($product->sp_giaban) }} đ</p>
								<p style="color: red;">Giá giảm: {{ number_format($product->sp_giakhuyenmai) }} đ</p>
							@endif</span>
                            <h4>Công dụng</h4>
                            <p>{{ $product->cd_ten }}</p>
							
							<div class="clear-fix"></div>
							
							<div>
								<div class="quantity">
									<label>Số lượng</label><input type="number" step="1" min="0" max="99" name="cart" value="1" title="Qty" class="qty">
								</div>
								<div class="add-to-cart">
									<a href="#" class="trendify-btn black-bordered">Thêm vào giỏ hàng</a>
								</div>
							</div>
							<div class="product-desc">
                                <span class="item-number"><b>Mã số sản phẩm:</b>  #{{$product->sp_id}} </span><br>
								<span class="item-cat"><b>Category:</b>  {{$product->l_ten}}</span>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="product-tab">
							<ul class="nav nav-tabs">
								<li class="nav active"><a data-toggle="tab" href="#tab1">Thông tin chi tiết</a></li>
								<li><a data-toggle="tab" href="#tab2">Đánh giá</a></li>
							</ul>

							<div class="tab-content">
								<div id="tab1" class="tab-pane active">
									<p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores duo eirmod eos erat, et nonumy sed tempor et et invidunt justo labore Stet clita ea et gubergren, kasd magna no rebum. sanctus sea sed takimata ut vero voluptua. est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur.</p>
									<ul class="list-tab">
										<li>A tailored, modern cut with a roomier fit than our suit, for the guy with an athletic build</li>
										<li>Notch lapel</li>
										<li>Italian cotton.</li>
										<li>Two-button closure.</li>
										<li>Nonfunctional buttons at cuffs.</li>
										<li>Dry clean.</li>
										<li>Import</li>
									</ul>
								</div>
								<div id="tab2" class="tab-pane">
                                    <h3>Người dùng 1</h3>
                                    <div class="rated">
                                        <ul>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                    </div>
                                    <br>
                                    <p>Sản phẩm xài tốt lắm</p>
                                    <hr>
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
                            <div class="related-products latest-product margin-bottom-60px">
                                <div class="col-sm-12">
                                    <h4>Sản phẩm cùng loại</h4>
                                </div>
                                @foreach ($productCate as $item)
                                <div class="col-md-3 col-sm-6">
                                    <div class="single-latest-product inside">
                                        <span class="price-label">{{ number_format($item->sp_giaban) }}đ</span>
                                        <img class="img-responsive" src="{{ asset('front-end-2/img/lastest-product-1.png') }}" alt="Shoe">
                                        <h4 class="margin-bottom-0">{{ $item->sp_ten }}</h4>
                                        <div class="actions">
                                            <div class="row">
                                            <div class="col-md-6">
                                                <a href="#"><i class="fa fa-plus"></i>Add Cart</a>
                                            </div>
                                            <div class="col-md-6">
                                                <ul class="pull-right">
                                                    <li><a href="{{ route('sanpham', ['idProduct'=> $item->sp_id]) }}"><i class="fa fa-expand"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
					</div>
				</div>

				
			</div>
		</div>
	</div>
	<!-- / content area -->

@include('client.template.footer')