@extends('layouts.templates.app')

@section('pageTitle')
    Locator & Tracker
@endsection

@section('pageDescription')
    The need for securing life and property in a security challenged world where theft and kidnapping is on the rise can not be over emphasized.
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
                    <span>Locator <span class="font-weight-normal text-muted"> and Tracker</span></span>
                    <small>Track, Monitor and Locate eventually your assets, wards and pets.</small>
                </h2>

                <!-- About company -->
                <div class="row mt-4">
                    <div class="col-12">
                        <p class="lead">Security systems and navigators have always been a necessity of human's life.</p>
                        <p>There is no over emphasizing the need to protect people, homes, businesses and sensitive data in today’s world where safety in all ramifications is being challenged everyday with millions of naira worth of assets and life being lost.</p>
                        <p>Hence there is need to at all time be security conscious and know the precise location and state of ones loved ones, animals, pets and assets. This can be achieved with our <b>Location &amp; Tracking Services</b>.</p>
                    </div>
                </div>

                <div class="title-divider mt-4">
                    <h3>
                        <span>What <span class="font-weight-normal text-muted">You'll Get</span></span>
                        <small>With our tracking services, you will be able to:</small>
                    </h3>
                </div>
                <div class="row">
                    <div class="col-md-5">
                        <img class="img-fluid" src="/assets/img/services/auto-tracking.png">
                    </div>
                    <div class="col-md-7 justify-content-center align-self-center">
                        <span class="lead">Know the precise location of your automobile and when it's getting out of range of predefined area (Geo-fencing).</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7 justify-content-center align-self-center">
                        <span class="lead">Get updated anytime, anywhere. Both on desktop and mobile.</span>
                    </div>
                    <div class="col-md-5">
                        <img class="img-fluid" src="/assets/img/services/tracking.png">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-5">
                        <img class="img-fluid" src="/assets/img/services/pet-tracking.png">
                    </div>
                    <div class="col-md-7 justify-content-center align-self-center">
                        <span class="lead">Track and monitor your wards, herds, pets, and other items.</span>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-7 justify-content-center align-self-center">
                        <span class="lead">Failure proof tracking system based on varying communcation technology systems.</span>
                    </div>
                    <div class="col-md-5">
                        <img class="img-fluid" src="/assets/img/services/rech-tracking.png">
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 justify-content-center align-self-center">
                        <p>At <b>RainesTech</b>, tracking has never been easier and safer as we use various technologies to ascertain precise location and making recoveries in collaboration with the security agencies.</p>
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
                            <span class="text-shadow">Locator &amp; Tracker </span> <span class="text-primary-darkend">Service</span>
                        </h2>
                        <h5 class="text-faded">
                            Secured <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Managed <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Fool proof <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Constant update <span class="text-primary-darkend font-weight-bold px-lg-1">/</span> Respect for privacy
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