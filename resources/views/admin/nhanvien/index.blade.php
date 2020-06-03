@extends('admin.template.master')
@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Nhân viên</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('admin') }}">Trang chủ</a></li>
              <li class="breadcrumb-item active">Nhân viên</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row d-flex align-items-stretch">
            @foreach ($nhanvien as $item)
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
              <div class="card bg-light">
                <div class="card-header text-muted border-bottom-0">
                Mã nhân viên : {{ $item->nv_id }}
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-8">
                      <h2 class="lead"><b></b></h2>
                      <p class="text-muted text-sm"><b>Tên: {{ $item->nv_ten }}</b>  </p>
                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span>Đ/c: {{ $item->nv_diachi }}</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span>SĐT: {{ $item->nv_sdt }}</li>
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-at"></i></span>Gmail: {{ $item->nv_email }}</li>
                        
                      </ul>
                    </div>
                    <div class="col-4 text-center">
                      {{-- <img src="{{ asset('front-end/avata-women.png') }}" alt="" class="img-circle img-fluid"> --}}
                      {{-- @if ($item->kh_gioitinh == "Nam") --}}
                        <img src="{{ asset('front-end/avata-men.png') }}" alt="" class="img-circle img-fluid">
                      {{-- @else --}}
                        {{-- <img src="{{ asset('front-end/avata-women.png') }}" alt="" class="img-circle img-fluid"> --}}
                      {{-- @endif --}}
                      
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="#" class="btn btn-sm btn-primary">
                        <i class="fas fa-user"></i> Chỉnh sửa
                    </a>
                    <a href="#" class="btn btn-sm bg-danger">
                      <i class="fas fa-trash"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <nav aria-label="Contacts Page Navigation">
            <ul class="pagination justify-content-center m-0">
                {{-- {!! $khachhang->links() !!} --}}
            </ul>
          </nav>
        </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection