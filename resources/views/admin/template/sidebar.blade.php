 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('trangchu') }}" class="brand-link">
      <img src="{{asset('front-end')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Trang chủ</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('front-end')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Ông chủ</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          {{-- Cái sidebar sửa ở đây là được --}}
          <li class="nav-item ">
            <a href="{{ route('admin') }}" class="nav-link  {{ Request::path() == 'admin' ? 'active' : '' }}">
              <i class="nav-icon far fa-heart"></i>
              <p>
                Bảng điều khiển
              </p>
            </a>
          </li>
          <li class="nav-item ">
            <a href="{{ route('danhsachloai') }}" class="nav-link  {{ Request::path() == 'admin/loai' ? 'active' : '' }}">
              <i class="nav-icon far fa-heart"></i>
              <p>
                Loại sản phẩm
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('danhsachxuatxu') }}" class="nav-link {{ Request::path() == 'admin/xuatxu' ? 'active' : '' }}">
              <i class="nav-icon far fa-heart"></i>
              <p>
                Xuất xứ sản phẩm
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('danhsachlo') }}" class="nav-link {{ Request::path() == 'admin/lo' ? 'active' : '' }}">
              <i class="nav-icon far fa-heart"></i>
              <p>
                Lô hàng
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('danhsachsanpham') }}" class="nav-link {{ Request::path() == 'admin/sanpham' ? 'active' : '' }}">
              <i class="nav-icon far fa-heart"></i>
              <p>
                Sản phẩm
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link {{ Request::path() == 'admin/congdung' ? 'active' : '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Tác dụng
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('danhsachcongdung') }}" class="nav-link" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tác dụng chính</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('danhsachcongdungphu') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tác dụng phụ</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link ">
              <i class="nav-icon far fa-heart"></i>
              <p>
                Khuyến mãi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Theo loại sản phẩm</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Theo khách hàng</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('voucher') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tạo voucher</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{ route('banner') }}" class="nav-link ">
              <i class="nav-icon far fa-heart"></i>
              <p>
                Banner
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon far fa-heart"></i>
              <p>
                Đơn hàng
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('thongke') }}" class="nav-link {{ Request::path() == 'admin/thong-ke' ? 'active' : '' }}">
              <i class="nav-icon far fa-heart"></i>
              <p>
                Thống kê
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>