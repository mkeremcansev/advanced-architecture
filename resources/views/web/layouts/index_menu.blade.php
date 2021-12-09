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

        <li class="init-menu dropdown">
          <a class="dropdown-link">Pages <i>
              <span class="pls">+</span>
              <span class="min">-</span>
            </i>
          </a>
          <ul class="dropdown-container">
            <li><a class="link" href="about.html">About</a>
              <ul>
                <li>
                  <a class="link" href="about-team.html">About Team</a>
                </li>
                <li>
                  <a class="link" href="about-clasic-menu.html">About Menu</a>
                </li>
              </ul>
            </li>
            <li><a class="link" href="projects.html">Projects</a>
              <ul>
                <li>
                  <a class="link" href="projects-detail.html">Projects-detail</a>
                </li>
                <li>
                  <a class="link" href="projects-detail-clasic-menu.html">Projects Menu</a>
                </li>
              </ul>
            </li>
          </ul>
        </li>

        <li class="init-menu dropdown">
          <a class="dropdown-link" href="#">Gallery <i>
              <span class="pls">+</span>
              <span class="min">-</span>
            </i>
          </a>
          <ul class="dropdown-container">
            <li><a class="link" href="gallery.html">Gallery</a></li>
            <li><a class="link" href="gallery-carousel.html">Gallery-Carousel</a></li>
            <li><a class="link" href="gallery-clasic-menu.html">Gallery Menu</a></li>
          </ul>
        </li>

        <li class="init-menu dropdown">
          <a class="dropdown-link" href="#">Blog <i>
              <span class="pls">+</span>
              <span class="min">-</span>
            </i>
          </a>
          <ul class="dropdown-container">
            <li><a class="link" href="blog.html">Blog</a>
            </li>
            <li><a class="link" href="blog-single.html">Blog Single</a>
            </li>
            <li><a class="link" href="blog-clasic-menu.html">Blog menu</a>
            </li>
          </ul>
        </li>

        <li class="init-menu">
          <a class="link" href="{{ route('web.contact.index') }}">@lang('words.contact')</a>
        </li>

      </ul>
    </div>
    <div class="share">
      <span class="share_title">Follow us : </span>
      <ul>
        <li><a class="sharesoc" target="_blank" href="#"><i class="fa fa-facebook-f"></i></a></li>
        <li><a class="sharesoc" target="_blank" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="sharesoc" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="sharesoc" target="_blank" href="#"><i class="fa fa-instagram"></i></a></li>
      </ul>
    </div>
  </div>
</section>