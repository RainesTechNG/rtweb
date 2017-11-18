@extends('layouts.templates.app')

@section('pageTitle')
    Multimedia Productions
@endsection

@section('pageDescription')
    Let us tell your story with our multimedia production services. We are Raines Technologies Nigeria Limited committed to providing technological solutions to Nigeria and beyond
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
                    <span>Multimedia <span class="font-weight-normal text-muted">Productions</span></span>
                    <small>Let's tell a story together!</small>
                </h2>

                <!-- About company -->
                <div class="row mt-4">
                    <div class="col-md-12">
                        <p class="lead">Use our multimedia production services to tell a story, share news or entertain your audience.</p>
                    </div>

                    <div class="row m-2 mb-3">
                        <div class="col-md-7 justify-content-center align-self-center">
                            <span class="lead">Video Invites.</span>
                            <p>In the social world, use our Video Invitation service to get to invite people to your special event over social media.</p>
                            <p>Check out Samples on our <a href="https://www.youtube.com/channel/UC0HneX4caxwYCocszHVZ9IQ/videos" target="_blank" rel="nofollow" >Youtube Channel</a>.</p>
                        </div>
                        <div class="col-md-5">
                            <img class="img-fluid" src="/assets/img/services/video-inv.jpg" alt="Video invitation">
                        </div>
                    </div>

                    <div class="row m-2 mb-3">
                        <div class="col-md-5">
                            <img class="img-fluid" src="/assets/img/services/digital-vid.jpg" alt="Analog to Digital Video">
                        </div>
                        <div class="col-md-7 justify-content-center align-self-center">
                            <span class="lead">Analog to Digital Video.</span>
                            <p>Have old audio and / or video tapes that you want to be able to play in modern digital players? We are here to help.</p>
                        </div>
                    </div>
                    <p class="lead">Our Sample Wedding Video Invites. More on our <a href="https://www.youtube.com/channel/UC0HneX4caxwYCocszHVZ9IQ/videos" target="_blank" rel="nofollow" >Youtube Channel</a></p>
                    <iframe width="720" height="405" src="http://www.youtube.com/embed/12GL0YmaUYE?version=3&loop=1&playlist=12GL0YmaUYE,Rg3RgwJsSkI">
                    </iframe>
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
                            <span class="text-shadow">Multimedia</span> <span class="text-primary-darkend">Productions</span>
                        </h2>
                        <h5 class="text-faded">
                            HD Videos <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Digital Formats <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Entertaining <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Premium Effects
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