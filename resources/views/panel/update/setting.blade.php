@extends('Panel.main')
@section('title')
@lang('words.general_setting')
@endsection
@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
           <section>
                <div class="row justify-content-center">
                    <div class="col-md-6">
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
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">@lang('words.general_setting')</h4>
                            </div>
                            <form id="setting_form" method="POST" action="{{ route('panel.setting.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="title">@lang('words.title')</label>
                                        <input type="text" class="form-control" name="title"
                                            value="{{ setting('title') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="description">@lang('words.description')</label>
                                        <textarea type="text" class="form-control"
                                            name="description">{{ setting('description') }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="keywords">@lang('words.keywords')</label>
                                        <div class="badge badge-light-success">@lang('words.setting_keywords_alert')
                                        </div>
                                        <textarea type="text" class="form-control"
                                            name="keywords">{{ setting('keywords') }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="footer">@lang('words.footer')</label>
                                        <input type="text" class="form-control" name="footer"
                                            value="{{ setting('footer') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="adress">@lang('words.adress')</label>
                                        <textarea type="text" class="form-control"
                                            name="adress">{{ setting('adress') }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="map">@lang('words.map')</label>
                                        <textarea type="text" class="form-control"
                                            name="map">{{ setting('map') }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="facebook">@lang('words.facebook')</label>
                                        <input type="text" class="form-control" name="facebook"
                                            value="{{ setting('facebook') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="instagram">@lang('words.instagram')</label>
                                        <input type="text" class="form-control" name="instagram"
                                            value="{{ setting('instagram') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="twitter">@lang('words.twitter')</label>
                                        <input type="text" class="form-control" name="twitter"
                                            value="{{ setting('twitter') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="mail">@lang('words.mail')</label>
                                        <input type="text" class="form-control" name="mail"
                                            value="{{ setting('mail') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="whatsapp">@lang('words.whatsapp')</label>
                                        <input type="text" class="form-control" name="whatsapp"
                                            value="{{ setting('whatsapp') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="phone">@lang('words.phone')</label>
                                        <input type="text" class="form-control" name="phone"
                                            value="{{ setting('phone') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="logo">@lang('words.logo')</label>
                                        <input type="file" class="form-control" name="logo">
                                    </div>
                                    <div class="form-group">
                                        <label for="favicon">@lang('words.favicon')</label>
                                        <input type="file" class="form-control" name="favicon">
                                    </div>

                                    <button type="submit"
                                        class="btn btn-primary waves-effect waves-float waves-light mt-2 mb-2 float-right">@lang('words.save')</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 col-6">
                                        <h4 class="card-title">@lang('words.update_logo')</h4>
                                        <a href="javascript:void(0)">
                                            <img width="150" src="{{ asset(setting('logo')) }}"
                                                class="img-fluid rounded mb-1" />
                                        </a>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <h4 class="card-title">@lang('words.update_favicon')</h4>
                                        <a href="javascript:void(0)">
                                            <img width="20" src="{{ asset(setting('favicon')) }}"
                                                class="img-fluid rounded mb-1" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection