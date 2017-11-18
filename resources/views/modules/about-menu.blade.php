<!-- Sections Menu-->
<div class="nav-section-menu">
    <div class="nav nav-list">
        <span class="nav-header">In This Section</span>
        <a href="{{ route('about', 'about-us') }}" class="nav-link first @if($about == 'about-us') active @endif">
            Raines Technologies
            <small>About Us</small>
            <i class="fa fa-angle-right"></i>
        </a>
        <a href="{{ route('about', 'terms') }}" class="nav-link @if($about == 'terms') active @endif">
            Terms
            <small>Our Company Terms</small>
            <i class="fa fa-angle-right"></i>
        </a>
        <a href="{{ route('about', 'privacy') }}" class="nav-link @if($about == 'privacy') active @endif">
            Privacy
            <small>Our company privacy statement</small>
            <i class="fa fa-angle-right"></i>
        </a>
        <a href="{{ route('about', 'channels') }}" class="nav-link @if($about == 'channels') active @endif">
            Channels of Communication
            <small>Ways to get in touch with Us</small>
            <i class="fa fa-angle-right"></i>
        </a>
        <a href="{{ route('contact') }}" class="nav-link @if($about == 'contact-us') active @endif">
            Contact Us
            <small>Get in touch with us now!</small>
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
</div>