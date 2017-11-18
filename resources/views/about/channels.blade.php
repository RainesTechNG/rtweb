@extends('layouts.templates.app')

@section('pageTitle')
    Channels of Communication
@endsection

@section('pageDescription')
    Ways to get in touch with Raines Technologies Nigeria Limited. A list of our channels of communications
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
                    <span>Communication <span class="font-weight-normal text-muted">Channels</span></span>
                    <small>Ways to get in touch.</small>
                </h2>
                <h4>Email <i class="fa fa-envelope fa-icon-4x" style="color: #d18413"></i></h4>
                <p>You can send email to us anytime and be guaranteed our correspondence will get in touch with you in no time.</p>
                <p>Our Email include:
                    <ul>
                        <li><a href="mailto:info@rainestech.com">info@rainestech.com</a></li>
                        <li><a href="mailto:support@rainestech.com">support@rainestech.com</a></li>
                    </ul>
                </p>
                <hr class="my-5">

                <h4>Hotline <i class="fa fa-phone fa-icon-4x"></i></h4>
                <p>Our hotline available 9:00 to 16:00 Monday to Friday - <br> <b>+234(0)8189377578 </b></p>
                <hr class="my-5">

                <h4>Facebook <i class="fa fa-facebook-official fa-icon-4x"></i></h4>
                <p>Visit our <a href="https://web.facebook.com/rainestechng" rel="nofollow" target="_blank">Facebook Page</a> and you can also send us messages there too </p>
                <hr class="my-5">

                <h4>Twitter <i class="fa fa-twitter fa-icon-4x"></i></h4>
                <p>Visit our <a href="https://twitter.com/RainesTechNG" rel="nofollow" target="_blank">Twitter Page</a> and twit at us on @RainesTechNG</p>
                <hr class="my-5">

                <h4>Whatsapp <i class="fa fa-whatsapp fa-icon-4x"></i></h4>
                <p>You can chat with us on our Whatsapp numbers during the hours of 9.00 and 18.00 only. Note that the numbers provided here are not available for calls unless other wise provided in the phone call section. </p>
                <p><i class="fa fa-whatsapp fa-icon-4x"> +234809036809735</i></p>
                <hr class="my-5">

                <h4>Telegram <i class="fa fa-telegram fa-icon-4x"></i></h4>
                <p>You can chat with us on Telegram during the hours of 9.00 and 18.00 only. Note that the numbers provided here are not available for calls unless other wise provided in the phone call section. </p>
                <p><i class="fa fa-telegram fa-icon-4x"> +234809036809735</i></p>
                <hr class="my-5">

                <h4>Other Means</h4>
                <p>You can also reach us using our <a href="/contact-us">Contact Us</a> page or check the bottom of this page for our mailing address and hot lines.</p>
            </div>
        </div>
    </div>

@endsection

@section('content-below')
    @include('modules.content-below')
@endsection