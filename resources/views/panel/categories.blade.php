@extends('panel.main')
@section('title')
@lang('words.category_list')
@endsection
@section('content')
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
           <section id="responsive-datatable">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success" role="alert">
                                <div class="alert-body">
                                    {{ $message }}
                                </div>
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">@lang('words.category_list')</h4>
                            </div>
                            <div class="card-datatable">
                                <table id="yazdir" class="dt-responsive table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>@lang('words.image')</th>
                                            <th>@lang('words.title')</th>
                                            <th>@lang('words.description')</th>
                                            <th>@lang('words.actions')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                        <tr>
                                            <td></td>
                                            <td><img width="100" src="{{ asset($category->image) }}"></td>
                                            <td>{{ $category->title }}</td>
                                            <td>{{ $category->description }}</td>
                                            <td>
                                            <div class="btn-group">
                                                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('words.actions')</button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                    <a class="dropdown-item text-success" href="{{ route('panel.category.edit', $category->id) }}">@lang('words.edit')</a>

                                                    <form action="{{ route('panel.category.destroy', $category->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="dropdown-item text-danger w-100" type="submit">@lang('words.delete')</button>
                                                    </form>
                                                    
                                                </div>
                                            </div>
                                        </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection