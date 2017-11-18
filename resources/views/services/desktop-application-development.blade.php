@extends('layouts.templates.app')

@section('pageTitle')
    Desktop Applications
@endsection

@section('pageDescription')
    We develop cross-platform desktop software that suits business processes and requirement of our client. We are Raines Technologies Nigeria Limited committed to providing technological solutions to Nigeria and beyond
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
                    <span>Desktop <span class="font-weight-normal text-muted">Applications</span></span>
                    <small>Get feature rich cross platform PC Software for your business processes!</small>
                </h2>
                <div class="row">
                    <div class="col-12">
                        <img class="img-fluid" src="/assets/img/services/custom_software.png">
                    </div>
                </div>
                <!-- About company -->
                <div class="row mt-4">
                    <div class="col-12">
                        <p class="lead">When Customized for  your business, desktop applications can yield many benefits for your day to day processes.</p>
                        <p>Businesses and Organizations are using an ever-increasing variety of off the shelf software to carry their daily task, boost efficiency and productivity. While there are many off the shelf software to cater to almost any computer related task, there are still operations / processes that requires the use of specialized (custom) software by businesses and organizations to carry out specific task related to its needs, or better still a custom software to automate business and organization’s processes in other to achieve a specific result available in a specific format under a specific time frame.</p>
                    </div>
                    <div class="col-md-7">
                        <p>In other cases, some business may have an existing legacy application that is core to the business but needs a slight upgrade or tweak to better appeal to your customers and help your business scale or grow into new markets.</p>
                        <p>Perhaps the most valuable benefit of all is that your custom desktop application software will produce a product that is specifically tailored to your company’s needs and specifications and help your business achieve the utmost success.</p>
                    </div>
                    <!-- Slideshow banner -->
                    <div class="col-md-5">
                        <!-- List Accordion -->
                        <h5>Merits of Custom Software</h5>
                        <div class="card-accordion card-accordion-list-style card-accordion-icons-left" id="list-accordion" role="tablist" aria-multiselectable="true">
                            <div class="card">
                                <div class="card-header py-0 px-0"> <a data-toggle="collapse" data-parent="#list-accordion" href="#collapseOne" class="panel-title collapsed">Human Error</a> </div>
                                <div id="collapseOne" class="collapse show">
                                    <div class="card-block">Preventing human error or inconsistency between teams.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header py-0 px-0"> <a data-toggle="collapse" data-parent="#list-accordion" href="#collapseTwo" class="panel-title collapsed">Data Evaluation</a> </div>
                                <div id="collapseTwo" class="collapse">
                                    <div class="card-block">Easy gathering and evaluation of complex information.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header py-0 px-0"> <a data-toggle="collapse" data-parent="#list-accordion" href="#collapseThree" class="panel-title collapsed">Manual Task Automation</a> </div>
                                <div id="collapseThree" class="collapse">
                                    <div class="card-block">
                                        Automating most repetitive and cumbersome manual tasks.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header py-0 px-0"> <a data-toggle="collapse" data-parent="#list-accordion" href="#collapseFour" class="panel-title collapsed">Performance Improvement</a> </div>
                                <div id="collapseFour" class="collapse">
                                    <div class="card-block">Improving employee performance and customer satisfaction.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <p>Our Team has over a decade of experience in desktop application development, partnering with a variety of global companies. We perform all of our work in-house and take the time to uncover your needs so we can deliver the best possible end-product. We have the technical and project management expertise needed to successfully execute and complete projects, in addition to specialized industry-specific software development experience. With specific knowledge of multiple industries, we can understand the context of your business and the things that are important to you so we can hit the ground running to deliver the perfect custom desktop application.</p>
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
                            <span class="text-shadow">Custom</span> <span class="text-primary-darkend">Desktop Software</span>
                        </h2>
                        <h5 class="text-faded">
                            Cross Platform <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Free Upgrades &amp; Patches <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Business Centric <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Fast Delivery
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