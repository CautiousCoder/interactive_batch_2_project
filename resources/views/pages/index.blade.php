@extends('pages.layout.main')

@section('mainSection')
  <!-- # site main content
                                  ================================================== -->
  {{-- <section id="content" class="s-content"> --}}

  <!-- intro
                                      ----------------------------------------------- -->
  <section id="intro" class="s-intro">

    <div class="row s-intro__content width-sixteen-col">

      <div class="column lg-12 s-intro__content-inner grid-block">

        <div class="s-intro__content-text">
          <div class="s-intro__content-pretitle text-pretitle">Hello, I'm Zahid</div>
          <h1 class="s-intro__content-title">
            I create Dynamic web <br>
            application for your <br>
            business that grow <br>
            for online.
          </h1>
        </div> <!-- s-intro__content-text -->

        <div class="s-intro__content-media">
          <div class="s-intro__content-media-inner">
            <img src="{{ url('assets/images/avater.jpg') }}"
              srcset="{{ url('assets/images/avater.jpg') }} 1x, {{ url('assets/images/intro-bg@2x.jpg') }} 2x"
              alt="">
            <div class="lines">
              <span></span>
            </div>
          </div>
        </div> <!-- s-intro__content-media -->

        <div class="s-intro__scroll-down">
          <a href="#about" class="smoothscroll">
            <div class="scroll-icon">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="none"
                stroke="#97b34a" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">&lt;!--! Atomicons Free
                1.00 by @atisalab License - https://atomicons.com/license/ (Icons: CC BY 4.0) Copyright 2021 Atomicons
                --&gt;<polyline points="7 13 12 18 17 13"></polyline>
                <line x1="12" y1="18" x2="12" y2="6"></line>
              </svg>
            </div>
            <span>Scroll for more</span>
          </a>
        </div> <!-- s-intro__scroll-down -->

      </div> <!-- s-intro__content-inner -->

    </div> <!-- s-intro__content -->

  </section> <!-- end s-intro -->

  <!-- about
                                      ----------------------------------------------- -->
  <section id="about" class="s-about target-section">

    <div class="row s-about__content width-sixteen-col">
      <div class="column grid-block grid-section-split">

        <img src="{{ url('assets/images/geometric_shape.svg') }}" alt="" class="s-about__content-imgbg">

        <div class="section-header grid-section-split__header">
          <div class="text-pretitle">About</div>
          <h2 class="text-display-title">
            An inspiring headline about yourself.
          </h2>
        </div> <!-- end section-header -->

        <div class="s-about__content-main grid-section-split__primary">
          <p class="attention-getter">
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Repellendus iste ipsam quod repellat. Hic tempora ullam aperiam
            ipsum optio magni vel inventore Quae ducimus ab dignissimos
            iure, eos consequatur est deleniti cum id aliquid neque.
          </p>

          <p class="attention-getter">
            Autem tenetur commodi maiores. Lorem ipsum dolor sit, amet consectetur adipisicing elit.
            Est eligendi fugit, facilis velit reiciendis iure laudantium. Praesentium repellat
            corrupti dolor sit sint obcaecati. Modi aut quo molestiae a explicabo maiores necessitatibus
            nemo repellendus architecto?
          </p>

        </div> <!-- end s-about__content-main -->

        <div class="s-about__content-btn grid-section-split__bottom">
          <a href="about.html" class="btn btn--stroke u-fullwidth">More About Me</a>
        </div> <!-- end s-about__content-btn -->

      </div> <!-- content-inner -->
    </div>

  </section> <!-- end s-about -->

  <!-- expertise
                                      ----------------------------------------------- -->
  <section id="expertise" class="s-expertise">

    <div class="row s-expertise__content width-sixteen-col">
      <div class="column xl-12 grid-block grid-section-split">

        <div class="section-header grid-section-split__header">
          <div class="text-pretitle">Expertise</div>
          <h2 class="text-display-title">
            My key areas of expertise.
          </h2>

          <p class="lead">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum suscipit debitis quam dignissimos veritatis
            atque pariatur magnam obcaecati fugit reprehenderit vel numquam facere esse est deserunt, perferendis
            commodi voluptatem similique.
          </p>
        </div> <!-- end section-header -->

        <div class="s-expertise__content-main grid-section-split__primary">

          <div class="grid-list-items list-items show-ctr">
            <div class="grid-list-items__item list-items__item">
              <div class="grid-list-items__title list-items__item-header">
                <h3 class="list-items__item-title">Digital Marketing</h3>
              </div>
              <div class="grid-list-items__text list-items__item-text">
                <p>
                  Quibusdam quis autem voluptatibus earum vel ex error ea magni. Rerum quam quos. Aut asperiores
                  sit mollitia. Rem neque et voluptatem eos quia sed eligendi et. Eaque velit eligendi ut
                  magnam. Cumque ducimus laborum doloribus facere maxime vel earum quidem enim suscipit.
                </p>
              </div>
            </div> <!-- list-item -->
            <div class="grid-list-items__item list-items__item">
              <div class="grid-list-items__title list-items__item-header">
                <h3 class="list-items__item-title">Project Management</h3>
              </div>
              <div class="grid-list-items__text list-items__item-text">
                <p>
                  Rerum quam quos. Quibusdam quis autem voluptatibus earum vel ex error ea magni. Aut asperiores
                  sit mollitia. Rem neque et voluptatem eos quia sed eligendi et. Eaque velit eligendi ut
                  magnam. Cumque ducimus laborum doloribus facere maxime vel earum quidem enim suscipit.
                </p>
              </div>
            </div> <!-- list-expertise__item -->

          </div> <!-- grid-list-items -->
        </div> <!-- end s-expertise__content-main -->

        <div class="s-expertise__content-btn grid-section-split__bottom">
          <a href="services.html" class="btn btn--stroke u-fullwidth">View All Services</a>
        </div> <!-- end s-about__content-btn -->

      </div> <!-- end grid-block-->
    </div> <!-- end s-expertise__content -->

  </section> <!-- end s-expertise -->

  <!-- clients
                                      ----------------------------------------------- -->
  <section id="clients" class="s-clients">

    <div class="row s-clients__content-block width-sixteen-col">
      <div class="column xl-12 grid-block grid-section-split">

        <div class="section-header grid-section-split__header">
          <div class="text-pretitle">Clients</div>
          <h2 class="text-display-title">
            I have had the privilege of working with these incredible brands.
          </h2>
        </div> <!-- end section-header -->

        <div class="grid-section-split__primary">
          <p class="lead">
            Quibusdam quis autem voluptatibus earum vel ex error ea. Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Laborum suscipit debitis quam dignissimos veritatis atque pariatur magnam
            obcaecati fugit reprehenderit vel numquam facere esse est deserunt, perferendis commodi voluptatem
            similique.
          </p>
        </div> <!-- end grid-section-split__primary -->

      </div> <!-- end column -->
    </div> <!-- end row -->

    <div class="row s-clients__content-block width-sixteen-col">
      <div class="column xl-12">

        <div class="clients-list">
          <div class="clients-list__item">
            <a href="#0">
              <img src="{{ url('assets/images/clients/flash.svg') }}" alt="">
            </a>
          </div>
          <div class="clients-list__item">
            <a href="#0">
              <img src="{{ url('assets/images/clients/rise.svg') }}" alt="">
            </a>
          </div>
          <div class="clients-list__item">
            <a href="#0">
              <img src="{{ url('assets/images/clients/cactus.svg') }}" alt="">
            </a>
          </div>
          <div class="clients-list__item">
            <a href="#0">
              <img src="{{ url('assets/images/clients/pinpoint.svg') }}" alt="">
            </a>
          </div>
          <div class="clients-list__item">
            <a href="#0">
              <img src="{{ url('assets/images/clients/proline.svg') }}" alt="">
            </a>
          </div>
          <div class="clients-list__item">
            <a href="#0">
              <img src="{{ url('assets/images/clients/vision.svg') }}" alt="">
            </a>
          </div>
          <div class="column clients-list__item">
            <a href="#0">
              <img src="{{ url('assets/images/clients/volume.svg') }}" alt="">
            </a>
          </div>
          <div class="column clients-list__item">
            <a href="#0">
              <img src="{{ url('assets/images/clients/hitech.svg') }}" alt="">
            </a>
          </div>
          <div class="clients-list__item">
            <a href="#0">
              <img src="{{ url('assets/images/clients/terra.svg') }}" alt="">
            </a>
          </div>
          <div class="clients-list__item">
            <a href="#0">
              <img src="{{ url('assets/images/clients/chain.svg') }}" alt="">
            </a>
          </div>
        </div> <!-- end clients-list -->

      </div> <!-- end column -->
    </div> <!-- end row -->

    <div class="row s-clients__content-block width-sixteen-col">
      <div class="column xl-12 testimonials">

        <div class="swiper-container testimonials__slider home-slider">

          <div class="swiper-wrapper">
            <div class="testimonials__slide swiper-slide">
              <p>
                Molestiae incidunt consequatur quis ipsa autem nam sit enim magni. Voluptas tempore rem.
                Explicabo a quaerat sint autem dolore ducimus ut consequatur neque. Nisi dolores quaerat fuga rem nihil
                nostrum.
                Laudantium quia consequatur molestias.
              </p>
              <div class="testimonials__author">
                <img src="{{ url('assets/images/avatars/user-01.jpg') }}" alt="Author image"
                  class="testimonials__avatar">
                <cite class="testimonials__cite">
                  <strong>John Rockefeller</strong>
                  <span>Standard Oil Co.</span>
                </cite>
              </div>
            </div>
            <div class="testimonials__slide swiper-slide">
              <p>
                Nisi dolores quaerat fuga rem nihil nostrum. Molestiae incidunt consequatur quis ipsa autem nam sit enim
                magni.
                Voluptas tempore rem. Laudantium quia consequatur molestias.
                Explicabo a quaerat sint autem dolore ducimus ut consequatur neque.
              </p>
              <div class="testimonials__author">
                <img src="{{ url('assets/images/avatars/user-04.jpg') }}" alt="Author image"
                  class="testimonials__avatar">
                <cite class="testimonials__cite">
                  <strong>Andrew Carnegie</strong>
                  <span>Carnegie Steel Co.</span>
                </cite>
              </div>
            </div>
            <div class="testimonials__slide swiper-slide">
              <p>
                Voluptas tempore rem. Molestiae incidunt consequatur quis ipsa autem nam sit enim magni.
                Explicabo a quaerat sint autem dolore ducimus ut consequatur neque.
                Nisi dolores quaerat fuga rem nihil nostrum. Laudantium quia consequatur molestias.
              </p>
              <div class="testimonials__author">
                <img src="{{ url('assets/images/avatars/user-06.jpg') }}" alt="Author image"
                  class="testimonials__avatar">
                <cite class="testimonials__cite">
                  <strong>Henry Ford</strong>
                  <span>Ford Motor Co.</span>
                </cite>
              </div>
            </div>
            <div class="testimonials__slide swiper-slide">
              <p>
                Molestiae incidunt consequatur quis ipsa autem nam sit enim magni. Voluptas tempore rem.
                Explicabo a quaerat sint autem dolore ducimus ut consequatur neque. Nisi dolores quaerat fuga rem nihil
                nostrum.
                Laudantium quia consequatur molestias.
              </p>
              <div class="testimonials__author">
                <img src="{{ url('assets/images/avatars/user-02.jpg') }}" alt="Author image"
                  class="testimonials__avatar">
                <cite class="testimonials__cite">
                  <strong>John Morgan</strong>
                  <span>JP Morgan & Co.</span>
                </cite>
              </div>
            </div>
          </div> <!-- end swiper-wrapper -->

          <div class="swiper-pagination"></div>

        </div> <!--end testimonials__slider -->

      </div> <!-- end column -->
    </div> <!-- end row -->


  </section> <!-- end s-clients -->

  </section> <!-- s-content-->

  <!-- # cta
                                  ================================================== -->
  <section id="cta" class="s-cta">

    <div class="row row-x-center text-center">
      <div class="column xl-8 lg-12">

        <div class="s-cta__content">
          <h2 class="text-display-title">
            Get started with a consultation today.
          </h2>
          <p class="lead">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis rem, esse doloribus sint eaque at debitis enim
            vitae minus expedita ratione dignissimos sit nostrum optio sequi. Ipsa at beatae quam.
          </p>
          <a href="contact.html" class="btn btn--primary">Let's Work Together</a>
        </div>

      </div>
    </div>

  </section> <!-- end s-cta -->

  <!-- # journal
                                  ================================================== -->
  <section id="journal" class="s-journal">

    <div class="row s-journal__content width-sixteen-col">
      <div class="column xl-12 grid-block">

        <div class="grid-full section-header text-center">
          <div class="text-pretitle">Recent Articles</div>
          <h2 class="text-display-title">
            Latest articles from my blog.
          </h2>
        </div> <!-- end section-header -->

      </div> <!-- end grid-block-->
    </div> <!-- end s-journal__content -->

    {{-- </section> <!-- end s-journal --> --}}
  @endsection
