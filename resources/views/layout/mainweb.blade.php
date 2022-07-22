<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <title>@yield('title')</title>
    <link href="{{ url('/assets/images/Web/IconPIMUS.ico') }}" rel="shorcut icon">
    <!-- Bootstrap -->
    <!-- Bootstrap core CSS -->
    <link href="{{ url('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ url('/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/templatemo-space-dynamic.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/animated.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/navbar.css') }}">
    <link rel="stylesheet" href="{{ url('/assets/css/style.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    @yield('style')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ url('assets/images/logo/logo-ubaya.png') }}" alt="Logo Ubaya"
                    style="height: 65px; width: 65px;">
                <img src="{{ url('assets/images/logo/logo-pimus.png') }}" alt="Logo Pimus"
                    style="height: 70px; width: 70px;  ">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-center" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-center" href="{{ url('/aboutus') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-center" href="{{ url('/registration') }}">Registration</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link nav-center" href="{{ url('/submission') }}">Submission</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-center" href="{{ url('/exhibition') }}">Exhibition</a>
                    </li> --}}
                    @guest
                        <li class="nav-item nav-center">
                            <a class="nav-link btnLogin" href="{{ url('/login') }}">Login</a>
                        </li>
                    @else
                        <li class="nav-item nav-center">
                            <a class="nav-link btnLogin" href="{{ route('logout') }}" onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="GET" class="d-none">
                                @csrf
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <!-- ***** Header Area End ***** -->

    @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
                    <p style="color: #ffde40">© Copyright 2021 SI PIMUS XI Committee.</p>

                    <!-- <br>Design: <a rel="nofollow" href="https://templatemo.com">TemplateMo</a></p> -->
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="{{ url('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/js/owl-carousel.js') }}"></script>
    <script src="{{ url('assets/js/animation.js') }}"></script>
    <script src="{{ url('assets/js/imagesloaded.js') }}"></script>
    <script src="{{ url('assets/js/templatemo-custom.js') }}"></script>

    @yield('script')

</body>

</html>
