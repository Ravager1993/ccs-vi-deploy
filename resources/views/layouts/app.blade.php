<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css')}}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <script src="{{ asset('js/fontawesome.min.js') }}"></script>
    <script src="{{ asset('js/chart.min.js') }} "></script>

    <script src="{{ asset('js/script.js') }}"></script>


    @if(Auth::check() == 0)
        <style>
            @media (min-width: 992px) {
                #content {
                padding-left: 0;

                }
            }
        </style>
    @endif
    

</head>
<body>


    <div id="app">
        <div class="wrapper">


            @if(Auth::check())
            <nav id="sidebar">
                <div class="" id="dismiss" onclick="toggleSidebar()">
                    <i class="fas fa-arrow-left"></i>
                </div>

                <div class="sidebar-header">
                    <h3>LOGO</h3>
                </div>

                <ul class="list-unstyled components">
                    {{-- <p>User Info</p> --}}
                    {{-- <i class="fas fa-user-circle"></i> --}}
                    <p>
                    {{-- {{ Auth::user()->name }} --}}
                    </p>
                    <li>
                        <a href="/home" class="py-3">
                            <i class="fas fa-tachometer-alt fa-lg ml-3 mr-4"></i>
                            <span class="sidebar-link">Dashboard</span>
                        </a>
                    </li>

                    <li>
                        <a href="#subSections" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle py-3">
                            <i class="fas fa-building fa-lg ml-3 mr-4"></i>
                            <span class="sidebar-link">Sections</span>
                        </a>
                        <ul class="collapse list-unstyled" id="subSections">
                            <li>
                                <a href="#">Section A</a>
                            </li>
                            <li>
                                <a href="#">Section B</a>
                            </li>
                            <li>
                                <a href="#">Section C</a>
                            </li>
                            <li>
                                <a href="#">Section D</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="#subStatistics" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle py-3">
                            <i class="fas fa-chart-pie fa-lg ml-3 mr-4"></i>
                            <span class="sidebar-link">Statistics</span>
                        </a>
                        <ul class="collapse list-unstyled" id="subStatistics">
                            <li>
                                <a href="/statistic">Daily</a>
                            </li>
                            <li>
                                <a href="#">Weekly</a>
                            </li>
                            <li>
                                <a href="#">Monthly</a>
                            </li>
                            <li>
                                <a href="#">Yearly</a>
                            </li>
                        </ul>
                    </li>

                    {{-- <li>
                        <a href="/login" class="py-3">
                            <i class="fas fa-lock fa-lg ml-3 mr-4"></i>
                            <span class="sidebar-link">Login</span>
                        </a>
                    </li>
                    <li>
                        <a href="/register" class="py-3">
                            <i class="fas fa-user-plus fa-lg ml-3 mr-4"></i>
                            <span class="sidebar-link">Register</span>
                        </a>
                    </li> --}}
                    <li>
                        <a href="/student" class="py-3">
                            <i class="fas fa-graduation-cap fa-lg ml-3 mr-4"></i>
                            <span class="sidebar-link">Student</span>
                        </a>
                    </li>

                    <li>
                        <a href="/counter" class="py-3">
                            <i class="fas fa-user fa-lg ml-3 mr-4"></i>
                            <span class="sidebar-link">Counter</span>
                        </a>
                    </li>

                    <li>
                        <a href="/logout" class="py-3" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt fa-lg ml-3 mr-4"></i>
                            <span class="sidebar-link">Logout</span>
                        </a>
                    </li>
                </ul>



            </nav>
            @endif
 


            <main id="content" class="main-content">
                <nav id="navbar" class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
                    {{-- <div class="container-fluid"> --}}
                        @if(Auth::check())
                        <button type="submit" id="sidebarCollapse" class="btn btn-danger" onclick="toggleSidebar()">
                            <i class="fas fa-align-left"></i>
                            {{-- <span>Toggle Sidebar</span> --}}
                        </button>
                        @endif
                        <a class="navbar-brand ml-4" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>
        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">
        
                            </ul>
        
                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link user-drop" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
        
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    {{-- </div> --}}
                </nav>
                @yield('content')





                <footer id="footer">
                    <p>Copyright 2020</p>
                </footer>

            </main>

            

            <div class="overlay" onclick="toggleSidebar()"></div>
        </div>
    </div>

    {{-- Font Awesome --}}
    

</body>
</html>
