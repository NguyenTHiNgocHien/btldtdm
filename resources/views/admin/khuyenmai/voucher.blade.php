@extends('admin.template.master')
@section('content')

<div class="col-12">
    @if (Session::has('alert-info'))
      <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>{{Session::get('alert-info')}}</strong>
      </div>
      {{Session::put('alert-info',null)}}
    @endif
    @if (Session::has('alert-del'))
      <div class="alert alert-danger">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
          <strong>{{Session::get('alert-del')}}</strong>
      </div>
      {{Session::put('alert-del',null)}}
    @endif
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">
          <a href="#" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Thêm voucher</a>
        </h3>

        <div class="card-title">
          
        </div>
      </div>
      <div class="card-header">
        <div class="form-group ml-1 mr-1">
          {{-- <label>Tìm kiếm</label> --}}
          <input type="text" class="form-control" name="search" id="search" placeholder="Nhập tên sản phẩm">
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap" >
          <thead>
            <tr>
              <th>STT</th>
              <th>Tên khuyến mãi</th>
              <th>Mã code</th>
              <th>Ngày tạo</th>
              <th>Ngày cập nhật</th>
              <th>Thao tác</th>
            </tr>
          </thead>
          <tbody id="category_table">
            
          </tbody>
          
        </table>
        <nav aria-label="Page navigation example">
          {{-- {!! $loai->links() !!} --}}
        </nav>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Thêm mã voucher</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="">
            @csrf
            <div class="form-group">
              <label  >Tên khuyến mãi</label>
              <input name="tenCD" type="text" class="form-control" placeholder="Tên khuyến mãi . . . ">
            </div>
            <div class="form-group">
                <label  >Nội dung khuyến mãi</label>
                <textarea name="" class="form-control" cols="20" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label  >Mã voucher</label>
                <input name="tenCD" type="text" class="form-control" placeholder="Mã voucher ">
              </div>
              <div class="form-group">
                <label  >Số lượng voucher</label>
                <input name="tenCD" type="number" class="form-control">
              </div>
              <div class="form-group">
                <label  >Giá trị voucher</label>
                <input name="tenCD" type="number" class="form-control">
              </div>
              <div class="form-group">
                <label  >Ngày bắt đầu</label>
                <input name="tenCD" type="date" class="form-control">
              </div>
              <div class="form-group">
                <label  >Ngày kết thúc</label>
                <input name="tenCD" type="date" class="form-control">
              </div>
            <button type="submit" class="btn btn-primary" id="add">Thêm</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        </div>
      </div>
    </div>
  </div>
@endsection