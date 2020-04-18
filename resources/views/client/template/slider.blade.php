    @if (Request::path() == '/')
        <!-- slider -->
    <div class="tp-banner-container rev-slider-content">
		<div class="slider_one" >
			<ul>
				<!-- slide one -->
				<li data-transition="boxslide" data-slotamount="7">
					
					<img src="{{ asset('front-end-2/img/transparent.png') }}" style="background-color:#f9f9f7" alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="repeat">

                    <div class="tp-caption customin customout"
                         data-x="right" data-hoffset="100"
                         data-y="bottom" data-voffset="0"
                         data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="800"
                         data-start="700"
                         data-easing="Power4.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         style="z-index: 2">
                         <img src="{{ asset('front-end-2/img/slider/1.png') }}" alt="">
                    </div>
					
                    <div class="caption sft caption-one" style="z-index: 3" data-x="30" data-y="253" data-speed="700" data-start="1700">Winter Outfit for Men</div>
					
                    <div class="caption sfb caption-two"  style="z-index: 4" data-x="100" data-y="300" data-speed="500" data-start="1900">New Collections</div>
					
                    <div class="caption sfb" data-x="30" style="z-index: 5" data-y="355" data-speed="300" data-start="2300">
                        <a href="#" class="trendify-btn black-bordered">View Details</a>
                    </div>
                </li>
                <li data-transition="boxslide" data-slotamount="7">
					
					<img src="{{ asset('front-end-2/img/transparent.png') }}" style="background-color:#f9f9f7" alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="repeat">

                    <div class="tp-caption customin customout"
                         data-x="right" data-hoffset="100"
                         data-y="bottom" data-voffset="0"
                         data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="800"
                         data-start="700"
                         data-easing="Power4.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         style="z-index: 2">
                         <img src="{{ asset('front-end-2/img/slider/3.png') }}" alt="">
                    </div>
					
                    <div class="caption sft caption-one" style="z-index: 3" data-x="30" data-y="253" data-speed="700" data-start="1700">Winter Outfit for Men</div>
					
                    <div class="caption sfb caption-two"  style="z-index: 4" data-x="100" data-y="300" data-speed="500" data-start="1900">New Collections</div>
					
                    <div class="caption sfb" data-x="30" style="z-index: 5" data-y="355" data-speed="300" data-start="2300">
                        <a href="#" class="trendify-btn black-bordered">View Details</a>
                    </div>
                </li>
                <li data-transition="boxslide" data-slotamount="7">
					
					<img src="{{ asset('front-end-2/img/transparent.png') }}" style="background-color:#f9f9f7" alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="repeat">

                    <div class="tp-caption customin customout"
                         data-x="right" data-hoffset="100"
                         data-y="bottom" data-voffset="0"
                         data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                         data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                         data-speed="800"
                         data-start="700"
                         data-easing="Power4.easeOut"
                         data-endspeed="500"
                         data-endeasing="Power4.easeIn"
                         style="z-index: 2">
                         <img src="{{ asset('front-end-2/img/slider/2.png') }}" alt="">
                    </div>
					
                    <div class="caption sft caption-one" style="z-index: 3" data-x="30" data-y="253" data-speed="700" data-start="1700">Winter Outfit for Men</div>
					
                    <div class="caption sfb caption-two"  style="z-index: 4" data-x="100" data-y="300" data-speed="500" data-start="1900">New Collections</div>
					
                    <div class="caption sfb" data-x="30" style="z-index: 5" data-y="355" data-speed="300" data-start="2300">
                        <a href="#" class="trendify-btn black-bordered">View Details</a>
                    </div>
				</li>
			</ul>
		</div>
    </div>
    <!-- / slider -->
    @else
        
    @endif