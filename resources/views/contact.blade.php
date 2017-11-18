@extends('layouts.templates.app')

@section('pageTitle')
    Contact Us
@endsection

@section('pageDescription')
    Send a message to Raines Technologies Nigeria Limited using our contact form. You can also send us a mail or use our social network channels provided in our Communication Channels Page.
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
                    <span>Contact <span class="font-weight-normal text-muted">Us</span></span>
                    <small>Ways To Get In Touch</small>
                </h2>
                <div class="row">
                    <div class="col-md-6">
                        <form id="contact-form" action="{{ route('contact.post') }}" method="POST" role="form" data-parsley-validate="">
                            {!! csrf_field() !!}
                            <div class="form-group">
                                <label class="sr-only" for="contact-name">Name</label>
                                <input type="text" class="form-control" id="contact-name" name="contact-name" placeholder="Name" required>
                                <small id="contact-name-help" class="form-text text-muted">First and last names.</small>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="contact-email">Email</label>
                                <input type="email" class="form-control" name="contact-email" id="contact-email" placeholder="Email" required>
                                <small id="contact-email-help" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="contact-email">Phone Number</label>
                                <input type="text" class="form-control" name="contact-phone" id="contact-phone" placeholder="Phone number" required>
                                <small id="contact-phone-help" class="form-text text-muted">We'll never share your contact with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="contact-title">Message Title</label>
                                <input type="text" class="form-control" id="contact-title" name="contact-title" placeholder="Message Title" required>
                                <small id="contact-title-help" class="form-text text-muted">Message Title.</small>
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="contact-message">Message</label>
                                <textarea rows="12" class="form-control" id="contact-message" name="contact-message" placeholder="Message" required></textarea>
                                <small id="contact-message-help" class="form-text text-muted">Your message and details.</small>
                            </div>
                            {!! NoCaptcha::display() !!}
                            <input type="submit" class="btn btn-primary" value="Send Message">
                        </form>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <abbr title="Phone"><i class="fa fa-phone"></i></abbr>
                            +234(0)8189377578
                        </p>
                        <p>
                            <abbr title="Phone"><i class="fa fa-phone"></i></abbr>
                            +234(0)9036809735
                        </p>
                        <p>
                            <abbr title="Whatsapp"><i class="fa fa-whatsapp"></i></abbr>
                            +2349036809735
                        </p>
                        <p>
                            <abbr title="Telegram"><i class="fa fa-telegram"></i></abbr>
                            +2349036809735
                        </p>
                        <p>
                            <abbr title="Twitter"><i class="fa fa-twitter"></i></abbr>
                            @RainesTechNG
                        </p>
                        <p>
                            <abbr title="Email"><i class="fa fa-envelope"></i></abbr>
                            info@rainestech.com
                        </p>
                        <p>
                            <abbr title="Address"><i class="fa fa-home"></i></abbr>
                            2nd Floor Gateway Plaza, Central Business District, Abuja
                        </p>
                        <p>
                            <abbr title="Address"><i class="fa fa-home"></i></abbr>
                            Tee Mama Junction, Mandela Road, Minna Niger State, Nigeria
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('content-below')
    @include('modules.content-below')
@endsection