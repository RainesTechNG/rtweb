<!--Hidden Header Region-->
<div class="header-hidden collapse">
    <div class="header-hidden-inner container">
        <div class="row">
            <div class="col-sm-6">
                <h3>
                    About Us
                </h3>
                <p>Raines Technologies Limited is a Nigerian Incorporated company involved in providing specialized superior technological solutions, cost-effective Information Technology consultancy among other services</p>
                <a href="{{ route('about') }}" class="btn btn-sm btn-primary">Find out more</a>
            </div>
            <div class="col-sm-6">
            <!--@todo: replace with company contact details-->
                <h3>
                    Contact Us
                </h3>
                <address>
                    <p>
                        <abbr title="Phone"><i class="fa fa-phone"></i></abbr>
                        +234(0)9036809735
                    </p>
                    <p>
                        <abbr title="Email"><i class="fa fa-envelope"></i></abbr>
                        info@rainestech.com
                    </p>
                    <p>
                        <abbr title="Address"><i class="fa fa-home"></i></abbr>
                        Tee Mama Junction, Mandela Road, Minna Niger State, Nigeria
                    </p>
                </address>
            </div>
        </div>
    </div>
</div>

<!--Header upper region-->
<div class="header-upper">
    <!--Show/hide trigger for #hidden-header -->
    <div id="header-hidden-link">
        <a href="#" title="Open" class="show-hide" data-toggle="show-hide" data-target=".header-hidden"><i></i>Open</a>
    </div>
    <!-- all direct children of the .header-inner element will be vertically aligned with each other you can override all the behaviours using the flexbox utilities (flexbox.htm) All elements with .header-brand & .header-block-flex wrappers will automatically be aligned inline & vertically using flexbox, this can be overridden using the flexbox utilities (flexbox.htm) Use .header-block to stack elements within on small screen & "float" on larger screens use .flex-first or/and .flex-last classes to make an element show first or last within .header-inner or .headr-block elements -->
    <div class="header-inner container">
        <!--user menu-->
        <div class="header-block-flex flex-first mr-auto">
            <nav class="nav nav-sm header-block-flex">
                @if(auth()->check())
                    Welcome {{ ucfirst(auth()->user()->username) }}
                @else
                    <a class="nav-link hidden-md-up" href="#login-modal" data-toggle="modal"><i class="fa fa-user"></i></a>
                    <a class="nav-link text-xs text-uppercase hidden-sm-down" href="#signup-modal" data-toggle="modal">Sign Up</a>
                    <a class="nav-link text-xs text-uppercase hidden-sm-down" href="#login-modal" data-toggle="modal">Login</a>
                @endif
            </nav>
            <div class="header-divider header-divider-sm"></div>
            <!--language menu-->
            <div class="dropdown dropdowns-no-carets">
                <a href="#en" class="nav-link text-xs p-1 dropdown-toggle" data-toggle="dropdown"><i class="flag-icon flag-icon-gb"></i></a>
                <div class="dropdown-menu dropdown-menu-mini dropdown-menu-primary">
                    <a href="#en" class="dropdown-item lang-es"><i class="flag-icon flag-icon-en"></i>English</a>
                </div>
            </div>
        </div>
        <!--social media icons-->
        <div class="nav nav-icons header-block flex-last">
        <!--@todo: replace with company social media details-->
            <a href="https://twitter.com/RainesTechNG" rel="nofollow" target="_blank" class="nav-link"> <i class="fa fa-twitter-square icon-1x"></i> <span class="sr-only">Twitter</span> </a>
            <a href="https://web.facebook.com/rainestechng" rel="nofollow" target="_blank" class="nav-link"> <i class="fa fa-facebook-square icon-1x"></i> <span class="sr-only">Facebook</span> </a>
            <a href="#" class="nav-link"> <i class="fa fa-linkedin-square icon-1x"></i> <span class="sr-only">Linkedin</span> </a>
            <a href="#" class="nav-link"> <i class="fa fa-google-plus-square icon-1x"></i> <span class="sr-only">Google plus</span> </a>
        </div>
    </div>
</div>