<header>

    @guest
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container-fluid px-4">
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                    <div>
                        <img src="{{url('/img/logo-annidato-bn.png')}}" alt="logo-dvora" class="logo-dvora">
                    </div>
                    {{-- config('app.name', 'Laravel') --}}
                </a>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">

            <ul class="navbar-nav align-self-right">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
            </ul>
            </div>
        </div>
    </nav>
@else
<nav class="navbar navbar-expand-md navbar-dark bg-black shadow-sm">
     <div class="container-fluid px-4">
         <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <div>
                 <img src="{{url('/img/logo-annidato-nb.png')}}" alt="logo-dvora" class="logo-dvora">
            </div>
        </a>

        <div class="collapse navbar-collapse d-flex dropdown justify-content-end position-relative p-0 w-80" id="navbarSupportedContent me-3 ms-5 align-items-center">
            <div class="search-field me-5">
                <form action="{{route('admin.projects.index')}}" class="m-0 d-flex" method="GET">
                    @csrf
                    <input class="form-control d-inline-block me-2" name="search" type="text" placeholder="Cerca progetto...">
                    <button class="btn btn-warning" type="submit">Cerca</button>
                </form>
            </div>
            <div class="user-field">
                <button class=" nav-link dropdown-toggle align-self-right btn btn-light px-2 py-1 me-3" aria-expanded="false" data-bs-toggle="dropdown" v-pre>
                    {{ Auth::user()->name }}</button>
                    <ul class="dropdown-menu p-0">
                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">{{ __('Logout') }} </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                                 </form></li>

                      </ul>




                </li>
            </ul>
            </div>

        </div>
    </div>
</nav>
 @endguest

</header>
