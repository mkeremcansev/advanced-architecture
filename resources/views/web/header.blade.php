<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="UTF-8">
  <title>{{ setting('title') }} | @yield('title')</title>
    <meta content="{{ setting('description') }}" name="description">
    <meta content="Mustafa Kerem Cansev" name="author">
    <meta content="{{ setting('keywords') }}" name="keywords">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
    <link href="{{ asset(setting('favicon')) }}" rel="icon" sizes="32x32" type="image/png">
    <link href="{{ asset('web/plugin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('web/plugin/css/slidercss.css') }}" rel="stylesheet">
    <link href="{{ asset('web/assets/css/themify-icons.css') }}" rel="stylesheet" >
    <link href="{{ asset('web/assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('web/assets/css/scroll.css') }}" rel="stylesheet">
    <link href="{{ asset('web/assets/css/animated-on3step.css') }}" rel="stylesheet">
    <link href="{{ asset('web/plugin/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('web/plugin/css/owl.theme.css') }}" rel="stylesheet">
    <link href="{{ asset('web/assets/css/on3step-style.css') }}" rel="stylesheet">
    <link href="{{ asset('web/assets/css/queries-on3step.css') }}" media="all" rel="stylesheet">
    <link href="{{ asset('web/plugin/css/lightgallery.css') }}" rel="stylesheet">
  </head>
<body>
    <div class="backgroundloader">
    <div class="loader">
            <div class="cirloader">
                <div id="circle"></div>
            </div>
        </div>
    </div>
    <div class="content-wrapper">
    <header class="init">
      <div class="navbar-default-white navbar-fixed-top">
        <div class="container-fluid">
          <div class="row p-4-vh">
              <a class="navbar-brand white" href="{{ route('web.main') }}">
              <img alt="logo" src="{{ asset(setting('logo')) }}">
              </a> 
              <div class="rightmenu">
                <div class="social-icons-subnav">
                    <span>@lang('words.contact_us') : <a href="tel:{{ setting('phone') }}">{{ setting('phone') }}</a></span>
                    <span>EMAIL : <a href="mailto:{{ setting('mail') }}">{{ setting('mail') }}</a></span>
                </div>
                <div id="nav-icon">
                  <span>close</span>
                  <div class="menu-line white"></div>
                  <div class="menu-line1 white"></div>
                  <div class="menu-line2 white"></div>
                </div>
              </div>
          </div>
        </div>
      </div>
      </header>
    @include('web.layouts.index_menu')