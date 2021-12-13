@extends('panel.main')
@section('title')
@lang('words.gallery_list')
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
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">@lang('words.gallery')</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    @if ($galleries->count() > 0)
                                        @foreach ($galleries as $gallery)
                                    <div class="col-md-4 col-6">
                                        <img src="{{ asset($gallery->image) }}" class="img-fluid rounded mb-1"/>
                                        <form action="{{ route('panel.gallery.destroy', $gallery->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <div class="text-center">
                                                <button type="submit" class="btn btn-danger waves-effect waves-float waves-light mb-1 center">@lang('words.delete')</button>
                                            </div>
                                        </form>
                                    </div>
                                    @endforeach
                                    @else
                                     <div class="col-md-4 col-6">
                                        <h5 class="">@lang('words.gallery_not_images')</h5>
                                     </div>
                                    @endif
                                    
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