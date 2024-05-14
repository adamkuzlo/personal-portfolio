<?php include "mail_send.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic Page Needs
    ================================================== -->
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <title>Pixel Perfect Portfolio</title>

  <!-- Mobile Specific Metas
    ================================================== -->
  <meta name="viewport" content="width=device-width, minimum-scale=1.0" />
  <meta name="apple-mobile-web-app-capable" content="yes" />

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|Varela" rel="stylesheet" />

  <!-- Favicon
    ================================================== -->

  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png" />
  <link rel="icon" sizes="16x16" href="assets/img/favicon.ico" />
  <link rel="manifest" href="assets/img/manifest.json" />
  <link rel="mask-icon" href="assets/img/safari-pinned-tab.svg" color="#5bbad5" />
  <meta name="theme-color" content="#ffffff" />

  <!-- Stylesheets
    ================================================== -->
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

  <!-- Font Awesome core CSS -->
  <link rel="stylesheet" href="assets/css/font-awesome.min.css" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  <style>
    .hero-job {
      display: block;
      font-size: 24px;
      text-align: center;
    }
  </style>
</head>

<body>
  <!-- Hero Section, Background Image change in css -->
  <div id="top" class="hero background-overlay">
    <!-- Name & Description -->
    <div class="hero-content">
      <h1>I am Adam</h1>
      <div>
        <p class="hero-job">
          <span>Full Stack Wizard!</span>
        </p>
      </div>
      <p class="hero-job-desc">
        Need a website? I got you covered. <br />
        Want a sleek mobile app? No problemo. <br />Database acting up? I'll
        have it purring like a kitten in no time. <br />

        <strong>Full stack developer life, here I come!</strong>
      </p>
    </div>
    <!-- /.hero-content -->

    <div class="hero-arrow page-scroll home-arrow-down">
      <a class="" href="#intro"><i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
    </div>
    <!-- /.hero-arrow -->
  </div>
  <!-- /.hero -->
  <!-- End Hero -->

  <!-- Header -->
  <header id="masthead" class="site-header">
    <nav id="primary-navigation" class="site-navigation" data-spy="affix">
      <div class="container">
        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
            data-target="#portfolio-perfect-collapse" aria-expanded="false">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Name -->
          <div class="page-scroll site-logo">
            <a href="#top">ADAM</a>
          </div>
        </div>
        <!-- /.navbar-header -->

        <div class="main-menu collapse navbar-collapse" id="portfolio-perfect-collapse">
          <!-- Navigation -->
          <ul class="nav navbar-nav navbar-right">
            <li class="page-scroll"><a href="#top">Home</a></li>
            <li class="page-scroll"><a href="#intro">Intro</a></li>
            <li class="page-scroll"><a href="#about">About</a></li>
            <li class="page-scroll"><a href="#services">Services</a></li>
            <li class="page-scroll"><a href="#works">Works</a></li>
            <li class="page-scroll"><a href="#contact">Contact</a></li>
          </ul>
          <!-- /.navbar-nav -->
        </div>
        <!-- /.navbar-collapse -->
      </div>
    </nav>
    <!-- /.primary-navigation -->
  </header>
  <!-- /#header -->
  <!-- End Header -->

  <!-- Main content -->
  <main id="main" class="site-main">
    <!-- Hello section -->
    <section class="site-section section-hello" id="intro">
      <div class="container">
        <h2>HELLO &amp; WELCOME</h2>
        <p class="section-subtitle"><span>EXPLORE MY WORLD</span></p>
        <div class="row">
          <div class="col-sm-4">
            <div class="main-service text-right">
              <div class="rectangle">
                <i class="fa fa-calendar" aria-hidden="true"></i>
              </div>
              <!-- /.rectangle -->
              <h3>I Meet Deadlines</h3>
              <p>
                Your deadline is the most important value for me. My job is to
                make sure the job is done perfectly before the deadline.
              </p>
            </div>
            <!-- /.main-service -->
            <div class="main-service text-right">
              <div class="rectangle">
                <i class="fa fa-comments" aria-hidden="true"></i>
              </div>
              <h3>Communication Is Key</h3>
              <p>
                I am available to check on your questions and take in feedback
                as soon as possibly.
              </p>
            </div>
            <!-- /.main-service -->
          </div>
          <div class="col-sm-4">
            <div class="big-rectangle">
              <img src="assets/img/adam-logo.png" alt="" />
            </div>
            <!-- /.big-rectangle -->
          </div>
          <div class="col-sm-4">
            <div class="main-service text-left">
              <div class="rectangle">
                <i class="fa fa-check" aria-hidden="true"></i>
              </div>
              <h3>Quality Control</h3>
              <p>
                I test out everything to make sure that your project is fully
                functional, cross–browser compatible and meets your
                specifications.
              </p>
            </div>
            <!-- /.main-service -->
            <div class="main-service text-left">
              <div class="rectangle">
                <i class="fa fa-list" aria-hidden="true"></i>
              </div>
              <!-- /.rectangle -->
              <h3>Pixel Perfect</h3>
              <p>
                I develop meaningful digital products and experiences that
                matter with design thinking and creative craftsmanship.
              </p>
            </div>
            <!-- /.main-service -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.section-hello -->
    <!-- End Hello section -->

    <!-- Quote section -->
    <section class="section-background section-quote background-overlay text-center">
      <div class="container">
        <p>
          The <span>thrill</span> of bringing a project to life from start to
          finish &amp; the <span>satisfaction</span> of solving a tricky
          problem &amp; , the endless <span>opportunities</span> to learn and
          grow. <br />It's all part of the <span>wild ride</span> for me
        </p>
      </div>
    </section>
    <!-- /.section-quote -->
    <!-- End Quote section -->

    <!-- About section -->
    <section class="site-section section-about text-center" id="about">
      <div class="container">
        <h2>ABOUT Adam WORK</h2>
        <p class="section-subtitle">
          <span>My goal is to build products and services</span>
        </p>
        <div class="row">
          <div class="col-sm-3 col-xs-6">
            <div class="feature-about">
              <div class="medium-rectangle rectangle">
                <i class="fa fa-laptop" aria-hidden="true"></i>
              </div>
              <!-- /.rectangle -->
              <h3>Web design</h3>
              <p>
                My approach to website design is to create a website that
                strengthens your company’s brand while ensuring ease of use
                and simplicity for your audience
              </p>
            </div>
            <!-- /.feature-about -->
          </div>
          <div class="col-sm-3 col-xs-6">
            <div class="feature-about">
              <div class="medium-rectangle rectangle">
                <i class="fa fa-code" aria-hidden="true"></i>
              </div>
              <!-- /.rectangle -->
              <h3>Web development</h3>
              <p>
                The web development process involves taking the graphical
                elements defined in the design process and coding them into a
                custom theme.
              </p>
            </div>
            <!-- /.feature-about -->
          </div>
          <div class="col-sm-3 col-xs-6">
            <div class="feature-about">
              <div class="medium-rectangle rectangle">
                <i class="fa fa-search" aria-hidden="true"></i>
              </div>
              <!-- /.rectangle -->
              <h3>SEO OPTIMIZATION</h3>
              <p>
                Go farther than you thought you could. With me you can go
                farther then ever before. Be in top results of searches.
              </p>
            </div>
            <!-- /.feature-about -->
          </div>
          <div class="col-sm-3 col-xs-6">
            <div class="feature-about">
              <div class="medium-rectangle rectangle">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </div>
              <!-- /.rectangle -->
              <h3>SOCIAL MEDIA</h3>
              <p>
                It's important to keep your brand consistent and recognizable
                across all platforms
              </p>
            </div>
            <!-- /.feature-about -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.section-about -->
    <!-- End About section -->

    <!-- Skills section -->
    <section class="site-section section-skills">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h2>Introduction video</h2>
            <iframe src="https://player.vimeo.com/video/158928871" width="100%" height="280" frameborder="0"
              webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
          <div class="col-sm-6">
            <h2>SKILLS I GOT</h2>
            <div class="progress-group">
              <p>Web design</p>
              <div class="progress">
                <div class="progress-bar" role="progressbar" data-transitiongoal="100"></div>
              </div>
              <!-- /.progress -->
            </div>
            <!-- /.progress-group -->

            <div class="progress-group">
              <p>Web development</p>
              <div class="progress">
                <div class="progress-bar" role="progressbar" data-transitiongoal="100"></div>
              </div>
              <!-- /.progress -->
            </div>
            <!-- /.progress-group -->

            <div class="progress-group">
              <p>Mobile Development</p>
              <div class="progress">
                <div class="progress-bar" role="progressbar" data-transitiongoal="95"></div>
              </div>
              <!-- /.progress -->
            </div>
            <!-- /.progress-group -->

            <div class="progress-group">
              <p>SEO optimization</p>
              <div class="progress">
                <div class="progress-bar" role="progressbar" data-transitiongoal="100"></div>
              </div>
              <!-- /.progress -->
            </div>
            <!-- /.progress-group -->

            <div class="progress-group">
              <p>Social Media</p>
              <div class="progress">
                <div class="progress-bar" role="progressbar" data-transitiongoal="90"></div>
              </div>
              <!-- /.progress -->
            </div>
            <!-- /.progress-group -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.section-skills -->
    <!-- End Skills section -->

    <!-- Counters section -->
    <section class="site-section section-counters text-center">
      <div class="container">
        <div class="row">
          <div class="col-sm-2 col-xs-6 col-sm-offset-1">
            <div class="counter">
              <div class="rectangle medium-rectangle">
                <i class="fa fa-rocket" aria-hidden="true"></i>
                <span class="counter-start" data-to="167" data-speed="2000">7</span>
              </div>
              <!-- /.rectangle -->
              <p>Projects Launched</p>
            </div>
            <!-- /.counter -->
          </div>
          <div class="col-sm-2 col-xs-6">
            <div class="counter">
              <div class="rectangle medium-rectangle">
                <i class="fa fa-trophy" aria-hidden="true"></i>
                <span class="counter-start" data-to="25" data-speed="2000">2</span>
              </div>
              <!-- /.rectangle -->
              <p>Awards won</p>
            </div>
            <!-- /.counter -->
          </div>
          <div class="col-sm-2 col-xs-6">
            <div class="counter">
              <div class="rectangle medium-rectangle">
                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                <span class="counter-start" data-to="98" data-speed="2000">1000</span>
              </div>
              <!-- /.rectangle -->
              <p>Proposals Sent</p>
            </div>
            <!-- /.counter -->
          </div>
          <div class="col-sm-2 col-xs-6">
            <div class="counter">
              <div class="rectangle medium-rectangle">
                <i class="fa fa-clock-o" aria-hidden="true"></i>
                <span class="counter-start" data-to="945" data-speed="2000">945</span>
              </div>
              <!-- /.rectangle -->
              <p>Hours of work</p>
            </div>
            <!-- /.counter -->
          </div>
          <div class="col-sm-2 col-xs-12">
            <div class="counter">
              <div class="rectangle medium-rectangle">
                <i class="fa fa-coffee" aria-hidden="true"></i>
                <span class="counter-start" data-to="256" data-speed="2000">256</span>
              </div>
              <!-- /.rectangle -->
              <p>Cups of coffee</p>
            </div>
            <!-- /.counter -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.section-counters -->
    <!-- End Counters section -->

    <!-- Services section -->
    <section class="site-section section-services" id="services">
      <div class="container-fluid">
        <h2>SERVICES I OFFER</h2>
        <p class="section-subtitle">
          <span>Exceptional level of service</span>
        </p>
      </div>

      <div class="container">
        <div class="carousel slide" id="services-carousel">
          <div class="item-controls text-center">
            <a href="#services-carousel" class="left btn carousel-control" data-slide="prev"><i class="fa fa-angle-left"
                aria-hidden="true"></i>
            </a>
            <a href="#services-carousel" class="right btn carousel-control" data-slide="next"><i
                class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
          </div>
          <!-- /.item-controls -->

          <div class="carousel-indicators nav-tabs text-center">
            <a data-target="#services-carousel" href="#" data-slide-to="0" class="active">
              <div class="col-xs-4 col-sm-fifth">
                <div class="service">
                  <div class="rectangle">
                    <i class="fa fa-laptop" aria-hidden="true"></i>
                  </div>
                  <p class="hidden-xs">Web design</p>
                </div>
              </div>
            </a><!-- /.item -->
            <a data-target="#services-carousel" href="#" data-slide-to="1">
              <div class="col-xs-4 col-sm-fifth">
                <div class="service">
                  <div class="rectangle">
                    <i class="fa fa-code" aria-hidden="true"></i>
                  </div>
                  <p class="hidden-xs">Web development</p>
                </div>
              </div>
            </a><!-- /.item -->
            <a data-target="#services-carousel" href="#" data-slide-to="2">
              <div class="col-xs-4 col-sm-fifth">
                <div class="service">
                  <div class="rectangle">
                    <i class="fa fa-mobile" aria-hidden="true"></i>
                  </div>
                  <p class="hidden-xs">Mobile Development</p>
                </div>
              </div>
            </a><!-- /.item -->
            <a data-target="#services-carousel" href="#" data-slide-to="3">
              <div class="col-xs-4 col-sm-fifth">
                <div class="service">
                  <div class="rectangle">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </div>
                  <p class="hidden-xs">SEO optimization</p>
                </div>
              </div>
            </a><!-- /.item -->
            <a data-target="#services-carousel" href="#" data-slide-to="4">
              <div class="col-xs-4 col-sm-fifth">
                <div class="service">
                  <div class="rectangle">
                    <i class="fa fa-twitter" aria-hidden="true"></i>
                  </div>
                  <p class="hidden-xs">Social Media</p>
                </div>
              </div>
            </a><!-- /.item -->
          </div>
          <!-- /.carousel-indicators -->

          <div class="carousel-inner">
            <!-- Item 1 -->
            <div id="item1" class="item tab-pane active">
              <div class="row">
                <div class="col-md-5">
                  <div class="service-info">
                    <h3 class="service-title">Web Design</h3>
                    <p>
                      Decorations don’t drive home messages. Content does.
                      Reducing text-based content to a visual design element
                      (the shape of the text) can result in bloated and
                      unrealistic client expectations once real data replaces
                      the dummy content. I allow my design decisions to be
                      dictated by the on-page content and messaging, and often
                      use the actual content to inspire interesting elements
                      that might not have been conceived without it
                    </p>
                  </div>
                </div>
                <div class="col-md-7">
                  <img src="assets/img/web-design.jpg" class="img-responsive" alt="" />
                </div>
              </div>
            </div>
            <!-- /.item -->
            <!-- Item 2 -->
            <div id="item2" class="item tab-pane">
              <div class="row">
                <div class="col-md-5">
                  <div class="service-info">
                    <h3 class="service-title">Web Development</h3>
                    <p>
                      Once I have come up with a unique design and have
                      finalized the textures and graphics to be added, the
                      next step is to make it all come together. And that is
                      what I aim to achieve at my web development career. Only
                      a professionally designed website can justify the
                      uniqueness of your idea and this is a fact clearly
                      understood by me.
                    </p>

                    <p>
                      While a good design can impress the users, it is the
                      codes and development process that ensures that your
                      target users will find the browsing experience equally
                      amazing as your design.
                    </p>
                  </div>
                </div>
                <div class="col-md-7">
                  <img src="assets/img/web-development.jpg" class="img-responsive" alt="" />
                </div>
              </div>
            </div>
            <!-- /.item -->
            <!-- Item 3 -->
            <div id="item3" class="item tab-pane">
              <div class="row">
                <div class="col-md-5">
                  <div class="service-info">
                    <h3 class="service-title">Mobile Development</h3>
                    <p>
                      With an increasing importance being given to smart
                      phones, and mobile apps, it has become immensely
                      important to include app development as part of web
                      design services. I am known to provide excellent and
                      extraordinary apps that are unique in every way. All the
                      apps developed by I am based on providing interesting
                      features combined with enhanced functionality. With a
                      mobile app in place, you can increase the reach of your
                      brand and broaden its horizons too. You can have an easy
                      to use professional app created that provides ease of
                      functionality and an amazing appeal.
                    </p>
                  </div>
                </div>
                <div class="col-md-7">
                  <img src="assets/img/mobile-development.jpg" class="img-responsive" alt="" />
                </div>
              </div>
            </div>
            <!-- /.item -->
            <!-- Item 4 -->
            <div id="item4" class="item tab-pane">
              <div class="row">
                <div class="col-md-5">
                  <div class="service-info">
                    <h3 class="service-title">SEO optimization</h3>
                    <p>
                      Search engine optimization (SEO) is the process of
                      improving the visibility of a web site in search
                      engines. Consumer puts a lot of trust in search engines
                      to find what they need. Google receives 34,000 searches
                      per second. Those searches involve finding products,
                      reviewing brands, and looking up business locations.
                    </p>
                  </div>
                </div>
                <div class="col-md-7">
                  <img src="assets/img/seo-optimization.jpg" class="img-responsive" alt="" />
                </div>
              </div>
            </div>
            <!-- /.item -->
            <!-- Item 5 -->
            <div id="item5" class="item tab-pane">
              <div class="row">
                <div class="col-md-5">
                  <div class="service-info">
                    <h3 class="service-title">Social Media</h3>
                    <p>
                      Social Media, has become an essential tool of marketing
                      an online business. It gives you a platform to interact
                      and inform people about yourself and your brand. The
                      concept of social media basically refers to the task of
                      promoting websites or business through social media
                      platforms..
                    </p>
                  </div>
                </div>
                <div class="col-md-7">
                  <img src="assets/img/social-media.jpg" class="img-responsive" alt="" />
                </div>
              </div>
            </div>
            <!-- /.item -->
          </div>
          <!-- /.carousel-inner -->
        </div>
        <!-- /.carousel -->
      </div>
    </section>
    <!-- /.section-services -->
    <!-- End Services section -->

    <!-- Portfolio/Works section -->
    <section class="site-section section-works" id="works">
      <div class="container">
        <h2>RECENT WORKS</h2>
        <p class="section-subtitle mb-1">
          <span>Check my portfolio.</span>
        </p>
        <p class="text-center">
          I work as a freelance developer for companies all over the world to
          build web applications, marketing websites, data visualizations, and
          browser extensions. I use React, Next.js, Node.js and related
          technologies to implement seamless and performant products.
        </p>

        <div class="portfolio">
          <ul class="portfolio-sorting list-inline">
            <li><a href="#" class="active" data-group="all">all</a></li>
            <li>
              <a href="#" class="" data-group="webdesign">Web Design</a>
            </li>
            <li>
              <a href="#" class="" data-group="webdev">Web Development</a>
            </li>
            <li>
              <a href="#" class="" data-group="mobileapps">Mobile apps</a>
            </li>
          </ul>
          <!-- /.portfolio-sorting  -->

          <div id="grid">
            <!-- Portfolio item -->
            <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdesign"]'>
              <div class="portfolio-item">
                <div class="portfolio-item-thumb">
                  <img src="assets/img/portfolio-6.jpg" alt="" class="img-res" />
                  <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem1">
                    <i class="fa fa-plus"></i>
                  </a>
                </div>
                <!-- /.portfolio-item-thumb  -->
                <div class="portfolio-info">
                  <h3>PSD Template</h3>
                  <p>Web Design</p>
                </div>
                <!-- /.portfolio-info  -->
              </div>
            </div>
            <!-- /.col-md-3  -->
            <!-- Portfolio item -->
            <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdev"]'>
              <div class="portfolio-item">
                <div class="portfolio-item-thumb">
                  <img src="assets/img/portfolio-7.jpg" alt="" class="img-res" />
                  <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem2">
                    <i class="fa fa-plus"></i>
                  </a>
                </div>
                <!-- /.portfolio-item-thumb  -->
                <div class="portfolio-info">
                  <h3>Website</h3>
                  <p>Web Development</p>
                </div>
                <!-- /.portfolio-info  -->
              </div>
            </div>
            <!-- /.col-md-3  -->
            <!-- Portfolio item -->
            <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["mobileapps"]'>
              <div class="portfolio-item">
                <div class="portfolio-item-thumb">
                  <img src="assets/img/portfolio-5.jpg" alt="" class="img-res" />
                  <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem3">
                    <i class="fa fa-plus"></i>
                  </a>
                </div>
                <!-- /.portfolio-item-thumb  -->
                <div class="portfolio-info">
                  <h3>IOS App</h3>
                  <p>Mobile App</p>
                </div>
                <!-- /.portfolio-info  -->
              </div>
            </div>
            <!-- /.col-md-3  -->
            <!-- Portfolio item -->
            <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdesign"]'>
              <div class="portfolio-item">
                <div class="portfolio-item-thumb">
                  <img src="assets/img/portfolio-3.jpg" alt="" class="img-res" />
                  <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem4">
                    <i class="fa fa-plus"></i>
                  </a>
                </div>
                <!-- /.portfolio-item-thumb  -->
                <div class="portfolio-info">
                  <h3>PSD Template</h3>
                  <p>Web Design</p>
                </div>
                <!-- /.portfolio-info  -->
              </div>
            </div>
            <!-- /.col-md-3  -->
            <!-- Portfolio item -->
            <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdev"]'>
              <div class="portfolio-item">
                <div class="portfolio-item-thumb">
                  <img src="assets/img/portfolio-4.jpg" alt="" class="img-res" />
                  <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem5">
                    <i class="fa fa-plus"></i>
                  </a>
                </div>
                <!-- /.portfolio-item-thumb  -->
                <div class="portfolio-info">
                  <h3>Dashboard & Data visualization</h3>
                  <p>Web Development</p>
                </div>
                <!-- /.portfolio-info  -->
              </div>
            </div>
            <!-- /.col-md-3  -->
            <!-- Portfolio item -->
            <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["mobileapps"]'>
              <div class="portfolio-item">
                <div class="portfolio-item-thumb">
                  <img src="assets/img/portfolio-6.jpg" alt="" class="img-res" />
                  <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem6">
                    <i class="fa fa-plus"></i>
                  </a>
                </div>
                <!-- /.portfolio-item-thumb  -->
                <div class="portfolio-info">
                  <h3>Android App</h3>
                  <p>Mobile App</p>
                </div>
                <!-- /.portfolio-info  -->
              </div>
            </div>
            <!-- /.col-md-3  -->
            <!-- Portfolio item -->
            <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdev"]'>
              <div class="portfolio-item">
                <div class="portfolio-item-thumb">
                  <img src="assets/img/portfolio-2.jpg" alt="" class="img-res" />
                  <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem7">
                    <i class="fa fa-plus"></i>
                  </a>
                </div>
                <!-- /.portfolio-item-thumb  -->
                <div class="portfolio-info">
                  <h3>Woocommerce Website</h3>
                  <p>Web Development</p>
                </div>
                <!-- /.portfolio-info  -->
              </div>
            </div>
            <!-- /.col-md-3  -->
            <!-- Portfolio item -->
            <div class="col-md-3 col-sm-4 col-xs-6" data-groups='["webdesign"]'>
              <div class="portfolio-item">
                <div class="portfolio-item-thumb">
                  <img src="assets/img/portfolio-8.jpg" alt="" class="img-res" />
                  <a href="#" class="rectangle" data-toggle="modal" data-target="#portfolioItem8">
                    <i class="fa fa-plus"></i>
                  </a>
                </div>
                <!-- /.portfolio-item-thumb  -->
                <div class="portfolio-info">
                  <h3>PSD Template</h3>
                  <p>Web Design</p>
                </div>
                <!-- /.portfolio-info  -->
              </div>
            </div>
            <!-- /.col-md-3  -->
          </div>
          <!-- /#grid -->
        </div>
      </div>
    </section>
    <!-- /.section-works -->
    <!-- End Works section -->

    <!-- Me section -->
    <section class="section-background section-me background-overlay text-center">
      <div class="container page-scroll">
        <h2>Are You Impressed By My Work?</h2>
        <p>
          I am available to start your project immediately and work full time
          in your timezone if you hire me. I am looking forward to hearing
          more details from you. Touch me anytime.
        </p>
        <a href="#contact" class="btn">GET IN TOUCH</a>
      </div>
    </section>
    <!-- /.section-me -->
    <!-- End Me section -->

    <!-- Reviews section -->
    <section class="site-section section-reviews text-center">
      <div class="container">
        <h2>Client Reviews</h2>
        <p class="section-subtitle">
          <span>READ WHAT MY CLIENTS HAVE TO SAY</span>
        </p>
      </div>

      <div class="blue-bg">
        <div class="container">
          <div class="review-carousel">
            <!-- Review 1 -->
            <div class="review">
              <div class="rectangle">
                <img src="assets/img/review.jpg" class="img-res" alt="" />
              </div>
              <p>
                If there were 100 star rating I would leave 110. I have been
                building WP sites now full time for 7 years and in business
                for 12 and have never worked with such a solid developer with
                such a wonderful set of themes.
              </p>
              <div class="review-author">
                <h3>Mike Taylor</h3>
                <p>CEO at Sports Portal</p>
              </div>
              <!-- /.review-author -->
            </div>
            <!-- /.review -->
            <!-- Review 2 -->
            <div class="review">
              <div class="rectangle">
                <img src="assets/img/review-2.jpg" class="img-res" alt="" />
              </div>
              <p>
                Adam is a rare SEO consultant who does things the right way.
                I’ve been consistently impressed with his process,
                organization and strategic method of doing SEO the right way.
              </p>
              <div class="review-author">
                <h3>Anna Murray</h3>
                <p>CEO at Law firm</p>
              </div>
              <!-- /.review-author -->
            </div>
            <!-- /.review -->
          </div>
          <!-- /.review-carousel -->
        </div>
      </div>
    </section>
    <!-- /.section-reviews -->
    <!-- End Reviews section -->
    <!-- Clients section -->
    <section class="section-clients">
      <div class="container">
        <div class="text-center section-diff-title">
          <h2>Clients I’ve Worked So Far</h2>
          <p></p>
        </div>

        <div class="clients-carousel">
          <!-- Client -->
          <a href="#" class="client">
            <img src="assets/img/client-1.jpg" class="img-responsive" alt="" /> </a><!-- /.client -->
          <!-- Client -->
          <a href="#" class="client">
            <img src="assets/img/client-2.png" class="img-responsive" alt="" /> </a><!-- /.client -->
          <!-- Client -->
          <a href="#" class="client">
            <img src="assets/img/client-3.jpg" class="img-responsive" alt="" /> </a><!-- /.client -->
          <!-- Client -->
          <a href="#" class="client">
            <img src="assets/img/client-4.jpg" class="img-responsive" alt="" /> </a><!-- /.client -->
          <!-- Client -->
          <a href="#" class="client">
            <img src="assets/img/client-5.png" class="img-responsive" alt="" /> </a><!-- /.client -->
          <!-- Client -->
          <a href="#" class="client">
            <img src="assets/img/client-8.png" class="img-responsive" alt="" /> </a><!-- /.client -->
          <!-- Client -->
          <a href="#" class="client">
            <img src="assets/img/client-6.jpg" class="img-responsive" alt="" /> </a><!-- /.client -->
          <!-- Client -->
          <a href="#" class="client">
            <img src="assets/img/client-7.jpg" class="img-responsive" alt="" /> </a><!-- /.client -->
        </div>
        <!-- /.clients-carousel -->
      </div>
    </section>
    <!-- /.section-clients -->
    <!-- End Clients section -->

    <!-- Contact section -->
    <section class="section-background background-overlay text-center section-contact" id="contact">
      <div class="container">
        <h1>CONTACT Adam</h1>
        <p class="section-subtitle"><span>Here i am</span></p>
        <div class="row">
          <form method="post" enctype="text/plain">
            <div class="col-md-4">
              <input class="form-control" type="text" placeholder="Name" name="name" id="name" required />
            </div>
            <div class="col-md-4">
              <input class="form-control" type="email" id="email" name="email" placeholder="Email" required />
            </div>
            <div class="col-md-4">
              <input class="form-control" type="text" placeholder="Subject" id="subject" name="subject" required />
            </div>
            <div class="col-sm-12">
              <textarea class="form-control" placeholder="Your Message" id="message" name="message" required></textarea>
            </div>

            <div class="col-sm-12">
              <input class="btn btn-inverted" type="submit" style="color: #fff" id="submit_btn" value="Send Message" />
            </div>
          </form>
        </div>
      </div>
    </section>
    <!-- /.section-Contact-->
    <!-- End Contact section -->

    <!-- Social Networks section -->
    <section class="section-networks blue-bg">
      <div class="container">
        <a href="#" class="rectangle">
          <i class="fa fa-telegram"></i>
        </a>
        <a href="https://github.com/adamkuzlo" class="rectangle">
          <i class="fa fa-github"></i>
        </a>
        <a href="#" class="rectangle">
          <i class="fa fa-behance"></i>
        </a>
        <a href="#" class="rectangle">
          <i class="fa fa-skype"></i>
        </a>
        <a href="mailto:adamkuzlo619@gmail.com" class="rectangle">
          <i class="fa fa-envelope"></i>
        </a>
      </div>
    </section>
    <!-- /.section-networks-->
    <!-- End Social Networks section -->
    <div id="toast-container"></div>
  </main>
  <!-- /#main -->
  <!-- End Main content -->

  <!-- Footer -->
  <footer id="colophon" class="site-footer">
    <div class="container-fluid">
      <ul class="list-unstyled list-inline">
        <li class="page-scroll"><a href="#top">Home</a></li>
        <li class="page-scroll"><a href="#intro">Intro</a></li>
        <li class="page-scroll"><a href="#about">About</a></li>
        <li class="page-scroll"><a href="#services">Services</a></li>
        <li class="page-scroll"><a href="#works">Works</a></li>
        <li class="page-scroll"><a href="#contact">Contact</a></li>
      </ul>

      <div class="page-scroll">
        <a href="#top" class="rectangle">
          <i class="fa fa-angle-double-up"></i>
        </a>
      </div>
    </div>

    <div class="container text-center">
      <p class="copyright">&copy; copyrighted by Adam Kuzlo at 2022</p>
    </div>
  </footer>
  <!-- /#footer -->
  <!-- End Footer -->

  <!-- Modals -->
  <!-- <div id="portfolioItem1" class="modal fade fade-scale" role="dialog">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <a class="rectangle" data-dismiss="modal"
              ><i class="fa fa-times"></i
            ></a>
            <img class="img-res" src="assets/img/portfolio-1.jpg" alt="" />
          </div>
          <div class="modal-body">
            <h4 class="modal-title">Project title</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec
              commodo finibus tristique. Maecenas dignissim condimentum sem eu
              tincidunt. Curabitur in dui quis magna vestibulum pulvinar a ut
              urna. Nam pellentesque mattis urna. Aenean eget lectus sit amet
              turpis facilisis consectetur quis vel ante. Integer in massa ut
              nibh ultricies sagittis imperdiet in ante. Nam sed turpis vel ante
              placerat feugiat ac tempus magna. Nam aliquet ullamcorper dolor
              non hendrerit.
            </p>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn">Visit Page</a>
          </div>
        </div>
        
      </div>
      
    </div> -->
  <!-- /.modal -->

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <!-- jQuery core js | Do not Delete -->
  <script src="assets/js/jquery.min.js"></script>

  <!-- Bootstrap core js | Do not Delete -->
  <script src="assets/js/bootstrap.min.js"></script>

  <!-- Bootstrap progressbar JS -->
  <script src="assets/js/bootstrap-progressbar.min.js"></script>

  <!-- Count To JS -->
  <script src="assets/js/jquery.countTo.min.js"></script>

  <!-- Easing JS -->
  <script src="assets/js/jquery.easing.min.js"></script>

  <!-- Shuffle JS -->
  <script src="assets/js/jquery.shuffle.min.js"></script>

  <!-- Slick Carousel JS -->
  <script src="assets/js/slick.min.js"></script>

  <!-- Touchswipe JS -->
  <script src="assets/js/touchswipe.min.js"></script>

  <!-- Custom JS -->
  <script src="assets/js/script.js"></script>
</body>

</html>