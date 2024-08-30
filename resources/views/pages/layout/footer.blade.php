<!-- # footer
        ================================================== -->
<footer class="s-footer">
  <div class="row s-footer__content">
    <div class="column xl-6 lg-6 md-12 s-footer__block s-footer__about">
      <h3>About Zahid</h3>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas illum quasi facere libero,
        fugiat laboriosam possimus reprehenderit eveniet vero voluptatum fugit ad quis veritatis suscipit beatae
        incidunt perferendis tempore earum hic repellendus quisquam recusandae ipsa id esse. Nobis, aut deleniti.
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere ratione dignissimos.
      </p>
    </div>
    <div class="column xl-3 lg-6 md-12 s-footer__block s-footer__site-links">
      <h3>Site Links</h3>
      <ul class="link-list">
        <li><a href="{{ route('home') }}">Home</a></li>
        <li><a href="{{ route('project') }}">Projects</a></li>
        <li><a href="{{ route('workExperience') }}">Work Experience</a></li>
      </ul>
    </div>
    <div class="column xl-3 lg-6 md-12 tab-12 s-footer__block s-footer__newsletter">
      <h3>Newsletter</h3>

      <p>
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere ratione dignissimos.
      </p>

      <div class="subscribe-form">
        <form id="mc-form" class="mc-form">
          <input type="email" name="EMAIL" id="mce-EMAIL" class="u-fullwidth text-center"
            placeholder="Your Email Address"
            title="The domain portion of the email address is invalid (the portion after the @)."
            pattern="^([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x22([^\x0d\x22\x5c\x80-\xff]|\x5c[\x00-\x7f])*\x22))*\x40([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d)(\x2e([^\x00-\x20\x22\x28\x29\x2c\x2e\x3a-\x3c\x3e\x40\x5b-\x5d\x7f-\xff]+|\x5b([^\x0d\x5b-\x5d\x80-\xff]|\x5c[\x00-\x7f])*\x5d))*(\.\w{2,})+$"
            required>
          <input type="submit" name="subscribe" value="Subscribe" class="btn btn--primary btn--small u-fullwidth">
          <!-- <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_cdb7b577e41181934ed6a6a44_9a91cfe7b3" tabindex="-1" value=""></div> -->
          <div class="mc-status"></div>
        </form>
      </div>
    </div>
  </div>

  <div class="row s-footer__bottom">
    <div class="column xl-6 lg-12">
      <p class="ss-copyright">
        <span>© Copyright Zahid 2022</span>
        <span>Design by <a href="https://www.styleshout.com/">StyleShout</a> Distribution By <a
            href="https://themewagon.com">ThemeWagon</a></span>
      </p>
    </div>

    <div class="ss-go-top">
      <a class="smoothscroll" title="Back to Top" href="#top">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36" fill="none"
          stroke="#ffffff" stroke-width="1" stroke-linecap="round" stroke-linejoin="round">&lt;!--! Atomicons Free 1.00
          by @atisalab License - https://atomicons.com/license/ (Icons: CC BY 4.0) Copyright 2021 Atomicons --&gt;
          <polyline points="17 11 12 6 7 11"></polyline>
          <line x1="12" y1="18" x2="12" y2="6"></line>
        </svg>
      </a>
    </div> <!-- end ss-go-top -->
  </div>

</footer> <!-- end s-footer -->

</div> <!-- end page-wrap -->

<!-- Java Script
    ================================================== -->
<script src="{{ url('assets/js/plugins.js') }}"></script>
<script src="{{ url('assets/js/main.js') }}"></script>

</body>

</html>
