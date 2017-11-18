@extends('layouts.templates.app')

@section('pageTitle')
    Mobile Application Development
@endsection

@section('pageDescription')
    We develop cross-platform mobile applications that suits business processes and requirement of our client. We are Raines Technologies Nigeria Limited committed to providing technological solutions to Nigeria and beyond
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
                    <span>Mobile <span class="font-weight-normal text-muted">Applications</span></span>
                    <small>Get feature rich cross platform mobile app for your business!</small>
                </h2>

                <!-- About company -->
                <div class="row mt-4">
                    <div class="col-md-7">
                        <p class="lead">No matter what your business is, a mobile app can help you get and retain customers, and that's a fact.</p>
                        <p>The customers in today’s world are on the move, needing to perform tasks such as book for flights, hotels, shops online etc. or requiring to have all the information they need while on the move. Their best pal at this time is there mobile device such as smart phones and tablets.</p>
                        <p>In order for business owners to follow their customers wherever they go, have access to information and able to perform specific task when not sitting behind a PC, you will need a mobile application for your business/organization.</p>
                    </div>
                    <!-- Slideshow banner -->
                    <div class="col-md-5">
                        <!-- List Accordion -->
                        <h5>Advantages of Mobile Applications</h5>
                        <div class="card-accordion card-accordion-list-style card-accordion-icons-left" id="list-accordion" role="tablist" aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header py-0 px-0"> <a data-toggle="collapse" data-parent="#list-accordion" href="#collapseOne" class="panel-title collapsed">Field Work</a> </div>
                                <div id="collapseOne" class="collapse show">
                                    <div class="card-block">Ability for staffs to be able to perform company specific task while in the field.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header py-0 px-0"> <a data-toggle="collapse" data-parent="#list-accordion" href="#collapseTwo" class="panel-title collapsed">Information</a> </div>
                                <div id="collapseTwo" class="collapse">
                                    <div class="card-block">Having information available to your customers on the go.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header py-0 px-0"> <a data-toggle="collapse" data-parent="#list-accordion" href="#collapseThree" class="panel-title collapsed">Customer Engagement</a> </div>
                                <div id="collapseThree" class="collapse">
                                    <div class="card-block">
                                        Build loyalty and customer engagement.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header py-0 px-0"> <a data-toggle="collapse" data-parent="#list-accordion" href="#collapseFour" class="panel-title collapsed">Accessibility</a> </div>
                                <div id="collapseFour" class="collapse">
                                    <div class="card-block">Reinforce your brand while increasing your visibility, accessibility and sell-through.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p>With <b>Raines Technologies</b>, you will get mobile app that is tailored to your need, running on the major mobile platforms (Android and IOS). Our team of devoted programmers guarantee a creative and powerful product that streamlines every mobile capable aspect of your business.</p>

                <div class="title-divider mt-4">
                    <h3>
                        <span>What <span class="font-weight-normal text-muted">You'll Get</span></span>
                        <small>Choose us today to develop your app and have the following benefits: </small>
                    </h3>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <img class="img-fluid" src="/assets/img/services/crossplatform_mobileapps.png">
                    </div>
                    <div class="col-md-7 justify-content-center align-self-center">
                        <span class="lead">Cross Platform app tailored to your business process needs, running on all major mobile platforms and devices.</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7 justify-content-center align-self-center">
                        <span class="lead">An Application with all the features and technologies that you want, engaging your customers.</span>
                    </div>
                    <div class="col-md-5">
                        <img class="img-fluid" src="/assets/img/services/feature-rich.png">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5">
                        <img class="img-fluid" src="/assets/img/services/info.png">
                    </div>
                    <div class="col-md-7 justify-content-center align-self-center">
                        <span class="lead">Your business and information at your customer's finger tip.</span>
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
                            <span class="text-shadow">Mobile</span> <span class="text-primary-darkend">App Service</span>
                        </h2>
                        <h5 class="text-faded">
                            Cross Platform <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Free Upgrades <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Business Centric Application <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Bug Free
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