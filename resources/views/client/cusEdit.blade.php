@extends('client.template.master')
@section('content')
@if (Session::has('alert-info'))
<div class="alert alert-success">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>{{Session::get('alert-info')}}</strong>
</div>
{{Session::put('alert-info',null)}}
@endif
<div class="row-12">
    <div class="col-4" style="float: left; margin-left:50px">
      <div class="side-bar">
        <div class="sidebar-list widget">
          <h4>Tài khoản của tôi</h4>
          <ul>
            <li><a href="#" class="triangle">Theo dõi đơn hàng</a></li>
            <li><a href="#" class="triangle">Ví voucher</a></li>
            
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
          <form method="POST" action="{{ route('capnhatthongtintaikhoan', ['id'=>$khachhang->kh_id])}}">
              @csrf
              
              <div class="form-group">
                <label for="exampleInputEmail1">Họ tên</label>
              <input  name="hoten" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$khachhang->kh_hoten}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input disabled="disabled" name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$khachhang->kh_email}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Giới tính</label>
                  <input  name="gioitinh" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$khachhang->kh_gioitinh}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Địa chỉ</label>
                  <input  name="diachi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$khachhang->kh_diachi}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Số điện thoại</label>
                  <input name="sdt" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$khachhang->kh_sdt}}">
              </div>
              <div class="form-group">
                  <label for="exampleInputEmail1">Mật khẩu</label>
                  <input name="matkhau" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$khachhang->password}}">
              </div>
              <button type="submit" class="btn btn-primary">Lưu</button>
            <a href="{{route('chitietkhachhang', ['username'=>$khachhang->username] )}}" class="btn btn-default">Quay về</a>
            </form>
        </div>
      </div>
    </div>

</div>
@endsection