@extends('web.main')
@section('title')
    {{ $project->title }}
@endsection
@section('script')
    <script>
        jQuery( document ).ready( function() {
            $('.big-img-1').on('click', function(e) {
                $(this).lightGallery({
                    dynamic: true,
                    dynamicEl: [
                        @foreach($project->getProjectGalleryImages as $gallery)
                            {
                            src: '{{ asset($gallery->image) }}',
                            thumb: '{{ asset($gallery->image) }}'
                            },
                        @endforeach
                    ]
                });
            });	
        });
    </script>
@endsection
@section('content')
<div class="block-main"></div>
<section aria-label="subheader" class="no-top no-bottom" id="subheader">
    <div class="container-fluid">
        <div class="row">
        <img alt="{{ setting('title') }}" src="{{ asset($project->image) }}">
        <div class="breadcumbs">
            <div class="heading">{{ $project->title }}</div>
            <div class="content">
            <a href="{{ route('web.main') }}">@lang('words.homepage')</a>
                / 
            <span>{{ $project->title }}</span>
            </div>
        </div>
        </div>
    </div>
</section>
<section  aria-label="projects" class="no-bottom">
    <div class="container-fluid">
        <div class="row p-4-vh ml-mr-30">
            <div id="detailproject" class="col-md-12">
                <div id="owl-detail" class="owl-carousel owl-theme">
                @foreach ($project->getProjectGalleryImages as $gallery)
                    <div class="item">
                    <div class="gal-home">
                        <div class="hovereffect">
                        <div class="big-img-1">
                            <img alt="{{ $project->title }}" class="img-responsive" src="{{ asset($gallery->image) }}">
                        </div>
                        </div>
                    </div>
                    </div>
                @endforeach
                </div>
                <div class="stiky-detail">
                    <div class="detaillist">
                    <h2>@lang('words.project_detail')</h2>
                    <span>
                        <strong>@lang('words.category')</strong><span>:</span> 
                        {{ $project->getProjectCategory->title }}
                    </span>
                    <span>
                        <strong>@lang('words.client')</strong><span>:</span> 
                        {{ $project->client }}
                    </span>
                    <span>
                        <strong>@lang('words.date')</strong><span>:</span>
                        {{ $project->date }}
                    </span>
                    <span>
                        <strong>@lang('words.budget')</strong><span>:</span>
                        {{ $project->budget }}
                    </span>
                    <span>
                        <strong>@lang('words.duration')</strong><span>:</span>
                        {{ $project->duration }}
                    </span>
                    </div>
                    <div class="hide-detail">@lang('words.hide_detail') &rarr;</div>
                    <div class="show-detail">&larr; @lang('words.show_detail')</div>
                </div>
                </div>
            <div class="col-md-12">
                <h1 class="headingcontent">
                {{ $project->title }}
                </h1>

                {!! $project->description !!}

                <div class="post-share">
                <span>@lang('words.social_media_accounts') :</span>
                <ul class="share-list">
                    <li>
                    <a href="{{ setting('facebook') }}" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                    <a href="{{ setting('twitter') }}" target="_blank"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                    <a href="{{ setting('instagram') }}" target="_blank"><i class="fa fa-instagram"></i></a>
                    </li>
                </ul>
                </div>
            </div>
    </div>
    </div>
</section>
@include('web.layouts.index_projects')
@endsection