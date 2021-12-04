@extends('web.main')
@section('content')
<section class="whitepage-menu" id="menu-block" aria-label="menu">
  <div class="wrap-menu">
    <div class="search-container text-right">
      <form action="#" id="searchmenu">
        <input class="s-input-home" type="text" placeholder="Search…" name="search">
        <button class="btn-s-input" type="submit"><i class="fa fa-search"></i></button>
      </form>
    </div>
    <div class="wrap-menu-child">
      <ul>
        <li class="init-menu dropdown">
          <a class="dropdown-link actived" href="#">Home <i>
              <span class="pls">+</span>
              <span class="min">-</span>
            </i>
          </a>
          <ul class="dropdown-container">
            <li><a class="link" href="index.html">Index</a></li>
            <li><a class="link" href="index1.html">Index 01</a></li>
            <li><a class="link" href="index2-clasic-menu.html">Index Menu</a></li>
            <li><a href="index-rev-slider.html">Revolution Slider</a></li>
            <li><a href="index3.html">Index 03</a></li>
            <li><a href="indexbgvideo.html">Index Video</a></li>
          </ul>
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
          <a class="link" href="contact.html">Contact</a>
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
<!-- main menu end -->

<!-- block-menu -->
<div class="block-main"></div>
<!-- block-menu end-->

<!-- slider -->
<section class="slideshow" id="js-header" aria-label="slider">

  <div class="slideshow-slide js-slider-home-slide is-current" data-slide="1">
    <div class="slideshow-slide-background-parallax background-absolute js-parallax" data-speed="-1" data-position="top"
      data-target="#js-header">
      <div class="slideshow-slide-background-load-wrap background-absolute">
        <div class="slideshow-slide-background-load background-absolute">
          <div class="slideshow-slide-background-wrap background-absolute">
            <div class="slideshow-slide-background background-absolute">
              <div class="slideshow-slide-image-wrap background-absolute">
                <div class="slideshow-slide-image background-absolute"
                  style="background-image: url('{{ asset("Web") }}/assets/images/slider/img1.jpg');"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="slideshow-slide-caption">
      <div class="slideshow-slide-caption-text">
        <div class="js-parallax" data-speed="2" data-position="top" data-target="#js-header">
          <div class="slideshow-slide-caption-title">Classy And Stylish Design</div>
          <div class="slideshow-sub-title">House <span class="color">interior</span></div>
          <a class="slideshow-slide-caption-subtitle -load o-hsub -link" href="#">
            <span class="slideshow-slide-caption-subtitle-label">SEE MORE</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="slideshow-slide js-slider-home-slide is-next" data-slide="2">
    <div class="slideshow-slide-background-parallax background-absolute js-parallax" data-speed="-1" data-position="top"
      data-target="#js-header">
      <div class="slideshow-slide-background-load-wrap background-absolute">
        <div class="slideshow-slide-background-load background-absolute">
          <div class="slideshow-slide-background-wrap background-absolute">
            <div class="slideshow-slide-background background-absolute">
              <div class="slideshow-slide-image-wrap background-absolute">
                <div class="slideshow-slide-image background-absolute"
                  style="background-image: url('{{ asset("Web") }}/assets/images/slider/img2.jpg');"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="slideshow-slide-caption">
      <div class="slideshow-slide-caption-text">
        <div class="js-parallax" data-speed="2" data-position="top" data-target="#js-header">
          <div class="slideshow-slide-caption-title">Modern Architecture Design</div>
          <div class="slideshow-sub-title">Interior <span class="color">design</span></div>
          <a class="slideshow-slide-caption-subtitle -load o-hsub -link" href="#">
            <span class="slideshow-slide-caption-subtitle-label">SEE MORE</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="slideshow-slide js-slider-home-slide is-prev" data-slide="3">
    <div class="slideshow-slide-background-parallax background-absolute js-parallax" data-speed="-1" data-position="top"
      data-target="#js-header">
      <div class="slideshow-slide-background-load-wrap background-absolute">
        <div class="slideshow-slide-background-load background-absolute">
          <div class="slideshow-slide-background-wrap background-absolute">
            <div class="slideshow-slide-background background-absolute">
              <div class="slideshow-slide-image-wrap background-absolute">
                <div class="slideshow-slide-image background-absolute"
                  style="background-image: url('{{ asset("Web") }}/assets/images/slider/img3.jpg');"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="slideshow-slide-caption">
      <div class="slideshow-slide-caption-text">
        <div class="js-parallax" data-speed="2" data-position="top" data-target="#js-header">
          <div class="slideshow-slide-caption-title">Modern Interior Design</div>
          <div class="slideshow-sub-title">House <span class="color">interior</span></div>
          <a class="slideshow-slide-caption-subtitle -load o-hsub -link" href="#">
            <span class="slideshow-slide-caption-subtitle-label">SEE MORE</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- left right navigation -->
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
  <!-- left right navigation end -->
</section>
<!-- slider end -->

