@extends('web.main')
@section('title')
    @lang('words.homepage')
@endsection
@section('content')
<div class="block-main"></div>
@include('web.layouts.index_slider')
<section class="no-bottom" aria-label="about">
  <div class="container-fluid">
    <div class="row p-4-vh ml-mr-30">

      <div class="col-lg-7 mb-5 onStep" data-animation="fadeInLeft" data-time="300">
        <div class="p60 pl-0">
          <h3 class="headingcontent">
            Our Company Story
          </h3>
          <p>
            Donec at cursus sem. Duis condimentum posuere purus, at venenatis tellus mollis. Vestibulum cursus convallis
            venenatis. Sed ut blandit mauris. Lorem non suscipit. Proin pretium consequat est, sit amet consectetur
            luctus vel. Etiam quis interdum felis, at pellentesque metus. Lorem ipsum dolor sit amet, consectetur
            adipiscing elit. Maecenas in pulvinar neque.
          </p>
          <div class="year">
            <div class="heading">12</div>
            <div class="subheading dd4425">Year <br>Experience<br> Working</div>
          </div>
        </div>
      </div>

      <div class="col-lg-5 onStep" data-animation="fadeInRight" data-time="600">
        <div id="imghome" class="owl-carousel owl-theme p60">
          @foreach ($categories as $category)
            <div class="item">
              <div class="gal-home">
                <div class="projects-grid">
                  <div class="hovereffect-color ">
                    <img alt="{{ setting('title') }}" src="{{ asset($category->image) }}">
                    <div class="overlay start-align">
                      <div>
                        <h3>{{ $category->title }}</h3>
                        <p>{{ $category->description }}</p>
                        <a class="shin" href="{{ route('web.category.show', $category->slug) }}">
                          @lang('words.detail')
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
@include('web.layouts.index_projects')
<section class="dot" aria-label="tagline" id="about_us">
  <div class="container-fluid">
    <div class="row p-4-vh ml-mr-30">

      <div class="col-md-12">
        <div class="wrapheading">
          <h2 class="heading">@lang('words.about_us')</h2>
        </div>
        <p class="tagline">
          {{ setting('about') }}
        </p>
      </div>
      <div class="col-md-12 mt-5">
        <div class="wrapheading">
          <h2 class="heading">@lang('words.our_mission')</h2>
        </div>
        <p class="tagline">
          {{ setting('mission') }}
        </p>
      </div>
      <div class="col-md-12 mt-5">
        <div class="wrapheading">
          <h2 class="heading">@lang('words.our_vision')</h2>
        </div>
        <p class="tagline">
          {{ setting('vision') }}
        </p>
      </div>

    </div>
  </div>
</section>
@endsection