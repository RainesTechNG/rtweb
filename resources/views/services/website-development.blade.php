@extends('layouts.templates.app')

@section('pageTitle')
    Website Design & Development
@endsection

@section('pageDescription')
    We develop websites for blogs, corporate organizations, online shopping, online booking system, and as such. We are Raines Technologies Nigeria Limited committed to providing technological solutions to Nigeria and beyond
@endsection

@section('content-class')

@endsection

@section('content')
    <div class="container" id="mobile-app">
        <div class="row">
            <!-- sidebar -->
            <div class="col-md-3">
                @include('modules.services-menu')
            </div>
            <!--main content-->
            <div class="col-md-9">
                <h2 class="title-divider">
                    <span>Web/Cloud <span class="font-weight-normal text-muted">Applications</span></span>
                    <small>Get feature rich cross platform mobile app for your business!</small>
                </h2>
                <!-- About company -->
                <div class="row mt-4">
                    <div class="col-md-12">
                        <p class="lead">Websites that brings you to the fore of the global world!</p>
                    </div>

                    <div class="row m-2 mb-3">
                        <div class="col-md-7 justify-content-center align-self-center">
                            <span class="lead">Responsive Website.</span>
                            <p>Website that's responsive, maintaining a clean user interface across different devices.</p>
                        </div>
                        <div class="col-md-5">
                            <img class="img-fluid" src="/assets/img/services/responsive_web.jpg">
                        </div>
                    </div>

                    <div class="row m-2 mb-3">
                        <div class="col-md-5">
                            <img class="img-fluid" src="/assets/img/services/websecurity.jpg">
                        </div>
                        <div class="col-md-7 justify-content-center align-self-center">
                            <span class="lead">Website Security</span>
                            <p>The security of our websites are guaranteed based on available security standards.</p>
                        </div>
                    </div>

                    <div class="row m-2 mb-3">
                        <div class="col-md-7 justify-content-center align-self-center">
                            <span class="lead">Search Engine Optimization</span>
                            <p>Our websites are optimize for all search engines making it number one in most search results.</p>
                        </div>
                        <div class="col-md-5">
                            <img class="img-fluid" src="/assets/img/services/seo.png">
                        </div>
                    </div>

                    <div class="row m-2 mb-3">
                        <div class="col-md-5">
                            <img class="img-fluid" src="/assets/img/services/ui.jpg">
                        </div>
                        <div class="col-md-7 justify-content-center align-self-center">
                            <span class="lead">Appealing User Interface</span>
                            <p>We use best and most popular UI frameworks to present client's contents in an appealing way.</p>
                        </div>
                    </div>

                    <div class="row m-2 mb-3">
                        <div class="col-md-7 justify-content-center align-self-center">
                            <span class="lead">Best Server Side Technology</span>
                            <p>Server side scripting PHP Frameworks used for creating dynamic pages with dynamic content, enabling you to develop customized web pages that can attract more visitors.</p>
                        </div>
                        <div class="col-md-5">
                            <img class="img-fluid" src="/assets/img/services/php-frameworks.png">
                        </div>
                    </div>

                    <div class="row m-2 mb-3">
                        <div class="col-md-5">
                            <img class="img-fluid" src="/assets/img/services/all-frameworks.png">
                        </div>
                        <div class="col-md-7 justify-content-center align-self-center">
                            <span class="lead">Best Frontend Frameworks</span>
                            <p>The front end of a website is the part that users interact with. This is developed using cutting edge framework for efficient user interactivity.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection

@section('content-below')
    <div id="content-below">
        <!-- Awesome features call to action -->
        <div class="bg-primary text-white py-4">
            <div class="container">
                <div class="row text-center text-lg-left">
                    <div class="col-12 col-lg-8 py-2">
                        <h2 class="text-uppercase font-weight-bold mt-0 mb-2">
                            <span class="text-shadow">Website</span> <span class="text-primary-darkend">Development</span>
                        </h2>
                        <h5 class="text-faded">
                            Responsive <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Free Security Updates <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> 99.99% Up time <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Cutting Edge Technologies
                        </h5>
                    </div>
                    <div class="col-12 col-lg-4 py-2 text-lg-right">
                        <a href="#rfs-modal" data-toggle="modal" class="btn btn-lg btn-primary btn-invert btn-rounded py-3 px-4">Request for Service <i class="fa fa-arrow-right ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('modals.service_request_modal')
@endsection