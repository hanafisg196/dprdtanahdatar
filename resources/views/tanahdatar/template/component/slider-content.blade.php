
<div class="swiper-container swiper-container-h">
    <div class="swiper-wrapper">
      @foreach ($slideimage as $slideimages)
      <div class="swiper-slide">
        <article class="post-entry">
            <a href="#" class="post-image"><img alt="" src="{{ asset('storage/' . $slideimages->file) }}" style="object-fit: cover;" width="100%"></a>
            <div class="post-entry-overlay">
                <div class="post-entry-meta-category">
                    {{-- <span class="label label-danger">Technology</span> --}}
                </div>
                <div class="post-entry-meta">
                    <div class="post-entry-meta-title">
                        {{-- <h2><a href="#">{{ $slideimages->title }}</a></h2> --}}
                    </div>
                    {{-- <span class="post-date"><i class="fa fa-clock-o"></i> 6m ago</span> --}}
                </div>
            </div>
        </article>
     </div>
      @endforeach
    </div>
    <!-- Add Pagination -->
    <!-- Add Pagination -->

    <!-- Add Arrows -->
    <div class="swiper-button swiper-next"><i class="fa fa-angle-right"></i></div>
    <div class="swiper-button swiper-prev"><i class="fa fa-angle-left"></i></div>
</div>






{{-- <div class="rev_slider_wrapper fullscreen-container" data-alias="concept1">
    <!-- START REVOLUTION SLIDER 5.1.6 fullscreen mode -->
    <div id="rev_slider_4_1" class="rev_slider fullscreenbanner" data-version="5.0">
        <ul>

            <!-- SLIDE  -->
            @foreach ($slideimage as $slideimages)
            <li data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="1500" data-saveperformance="off">

                <!-- MAIN IMAGE -->
                <img src="{{ asset('storage/' . $slideimages->file) }}"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->

                <!-- LAYER NR. 1 -->
                <h2 class="tp-caption uppercase tp-resizeme"
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                    data-y="['top','top','top','top']" data-voffset="['220','150','240','180']"
                    data-fontsize="['70','70','35','25']"
                    data-lineheight="['75','75','35','25']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeOut;"
                    data-transform_out="y:-50px;opacity:0;s:500;e:Power2.easeIn;s:500;e:Power2.easeIn;"
                    data-start="1500"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    style="z-index: 8; white-space: nowrap; color: white" >{{ $slideimages->title }}</span></h2>

                <!-- LAYER NR. 2 -->
                <div class="tp-caption uppercase tp-resizeme t-center"
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                    data-y="['top','top','top','top']" data-voffset="['300','230','300','230']"
                    data-width="['auto','auto','500','300']"
                    data-fontsize="['15','15','15','15']"
                    data-lineheight="['20','20','20','20']"
                    data-height="none"
                    data-whitespace="['nowrap','nowrap','normal','normal']"
                    data-transform_idle="o:1;"
                    data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeOut;"
                    data-transform_out="y:-50px;opacity:0;s:500;e:Power2.easeIn;s:500;e:Power2.easeIn;"
                    data-start="1800"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    style="z-index: 14;color: white">
                    Really it is a multi-purpose template that can be used for any project at anytime and everywhere.
                </div>


                <!-- LAYER NR. 3 -->
                <a class="tp-caption rev-btn "
                    data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                    data-y="['top','top','top','bottom']" data-voffset="['663','576','576','50']"
                    data-width="none"
                    data-height="none"
                    data-whitespace="nowrap"
                    data-transform_idle="o:1;"
                    data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:0;e:Linear.easeNone;"
                    data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);"
                    data-transform_in="y:[50%];opacity:0;s:1000;e:Power2.easeInOut;"
                    data-transform_out="opacity:0;s:1000;e:Power3.easeIn;s:300;e:Power3.easeIn;"
                    data-start="3300"
                    data-splitin="none"
                    data-splitout="none"
                    data-responsive_offset="on"
                    data-responsive="off"
                    style="z-index: 13; font-size: 20px; line-height: 50px; font-weight: 500; color: #fff;background-color:rgba(0, 0, 0, 0.75);padding:0 30px;border-radius:3px;" href="#">GET STARTED
                </a>

            </li>
            @endforeach
        </ul>
        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
    </div>
</div> --}}
