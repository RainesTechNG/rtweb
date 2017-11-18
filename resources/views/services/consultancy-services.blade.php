@extends('layouts.templates.app')

@section('pageTitle')
    Consultancy Services
@endsection

@section('pageDescription')
    We provide technical consultancy services to assist you make crucial decisions on existing or totally new technological systems.
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
                    <span>Consultancy <span class="font-weight-normal text-muted">Services</span></span>
                    <small>Let us help you on how best to use information technology (IT) in achieving your business goals!</small>
                </h2>

                <!-- About company -->
                <div class="row mt-4">
                    <div class="col-12">
                        <img src="/assets/img/services/consult.jpg" class="img-fluid mb-4">
                        <p class="lead">RainesTech consultants define, design and execute strategies that drive your business growth, reduce costs and create new revenue streams.</p>
                        <p>Businesses today operate in a revolutionized world by constantly adapting to changes. The pace at which technology is advancing, it’s crucial for organizations and enterprises to build strategies that are agile, innovative, transformative and optimal to respond to technological dynamics.</p>
                        <p>We are a dedicated team with considerable experience of business and technical operations in charity, not for profit, public sector and commercial organisations.  From requirement gathering to IT infastructure strategy, we provide a full range of consultancy services and support to help take the hassles out of your IT projects.</p>
                    </div>
                </div>

                <div class="title-divider mt-4">
                    <h3>
                        <span>Our <span class="font-weight-normal text-muted">Services</span></span>
                        <small>Our Consultancy Services includes the following, but not limited to it: </small>
                    </h3>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <!-- List Items -->
                        <ul class="fa-ul list-lg">
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Application Design
                                </h4>
                                We are experienced in Desktop, mobile and Cloud Application
                            </li>
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Website Design &amp; Development
                                </h4>
                                Corporate Web presence and Content Management.
                            </li>
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Network Management
                                </h4>
                                Installation, Maintenance, Security and expansion
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <!-- List Items -->
                        <ul class="fa-ul list-lg">
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    IT Strategy
                                </h4>
                                Management, Review &amp development of IT Systems and Operations
                            </li>
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    IT Infrastructure
                                </h4>
                                Procurement Management, Review and Planning
                            </li>
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    IT Security
                                </h4>
                                Security analysis and Protection against virus, spams.
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
                            <span class="text-shadow">Consultancy </span> <span class="text-primary-darkend">Services</span>
                        </h2>
                        <h5 class="text-faded">
                            Best IT Practices <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> IT Security <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Infrastructural Management <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Planning &amp; Review
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