@extends('layouts.templates.app')

@section('pageTitle')
    Official Home Page
@endsection

@section('pageDescription')
    Official Home Page of Raines Technologies Nigeria Limited. We are Raines Technologies Nigeria Limited committed to providing technological solutions to Nigeria and beyond
@endsection

@section('content-class')
    class="p-0"
@endsection

@section('slider')
    @include('modules.slider')
@endsection

@section('content')
    <!-- Features -->
    <div id="features" class="container py-4 py-lg-6">
        <hr class="hr-lg mt-0 mb-3 w-10 mx-auto hr-primary" />
        <h2 class="text-center text-uppercase font-weight-bold my-0">
            Our Featured Services
        </h2>
        <h5 class="text-center font-weight-light mt-2 mb-0 text-muted">
            Great featured services amongst many with customer demands!
        </h5>
        <hr class="mb-5 w-50 mx-auto" />
        <div class="row text-center">
            <div class="col-lg-3 py-2">
                <i class="fa fa-tablet icon-5x text-primary" data-animate="fadeIn" data-animate-delay="0.4"></i>
                <h4 class="mt-2">
                    Application Software Development
                </h4>
                <p><a href="{{ route('services', 'desktop-application-development') }}">Desktop Apps</a>|
                    <a href="{{ route('services', 'mobile-application-development') }}">Mobile Apps</a>|
                    <a href="{{ route('services', 'web-cloud-application-development') }}">Web Apps</a>|
                    <a href="{{ route('services', 'website-development') }}">Website Development</a> </p>
            </div>
            <div class="col-lg-3 py-2">
                <a href="{{ route('services', 'home-office-network') }}">
                    <i class="fa fa-sitemap icon-5x text-primary" data-animate="fadeIn" data-animate-delay="0.6"></i>
                    <h4 class="mt-2">
                        Home &amp; Office Networks
                    </h4>
                    <p>Scalable Networks that fit and grows with your business</p>
                </a>
            </div>
            <div class="col-lg-3 py-2">
                <i class="fa fa-lock icon-5x text-primary" data-animate="fadeIn" data-animate-delay="0.8"></i>
                <h4 class="mt-2">
                    Security Systems
                </h4>
                <p><a href="{{ route('services', 'surveillance-systems') }}">Home &amp; Office Security</a>|
                    <a href="{{ route('services', 'tracking') }}">Auto Security</a>|
                    <a href="{{ route('services', 'tracking') }}">Tracking &amp; Monitoring System</a></p>
            </div>
            <div class="col-lg-3 py-2">
                <i class="fa fa-laptop icon-5x text-primary" data-animate="fadeIn" data-animate-delay="1.0"></i>
                <h4 class="mt-2">
                    Multimedia/General IT Services
                </h4>
                <p><a href="{{ route('services', 'photo-video-coverage') }}">Event Coverage</a>|
                    <a href="{{ route('services', 'multimedia-productions') }}">Video Invitation</a>|
                    <a href="{{ route('services', 'system-administration-maintenance') }}">PC Supply & Maintenance</a>|
                    <a href="{{ route('services', 'consultancy-services') }}">IT Consultancy</a> </p>
            </div>
        </div>
    </div>
    <!-- Why AppStrap -->
    <div class="bg-inverse">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 divider-diagonal divider-diagonal-r divider-inverse" data-bg-img="assets/img/backgrounds/computer-screens.jpg"></div>
                <div class="col-lg-4 py-5">
                    <hr class="hr-lg mt-0 mb-2 w-10 ml-0 hr-primary" />
                    <h2 class="display-4 text-slab text-white mt-0 mb-5">
                        Choose <span class="text-primary font-weight-bold">RainesTech</span>
                    </h2>
                    <div class="row mb-3">
                        <div class="col-2 col-md-1 text-center"> <i class="fa fa-check text-primary icon-2x"></i>
                        </div>
                        <div class="col-10 col-md-11 text-grey">
                            <h4 class="font-weight-bold text-white text-uppercase">
                                Competent Team
                            </h4>
                            <p>We are knowledge driven organization breaking the technological barriers offering State of the Art solutions</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-2 col-md-1 text-center"> <i class="fa fa-check text-primary icon-2x"></i>
                        </div>
                        <div class="col-10 col-md-11 text-grey">
                            <h4 class="font-weight-bold text-white text-uppercase">
                                Customer Satisfaction
                            </h4>
                            <p>Customer Focus assuring excellent value additions, thereby ensuring total satisfaction of our esteemed customers</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-2 col-md-1 text-center"> <i class="fa fa-check text-primary icon-2x"></i>
                        </div>
                        <div class="col-10 col-md-11 text-grey">
                            <h4 class="font-weight-bold text-white text-uppercase">
                                Free Upgrades
                            </h4>
                            <p>Upon project delivery with customer satisfaction, you still get Free patches and upgrade for a year. Now that's Awesome!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content-below')
    @include('modules.content-below')
@endsection