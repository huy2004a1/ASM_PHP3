<div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
    <ul class="navbar-nav mx-auto">
        <li class="nav-item dropdown">
            <a class="nav-link" href="{{ route('index') }}" role="button"  aria-haspopup="true" aria-expanded="false">
                homepage 
            </a>
            
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" href="{{ route('about-me') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                About <i class="ti-angle-down ml-1"></i>
            </a>
            <div class="dropdown-menu">

                <a class="dropdown-item" href="{{ route('about-me') }}">About Me</a>

                <a class="dropdown-item" href="{{ route('about-us') }}">About Us</a>

            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href=" {{ route('contact')}}">Contact</a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="{{ route('tintuc') }}">Tin Tức</a>
        </li>
    </ul>
</div>