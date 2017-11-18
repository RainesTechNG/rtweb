@extends('layouts.templates.app')

@section('pageTitle')
    PC Admin & Maintenance
@endsection

@section('pageDescription')
    Computer maintenance, computer protection, computer repairs, system administration, Small Business IT Service and Support. Let us handle the IT while you handle your business.
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
                    <span>System <span class="font-weight-normal text-muted">Administration &amp; Maintenance</span></span>
                    <small>Let us handle the IT while you handle your business.</small>
                </h2>

                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="/assets/img/services/banner1.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/assets/img/services/banner2.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/assets/img/services/banner3.jpg" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/assets/img/services/banner4.jpg" alt="Fourth slide">
                        </div>
                    </div>
                </div>

                <!-- About company -->
                <div class="row mt-4">
                    <div class="col-12">
                        <p class="lead">Raines Technologies Limited is available 24×7 to support your business with any computer maintenance or computer repair needs.</p>
                        <p>Computer maintenance often stays on the “to-do” list until a desktop or laptop stops functioning properly. Our experts will provide a set of recommendations to protect your computers from damage due to natural deterioration, user interference, or security breaks. We will set up a schedule for systematic check-ups to prevent failures and install proper security measures to guard personal information stored on your system.</p>
                    </div>
                </div>

                <div class="title-divider mt-4">
                    <h3>
                        <span>Our Services<span class="font-weight-normal text-muted">Includes</span></span>
                        <small></small>
                    </h3>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <!-- List Items -->
                        <ul class="fa-ul list-lg">
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Small Business IT Service and Support
                                </h4>
                                RainesTech can assists your organization with daily IT problem solving while helping you stay ahead of the technology curve with flexible small business IT solutions to fit your business needs.
                            </li>
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Security Protection
                                </h4>
                                This include but not limited to protection aginst Virus, spyware, spam, and firewalls tuning.
                            </li>

                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    IT Infrastructure Planning & Analysis
                                </h4>
                                We analyze your existing technology, plan for IT infrastructure changes and identify strategic opportunities for the future.
                            </li>

                        </ul>
                    </div>
                    <div class="col-md-6">
                        <!-- List Items -->
                        <ul class="fa-ul list-lg">
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Systematic Check-ups
                                </h4>
                                We will implement monthly, quarterly, and annual “checkups” to solve any little problems before they become BIG problems.
                            </li>
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    24×7 Support
                                </h4>
                                Contact our help desk at any time for a quick resolution to your computer problem. Our Professionals are available for On-Site support when needed.
                            </li>
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    User Education
                                </h4>
                                We teach users how to solve basic problems, which enables them to maximize the potential of their machines.
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
                            <span class="text-shadow">PC Admin &amp; </span> <span class="text-primary-darkend">Maintenance</span>
                        </h2>
                        <h5 class="text-faded">
                            Security Protection <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> 24x7 Support <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Systematic Check-ups <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Data Recovery
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