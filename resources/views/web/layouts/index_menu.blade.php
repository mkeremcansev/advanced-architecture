<section class="whitepage-menu" id="menu-block" aria-label="menu">
  <div class="wrap-menu mt-5">
    <div class="wrap-menu-child">
      <ul>
        <li class="init-menu">
          <a class="link" href="{{ route('web.main') }}">@lang('words.homepage')</a>
        </li>

        <li class="init-menu">
          <a class="link" href="{{ route('web.project.index') }}">@lang('words.projects')</a>
        </li>

        <li class="init-menu">
          <a class="link" href="{{ route('web.gallery.index') }}">@lang('words.gallery')</a>
        </li>

        <li class="init-menu">
          <a class="link" href="{{ route('web.contact.index') }}">@lang('words.contact')</a>
        </li>

      </ul>
    </div>
    <div class="share">
      <ul class="pb-4">
        <li><a class="sharesoc" target="_blank" href="{{ setting('facebook') }}"><i class="fa fa-facebook-f"></i></a></li>
        <li><a class="sharesoc" target="_blank" href="{{ setting('twitter') }}"><i class="fa fa-twitter"></i></a></li>
        <li><a class="sharesoc" target="_blank" href="{{ setting('instagram') }}"><i class="fa fa-instagram"></i></a></li>
        <li><a class="sharesoc" target="_blank" href="https://api.whatsapp.com/send?phone={{ setting('whatsapp') }}"><i class="fa fa-whatsapp"></i></a></li>
      </ul>
    </div>
  </div>
</section>