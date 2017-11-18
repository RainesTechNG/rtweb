@extends('layouts.templates.app')

@section('pageTitle')
    Photo & Video Coverage
@endsection

@section('pageDescription')
    Bring your memories to life with our professional Photo and Video Coverage services.
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
                    <span>Photo &amp; Video <span class="font-weight-normal text-muted">Coverage</span></span>
                    <small>Bring your memories to life with our professional Photo and Video Coverage services.</small>
                </h2>
                
                <img src="/assets/img/services/coverage.png" class="img-fluid mb-3">

                <p class="lead">Raines Technologies in collaboration with <b>God-Emmy Studios</b> and <b>SamKay Studios</b> brings to you a team of personable shutterbugs and videographers who work together to capture fleeting moments at photo shoots and special events. At events, shutters click and cameras roll, yielding printed and digital photos as well as edited footage of the memorable moments. On-site portrait sessions take skilled photographers to picturesque locales, where their lenses alight on small details of faces and landscapes, teasing out subtleties to create inimitable shots. </p>

                <div class="title-divider mt-4">
                    <h3>
                        <span>Highlights <span class="font-weight-normal text-muted">of Our Services</span></span>
                    </h3>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <!-- List Items -->
                        <ul class="fa-ul list-lg">
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Full Wedding Photography/Event Coverage
                                </h4>
                            </li>
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Pre-event Consultation and Photoshoots.
                                </h4>
                            </li>
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    All edited and unedited pictures will be given in softcopy.
                                </h4>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <!-- List Items -->
                        <ul class="fa-ul list-lg">
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Photo-book available in all colours; Red, Black, Ox-blood, Green etc.
                                </h4>
                            </li>
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Premium Effects and Edits on our Photos and videos
                                </h4>
                            </li>
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Budget Friendly Services
                                </h4>
                            </li>
                        </ul>
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
                            <span class="text-shadow">Photo &amp; Video</span> <span class="text-primary-darkend">Coverage</span>
                        </h2>
                        <h5 class="text-faded">
                            HD Videos <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Premium Effects <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Fast Delivery <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Back Up Services
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

