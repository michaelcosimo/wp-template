<?php /*Template Name: Portfolio*/
get_header() ?>

  <!-- work section -->
  <section class="work_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          CREATIVE WORKS
        </h2>
        <p>
          consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
          minim veniam, quis nostrud exercitation
        </p>
      </div>
      <div class="work_container layout_padding2">
        <div class="box b-1">
          <img src="<?php bloginfo('template_url') ?>/images/w-1.png" alt="">
        </div>
        <div class="box b-2">
          <img src="<?php bloginfo('template_url') ?>/images/w-2.png" alt="">

        </div>
        <div class="box b-3">
          <img src="<?php bloginfo('template_url') ?>/images/w-3.png" alt="">

        </div>
        <div class="box b-4">
          <img src="<?php bloginfo('template_url') ?>/images/w-4.png" alt="">

        </div>
      </div>
    </div>
  </section>
  <!-- end work section -->

  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="info_contact">
            <h5>
              About Shop
            </h5>
            <div>
              <div class="img-box">
                <img src="<?php bloginfo('template_url') ?>/images/location-white.png" width="18px" alt="">
              </div>
              <p>
                Address
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="<?php bloginfo('template_url') ?>/images/telephone-white.png" width="12px" alt="">
              </div>
              <p>
                +01 1234567890
              </p>
            </div>
            <div>
              <div class="img-box">
                <img src="<?php bloginfo('template_url') ?>/images/envelope-white.png" width="18px" alt="">
              </div>
              <p>
                demo@gmail.com
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_info">
            <h5>
              Informations
            </h5>
            <p>
              ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
            </p>
          </div>
        </div>

        <div class="col-md-3">
          <div class="info_insta">
            <h5>
              Instagram
            </h5>
            <div class="insta_container">
              <div>
                <a href="">
                  <div class="insta-box b-1">
                    <img src="<?php bloginfo('template_url') ?>/images/insta.png" alt="">
                  </div>
                </a>
                <a href="">
                  <div class="insta-box b-2">
                    <img src="<?php bloginfo('template_url') ?>/images/insta.png" alt="">
                  </div>
                </a>
              </div>

              <div>
                <a href="">
                  <div class="insta-box b-3">
                    <img src="<?php bloginfo('template_url') ?>/images/insta.png" alt="">
                  </div>
                </a>
                <a href="">
                  <div class="insta-box b-4">
                    <img src="<?php bloginfo('template_url') ?>/images/insta.png" alt="">
                  </div>
                </a>
              </div>
              <div>
                <a href="">
                  <div class="insta-box b-3">
                    <img src="<?php bloginfo('template_url') ?>/images/insta.png" alt="">
                  </div>
                </a>
                <a href="">
                  <div class="insta-box b-4">
                    <img src="<?php bloginfo('template_url') ?>/images/insta.png" alt="">
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="info_form ">
            <h5>
              Newsletter
            </h5>
            <form action="">
              <input type="email" placeholder="Enter your email">
              <button>
                Subscribe
              </button>
            </form>
            <div class="social_box">
              <a href="">
                <img src="<?php bloginfo('template_url') ?>/images/fb.png" alt="">
              </a>
              <a href="">
                <img src="<?php bloginfo('template_url') ?>/images/twitter.png" alt="">
              </a>
              <a href="">
                <img src="<?php bloginfo('template_url') ?>/images/linkedin.png" alt="">
              </a>
              <a href="">
                <img src="<?php bloginfo('template_url') ?>/images/youtube.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end info_section -->

<?php get_footer() ?>