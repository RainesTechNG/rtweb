@extends('layouts.templates.app')

@section('pageTitle')
    Home & Office Networks
@endsection

@section('pageDescription')
    We offer home and office network services as it is an essential element of modern business and it's increasingly indispensabel for homes.
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
                    <span>Home &amp; Office <span class="font-weight-normal text-muted">Networks</span></span>
                    <small>Get your digital communication devices communicating!</small>
                </h2>

                <div class="row">
                    <div class="col-12">
                        <img class="img-fluid" src="/assets/img/services/home-office.png">
                    </div>
                </div>
                <!-- About company -->
                <div class="row mt-4">
                    <div class="col-12">
                        <p class="lead">A computer network is an essential element of modern business, and it's increasingly indispensable in the home, too.</p>
                        <p>A network lets your computer connect to the Web so that you can check e-mail, update a website, or teleconference. It also lets you communicate locally with other computers or network enable devices such as printers, photocopiers, etc. on the same local network.</p>
                    </div>
                </div>
                <div class="title-divider mt-4">
                    <h3>
                        <span>Our Services <span class="font-weight-normal text-muted">Include</span></span>
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
                                    Setup and Installations
                                </h4>
                            </li>
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Network Troubleshooting &amp; Maintenance
                                </h4>
                            </li>
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Local Area Networks (LAN)
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
                                    Network Expansion
                                </h4>
                            </li>
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Network Security
                                </h4>
                            </li>
                            <li>
                                <i class="fa-li fa fa-check text-primary"></i>
                                <h4>
                                    Metropolitan Area Network
                                </h4>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12">
                    <p>Let <b>Raines Technologies</b> provide you with the best networking services with our team of professionals with more than a decade experience in both home and corporate networking. With us as your service partner, you are guaranteed of a glitch free network, secured and an up time of 99.9%. </p>
                    <p>Get started now, Click on the <b>Request for Service</b> button below.</p>
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
                            <span class="text-shadow">Home &amp; Office </span> <span class="text-primary-darkend">Network</span>
                        </h2>
                        <h5 class="text-faded">
                            Secured <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Scalable <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Glitch free <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> 99.9% Up time
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