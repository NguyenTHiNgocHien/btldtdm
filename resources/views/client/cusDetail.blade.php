@extends('client.template.master')
@section('content')
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
</div>

@endsection