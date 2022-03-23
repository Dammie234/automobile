<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{{asset('images/icon/logo.png')}}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                @if(isset($page) && $page == 'dashboard')
                    <li class="active">
                        <a class="js-arrow" href="{{route('home')}}">
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    </li>
                @else
                    <li class="">
                        <a class="js-arrow" href="{{route('home')}}">
                            <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                    </li>
                @endif
                
                @if(Auth::user()->role == 1)
                    @if(isset($page) && $page == 'users')
                        <li class="active">
                            <a href="{{route('users')}}">
                                <i class="fas fa-users"></i>Users</a>
                        </li>
                    @else
                        <li class="">
                            <a href="{{route('users')}}">
                                <i class="fas fa-users"></i>Users</a>
                        </li>
                    @endif
                @endif
                @if(Auth::user()->role != 1)
                    @if(isset($page) && $page == 'vehicle')
                        <li class="active">
                            <a class="js-arrow" href="{{route('vehicle.index')}}">
                                <i class="fas fa-car"></i>My Vehicles</a>
                        </li>
                    @else
                        <li class="">
                            <a class="js-arrow" href="{{route('vehicle.index')}}">
                                <i class="fas fa-car"></i>My Vehicles</a>
                        </li>
                    @endif
                @endif
                @if(Auth::user()->role == 1)
                @if(isset($page) && $page == 'vehicles')
                    <li class="active">
                        <a href="{{route('vehicle.all')}}">
                            <i class="fas fa-car"></i>Vehicles</a>
                    </li>
                @else
                    <li class="">
                        <a href="{{route('vehicle.all')}}">
                            <i class="fas fa-car"></i>Vehicle</a>
                    </li>
                @endif
            
            @endif
                
            </ul>
        </nav>
    </div>
</aside>