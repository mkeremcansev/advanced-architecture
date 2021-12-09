<section class="bggray no-top" aria-label="about">
  <div class="container-fluid">
    <div class="row p-4-vh ml-mr-30">
      <div class="col-md-12 onStep" data-animation="fadeInLeft" data-time="300">
        <div class="py-5">
          <h3 class="headingcontent">
            @lang('words.projects')
          </h3>
        </div>
      </div>
      <div class="col-12">
        <div class="onStep" data-animation="fadeInUp" data-time="0">
          <div id="owl-gal" class="owl-carousel owl-theme">
            @foreach ($projects as $project)
                <div class="item">
                <div class="gal-home">
                    <a href="{{ route('web.project.show', $project->slug) }}" class="hovereffect">
                    <img alt="imageportofolio" class="img-responsive" src="{{ asset($project->image) }}">
                    </a>
                </div>
                <div class="gal-home-content">
                    <div class="left">
                    <h4>{{ $project->title }}</h4>
                    <p>{{ $project->getProjectCategory->title }}</p>
                    </div>
                    <div class="right">
                    <a class="shin col" href="{{ route('web.project.show', $project->slug) }}">
                        @lang('words.detail')
                    </a>
                    </div>
                </div>
                </div>
            @endforeach
          </div>
        </div>
      </div>

    </div>
  </div>
</section>