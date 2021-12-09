<footer>
  <div class="container-fluid">
    <div class="row p-4-vh">
      <div class="center">
        <div class="widget footer-links">
          <ul class="list-menu">
            <li><a href="{{ route('web.main') }}">@lang('words.homepage')</a></li>
            <li><a href="">@lang('words.about_us')</a></li>
            <li><a href="{{ route('web.project.index') }}">@lang('words.projects')</a></li>
            <li><a href="{{ route('web.contact.index') }}">@lang('words.contact')</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row p-4-vh">
      <div class="space"></div>
    </div>
    <div class="row p-4-vh">
      <div class="right">
        <a target="_blank" href="{{ setting('facebook') }}"><i class="fa fa-facebook"></i></a>
        <a target="_blank" href="{{ setting('twitter') }}"><i class="fa fa-twitter"></i></a>
        <a target="_blank" href="{{ setting('instagram') }}"><i class="fa fa-instagram"></i></a>
      </div>
      <div class="center">
        <span class="right"><script>document.write(new Date().getFullYear());</script> © {{ setting('footer') }}, All Right Reserved</span>
      </div>
      <div class="right">
        <a target="_blank" href="https://api.whatsapp.com/send?phone={{ setting('whatsapp') }}"><i class="fa fa-whatsapp"></i></a>
        <a href="tel:{{ setting('phone') }}"><i class="fa fa-phone"></i></a>
        <a target="_blank" href="mailto:{{ setting('mail') }}"><i class="fa fa-envelope-o"></i></a>
      </div>
    </div>
  </div>
</footer>
<div id="totop" class="init">
  &uarr;
</div>
</div>
<script src="{{ asset('web/plugin/js/pluginson3step.js') }}"></script>
<script src="{{ asset('web/plugin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('web/plugin/js/sticky.js') }}"></script>
<script src="{{ asset('web/plugin/js/slider.js') }}"></script>
<script src="{{ asset('web/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('web/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<script src="{{ asset('web/assets/js/on3step.js') }}"></script>
<script src="{{ asset('web/assets/js/plugin-set.js') }}"></script>
<script src="{{ asset('web/plugin/js/lightgallery.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3&key={{ setting('map') }}"></script> 
<script src="{{ asset('web/assets/js/map-1.js') }}"></script>
@yield('script')
</body>
</html>