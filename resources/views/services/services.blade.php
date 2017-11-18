@extends('layouts.templates.app')

@section('pageTitle')
    Our Services
@endsection

@section('pageDescription')
    List of Products and Services rendered by Raines Technologies Nigeria Limited to our esteem customers around the globe
@endsection

@section('content-class')

@endsection

@section('content')
    <div class="container" id="services">
        <h2 class="title-divider">
            <span>Our <span class="font-weight-normal text-muted">Services</span></span>
            <small>RainesTech Product and Services </small>
        </h2>
    </div>

    <div class="card-deck-wrapper m-2">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top img-fluid" src="/assets/img/services/crossplatform_mobileapps.png" alt="Mobile Application services">
                <div class="card-block">
                    <div class="card-body">
                        <h4 class="card-title">Mobile Applications</h4>
                        <p class="card-text">Be with your clients Always! Get Cross Platform Mobile Apps.</p>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('services', $service['Mobile Applications']) }}" class="btn btn-primary btn-block">Go to Mobile Apps</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top img-fluid" src="/assets/img/services/Desktop-Application.jpg" alt="Desktop Application Services">
                <div class="card-block">
                    <div class="card-body">
                        <h4 class="card-title">Desktop App</h4>
                        <p class="card-text">Customize software designed for your Business specific needs.</p>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('services', $service['Desktop Applications']) }}" class="btn btn-primary btn-block">More About Desktop Apps</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top img-fluid" src="/assets/img/services/clouad-apps.png" alt="Web Cloud Services">
                <div class="card-block">
                    <div class="card-body">
                        <h4 class="card-title">Web/Cloud Applications</h4>
                        <p class="card-text">Field Data Collection/Analysis and Team Work has never been easier!</p>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('services', $service['Web/Cloud Applications']) }}" class="btn btn-primary btn-block">Learn More</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top img-fluid" src="/assets/img/services/responsive_web.jpg" alt="Websites">
                <div class="card-block">
                    <div class="card-body">
                        <h4 class="card-title">Websites</h4>
                        <p class="card-text">Inform the world about your business. Let Billions you will never meet find You!</p>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('services', $service['Websites']) }}" class="btn btn-primary btn-block">Get a Website</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-deck-wrapper m-2">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top img-fluid" src="/assets/img/services/home-office.png" alt="Home and office networks">
                <div class="card-block">
                    <div class="card-body">
                        <h4 class="card-title">Home &amp; Office Network</h4>
                        <p class="card-text">Has more than 2 Computers? Get them communicating also with other network enabled devices.</p>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('services', $service['Home & Office Networks']) }}" class="btn btn-primary btn-block">Go to Networking</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top img-fluid" src="/assets/img/services/auto-tracking.png" alt="Lacator and tracker">
                <div class="card-block">
                    <div class="card-body">
                        <h4 class="card-title">Locator &amp; Tracker</h4>
                        <p class="card-text">Locate your automobile, items, keys, pets, children in an instant with our Locator &amp; Monitoring Service.</p>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('services', $service['Locator & Tracker']) }}" class="btn btn-primary btn-block">More About Locator</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top img-fluid" src="/assets/img/services/surveilance.jpg" alt="Surveillance Systems">
                <div class="card-block">
                    <div class="card-body">
                        <h4 class="card-title">Surveillance Systems</h4>
                        <p class="card-text">Monitor your office, home and infrastructure while you are away with our CCTV Services</p>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('services', $service['Surveillance Systems']) }}" class="btn btn-primary btn-block">Learn More</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top img-fluid" src="/assets/img/services/coverage.png" alt="photo and video coverage">
                <div class="card-block">
                    <div class="card-body">
                        <h4 class="card-title">Photo &amp; Video Coverage</h4>
                        <p class="card-text">Fully recall the fun and glamore of your events, never miss a bit. Get it covered!.</p>
                      </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('services', $service['Photo & Video Coverage']) }}" class="btn btn-primary btn-block">Learn More</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card-deck-wrapper m-2">
        <div class="card-deck">
            <div class="card">
                <img class="card-img-top img-fluid" src="/assets/img/services/video-inv.jpg" alt="Multimedia Productions">
                <div class="card-block">
                    <div class="card-body">
                        <h4 class="card-title">Multimedia Productions</h4>
                        <p class="card-text">We offer Video &amp; Audio Editing services, Video invitations to your events.</p>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('services', $service['Multimedia Productions']) }}" class="btn btn-primary btn-block">Learn More</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top img-fluid" src="/assets/img/services/banner1.jpg" alt="System Administration &amp; Maintenance">
                <div class="card-block">
                    <div class="card-body">
                        <h4 class="card-title">System Administration &amp; Maintenance</h4>
                        <p class="card-text">Need competent hands to manage your IT infrastructure while you focus on your business productivity?</p>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('services', $service['System Admin & Maintenance']) }}" class="btn btn-primary btn-block">We are Here!</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top img-fluid" src="/assets/img/services/consult.jpg" alt="Consultancy Services">
                <div class="card-block">
                    <div class="card-body">
                        <h4 class="card-title">Consultancy Services</h4>
                        <p class="card-text">We offer Consultancy services on wide variety of ICT related issues.</p>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('services', $service['Consultancy Services']) }}" class="btn btn-primary btn-block">Learn More</a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top img-fluid" src="/assets/img/services/office.png" alt="Office Equipment Supply">
                <div class="card-block">
                    <div class="card-body">
                        <h4 class="card-title">Office Equipment Supply</h4>
                        <p class="card-text">We supply digital communication devices best suited for you type of business &amp; processes.</p>
                      </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('services', $service['Office Equipment Supply']) }}" class="btn btn-primary btn-block">Learn More</a>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('content-below')
    @include('modules.content-below')
@endsection