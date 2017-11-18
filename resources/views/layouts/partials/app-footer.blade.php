<footer id="footer" class="p-0">
    <div class="container pt-6 pb-5">
        <div class="row">
            <div class="col-md-4">
            <!--@todo: replace with company contact details-->
                <h4 class="text-uppercase text-white">
                    Contact Us
                </h4>
                <address>
                    <ul class="list-unstyled">
                        <li>
                            <abbr title="Phone"><i class="fa fa-phone fa-fw"></i></abbr>
                            +234(0)9036809735, +234(0)8189377578
                        </li>
                        <li>
                            <abbr title="Email"><i class="fa fa-envelope fa-fw"></i></abbr>
                            info@rainestech.com
                        </li>
                        <li>
                            <abbr title="Address"><i class="fa fa-home fa-fw"></i></abbr>
                            2nd Floor Gateway Plaza, Central Business District, Abuja
                        </li>
                        <li>
                            <abbr title="Address"><i class="fa fa-home fa-fw"></i></abbr>
                            Tee Mama Junction, Mandela Road, Minna Niger State, Nigeria
                        </li>
                    </ul>
                </address>
            </div>

            <div class="col-md-4">
                <h4 class="text-uppercase text-white">
                    About Us
                </h4>
                <p>Raines Technologies Limited is a Nigerian Incorporated company involved in providing specialized superior technological solutions, cost-effective Information Technology consultancy among other services</p>
            </div>

            <div class="col-md-4">
                <h4 class="text-uppercase text-white">
                    Newsletter
                </h4>
                <p>Stay up to date with our latest news and product releases by signing up to our newsletter.</p>
            <!--@todo: replace with mailchimp code-->
                <form id="newsletter-form" method="POST" action="{{ route('newsletter.subscribe') }}" role="form" data-parsley-validate="" >
                    {!! csrf_field() !!}
                    <div class="input-group">
                        <label class="sr-only" for="email-field">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required placeholder="Email">
                        <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit">Go!</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <hr class="my-0 hr-blank op-2" />
<!--@todo: replace with company copyright details-->
    <div class="bg-inverse-dark text-sm py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">Powered by <a href="https://rainestech.com" class="footer-link">Raines Technologies</a> | Copyright 2012-{{ date('Y') }} &copy; RainesTech</p>
                </div>
                <div class="col-md-6">
                    <ul class="list-inline footer-links float-md-right mb-0">
                        <li class="list-inline-item"><a href="{{ route('about', 'terms') }}">Terms</a></li>
                        <li class="list-inline-item"><a href="{{ route('about', 'privacy') }}">Privacy</a></li>
                        <li class="list-inline-item"><a href="{{ route('contact') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <a href="#top" class="btn btn-icon btn-inverse pos-fixed pos-b pos-r mr-3 mb-3 scroll-state-hidden hidden-md-down" title="Back to top" data-scroll="scroll-state"><i class="fa fa-chevron-up"></i></a>
        </div>
    </div>
</footer>