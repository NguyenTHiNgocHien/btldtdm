@extends('client.template.master')
@section('title')
    Thanh toán
@endsection
@section('content')
    <!-- page title -->
	<div class="page_title_area">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div class="page_title">
						<h1>Thanh toán</h1>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="bredcrumb">
						<ul>
							<li><a href="#">Trang chủ</a></li>
							<li><a href="#">Thanh toán</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--/ page title -->
	<form action="{{ route('checkout2') }}">
	<div class="checkout margin-bottom-70px">
		<div class="container">
			<div class="row">
					<div class="col-md-12">
						<div class="billing margin-bottom-50px">
							<h1 class="text-center">Thông tin khách hàng</h1>
							<div class="info-sec">
								<div class="last-name col-md-12 no-padding-left no-padding-right">
									<label for="last-name">Họ tên <span class="required">*</span></label><br>
									<input type="text" name="last-name" value="{{ $khachhang->kh_hoten }}"  id="last-name">
								</div>
								
								<div class="company-name">
									<label for="company-name">Số điện thoại</label><br>
									<input type="text" name="company-name" value="{{ $khachhang->kh_sdt }}" id="company-name">
								</div>
								
								<div class="your-address">
									<label for="company-name">Địa chỉ<span class="required">*</span></label>
									<input type="text" name="your-address" value="{{ $khachhang->kh_diachi }}" id="your-address">
								</div>
							</div>
						</div>
					</div>
			</div>
			
			<div class="row">
				<div class="col-md-6">
					<div class="cart-totals">
						<h1 class="text-center">Giỏ hàng</h1>
						<div class="info-sec">
							<table>
								<tbody>
									<tr class="cart-subtotal" >
										<td colspan="3" style="padding-left: 35px; font-weight: bold;">Giá tiền</td>
										<td class="subtotal">$904</td>
                                    </tr>
                                    @foreach ($cart as $item)
									<tr class="product-info">
										<td colspan="3">
										<span class="quantity">{{ $item->quantity }}</span>
										<span class="product-name">{{ $item->name }}</span>
										</td>
										<td>{{ number_format($item->price) }}</td>
                                    </tr>
                                    @endforeach
									
									<tr class="order-shipping">
										<th colspan="3">Phí ship</th>
										<td class="shipping">30.000</td>
									</tr>
									<tr class="order-total">
										<th colspan="3">Tổng tiền</th>
										<td class="amount"><strong>{{ number_format($totalPrice + 30000) }}</strong></td>
									</tr>			
								</tbody>
							</table>
							<div class="cupon-code margin-top-20px">
								<input type="submit" name="checkout" value="Đặt hàng" class="btn-black calculate">
							</div>
						</div>
					</div>
				</div>
				{{-- comment --}}
				
				{{-- <div class="col-md-6">
					<div class="payment">
						<h3>Mã giảm giá:</h3>
						<div class="payment-method">
							<table>
								<tbody>
									<tr class="">
									</tr>		
								</tbody>
							</table>
							<span>PayPal</span>
							<p>At vero eos et accusam et justo duo dolores et ea rebum. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed. More information here.</p>
							
						</div>
						<div class="cupon-code text-right margin-top-20px">
							<input type="submit" name="checkout" value="Chọn phương thức" class="btn-black calculate">
						</div>
					</div>
				</div> --}}
			</div>
		</div>
	</div>
	</form>

@endsection