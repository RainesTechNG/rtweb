@extends('layouts.templates.app')

@section('pageTitle')
    About Us
@endsection

@section('pageDescription')
    Our services defined us. We are Raines Technologies Nigeria Limited committed to providing technological solutions to Nigeria and beyond
@endsection

@section('content-class')

@endsection

@section('content')
    <div class="container" id="about">
        <div class="row">
            <!-- sidebar -->
            <div class="col-md-3">
                @include('modules.about-menu')
            </div>
            <!--main content-->
            <div class="col-md-9">
                <h2 class="title-divider">
                    <span>About <span class="font-weight-normal text-muted">Raines Technologies</span></span>
                    <small>What & who makes us tick!</small>
                </h2>

                <!-- Showshow - Slider Revolution see: plugins/slider-revolution/examples&sources for help invoke using data-toggle="slider-rev" options can be passed to the slider via HTML5 data- ie. data-startwidth="960" -->
                <div class="slider-wrapper rev_slider_wrapper fullscreen-container bg-black" data-page-class="slider-appstrap-theme">
                    <div class="rev_slider fullscreenbanner" data-toggle="slider-rev" data-settings='{"startwidth":1100, "startheight":420, "delay":10000}'>
                        <ul>
                            <!-- SLIDE 1 -->
                            <li class="slide overlay overlay-op-4 overlay-gradient" data-transition="fadethroughdark" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="/assets/img/slides/app_bg.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-link="{{ route('about') }}">
                                <img src="/assets/img/slide-dummy.png" data-lazyload="/assets/img/slides/app_bg.jpg" alt="background image" data-bgposition="center top" data-bgfit="cover" data-bgparallax="off" class="rev-slidebg" data-no-retina />
                                <!-- SLIDE 1 Content-->
                                <div class="slide-content container" style="z-index: 10;">
                                    <!--elements within .slide-content are pushed below navbar on "behind"-->
                                    <!-- Layer 1 -->
                                    <div class="tp-caption text-grey" data-x="['left','left','left','left']" data-hoffset="['0','0','0','40']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['120','120','120','120']" data-fontsize="['52','52','52','52']" data-lineheight="['52','52','52','52']" data-width="420" data-height="none" data-whitespace="normal" data-type="text" data-basealign="slide" data-responsive_offset="on" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1200,"to":"o:1;","delay":1300,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="left">
                                        <span class="font-weight-bold text-uppercase text-white">Welcome to Raines Technologies</span>
                                    </div>
                                    <!-- Layer 3 -->
                                    <div class="tp-caption text-grey" data-x="['left','left','left','left']" data-hoffset="['0','0','0','40']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['60','60','60','60']" data-fontsize="['20','20','20','30']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-basealign="slide" data-responsive_offset="on" data-frames='[{"delay":0,"speed":1200,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","delay":1400},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]' data-textAlign="['center','center','center','center']">
                                        No.1 Nigeria Technological Solutions Service Provider
                                    </div>
                                    <!-- Layer 3 -->
                                    <div class="tp-caption rs-parallaxlevel-8" data-frames='[{"from":"o:0;sX:3;sY:3;","speed":2000,"to":"o:0.20;sX:3;sY:3;","delay":1800,"ease":"default"},{"delay":"wait","speed":1200,"to":"x:[100%];","ease":"Power3.easeInOut"}]' data-x="left" data-y="bottom" data-hoffset="-200" data-voffset="0" data-width="none" data-height="none" data-type="image" data-basealign="slide">
                                        <i class="fa fa-bullseye icon-20x icon-bg op-1 text-white"></i>
                                    </div>
                                    <!-- Layer 4 -->
                                    <div class="tp-caption tp-resizeme bg-primary-bright" data-frames='[{"from":"x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"x:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]' data-x="['left','left','left','left']" data-hoffset="['0','0','0','40']" data-y="bottom" data-voffset="100" data-width="380" data-height="4" data-basealign="slide">
                                    </div>
                                </div>
                            </li>
                            <!-- SLIDE 2 -->
                            <li class="slide" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-rotate="0" data-saveperformance="off" data-title="Slide">
                                <img src="/assets/img/slides/transparent.png" class="rev-slidebg bg-white" alt="Background image" data-bgcolor="#ffffff" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" data-no-retina />
                                <!-- LAYERS -->
                                <!-- Layer 1 -->
                                <div class="tp-caption tp-resizeme rs-parallaxlevel-8" data-x="['left','left','left','left']" data-hoffset="['-364','-364','-420','-416']" data-y="['top','top','top','top']" data-voffset="['-185','-185','-185','-185']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-basealign="slide" data-responsive_offset="off" data-frames='[{"from":"x:left;rZ:-90deg;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 5;border-width:0px;">
                                    <img src="/assets/img/slides/header_penpot.png" alt="" data-ww="['650px','650px','650px','650px']" data-hh="['500px','500px','500px','500px']" width="650" height="500" data-no-retina />
                                </div>
                                <!-- Layer 2 -->
                                <div class="tp-caption tp-resizeme rs-parallaxlevel-9" data-x="['right','right','right','right']" data-hoffset="['-100','-100','-120','-144']" data-y="['top','top','top','top']" data-voffset="['-254','-254','-254','-254']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-basealign="slide" data-responsive_offset="on" data-frames='[{"from":"x:right;y:-500px;rZ:90deg;","speed":2500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 6;border-width:0px;">
                                    <img src="/assets/img/slides/header_flowerpot.png" alt="" data-ww="['700px','700px','700px','700px']" data-hh="['600px','600px','600px','600px']" width="700" height="600" data-no-retina />
                                </div>
                                <!-- Layer 3 -->
                                <div class="tp-caption tp-resizeme rs-parallaxlevel-10" data-x="['left','left','left','left']" data-hoffset="['-472','-372','-340','-638']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-484','-484','-520','-522']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-basealign="slide" data-responsive_offset="off" data-frames='[{"from":"x:left;rZ:45deg;","speed":2500,"to":"o:1;","delay":650,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 7;border-width:0px;">
                                    <img src="/assets/img/slides/header_papers.png" alt="" data-ww="['900px','900px','900px','900px']" data-hh="['1000px','1000px','1000px','1000px']" width="900" height="1000" data-no-retina />
                                </div>
                                <!-- Layer 4 -->
                                <div class="tp-caption tp-resizeme rs-parallaxlevel-12" data-x="['left','left','left','left']" data-hoffset="['134','134','-2','-57']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['67','67','50','6']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-basealign="slide" data-responsive_offset="on" data-frames='[{"from":"y:bottom;rZ:90deg;","speed":1500,"to":"o:1;","delay":1050,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 8;border-width:0px;">
                                    <img src="/assets/img/slides/header_marker.png" alt="" data-ww="['200px','200px','200px','200px']" data-hh="['300px','300px','300px','300px']" width="200" height="300" data-no-retina />
                                </div>
                                <!-- Layer 5 -->
                                <div class="tp-caption tp-resizeme rs-parallaxlevel-11" data-x="['left','left','left','left']" data-hoffset="['181','181','30','-39']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-170','-170','-190','-212']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-basealign="slide" data-responsive_offset="on" data-frames='[{"from":"y:bottom;rZ:-90deg;","speed":1500,"to":"o:1;","delay":1250,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 9;border-width:0px;">
                                    <img src="/assets/img/slides/header_edding.png" alt="" data-ww="['300px','300px','300px','300px']" data-hh="['400px','400px','400px','400px']" width="300" height="400" data-no-retina />
                                </div>
                                <!-- Layer 6 -->
                                <div class="tp-caption tp-resizeme rs-parallaxlevel-9" data-x="['right','right','right','right']" data-hoffset="['-364','-364','-479','-553']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['-155','-155','-180','-202']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-basealign="slide" data-responsive_offset="on" data-frames='[{"from":"x:right;rZ:-65deg;","speed":1500,"to":"o:1;","delay":700,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 12;border-width:0px;">
                                    <img src="/assets/img/slides/header_tablet.png" alt="" data-ww="['730px','730px','730px','730px']" data-hh="['520px','520px','520px','520px']" width="730" height="520" data-no-retina />
                                </div>
                                <!-- Layer 7 -->
                                <div class="tp-caption tp-resizeme rs-parallaxlevel-11" data-x="['right','right','right','right']" data-hoffset="['222','222','105','8']" data-y="['bottom','bottom','bottom','bottom']" data-voffset="['8','8','-17','-10']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="image" data-basealign="slide" data-responsive_offset="on" data-frames='[{"from":"x:right;rZ:90deg;","speed":1500,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['left','left','left','left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]" style="z-index: 13;border-width:0px;">
                                    <img src="/assets/img/slides/header_pen.png" alt="" data-ww="['300px','300px','300px','300px']" data-hh="['500px','500px','500px','500px']" width="300" height="500" data-no-retina />
                                </div>
                                <div class="slide-content">
                                    <!-- Layer 8 -->
                                    <div class="tp-caption tp-resizeme rs-parallaxlevel-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-90']" data-fontsize="['60','60','60','60']" data-lineheight="['60','60','60','60']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:-50px;rX:-45deg;sX:2;sY:2;opacity:0;","speed":1500,"to":"o:1;","delay":510,"ease":"Power4.easeOut"},{"delay":640,"speed":600,"to":"y:30px;rX:45deg;sX:0.8;sY:0.8;opacity:0;","ease":"Power2.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                        Mobile Android & IOS Apps.
                                    </div>
                                    <!-- Layer 9 -->
                                    <div class="tp-caption tp-resizeme rs-parallaxlevel-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-90']" data-fontsize="['60','60','60','60']" data-lineheight="['60','60','60','60']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:-50px;rX:-45deg;sX:2;sY:2;opacity:0;","speed":1500,"to":"o:1;","delay":2940,"ease":"Power4.easeOut"},{"delay":660,"speed":600,"to":"y:30px;rX:45deg;sX:0.8;sY:0.8;opacity:0;","ease":"Power2.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                        Website & Web Apps.
                                    </div>
                                    <!-- Layer 10 -->
                                    <div class="tp-caption tp-resizeme rs-parallaxlevel-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-90']" data-fontsize="['60','60','60','60']" data-lineheight="['60','60','60','60']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:-50px;rX:-45deg;sX:2;sY:2;opacity:0;","speed":1500,"to":"o:1;","delay":5390,"ease":"Power4.easeOut"},{"delay":"690","speed":600,"to":"y:30px;rX:45deg;sX:0.8;sY:0.8;opacity:0;","ease":"Power2.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                        Home & Office Networks.
                                    </div>
                                    <!-- Layer 11 -->
                                    <div class="tp-caption tp-resizeme rs-parallaxlevel-2" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-70','-70','-70','-90']" data-fontsize="['60','60','60','60']" data-lineheight="['60','60','60','60']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:-50px;rX:-45deg;sX:2;sY:2;opacity:0;","speed":1500,"to":"o:1;","delay":7890,"ease":"Power4.easeOut"},{"delay":"wait","speed":600,"to":"y:30px;rX:45deg;sX:0.8;sY:0.8;opacity:0;","ease":"Power2.easeInOut"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                        Multimedia Productions.
                                    </div>
                                    <!-- Layer 12 -->
                                    <div class="tp-caption tp-resizeme rs-parallaxlevel-2" data-x="['center','center','center','center']" data-hoffset="['-8','-8','-8','-8']" data-y="['middle','middle','middle','middle']" data-voffset="['-10','-10','-10','-10']" data-fontsize="['20','20','20','25']" data-lineheight="['20','20','20','30']" data-width="none" data-height="none" data-whitespace="nowrap" data-type="text" data-responsive_offset="on" data-frames='[{"from":"y:50px;rX:45deg;sX:2;sY:2;opacity:0;","speed":1500,"to":"o:1;","delay":600,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]' data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                                        Raines Technologies Nigeria Limited Services
                                    </div>
                                    <!-- Layer 13 -->
                                    <div class="tp-caption rs-parallaxlevel-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['92','92','92','92']" data-width="none" data-height="none" data-whitespace="nowrap" data-responsive_offset="on" data-responsive="off" data-frames='[{"from":"y:100px;rX:90deg;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'>
                                        <a href="{{ route('services') }}" class="btn btn-outline-primary btn-rounded btn-xlg hidden-sm-down">
                                            Look at Our Services
                                        </a>
                                        <a href="{{ route('services') }}" class="btn btn-outline-primary btn-rounded btn-sm hidden-md-up">
                                            Loot at Our Services
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <!-- SLIDE 3 -->
                            <li class="slide overlay overlay-op-2" data-index="rs-3007" data-transition="fadethroughdark" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="2000" data-thumb="/assets/img/slides/office_cover-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Office">
                                <!-- MAIN IMAGE -->
                                <img src="/assets/img/slides/office_cover.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgparallax="10" class="rev-slidebg" data-no-retina />
                                <!-- LAYERS -->
                                <!-- BACKGROUND VIDEO LAYER -->
                                <div class="rs-background-video-layer" data-forcerewind="on" data-volume="mute" data-videowidth="100%" data-videoheight="100%" data-videomp4="/assets/img/slides/Working-Space.mp4" data-videopreload="auto" data-videoloop="loopandnoslidestop" data-forceCover="1" data-aspectratio="16:9" data-autoplay="true" data-autoplayonlyfirsttime="false"></div>
                                <!-- Layer 1 -->
                                <div class="tp-caption text-white" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-30','-30','-30','-20']" data-fontsize="['70','70','70','70']"
                                     data-lineheight="['70','70','70','60']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-type="text"
                                     data-basealign="slide"
                                     data-responsive_offset="off" data-frames='[{"from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","speed":1500,"to":"o:1;","delay":1000,"split":"chars","splitdelay":0.05,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[10,10,10,10]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[10,10,10,10]"
                                     data-paddingleft="[0,0,0,0]">RainesTech Services</div>
                                <!-- Layer 2 -->
                                <div class="tp-caption text-grey" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['22','22','22','0']"
                                     data-fontsize="['20','20','20','20']"
                                     data-lineheight="['20','20','20','20']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-type="text"
                                     data-basealign="slide"
                                     data-responsive_offset="off" data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1300,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                                     data-textAlign="['left','left','left','left']">Let us serve you today, get in touch.</div>
                                <!-- Layer 3 -->
                                <div class="tp-caption" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['100','100','60','30']" data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-basealign="slide"
                                     data-responsive_offset="off" data-responsive="on"
                                     data-frames='[{"from":"y:100px;rX:90deg;opacity:0;","speed":1500,"to":"o:1;","delay":700,"ease":"Power4.easeOut"},{"delay":"wait","speed":300,"to":"opacity:0;","ease":"nothing"}]'>
                                    <a href="{{ route('contact') }}" class="btn btn-primary btn-rounded btn-xlg hidden-sm-down">Contact Us</a>
                                    <a href="{{ route('contact') }}" class="btn btn-primary btn-rounded btn-sm hidden-md-up">Contact Us</a> </div>
                            </li>
                        </ul>
                        <div class="tp-bannertimer tp-bottom"></div>
                    </div>
                    <!--end of tp-banner-->
                </div>

                <!-- About company -->
                <div class="row mt-4">
                    <div class="col-md-7">
                        <p class="lead">Raines Technologies Limited is a Nigerian Incorporated Limited Liability Company.</p>
                        <p>We are involved in providing specialized superior technological solutions, cost-effective Information Technology Consultancy, Software Applications, Netwoking, Security and technological systems for domestic and regional markets. The company participates actively in government and private sector projects.</p>
                        <p>Though the industry is relatively new in Nigeria, we have taken giant strides in acquiring both competencies and capabilities that ensure that our products and services are of international standards.</p>
                        <p>The company was incorporated in 2012 under the Company’s and Allied Matters Act of 1990 </p>
                    </div>
                    <!-- Slideshow banner -->
                    <div class="col-md-5">
                        <!-- List Accordion -->
                        <div class="card-accordion card-accordion-list-style card-accordion-icons-left" id="list-accordion" role="tablist" aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header py-0 px-0"> <a data-toggle="collapse" data-parent="#list-accordion" href="#collapseOne" class="panel-title collapsed">Our Mission</a> </div>
                                <div id="collapseOne" class="collapse show">
                                    <div class="card-block">Our mission is to offer strategic independence to our partners worldwide, as a visible and viable broad range weighing and project solutions provider. Deploy Information Technology potentials innovatively for the Clients’ unique business & competitive advantages.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header py-0 px-0"> <a data-toggle="collapse" data-parent="#list-accordion" href="#collapseTwo" class="panel-title collapsed">Our Vision</a> </div>
                                <div id="collapseTwo" class="collapse">
                                    <div class="card-block">To be one of Nigeria’s most celebrated and respected ICT company</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header py-0 px-0"> <a data-toggle="collapse" data-parent="#list-accordion" href="#collapseThree" class="panel-title collapsed">Our Strategy</a> </div>
                                <div id="collapseThree" class="collapse">
                                    <div class="card-block">
                                        Innovation is our key strategy taking cognisance of needs in a dynamic environment and providing solutions that are both functional and effective.<br>
                                        A lot of focus is placed on organic growth, ensuring that we build quality from within particularly due to the kind of staff we have at RainesTech.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header py-0 px-0"> <a data-toggle="collapse" data-parent="#list-accordion" href="#collapseFour" class="panel-title collapsed">What We Do</a> </div>
                                <div id="collapseFour" class="collapse">
                                    <div class="card-block">Check out <a href="#">Our Services</a> page for list of our services. Choose any and request for service to see how we can best serve you today.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="title-divider mt-4">
                    <h3>
                        <span>Our <span class="font-weight-normal text-muted">Values</span></span>
                        <small>At RAINES, we ensure that we create value through our activities and processes</small>
                    </h3>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <!-- List Items -->
                        <ul class="fa-ul list-lg">
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Honesty
                                </h4>
                                We are committed to our clients doing what is ethical.
                            </li>
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Integrity
                                </h4>
                                Serving you in a trustworthy, dependable and honorable way.
                            </li>
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Focus
                                </h4>
                                Customer Focus assuring excellent value additions, thereby ensuring total satisfaction
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <!-- List Items -->
                        <ul class="fa-ul list-lg">
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Accountability
                                </h4>
                                We are answerable to our clients for all business dealings &amp; services.
                            </li>
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Knowledge &amp; Skills
                                </h4>
                                Knowledge driven organization breaking the technological barriers offering State of the Art solutions
                            </li>
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Organization
                                </h4>
                                People & Team driven organization redefines the combinations of business and technology.
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Timeline -->
                <h3 class="title-divider mt-4">
                    <span>Company <span class="font-weight-normal text-muted">History</span></span>
                    <small>Our history can be broken down into two parts</small>

                </h3>
                <div class="timeline timeline-left">
                    <div class="timeline-marker"></div>
                    <!--Timeline item 1 -->
                    <div class="timeline-item timeline-item-first animated fadeIn de-02">
                        <div class="timeline-item-date">PRE-INCORPORATION</div>
                        <h5 class="timeline-item-title">
                            We started providing services in 2010.
                        </h5>
                        <p class="timeline-item-description">Coordinating with some of our partners in delivering solutions to clients of diverse backgrounds. Some of these projects are recorded in the Company Profile document.</p>
                    </div>
                    <!--Timeline item 2-->
                    <div class="timeline-item timeline-item-last animated fadeIn de-08">
                        <div class="timeline-item-date">POST-INCORPORATION</div>
                        <h5 class="timeline-item-title">
                            We were incorporated in 2012
                        </h5>
                        <p class="timeline-item-description">Since 2012, we have gone on to add value with a variety of projects undertaken and by our formidable team achieving breakthroughs and commendations from our clients</p>
                    </div>
                    <div class="timeline-marker timeline-marker-bottom"></div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('content-below')
    @include('modules.content-below')
@endsection