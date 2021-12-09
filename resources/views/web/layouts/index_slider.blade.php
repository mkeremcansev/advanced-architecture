<section class="slideshow" id="js-header" aria-label="slider">
    @foreach ($sliders as $key => $slider) 
        <div class="slideshow-slide js-slider-home-slide is-current" data-slide="{{ $key+1 }}">
            <div class="slideshow-slide-background-parallax background-absolute js-parallax" data-speed="-1" data-position="top"
            data-target="#js-header">
            <div class="slideshow-slide-background-load-wrap background-absolute">
                <div class="slideshow-slide-background-load background-absolute">
                <div class="slideshow-slide-background-wrap background-absolute">
                    <div class="slideshow-slide-background background-absolute">
                    <div class="slideshow-slide-image-wrap background-absolute">
                        <div class="slideshow-slide-image background-absolute"
                        style="background-image: url('{{ asset($slider->image) }}');"></div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="slideshow-slide-caption">
            <div class="slideshow-slide-caption-text">
                <div class="js-parallax" data-speed="2" data-position="top" data-target="#js-header">
                <div class="slideshow-slide-caption-title">{{ $slider->title }}</div>
                <a class="slideshow-slide-caption-subtitle -load o-hsub -link" href="{{ route('web.contact.index') }}">
                    <span class="slideshow-slide-caption-subtitle-label">@lang('words.contact_us')</span>
                </a>
                </div>
            </div>
            </div>
        </div>
    @endforeach
    <div class="wrap-btn-slider">
        <button class="o-button -white -square -left js-slider-home-button js-slider-home-prev" type="button">
            <span class="o-button_label">
            &larr;
            </span>
        </button>
        <button class="o-button -white -square js-slider-home-button js-slider-home-next" type="button">
            <span class="o-button_label">
            &rarr;
            </span>
        </button>
    </div>
</section>