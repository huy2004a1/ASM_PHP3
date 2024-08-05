<div class="order-2 order-lg-3 d-flex align-items-center">
    <!-- Account Dropdown -->
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle m-2 border-0 bg-transparent text-dark" type="button" id="accountDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    
            @if(Auth::check())
                {{ Auth::user()->name }}
            @else
                Account
            @endif
        </button>
        <div class="dropdown-menu" aria-labelledby="accountDropdown">
            
            @if(!Auth::check())
                <a class="dropdown-item" href="/login">Login</a>
                <a class="dropdown-item" href="{{ route('register') }}">Register</a>
            @else
               
                <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endif
        </div>
    </div>

    <button class="navbar-toggler border-0 order-1" type="button" data-toggle="collapse" data-target="#navigation">
        <i class="ti-menu"></i>
    </button>
</div>
