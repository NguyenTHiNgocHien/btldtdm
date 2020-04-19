@section('title')
    Đăng nhập
@endsection
@include('client.template.header')

<!-- page title -->
<div class="page_title_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="page_title">
                    <h1>Đăng nhập</h1>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="bredcrumb">
                    <ul>
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#">Đăng nhập</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ page title -->
<div class="margin-bottom-70px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="login">
                    <form action="#">
                        <div class="col-md-7">
                            <div class="email">
                                <label for="your-email">Tài khoản <span class="required">*</span></label><br>
                                <input type="text" name="your-email" value="" class="your-email" id="your-email">
                            </div>
                        </div>
                        
                        <div class="col-md-7">
                            <div class="password">
                                <label for="password">Mật khẩu <span class="required">*</span></label><br>
                                <input type="password" name="password" value="" class="password" id="password"><br>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <a href="#">Quên mật khẩu</a><br>
                        </div>
                        <div class="clear-fix"></div>
                        
                        <div class="col-md-6 text-center">
                            <div class="submit">
                                <a href="#" class="trendify-btn default-bordered">Đăng nhập</a>
                            </div>
                        </div>
                    </form>
                    <div class="login-method">
                        <div class="col-md-3 col-sm-6">
                            <a class="method-facebook" href="#"><i class="fa fa-facebook"></i>Đăng nhập với Facebook</a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a class="method-gmail" href="#"><i class="fa fa-google"></i>Đăng nhập với Gmail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('client.template.footer')