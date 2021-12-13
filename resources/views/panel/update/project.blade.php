@extends('panel.main')
@section('title')
@lang('words.project_edit')
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
                                <h4 class="card-title">@lang('words.project_edit')</h4>
                            </div>
                            <form method="POST" action="{{ route('panel.project.update', $project->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="category_name">@lang('words.title')</label>
                                        <input type="text" class="form-control" name="title" value="{{ $project->title }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="category_name">@lang('words.description')</label>
                                        <textarea type="text" class="form-control ckeditor" name="description">{{ $project->description }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>@lang('words.category')</label>
                                        <select class="form-control" name="category_id">
                                            @foreach ($categories as $category)
                                            <option @if($project->category_id == $category->id) selected @endif value="{{ $category->id }}">{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="category_name">@lang('words.location')</label>
                                        <input type="text" class="form-control" name="location" value="{{ $project->location }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="category_name">@lang('words.client')</label>
                                        <input type="text" class="form-control" name="client" value="{{ $project->client }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="category_name">@lang('words.date')</label>
                                        <input type="text" class="form-control" name="date" value="{{ $project->date }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="category_name">@lang('words.budget')</label>
                                        <input type="text" class="form-control" name="budget" value="{{ $project->budget }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="category_name">@lang('words.duration')</label>
                                        <input type="text" class="form-control" name="duration" value="{{ $project->duration }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="category_name">@lang('words.image')</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                    <div class="form-group">
                                        <label for="category_name">@lang('words.gallery')</label>
                                        <input type="file" class="form-control" name="gallery[]" multiple>
                                    </div>
                                    <div class="form-group">
                                        <label for="customFile">@lang('words.updated_image')</label>
                                        <div class="custom-file">
                                        <img width="150" src="{{ asset($project->image) }}">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-float waves-light mt-2 mb-2 float-right">@lang('words.save')</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">@lang('words.gallery')</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @foreach ($project->getProjectGalleryImages as $image)
                                    <div class="col-md-4 col-6">
                                        <img src="{{ asset($image->image) }}" class="img-fluid rounded mb-1"/>
                                        <form action="{{ route('panel.project-gallery.destroy', $image->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-danger waves-effect waves-float waves-light mb-1 center">@lang('words.delete')</button>
                                            </div>
                                        </form>
                                    </div>
                                    @endforeach
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