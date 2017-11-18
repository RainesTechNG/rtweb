@extends('layouts.templates.app')

@section('pageTitle')
    Office Equipment Supply
@endsection

@section('pageDescription')
    We supply office equipments such as Smart phones and PDAs, PCs, Servers, Network devices including switches, routers, racks, etc. We are Raines Technologies Nigeria Limited committed to providing technological solutions to Nigeria and beyond
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
                    <span>Office Equipment <span class="font-weight-normal text-muted">Supply</span></span>
                    <small>Get full warranty and guaranteed devices.</small>
                </h2>

                <div class="row mt-4">
                    <div class="col-md-12">
                        <p class="lead">We are No.1 in Nigeria in supplies of Office and Home IT equipment. With us you will get fast delivery, free setup and free maintenance throughout the warranty period. We deliver nationwide. </p>
                    </div>

                    <div class="row m-2 mb-3">
                        <div class="col-md-7 justify-content-center align-self-center">
                            <span class="lead">Smart Devices &amp; PDAs</span>
                            <p>We supply Smart Phones (Android, IOS, Windows), Tabs, Tablets and Windows Surface products.</p>
                        </div>
                        <div class="col-md-5">
                            <img class="img-fluid" src="/assets/img/services/smartphones-and-tablets.jpg" alt="Smart devices">
                        </div>
                    </div>

                    <div class="row m-2 mb-3">
                        <div class="col-md-5">
                            <img class="img-fluid" src="/assets/img/services/aio.png" alt="Computer Systems">
                        </div>
                        <div class="col-md-7 justify-content-center align-self-center">
                            <span class="lead">Computer Systems</span>
                            <p>PCs suited for your business processes. Laptops, Desktops, AIOs (All in one PCs).</p>
                        </div>
                    </div>

                    <div class="row m-2 mb-3">
                        <div class="col-md-7 justify-content-center align-self-center">
                            <span class="lead">Printers</span>
                            <p>Office and Commercial printers for your business. Rugged, Network Enabled, Easy maintenance and Energy Saving.</p>
                        </div>
                        <div class="col-md-5">
                            <img class="img-fluid" src="/assets/img/services/printers.jpg" alt="Printers">
                        </div>
                    </div>

                    <div class="row m-2 mb-3">
                        <div class="col-md-5">
                            <img class="img-fluid" src="/assets/img/services/network.jpg" alt="Servers">
                        </div>
                        <div class="col-md-7 justify-content-center align-self-center">
                            <span class="lead">Servers</span>
                            <p>Best servers to handle your business tasks and more.</p>
                        </div>
                    </div>

                    <div class="row m-2 mb-3">
                        <div class="col-md-7 justify-content-center align-self-center">
                            <span class="lead">Networking Devices</span>
                            <p>We supply Routers, Switches, Racks and all other networking accessories.</p>
                        </div>
                        <div class="col-md-5">
                            <img class="img-fluid" src="/assets/img/services/network-acc.png" alt="Network devices">
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
                            <span class="text-shadow">Office Equipment </span> <span class="text-primary-darkend">Supply</span>
                        </h2>
                        <h5 class="text-faded">
                            Fast Delivery <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Free Setup <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Free Maintenance <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Cutting Edge Technologies
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