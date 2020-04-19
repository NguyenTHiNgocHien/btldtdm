@extends('client.template.master')
@section('title')
    Sản phẩm
@endsection
@section('content')

<!-- page title -->
<div class="page_title_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="page_title">
                    <h1>Liên hệ chúng tôi</h1>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="bredcrumb">
                    <ul>
                        <li><a href="#">Trang chủ</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/ page title -->

<div class="container">
    <!--  Boxed Content -->
    <div class="row margin-bottom-50px">
        <div class="col-md-4 col-sm-6">
            <div class="boxed-content-container sm-mb-40">
                 <div class="dh-overlay"></div>
                <div class="boxed-content text-center">
                    <h4>Trả lời nhanh</h4>
                    <p>trong vòng<span class="hours"> 48h</span></p>
                    <p>Chúng tôi sẽ phản hồi email của quý khách trong khoảng thời gian nhanh nhất có thể</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="boxed-content-container sm-mb-40">
                <div class="dh-overlay"></div>
                <div class="boxed-content text-center">
                    <h4>Liên hệ hỗ trợ</h4>
                    <p class="phone-email">Phone: (+84) 589 20 2409</p>
                    <span class="and">&</span>
                    <p class="phone-email">E-mail:  lnd240998@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">  
            <div class="boxed-content-container">
                <div class="dh-overlay"></div>
                <div class="boxed-content text-center">
                    <h4>Giờ làm việc</h4>
                    <p><b>Thứ 2. - Thứ 7. : 8 AM -10 PM</b></p>
                    <p><b>Chủ nhật : 10 AM -1 PM</b></p>
                    <p><b><br></b></p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row margin-bottom-70px">	
        <div class="col-md-12">
            <div class="contact login">
                <h3>leave a reply</h3>
                <form action="#">
                    <div class="col-md-6 no-padding-left">
                        <div class="your-name">
                            <label for="your-name">Name <span class="required">*</span></label><br>
                            <input type="text" name="your-name" value="" id="your-name">
                        </div>
                    </div>
                    
                    <div class="col-md-6 no-padding-left">
                        <div class="email">
                            <label for="your-email">Email <span class="required">*</span></label><br>
                            <input type="email" name="your-email" value="" id="your-email">
                        </div>
                    </div>
                    
                    <div class="col-md-6 no-padding-left">
                        <div class="email">
                            <label for="your-subject">Subject</label><br>
                            <input type="text" name="your-subject" value=""  id="your-subject">
                        </div>
                    </div>
                    
                    <div class="col-md-6 no-padding-left">
                        <div class="your-website">
                            <label for="your-website">Website</label>
                            <input type="text" name="your-website" value=""  id="your-website">	
                        </div>
                    </div>
                    
                    <div class="col-md-12 no-padding-left">
                        <div class="your-message">
                            <label for="your-message">Your Message</label><br>
                            <textarea name="your-message" cols="10" rows="6"  id="your-message"></textarea>
                        </div>
                    </div>
                    
                    <div class="clear-fix"></div>
                    
                    <div class="col-md-6 no-padding-left">	
                        <div class="submit col-md-12 no-padding-left">
                            <a href="#" class="trendify-btn black-bordered">Send Message</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection