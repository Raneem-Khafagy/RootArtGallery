<nav class="navbar navbar-expand-lg navbar-light fixed-top col-lg-2  bg-light">
    <a class="navbar-brand  d-lg-none d-xl-none" href="#">
        <img src="{{asset('storage/logo/logo.png')}}" width="100" class="d-inline-block align-top" alt="">
    </a>


    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse " id="navbarCollapse">
        <div class="row">
            <div class="col-lg-2">
                <a class="d-none d-lg-block d-xl-block " href="#">
                    <img src="{{asset('storage/logo/logo.png')}}" width="100" class="d-inline-block align-top" alt="">
                </a>

                <ul class=" navbar-nav sidenav col-lg-2">
                    <li class="nav-item @yield('active_home')">
                        <a class="nav-link" href="/">Home <span class="sr-only">(@yield('current_home'))</span></a>
                    </li>
                    <li class="nav-item @yield('active_about')">
                        <a class="nav-link" href="{{route('about')}}">About<span
                                class="sr-only">(@yield('current_about'))</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('active_Contact')" href="#">Contact
                            <span class="sr-only">(@yield('current_contact'))</span>
                        </a>
                    </li>
                    @auth
                    <li class="nav-item">
                        <a class="nav-link @yield('active_Favourites')" href="{{route('favourites')}}">Favourites
                            <span class="sr-only">(@yield('current_Favourites'))</span>
                        </a>
                    </li>
                    @endauth
                    @guest
                    <li class="nav-item">
                        <a class="nav-link @yield('active_Favourites')" href='{{route('login')}}'>Login/Register
                            <span class="sr-only">(@yield('current_Favourites'))</span>
                        </a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a class="nav-link" href onclick="event.preventDefault();
                            document.getElementById('logout-form').submit()">Logout
                            <span class="sr-only"></span>
                        </a>
                        <form method="POST" id="logout-form" action="{{route('logout')}}">
                            @csrf
                        </form>
                    </li>
                    @endguest
                    @yield('extra_links')
                </ul>
            </div>
            <p class="fixed-bottom d-none d-lg-block d-xl-block col-lg-2">
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum sunt quas laudantium odio
                molestias eos
                provident facilis.
            </p>
        </div>

    </div>


</nav>
