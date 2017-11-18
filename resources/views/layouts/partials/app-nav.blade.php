<div class="navbar-main collapse">
    <!--main navigation-->
    <ul class="nav navbar-nav float-lg-right dropdown-effect-fade">
        <!-- Homepages -->
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link"> <i class="fa fa-home nav-link-icon"></i> <span class="hidden-xs-up">Home</span> </a>
        </li>

        <!-- About Us -->
        <li class="nav-item dropdown">
            <a href="{{ route('about') }}" class="nav-link">About Us</a>
        </li>

        <!-- Services -->
        <li class="nav-item dropdown">
            <a href="{{ route('services') }}" class="nav-link">Our Services</a>
            <!-- Menu -->
        </li>

        <!-- Contact Us -->
        <li class="nav-item dropdown">
            <a href="{{ route('contact') }}" class="nav-link">Contact Us</a>
            <!-- Menu -->
        </li>
    </ul>
</div>