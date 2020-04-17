@extends('admin.template.master')
@section('content')
  
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-4">
        <h1>Sản phẩm</h1>
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-4">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
          <li class="breadcrumb-item active">Sản phẩm</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>

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
            <a href="#" class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Thêm Sản phẩm</a>
          </h3>

          <div class="card-title">
            
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap" id="category_table">
            <thead>
              <tr>
                <th>STT</th>
                <th>Tên Sản phẩm</th>
                <th>Loại</th>
                <th>Số lượng</th>
                <th>Giá bán</th>
                <th>Giá khuyễn mãi</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
              </tr>
            </thead>
            <tbody>
              <?php $stt = 1; ?>
              @foreach ($sanpham as $item => $value)
              <tr>
                <td>{{$stt++}}</td>
                <td>{{$value->sp_ten}}</td>
                <td>{{ $value->l_ten }}</td>
                <td>{{ $value->sp_soluong == NULL ? 'Chưa nhập hàng' : $value->sp_soluong }}</td>
                <td>
                  @if ($value->sp_giaban == 0)
                      <p>Chưa nhập giá bán</p>
                  @else
                      {{ number_format($value->sp_giaban) }}
                  @endif
                </td>
                <td>{{ number_format($value->sp_giakhuyenmai) == 0 ? 'Chưa có khuyễn mãi' : number_format($value->sp_giakhuyenmai) }}</td>
                @if ($value->sp_trangthai == 1)
                  <td><span class="badge bg-green">Còn hàng</span></td>
                @else
                    <td><span class="badge bg-red">Hết hàng</span></td>
                @endif
                <td>
                  <a href="{{ route('chitietsanpham', ['id'=>$value->sp_id]) }}" class="btn btn-default">Chi tiết</a>
                  <a href="{{ route('suathongtinsanpham', ['id'=>$value->sp_id]) }}" class="btn btn-primary">Sửa</a>
                  <a href="{{ route('suaxuatxu', ['id'=>$value->sp_id]) }}" class="btn btn-danger">Xóa</a>
                </td>
              </tr>
              @endforeach

            </tbody>
            
          </table>
          <nav aria-label="Page navigation example">
            {!! $sanpham->links() !!}
          </nav>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>

    {{-- Form thêm loại ở đây --}}
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Thêm Sản phẩm</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="POST" action="{{ route('themsanpham') }}">
              @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Tên sản phẩm</label>
                <input name="tenSP" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tên loại sản phẩm . . . ">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Loại sản phẩm</label>
                <select class="form-control" id="exampleFormControlSelect1" name="loai">
                    @foreach ($loai as $item => $value)
                      <option value="{{$value->l_id}}">{{$value->l_ten}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Công dụng</label>
              <select class="form-control" id="exampleFormControlSelect1" name="congDung">
                  @foreach ($congdung as $item => $value)
                    <option value="{{$value->cd_id}}">{{$value->cd_ten}}</option>
                  @endforeach
              </select>
          </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Mô tả sản phẩm</label>
              <textarea name="thongTin" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Giá bán</label>
              <input name="giaBan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nhập tên loại sản phẩm . . . ">
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