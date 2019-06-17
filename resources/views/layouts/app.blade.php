<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <title>
      @section('title')
      | {{ config('app.name') }}
      @show
    </title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="{{ config('app.name') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/global.css') }}">

    <!-- For page wise scripts -->
    @yield('page_styles')
</head>

<body>
<div>
    <header id="header_section">
      <div class="navbar-fixed">
        <nav>
          <div class="nav-wrapper">
            <a href="{{ route('home.index') }}" class="brand_logo center">
              <img class="responsive-img" src="{{ asset('img/theme/logo.png') }}">
              {{ config('app.name') }}
            </a>
            <ul class="right hide-on-med-and-down">
              @auth
                <li class="top_nav_item">
                  <div class="input-field nav_search_container">
                    <i class="fa fa-search text_theme"></i>
                    <input id="icon_prefix" type="text" placeholder="Search" class="validate">
                  </div>
                </li>
                <li class="top_nav_item"><a herf="{{ route('job.create') }}" class="btn btn_theme_outline">POST</a></li>
                <li class="top_nav_item"><a href="#"><i class="fa fa-bell"></i></a></li>
                <li class="top_nav_item"><a href="#"><i class="fa fa-calendar"></i></a></li>
                <li class="top_nav_item"><a href="#"><i class="fa fa-envelope"></i></a></li>
                <li class="top_nav_item">
                  <a href="#" class="dropdown-trigger" href="#!" data-target="dropdown1">
                    <div class="chip">
                      <img src="/uploads/briefcase_1/user2.jpg">
                      Rashid
                    </div>
                  </a>
                </li>
              @else
                <li class="top_nav_item"><a href="{{ route('login') }}">Login</a></li>
                <li class="top_nav_item"><a href="{{ route('register') }}">Register</a></li>
              @endauth 
            </ul>

            <!-- Profile Dropdown -->
            <ul id="dropdown1" class="dropdown-content">
              <li><a href="{{ route('home.index') }}">Profile</a></li>
              <li class="divider"></li>
              <li><a href="{{ route('home.index') }}">Settings</a></li>
              <li class="divider"></li>
              <li>
                <a href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                 document.getElementById('logout-form').submit();">Logout</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                  @csrf
                </form>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>

    <div id="splash" align="center">
        <div class="loader"></div>
        <div></div>
    </div>
    
    @auth
      <div id="auth_head_gap"></div>
    @endauth

    <main id="app" style="display:none;">
        @yield('content')
    </main>
</div>

<!-- Scripts Section -->    
<script src="{{ URL::asset('js/app.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

<script>
$(window).on('load',function(){
    $("#splash").css('display','none');
    $("#app, #main-footer").fadeIn('slow');

    M.AutoInit();
});
</script>

<!-- For server side flash messages -->
@include('flashy::message')

<!-- For page wise scripts -->
@yield('page_scripts')

</body>
</html>
