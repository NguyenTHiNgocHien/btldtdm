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
                    <h1>Đăng nhập / Đăng ký</h1>
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
            <div class="col-md-6">
                <div class="login">
                    <h3>Đăng nhập</h3>
                    <form action="#">
                        <div class="col-md-6 no-padding-left">
                            <div class="email">
                                <label for="your-email">Tài khoản <span class="required">*</span></label><br>
                                <input type="text" name="your-email" value="" class="your-email" id="your-email">
                            </div>
                        </div>
                        
                        <div class="col-md-6 no-padding-right no-padding-left ">
                            <div class="password">
                                <label for="password">Mật khẩu <span class="required">*</span></label><br>
                                <input type="password" name="password" value="" class="password" id="password"><br>
                            </div>
                        </div>
                        <div class="col-md-6 no-padding-left">
                            <a href="#">Quên mật khẩu</a><br>
                        </div>
                        <div class="clear-fix"></div>
                        
                        <div class="col-md-6 no-padding-left">
                            <div class="submit">
                                <a href="#" class="trendify-btn default-bordered">Đăng nhập</a>
                            </div>
                        </div>
                    </form>
                    <div class="login-method col-md-12">
                        <div class="col-md-6 col-sm-6 no-padding-right no-padding-left">
                            <a class="method-facebook" href="#"><i class="fa fa-facebook"></i>Đăng nhập với Facebook</a>
                        </div>
                        <div class="col-md-6 col-sm-6 no-padding-left no-padding-right">
                            <a class="method-gmail" href="#"><i class="fa fa-google"></i>Đăng nhập với Gmail</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="login">
                    <h3>Đăng ký</h3>
                    <form action="#">
                        <div class="col-md-6 no-padding-left">
                            <div class="first-name">
                                <label for="your-first-name">Tên đăng nhập <span class="required">*</span></label><br>
                                <input type="text" name="your-first-name" value="" class="your-first-name" id="your-first-name">
                            </div>
                        </div>
                        
                        <div class="col-md-6 no-padding-right no-padding-left">
                            <div class="last-name">
                                <label for="your-last-name">Mật khẩu <span class="required">*</span></label><br>
                                <input type="text" name="your-last-name" value="" class="your-last-name" id="your-last-name">
                            </div>
                        </div>
                        
                        <div class="col-md-12 no-padding-left">
                            <div class="email">
                                <label for="your-email1">Địa chỉ Email <span class="required">*</span></label><br>
                                <input type="email" name="your-email" value="" class="your-email" id="your-email1">
                            </div>
                        </div>
                        
                        <div class="col-md-6 no-padding-left">
                            <div class="email">
                                <label for="your-email1">Giới tính <span class="required">*</span></label><br>
                                <input type="email" name="your-email" value="" class="your-email" id="your-email1">
                            </div>
                        </div>

                        <div class="col-md-6 no-padding-left">
                            <div class="recapture-text">
                                <label for="confirm-email">Số điện thoại <span class="required">*</span></label><br>
                                <input type="email" name="your-email" value="" class="your-email" id="confirm-email">	
                            </div>
                        </div>

                        <div class="col-md-12 no-padding-left">
                            <div class="recapture-text">
                                <label for="confirm-email">Địa chỉ <span class="required">*</span></label><br>
                                <input type="email" name="your-email" value="" class="your-email" id="confirm-email">	
                            </div>
                        </div>
                        
                        <div class="col-md-6 no-padding-left">						
                            <div class="recapture-text">
                                <label for="recapture">Mã bảo vệ <span class="required">*</span></label><br>
                                <div class="col-md-6 no-padding-left">
                                    <input type="text" name="recapture" value="" class="recapture" id="recapture">
                                </div>
                                <div class="col-md-6 no-padding-left no-padding-right">
                                    <p>{{ $capcha }}</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="clear-fix"></div>
                        
                        <div class="col-md-6 no-padding-left">	
                            <div class="submit col-md-12 no-padding-left">
                                <a href="#" class="trendify-btn bordered">Sing Up</a>
                            </div>
                        </div>	
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('client.template.footer')