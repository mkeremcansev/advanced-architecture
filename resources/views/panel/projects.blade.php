@extends('Panel.main')
@section('title')
@lang('words.project_list')
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
                    <div class="col-lg-10">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success" role="alert">
                                <div class="alert-body">
                                    {{ $message }}
                                </div>
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">@lang('words.project_list')</h4>
                            </div>
                            <div class="card-datatable">
                                <table id="yazdir" class="dt-responsive table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>@lang('words.image')</th>
                                            <th>@lang('words.title')</th>
                                            <th>@lang('words.category')</th>
                                            <th>@lang('words.client')</th>
                                            <th>@lang('words.date')</th>
                                            <th>@lang('words.budget')</th>
                                            <th>@lang('words.duration')</th>
                                            <th>@lang('words.actions')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($projects as $project)
                                        <tr>
                                            <td></td>
                                            <td><img width="100" src="{{ asset($project->image) }}"></td>
                                            <td>{{ $project->title }}</td>
                                            <td>{{ $project->getProjectCategory->title }}</td>
                                            <td>{{ $project->client }}</td>
                                            <td>{{ $project->date }}</td>
                                            <td>{{ $project->budget }}</td>
                                            <td>{{ $project->duration }}</td>
                                            <td>
                                            <div class="btn-group">
                                                <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">@lang('words.actions')</button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                    <a class="dropdown-item text-success" href="{{ route('panel.project.edit', $project->id) }}">@lang('words.edit')</a>

                                                    <form action="{{ route('panel.project.destroy', $project->id) }}" method="POST">
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