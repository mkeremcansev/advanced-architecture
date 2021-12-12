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
                            <form method="POST" action="{{ route('panel.about.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="description">@lang('words.about_us')</label>
                                        <textarea type="text" class="form-control"
                                            name="about">{{ setting('about') }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="adress">@lang('words.our_mission')</label>
                                        <textarea type="text" class="form-control"
                                            name="mission">{{ setting('mission') }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="adress">@lang('words.our_vision')</label>
                                        <textarea type="text" class="form-control"
                                            name="vision">{{ setting('vision') }}</textarea>
                                    </div>

                                    <button type="submit"
                                        class="btn btn-primary waves-effect waves-float waves-light mt-2 mb-2 float-right">@lang('words.save')</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection