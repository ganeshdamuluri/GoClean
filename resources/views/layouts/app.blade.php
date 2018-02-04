<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     

				<title>MR.Car Clean</title>
				<meta name="keywords" content="" />
				<meta name="description" content="" />		

				<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
				<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

				<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,700,900&amp;subset=latin,latin-ext">
				<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=PT+Serif:700italic,700,400italic&amp;subset=latin,cyrillic-ext,latin-ext,cyrillic">
				
				<link rel="stylesheet" type="text/css" href="../../assets/style/jquery.qtip.css"/>
				<link rel="stylesheet" type="text/css" href="../../assets/style/jquery-ui.min.css"/>
				<link rel="stylesheet" type="text/css" href="../../assets/style/superfish.css"/>
				<link rel="stylesheet" type="text/css" href="../../assets/style/flexnav.css"/>
				<link rel="stylesheet" type="text/css" href="../../assets/style/DateTimePicker.min.css"/>
				<link rel="stylesheet" type="text/css" href="../../assets/style/fancybox/jquery.fancybox.css"/> 
				<link rel="stylesheet" type="text/css" href="../../assets/style/fancybox/helpers/jquery.fancybox-buttons.css"/>
				<link rel="stylesheet" type="text/css" href="../../assets/style/revolution/layers.css"/> 
				<link rel="stylesheet" type="text/css" href="../../assets/style/revolution/settings.css"/> 
				<link rel="stylesheet" type="text/css" href="../../assets/style/revolution/navigation.css"/> 
				<link rel="stylesheet" type="text/css" href="../../assets/style/base.css"/> 
				<link rel="stylesheet" type="text/css" href="../../assets/style/responsive.css"/> 
				
				<script type="text/javascript" src="../../assets/script/jquery.min.js"></script>

			
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
