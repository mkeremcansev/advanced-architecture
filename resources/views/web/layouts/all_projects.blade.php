@extends('web.main')
@section('title')
    @lang('words.projects')
@endsection
@section('content')
<div class="block-main"></div>
<section aria-label="subheader" class="no-top no-bottom" id="subheader">
    <div class="container-fluid">
        <div class="row">
        <img alt="{{ setting('title') }}" src="{{ asset($image->image) }}">
        <div class="breadcumbs">
            <div class="heading">@lang('words.projects')</div>
            <div class="content">
            <a href="{{ route('web.main') }}">@lang('words.homepage')</a>
                / 
            <span>@lang('words.projects')</span>
            </div>
        </div>
        </div>
    </div>
</section>
  <section class="bggray no-bottom" aria-label="about">
    <div class="container-fluid">
      <div class="row p-4-vh ml-mr-30">
        <div class="col-md-12 mb-5 onStep" data-animation="fadeInLeft" data-time="300">
              <h3 class="headingcontent">
                @lang('words.all_projects')
              </h3>
        </div>
        @foreach ($projects as $project)
            <div class="col-md-4">
            <div class="gal-home">
                <a href="{{ route('web.project.show', $project->slug) }}" class="hovereffect">
                <img alt="imageportofolio" class="img-responsive" src="{{ asset($project->image) }}">
                </a>
            </div>
            <div class="gal-home-content mb-5">
            <div class="left"> 
                <h4>{{ $project->title }}</h4>
                <p>{{ $project->getProjectCategory->title }}</p>
            </div>
            <div class="right"> 
                <a class="shin" href="{{ route('web.project.show', $project->slug) }}">
                    @lang('words.detail')
                </a>
            </div>
            </div>
            </div>
        @endforeach
      </div>
    </div>
  </section>
@endsection