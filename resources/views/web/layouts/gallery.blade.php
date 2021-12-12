      @extends('web.main')
      @section('title')
          @lang('words.gallery')
      @endsection
      @section('content')
          
     
      <div class="block-main"></div>
      <!-- block-menu end-->

      <!-- section subheader -->
      <section aria-label="subheader" class="no-top no-bottom" id="subheader">
        <div class="container-fluid">
          <div class="row">
            <img alt="imageportofolio" src="{{ asset($image->image) }}">
            <div class="breadcumbs">
              <div class="heading">@lang('words.gallery')</div>
              <div class="content">
                <a href="{{ route('web.main') }}">@lang('words.homepage')</a>
                 / 
                <span>@lang('words.gallery')</span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- section subheader end -->  


      <!-- section gallery -->
      <section aria-label="works" id="Gallery">
            <div class="container-fluid">
             <div class="row p-4-vh ml-mr-30">
          <div class="col-md-12 my-5">
            
                <div id="w-gallery-container" class="w-gallery-container">
                
                        @foreach ($galleries as $gallery)
                            <a class="w-gallery exterior flat" href="{{ asset($gallery->image) }}">
                                <img src="{{ asset($gallery->image) }}" alt="" class="w-gallery-image">
                            </a>
                        @endforeach

                  
                </div>
                
                </div>
                <!-- project end -->
                
                

                </div>
            </div>
        </section>
         @endsection