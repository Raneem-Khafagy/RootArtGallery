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
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link @yield('active_login')" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @elseif (Route::has('register'))
                    <li class="nav-item @yield('active_register')">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item ">
                        <a class="nav-link " href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                    </li>
                    @endguest

                    <li class="nav-item @yield('active_about')">
                        <a class="nav-link" href="{{route('about')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('active_Contact')" href="{{route('contact')}}">Contact
                        </a>
                    </li>
                    @auth
                    <li class="nav-item ">
                        <a class="nav-link @yield('active_Favourites')" href="{{route('favourites')}}">Favourites
                        </a>
                    </li>
                    <li class="nav-item d-md-sm-xs-none">
                    <a class="nav-link d-md-sm-xs-none" href onclick="event.preventDefault();
                            document.getElementById('logout-form').submit()">Logout
                        <span class="sr-only"></span>
                    </a>
                    <form method="POST" id="logout-form" action="{{route('logout')}}">
                        @csrf
                    </form>
                </li>
                    @endauth
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
