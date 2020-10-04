<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ClassyAds &mdash; Colorlib Website Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('classyads/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('classyads/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('classyads/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('classyads/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('classyads/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('classyads/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('classyads/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('classyads/fonts/flaticon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('classyads/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('classyads/css/rangeslider.css')}}">
    <link rel="stylesheet" href="{{asset('classyads/css/style.css')}}">
    
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar container py-0 bg-white" role="banner">

      <!-- <div class="container"> -->
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-black mb-0">Classy<span class="text-primary">Ads</span>  </a></h1>
          </div>
          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="{{ route('home-view') }}">Home</a></li>
                <li><a href="{{ route('listings') }}">Ads</a></li>
                <li class="has-children">
                  <a href="{{ route('about') }}">About</a>
                  {{-- <ul class="dropdown">
                    <li><a href="#">The Company</a></li>
                    <li><a href="#">The Leadership</a></li>
                    <li><a href="#">Philosophy</a></li>
                    <li><a href="#">Careers</a></li>
                  </ul> --}}
                </li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('contact') }}">Contact</a></li>




                @guest
                <li class="ml-xl-3 login"><a href="{{ route('login') }}"><span class="border-left pl-xl-4"></span>Log In</a></li>
                <li><a href="{{route('register')}}">Register</a></li>
                @else
                  
                    <a href="{{ route('logout') }}"
                      class="border-left pl-xl-4"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                  <div class="position-fixed">
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden" >
                          {{ csrf_field() }}
                      </form>
                  </div>
                @endguest

                <li><a href="{{ route('post-view') }}" class="cta"><span class="bg-primary text-white rounded">+ Post an Ad</span></a></li>
              </ul>
            </nav>
          </div>


          <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
            <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
          </div>

        </div>
      <!-- </div> -->
      
    </header>