@extends('client.template.master')
@section('title')
    Khách hàng
@endsection
@section('content')
{{-- <div class="row-12">
      
  <div class="col-4">
    <div class="side-bar">
      <div class="sidebar-list widget">
        <h4>Tài khoản của tôi</h4>
        <ul>
          <li><a href="{{ route('chitietkhachhang',[ 'username' => Session::get('kh')])}}" class="triagle">Thông tin cá nhân</a></li>
          <li><a href="#" class="triangle">Theo dõi đơn hàng</a></li>
          <li><a href="#" class="triangle">Ví voucher</a></li>
          <li><a href="{{ route('wish-list') }}" class="triangle">Sản phẩm yêu thích</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-8">
    
      <div class="card">
        <div class="card-header" style="margin: 50px 0px 0px 400px">
          <h3 class="card-title">
              Thông tin tài khoản
          </h3>
        </div>
        
        <div class="card-body table-responsive p-2" style="margin: 0px 100px 50px 400px">
          <form method="get" >
              @csrf
              
              <div class="form-group">
                <label for="exampleInputEmail1">Họ tên</label>
              <input disabled="disabled" name="hoten" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$info->kh_hoten}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input disabled="disabled" name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$info->kh_email}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Giới tính</label>
                  <input disabled="disabled" name="gioitinh" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$info->kh_gioitinh}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Địa chỉ</label>
                  <input disabled="disabled" name="diachi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$info->kh_diachi}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Số điện thoại</label>
                  <input disabled="disabled" name="sdt" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$info->kh_sdt}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Mật khẩu</label>
                  <input disabled="disabled" name="matkhau" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$info->password}}">
              </div>
              <a href="{{ route('suathongtintaikhoan', ['id'=>$info->kh_id]) }}" class="btn btn-primary">Sửa</a>
              <a href="{{ route('trangchu')}}" class="btn btn-default">Quay về</a>
            </form>
        </div>
      </div>
    </div>
</div> --}}
<div class="page_title_area">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <div class="page_title">
          <h1>Trang cá nhân</h1>
          
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

{{-- Đổ dữ liệu vào đây --}}
<div class="content">
  <div class="container">
    <div class="row">
      <div class="right-side col-md-9 col-md-push-3 col-sm-12">
        <h2>Thông tin cá nhân</h2>
        <div class="col-md-12">
          <div class="contact login">
            <form action="#">
              <div class="col-md-12 no-padding-left">
                <div class="your-name">
                  <label for="your-name">Họ tên</label><br>
                  <input type="text" name="your-name" value="" id="your-name">
                </div>
              </div>
              <div class="col-md-12 no-padding-left">
                <div class="your-name">
                  <label for="your-name">Tài khoản</label><br>
                  <input type="text" name="your-name" value="" id="your-name">
                </div>
              </div>

              {{-- Không được sửa mật khẩu ở đây nữa --}}
              <div class="col-md-10 no-padding-left">
                <div class="your-name">
                  <label for="your-name">Mật khẩu</label><br>
                  <input type="text" name="your-name" value="********" id="your-name" readonly>
                </div>
              </div>
              <div class="col-md-2">
                <div class="your-name">
                  <br>
                  <label for=""><a href="#" data-toggle="modal" data-target="#exampleModal">Thay đổi</a></label>
                </div>
              </div>


              <div class="col-md-12 no-padding-left">
                <div class="email">
                  <label for="your-email">Email</label><br>
                  <input type="email" name="your-email" value="" id="your-email">
                </div>
              </div>
              
              <div class="col-md-12 no-padding-left">
                <div class="email">
                  <label for="your-subject">Số điện thoại</label><br>
                  <input type="text" name="your-subject" value="" id="your-subject">
                </div>
              </div>
              
              <div class="col-md-6 no-padding-left">
                <div class="your-website">
                  <label for="your-website">Giới tính</label>
                  <input type="text" name="your-website" value="" id="your-website">	
                </div>
              </div>
              
              <div class="col-md-12 no-padding-left">
                <div class="your-message">
                  <label for="your-message">Địa chỉ</label><br>
                  <textarea name="your-message" cols="10" rows="6" id="your-message"></textarea>
                </div>
              </div>
              
              <div class="clear-fix"></div>
              
              <div class="col-md-6 no-padding-left">	
                <div class="submit col-md-12 no-padding-left">
                  <a href="#" class="trendify-btn black-bordered">Cập nhật thông tin</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-md-pull-9 col-sm-12">
        <div class="side-bar">
          <div class="sidebar-list widget">
            <h4>Tài khoản cá nhân</h4>
            <ul>
              <li><a href="#" class="triangle">Thông tin cá nhân</a></li>
              <li><a href="#" class="triangle">Ví voucher</a></li>
              <li><a href="{{ route('get-orders') }}" class="triangle">Đơn hàng</a></li>
              <li><a href="{{ route('wish-list') }}" class="triangle">Sản phẩm yêu thích</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


{{-- Viết code xử lý đổi mật khẩu vào đây --}}
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Thay đổi mật khẩu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="padding: 20px;">
        <form action="">
          <div class="form-group">
            <label for="">Mật khẩu</label>
            <input type="password" class="form-control" name="" id="">
          </div>
          <div class="form-group">
            <label for="">Xác nhận mật khẩu</label>
            <input type="password" class="form-control" name="" id="">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection