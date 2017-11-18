@extends('layouts.templates.app')

@section('pageTitle')
    Terms of Service
@endsection

@section('pageDescription')
    Terms of Service of Raines Technologies Nigeria Limited. This is a legal binding document between Raines Tech and our esteem customers
@endsection

@section('content-class')

@endsection

@section('content')
    <div class="container" id="about">
        <div class="row">
            <!-- sidebar -->
            <div class="col-md-3">
                @include('modules.about-menu')
            </div>
            <!--main content-->
            <div class="col-md-9">
                <h2 class="title-divider">
                    <span>Terms <span class="font-weight-normal text-muted">of Service</span></span>
                    <small>Last Updated: 30th October, 2017.</small>
                </h2>
                <p>Please read these Terms of Service carefully before using the http://rainestech.com website and service provisions provided by Raines Technologies Nigeria Limited.</p>
                <p>Your access to and use of our Services is conditioned on your acceptance of and compliance with these Terms. These Terms apply to all visitors, users and others who access or use our Services.</p>
                <p>By accessing or using our website you agree to be bound by these Terms. If you disagree with any part of the terms then you may not access the Service.</p>
                <h4>Termination</h4>
                <p>We may terminate or suspend access to our Service immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.</p>
                <p>All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>
                <h4>Subscriptions</h4>
                <p>Some parts of our Services are billed on a subscription basis. You will be billed in advance on a recurring service we rendered to you.</p>
                <h4>Content</h4>
                <p>Our Service allows you to post, link, store, share and otherwise make available certain information, text, graphics, videos, or other material ("Content"). You are responsible for the information you provide and Raines Technologies is not liable in anyway for information provided by the client.</p>
                <h4>Links To Other Web Sites</h4>
                <p>Our Service may contain links to third-party web sites or services that are not owned or controlled by Raines Technologies.</p>
                <p>Raines Technologies has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party web sites or services. You further acknowledge and agree that Raines Technologies shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on or through any such web sites or services. </p>
                <h4>Changes</h4>
                <p>We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material we will try to provide at least 30 (change this) days' notice prior to any new terms taking effect. What constitutes a material change will be determined at our sole discretion.</p>
                <h4>Contact Us</h4>
                <p>If you have any questions about these Terms, please <a href="/contact-us">contact us</a>.</p>
            </div>
        </div>
    </div>

@endsection

@section('content-below')
    @include('modules.content-below')
@endsection