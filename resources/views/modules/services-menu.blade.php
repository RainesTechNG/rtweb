<!-- Sections Menu-->
<div class="nav-section-menu">
    <div class="nav nav-list">
        <span class="nav-header">In This Section</span>
        <a href="{{ route('services', 'mobile-application-development') }}" class="nav-link first @if($service == 'mobile-application-development') active @endif">
            Mobile Applications
            <small class="d-none d-lg-block">Cross Platform Mobile App Development</small>
            <i class="fa fa-angle-right"></i>
        </a>
        <a href="{{ route('services', 'desktop-application-development') }}" class="nav-link @if($service == 'desktop-application-development') active @endif">
            Desktop Applications
            <small class="d-none d-lg-block">Cross Platform PC Software</small>
            <i class="fa fa-angle-right"></i>
        </a>
        <a href="{{ route('services', 'web-cloud-application-development') }}" class="nav-link @if($service == 'web-cloud-application-development') active @endif">
            Web/Cloud Applications
            <small class="d-none d-lg-block">Platform/Device Independent Apps</small>
            <i class="fa fa-angle-right"></i>
        </a>
        <a href="{{ route('services', 'website-development') }}" class="nav-link @if($service == 'website-development') active @endif">
            Websites
            <small class="d-none d-lg-block">Get a Website</small>
            <i class="fa fa-angle-right"></i>
        </a>
        <a href="{{ route('services', 'home-office-network') }}" class="nav-link @if($service == 'home-office-network') active @endif">
            Home &amp; Office Network
            <small class="d-none d-lg-block">Get your Devices Communicating</small>
            <i class="fa fa-angle-right"></i>
        </a>
        <a href="{{ route('services', 'tracking') }}" class="nav-link @if($service == 'tracking') active @endif">
            Locator &amp; Tracker
            <small class="d-none d-lg-block">GPS Tracking &amp; More</small>
            <i class="fa fa-angle-right"></i>
        </a>
        <a href="{{ route('services', 'surveillance-systems') }}" class="nav-link @if($service == 'surveillance-systems') active @endif">
            Surveillance Systems
            <small class="d-none d-lg-block">CCTV Monitoring &amp; More</small>
            <i class="fa fa-angle-right"></i>
        </a>
        <a href="{{ route('services', 'photo-video-coverage') }}" class="nav-link @if($service == 'photo-video-coverage') active @endif">
            Photo &amp; Video Coverage
            <small class="d-none d-lg-block">Keep memories of your events</small>
            <i class="fa fa-angle-right"></i>
        </a>
        <a href="{{ route('services', 'multimedia-productions') }}" class="nav-link @if($service == 'multimedia-productions') active @endif">
            Multimedia Productions
            <small class="d-none d-lg-block">Video &amp; Audio Editing</small>
            <i class="fa fa-angle-right"></i>
        </a>
        <a href="{{ route('services', 'system-administration-maintenance') }}" class="nav-link @if($service == 'system-administration-maintenance') active @endif">
            System Admin &amp; Maintenance
            <small class="d-none d-lg-block">PC Administration and Maintenance</small>
            <i class="fa fa-angle-right"></i>
        </a>
        <a href="{{ route('services', 'consultancy-services') }}" class="nav-link @if($service == 'consultancy-services') active @endif">
            Consultancy Services
            <small class="d-none d-lg-block">Giving you insight on ICT issues</small>
            <i class="fa fa-angle-right"></i>
        </a>
        <a href="{{ route('services', 'office-equipment-supply') }}" class="nav-link @if($service == 'office-equipment-supply') active @endif">
            Office Equipment Supply
            <small class="d-none d-lg-block">Supply of Digital Communication Devices</small>
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
</div>