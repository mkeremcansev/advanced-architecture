@extends('Panel.main')
@section('title')
@lang('words.news_add')
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
                                <h4 class="card-title">@lang('words.news_add')</h4>
                            </div>
                            <form method="POST" action="{{ route('panel.news.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="category_name">@lang('words.title')</label>
                                        <input type="text" class="form-control" name="title">
                                    </div>
                                    <div class="form-group">
                                        <label for="category_name">@lang('words.description')</label>
                                        <textarea type="text" class="form-control" name="description"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="category_name">@lang('words.keywords')</label>
                                        <textarea type="text" class="form-control" name="keywords"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="category_name">@lang('words.image')</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-float waves-light mt-2 mb-2 float-right">@lang('words.save')</button>
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