<!-- about home -->
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
          <div class="item">
            <div class="gal-home">
              <div class="projects-grid">
                <div class="hovereffect-color ">
                  <img alt="imghome" src="{{ asset('Web') }}/assets/images/imghome3.jpg">
                  <div class="overlay">
                    <div class="start-align">
                      <h3>House design</h3>
                      <p>Proin pretium consequat est, sit amet consectetur luctus vel Etiam quis...</p>
                      <a class="shin" href="projects-detail.html">
                        MORE DETAIL
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="gal-home">
              <div class="projects-grid">
                <div class="hovereffect-color ">
                  <img alt="imghome" src="{{ asset('Web') }}/assets/images/imghome2.jpg">
                  <div class="overlay">
                    <div class="start-align">
                      <h3>Minimalist design</h3>
                      <p>Proin pretium consequat est, sit amet consectetur luctus vel Etiam quis...</p>
                      <a class="shin" href="projects-detail.html">
                        MORE DETAIL
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="gal-home">
              <div class="projects-grid">
                <div class="hovereffect-color ">
                  <img alt="imghome" src="{{ asset('Web') }}/assets/images/imghome1.jpg">
                  <div class="overlay start-align">
                    <div>
                      <h3>Modern design</h3>
                      <p>Proin pretium consequat est, sit amet consectetur luctus vel Etiam quis...</p>
                      <a class="shin" href="projects-detail.html">
                        MORE DETAIL
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- about home end -->

<!-- projects home -->
<section class="bggray no-top" aria-label="about">
  <div class="container-fluid">
    <div class="row p-4-vh ml-mr-30">

      <div class="col-md-12 onStep" data-animation="fadeInLeft" data-time="300">
        <div class="py-5">
          <h3 class="headingcontent">
            OUR PROJECTS
          </h3>
        </div>
      </div>

      <div class="col-12">
        <div class="onStep" data-animation="fadeInUp" data-time="0">
          <div id="owl-gal" class="owl-carousel owl-theme">

            <div class="item">
              <div class="gal-home">
                <a href="projects-detail.html" class="hovereffect">
                  <img alt="imageportofolio" class="img-responsive" src="{{ asset('Web') }}/assets/images/gallery-home/img1.jpg">
                </a>
              </div>
              <div class="gal-home-content">
                <div class="left">
                  <h4>Interior design</h4>
                  <p>Interior</p>
                </div>
                <div class="right">
                  <a class="shin col" href="projects-detail.html">
                    see projects
                  </a>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="gal-home">
                <a href="projects-detail.html" class="hovereffect">
                  <img alt="imageportofolio" class="img-responsive" src="{{ asset('Web') }}/assets/images/gallery-home/img3.jpg">
                </a>
              </div>
              <div class="gal-home-content">
                <div class="left">
                  <h4>Classy design</h4>
                  <p>Architecture</p>
                </div>
                <div class="right">
                  <a class="shin col" href="projects-detail.html">
                    see projects
                  </a>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="gal-home">
                <a href="projects-detail.html" class="hovereffect">
                  <img alt="imageportofolio" class="img-responsive" src="{{ asset('Web') }}/assets/images/gallery-home/img4.jpg">
                </a>
              </div>
              <div class="gal-home-content">
                <div class="left">
                  <h4>Modern Interior</h4>
                  <p>Architecture</p>
                </div>
                <div class="right">
                  <a class="shin col" href="projects-detail.html">
                    see projects
                  </a>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="gal-home">
                <a href="projects-detail.html" class="hovereffect">
                  <img alt="imageportofolio" class="img-responsive" src="{{ asset('Web') }}/assets/images/gallery-home/img1.jpg">
                </a>
              </div>
              <div class="gal-home-content">
                <div class="left">
                  <h4>Interior design</h4>
                  <p>Interior</p>
                </div>
                <div class="right">
                  <a class="shin col" href="projects-detail.html">
                    see projects
                  </a>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="gal-home">
                <a href="projects-detail.html" class="hovereffect">
                  <img alt="imageportofolio" class="img-responsive" src="{{ asset('Web') }}/assets/images/gallery-home/img3.jpg">
                </a>
              </div>
              <div class="gal-home-content">
                <div class="left">
                  <h4>Classy design</h4>
                  <p>Architecture</p>
                </div>
                <div class="right">
                  <a class="shin col" href="projects-detail.html">
                    see projects
                  </a>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="gal-home">
                <a href="projects-detail.html" class="hovereffect">
                  <img alt="imageportofolio" class="img-responsive" src="{{ asset('Web') }}/assets/images/gallery-home/img4.jpg">
                </a>
              </div>
              <div class="gal-home-content">
                <div class="left">
                  <h4>Modern Interior</h4>
                  <p>Architecture</p>
                </div>
                <div class="right">
                  <a class="shin col" href="projects-detail.html">
                    see projects
                  </a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
</section>
<!-- projects home end -->

<!--  tagline -->
<section class="dot" aria-label="tagline">
  <div class="container-fluid">
    <div class="row p-4-vh ml-mr-30">

      <div class="col-md-12">
        <div class="wrapheading">
          <h2 class="heading">OUR VISION</h2>
        </div>
        <p class="tagline">Architectural works of art, in the material form of buildings, are often perceived as
          cultural symbols and as works of art. Historical civilizations are often identified with their surviving
          architectural achievements.</p>
      </div>

    </div>
  </div>
</section>
@endsection