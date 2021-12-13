<!DOCTYPE html>
<html id="modeChange" class="loading dark-layout" lang="{{ app()->getLocale() }}" data-textdirection="ltr">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>@yield('title')</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/vendors/css/vendors.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/vendors/css/extensions/toastr.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/bootstrap-extended.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/colors.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/components.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/themes/dark-layout.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/themes/bordered-layout.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/themes/semi-dark-layout.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/core/menu/menu-types/horizontal-menu.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/css/plugins/extensions/ext-component-toastr.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('panel/assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/vendors/css/forms/select/select2.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('panel/app-assets/vendors/css/tables/datatable/responsive.bootstrap4.min.css') }}">
</head>
<body class="horizontal-layout horizontal-menu  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="">
	<nav class="header-navbar navbar-expand-lg navbar navbar-fixed align-items-center navbar-shadow navbar-brand-center navbar-dark"
	data-nav="brand-center">
	<div class="navbar-container d-flex content">
		<div class="bookmark-wrapper d-flex align-items-center">
			<ul class="nav navbar-nav d-xl-none">
				<li class="nav-item"><a class="nav-link menu-toggle" href="javascript:void(0);"><i class="ficon"
					data-feather="menu"></i></a></li>
				</ul>
			</div>
			<ul class="nav navbar-nav align-items-center ml-auto">
				<h4>{{ setting('title') }}</h4>
			</ul>
			<ul class="nav navbar-nav align-items-center ml-auto">
				<li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
					id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true"
					aria-expanded="false">
					<div class="user-nav d-sm-flex d-none">
						<span class="user-name font-weight-bolder">
							{{ Auth::user()->name }}
						</span>
						<span class="user-status">Yönetici</span>
					</div>
					<span class="avatar"><img class="round" src="{{ asset('panel/app-assets/images/portrait/small/mk.png') }}" alt="{{ Auth::user()->name }}" height="40" width="40">
						<span class="avatar-status-online">

						</span>
					</span>
				</a>
				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
					<a class="dropdown-item" href="{{ route('panel.account.index') }}"><i class="mr-50"></i>@lang('words.profile')</a>
					<a class="dropdown-item" href="{{ route('panel.logout.create') }}"><i class="mr-50"></i>@lang('words.logout')</a>
				</div>
			</li>
		</ul>
	</div>
</nav>
<div class="horizontal-menu-wrapper">
	<div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-shadow menu-border" role="navigation" data-menu="menu-wrapper" data-menu-type="floating-nav">
		<div class="shadow-bottom"></div>
		<div class="navbar-container main-menu-content" data-menu="menu-container">
			<ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
				<li class="nav-item">
					<a href="{{ route('panel.main') }}" class="nav-link d-flex align-items-center">
						<i data-feather="home"></i>
						<span>@lang('words.homepage')</span>
					</a>
				</li>
				
				<li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" data-toggle="dropdown"><i data-feather="settings"></i><span>@lang('words.general')</span></a>
					<ul class="dropdown-menu">
						<li>
							<a class="dropdown-item d-flex align-items-center" href="{{ route('panel.setting.index') }}" data-toggle="dropdown" >
								<i data-feather="chevrons-right"></i>
								<span>@lang('words.general_setting')</span>
							</a>
						</li>
						<li>
							<a class="dropdown-item d-flex align-items-center" href="{{ route('panel.about.index') }}" data-toggle="dropdown" >
								<i data-feather="chevrons-right"></i>
								<span>@lang('words.general_content')</span>
							</a>
						</li>
						<li>
							<a class="dropdown-item d-flex align-items-center" href="{{ route('panel.message.index') }}" data-toggle="dropdown" >
								<i data-feather="chevrons-right"></i>
								<span>@lang('words.message_list')</span>
							</a>
						</li>
					</ul>
				</li>

				<li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" data-toggle="dropdown"><i data-feather="sidebar"></i><span>@lang('words.slider')</span></a>
					<ul class="dropdown-menu">
						<li>
							<a class="dropdown-item d-flex align-items-center" href="{{ route('panel.slider.create') }}" data-toggle="dropdown" >
								<i data-feather="chevrons-right"></i>
								<span>@lang('words.slider_add')</span>
							</a>
						</li>
						<li>
							<a class="dropdown-item d-flex align-items-center" href="{{ route('panel.slider.index') }}" data-toggle="dropdown" >
								<i data-feather="chevrons-right"></i>
								<span>@lang('words.slider_list')</span>
							</a>
						</li>
					</ul>
				</li>

				<li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" data-toggle="dropdown"><i data-feather="grid"></i><span>@lang('words.category')</span></a>
					<ul class="dropdown-menu">
						<li>
							<a class="dropdown-item d-flex align-items-center" href="{{ route('panel.category.create') }}" data-toggle="dropdown" >
								<i data-feather="chevrons-right"></i>
								<span>@lang('words.category_add')</span>
							</a>
						</li>
						<li>
							<a class="dropdown-item d-flex align-items-center" href="{{ route('panel.category.index') }}" data-toggle="dropdown" >
								<i data-feather="chevrons-right"></i>
								<span>@lang('words.category_list')</span>
							</a>
						</li>
					</ul>
				</li>

				<li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" data-toggle="dropdown"><i data-feather="layers"></i><span>@lang('words.project')</span></a>
					<ul class="dropdown-menu">
						<li>
							<a class="dropdown-item d-flex align-items-center" href="{{ route('panel.project.create') }}" data-toggle="dropdown" >
								<i data-feather="chevrons-right"></i>
								<span>@lang('words.project_add')</span>
							</a>
						</li>
						<li>
							<a class="dropdown-item d-flex align-items-center" href="{{ route('panel.project.index') }}" data-toggle="dropdown" >
								<i data-feather="chevrons-right"></i>
								<span>@lang('words.project_list')</span>
							</a>
						</li>
					</ul>
				</li>
				<li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link d-flex align-items-center" data-toggle="dropdown"><i data-feather="image"></i><span>@lang('words.gallery')</span></a>
					<ul class="dropdown-menu">
						<li>
							<a class="dropdown-item d-flex align-items-center" href="{{ route('panel.gallery.create') }}" data-toggle="dropdown" >
								<i data-feather="chevrons-right"></i>
								<span>@lang('words.gallery_add')</span>
							</a>
						</li>
						<li>
							<a class="dropdown-item d-flex align-items-center" href="{{ route('panel.gallery.index') }}" data-toggle="dropdown" >
								<i data-feather="chevrons-right"></i>
								<span>@lang('words.gallery_list')</span>
							</a>
						</li>
					</ul>
				</li>

				<li class="nav-item">
					<a href="{{ route('web.main') }}" target="_blank" class="nav-link d-flex align-items-center">
						<i data-feather="globe"></i>
						<span>@lang('words.preview')</span>
					</a>
				</li>

				<div class="custom-control custom-control-success custom-switch mt-2 ml-auto">
                    <input onchange="modeChange();" type="checkbox" class="custom-control-input" id="modeSwitch" checked/>
                    <label class="custom-control-label" for="modeSwitch">
                    <span class="switch-icon-left"><i data-feather="sun"></i></span>
                    <span class="switch-icon-right"><i data-feather="moon"></i></span>
                    </label>
                </div>
			</ul>
		</div>
	</div>
</div>