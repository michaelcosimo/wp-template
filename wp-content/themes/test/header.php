<!DOCTYPE html>
<html>
<?php include_once('functions.php'); ?>

<head>
  <!-- Basic -->
  <?php wp_head() ?>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title><?php wp_title() ?></title>

  <!-- slider stylesheet -->
  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url') ?>/css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="<?php bloginfo('template_url') ?>/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?php bloginfo('template_url') ?>/css/responsive.css" rel="stylesheet" />
</head>

<body class="<?php if(!check_home_page()){ echo 'sub_page'; } ?>">
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
          <a class="navbar-brand" href="<?php echo get_home_page(); ?>">
            <span>
              Esigned
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="<?php echo get_home_page(); ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about"> About </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="do"> What we do </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="portfolio"> Portfolio </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact">Contact us</a>
                </li>
              </ul>
              <div class="user_option">
                <a href="">
                  <img src="<?php bloginfo('template_url') ?>/images/user.png" alt="">
                </a>
                <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                </form>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

    <!-- slider section -->
    <?php if(check_home_page()){ ?>
      <section class=" slider_section position-relative">
        <div class="container">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col">
                    <div class="detail-box">
                      <div>
                        <h2>
                          welcome to

                        </h2>
                        <h1>
                          web agency
                        </h1>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                          labore
                        </p>
                        <div class="">
                          <a href="">
                            Contact us
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col">
                    <div class="detail-box">
                      <div>
                        <h2>
                          welcome to

                        </h2>
                        <h1>
                          web agency
                        </h1>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                          labore
                        </p>
                        <div class="">
                          <a href="">
                            Contact us
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col">
                    <div class="detail-box">
                      <div>
                        <h2>
                          welcome to

                        </h2>
                        <h1>
                          web agency
                        </h1>
                        <p>
                          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                          labore
                        </p>
                        <div class="">
                          <a href="">
                            Contact us
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
      </section>
    <?php } ?>
    <!-- end slider section -->
  </div>