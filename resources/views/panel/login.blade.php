<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>{{ setting('title') }}</title>
    <link rel="apple-touch-icon" href="{{ asset(setting('favicon')) }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset(setting('favicon')) }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/vendors/css/vendors.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/bootstrap-extended.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/colors.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/components.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/themes/dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/themes/bordered-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/themes/semi-dark-layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/core/menu/menu-types/horizontal-menu.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/plugins/forms/form-validation.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/pages/page-auth.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/assets/css/style.css') }}">
</head>
<body class="horizontal-layout horizontal-menu blank-page navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="blank-page">
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-v2">
                    <div class="auth-inner row m-0">
                        <a class="brand-logo" href="javascript:void(0);">
                            <h2 class="brand-text text-primary ml-1">{{ setting('title') }}</h2>
                        </a>
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="{{ asset('panel/app-assets/images/pages/canseworks.svg') }}"/></div>
                        </div>
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <h2 class="card-title font-weight-bold mb-1">Admin panel</h2>
                                    @if ($message = Session::get('error'))
                                        <div class="alert alert-warning" role="alert">
                                            <div class="alert-body">
                                                {{ $message }}
                                            </div>
                                        </div>
                                    @endif
                                    @if ($message = Session::get('success'))
                                        <div class="alert alert-success" role="alert">
                                            <div class="alert-body">
                                                {{ $message }}
                                            </div>
                                        </div>
                                    @endif
                                    @if(count($errors) > 0)
                                        @foreach($errors->all() as $error)
                                        <div class="alert alert-warning" role="alert">
                                            <div class="alert-body">
                                                {{ $error }}
                                            </div>
                                        </div>
                                        @endforeach
                                    @endif
                                <form class="auth-login-form mt-2" action="{{ route('panel.login.create') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label" for="login-email">@lang('words.mail')</label>
                                        <input class="form-control" type="text" name="email"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="login-email">@lang('words.password')</label>
                                        <input class="form-control" type="password" name="password"/>
                                    </div>
                                    <button class="btn btn-primary btn-block" type="submit">@lang('words.login')</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('panel/app-assets/vendors/js/vendors.min.js') }}"></script>
    <script src="{{ asset('panel/app-assets/vendors/js/ui/jquery.sticky.js') }}"></script>
    <script src="{{ asset('panel/app-assets/vendors/js/forms/validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('panel/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset('panel/app-assets/js/core/app.js') }}"></script>
    <script src="{{ asset('panel/app-assets/js/scripts/pages/page-auth-login.js') }}"></script>
</body>
</html>