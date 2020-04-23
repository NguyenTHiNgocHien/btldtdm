    @if (Request::path() == '/')
        <!-- slider -->
    <div class="tp-banner-container rev-slider-content">
		<div class="slider_one" >
			<ul>
                <!-- slide one -->
                @foreach ($banner as $item)
                    <li data-transition="boxslide" data-slotamount="7">
                        
                        {{-- <img src="{{ asset('upload/banner/'.$item->bn_hinhanh) }}" style="background-color:#f9f9f7" alt="slidebg1"> --}}

                        <div class="tp-caption customin customout"
                            data-x="right" data-hoffset="10"
                            data-y="top" data-voffset="50"
                            data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="800"
                            data-start="700"
                            data-easing="Power4.easeOut"
                            data-endspeed="500"
                            data-endeasing="Power4.easeIn"
                            style="z-index: 2">
                            <a href="{{ route('getBanner', ['idBanner'=>$item->bn_id]) }}">
                                <img src="{{ asset('upload/banner/'.$item->bn_hinhanh) }}" alt="" width="100%">
                            </a>
                        </div>
                    </li>
                @endforeach
			</ul>
		</div>
    </div>
    <!-- / slider -->
    @else
        
    @endif