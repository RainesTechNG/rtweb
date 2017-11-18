@extends('layouts.templates.app')

@section('pageTitle')
    Surveillance Systems
@endsection

@section('pageDescription')
    RainesTech delivers scalable, well-proven network video solutions that offer outstanding video surveillance and monitoring capability.
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
                    <span>Surveillance <span class="font-weight-normal text-muted">Systems</span></span>
                    <small>Get affordable, yet well-proven Surveillance System.</small>
                </h2>

                <!-- About company -->
                <div class="row mt-4">
                    <div class="col-md-7">
                        <p class="lead">There is no over emphasizing the need to protect people, homes, businesses and sensitive data in today’s world where safety in all ramifications is being challenged everyday with millions of naira worth of assets and life being lost.</p>
                        <p>Big security responsibility? <b>RainesTech</b> delivers scalable, well-proven network
                            video solutions that offer outstanding video surveillance and monitoring
                            capability, combined with exceptional flexibility that keeps costs down. Plus the ability to receive live feeds from our systems while you are away.
                        </p>

                    </div>
                    <!-- Slideshow banner -->
                    <div class="col-md-5">
                        <img src="/assets/img/services/cctv.png" class="img-fluid">
                    </div>
                </div>

                <div class="title-divider mt-4">
                    <h3>
                        <span>Applications </span>
                        <small>Our Surveillance System is applicable to the following fields among many:</small>
                    </h3>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <!-- List Items -->
                        <ul class="fa-ul list-lg">
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Verification of Alarms
                                </h4>
                                There's a trigger of fire / intrusion alarm? With CCTV, this can be verified.
                            </li>
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Detection &amp; Deterrence of Offences
                                </h4>
                                Theft, defalcation, arson, tamper, vandalism, hold-up. All can de detected and deterred with Video Surveillance
                            </li>
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Documentation
                                </h4>
                                Documentation of security relevant events within home and office space.
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <!-- List Items -->
                        <ul class="fa-ul list-lg">
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Monitoring
                                </h4>
                                Monitoring of open air grounds, assets, goods, office, etc.
                            </li>
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Control Purposes
                                </h4>
                                This can also be used in factories for production control and quality assurance purposes
                            </li>
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Prompt Intervention
                                </h4>
                                Diminishing accident consequences with prompt intervention.
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="title-divider mt-4">
                    <h3>
                        <span><span class="font-weight-normal text-muted">Our</span> Surveillance System <span class="font-weight-normal text-muted">Include</span></span>
                        <small>Our Surveillance System includes the following services:</small>
                    </h3>
                </div>

                <div class="col-12">
                    <!-- List Items -->
                    <ul class="fa-ul list-lg">
                        <li>
                            <i class="fa-li fa fa-check text-primary"></i>
                            <h4>
                                CCTV Camera
                            </h4>
                        </li>
                        <li>
                            <i class="fa-li fa fa-check text-primary"></i>
                            <h4>
                                Intrusion Alarm Detection
                            </h4>
                        </li>
                        <li>
                            <i class="fa-li fa fa-check text-primary"></i>
                            <h4>
                                Remote Live Feeds
                            </h4>
                        </li>
                    </ul>
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
                            <span class="text-shadow">Surveillance System </span> <span class="text-primary-darkend">Service</span>
                        </h2>
                        <h5 class="text-faded">
                            Live Feed <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> HD Video Quality <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Networked <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Hidden Camera
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