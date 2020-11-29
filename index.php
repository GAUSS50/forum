<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Forum EPT Entreprise - 20th edition</title>

  <!--|Google Font( Open Sans )|-->
  <link
    href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic'
    rel='stylesheet' type='text/css'>
  <!--|Google Font( Roboto Slab )|-->
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700' rel='stylesheet' type='text/css'>
  <!--|Icon Font( Ion Icon)|-->
  <link href="assets/css/ionicons.min.css" rel="stylesheet" type="text/css">
  <!--|Owl Carousel|-->
  <link href="assets/css/owl.carousel.css" rel="stylesheet" type="text/css">
  <!--|Bootstrap|-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

  <!--|Site Stylesheet|-->
  <!--//Note: If you want to change color, just uncomment the commented stylesheet link and comment the uncommented link -->
  <link href="assets/css/style.css" rel="stylesheet" type="text/css">
  <!--<link href="assets/css/style_blue.css" rel="stylesheet" type="text/css">-->
  <!--<link href="assets/css/style_purple.css" rel="stylesheet" type="text/css">-->
  <!--<link href="assets/css/style_teal.css" rel="stylesheet" type="text/css">-->

  <!--|Favicon|-->
  <link rel="icon" href="assets/images/favicon.png">
  <!-- Touch Icons -->
  <link rel="apple-touch-icon" href="assets/images/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/images/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/images/apple-touch-icon-114x114.png">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="assets/js/html5shiv.min.js"></script>
  <script src="assets/js/respond.min.js"></script>
  <![endif]-->
  <script>
    function zoom(el, x) {
      el.style.maxWidth = x + "%";
    }
    function more() {
      var more = document.getElementById("more-gallery");
      var btnText = document.getElementById("btn-more");

      if (more.style.display === "block") {
        btnText.innerHTML = "View more";
        more.style.display = "none";
      } else {
        btnText.innerHTML = "View less";
        more.style.display = "block";
      }
    }
  </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
  <link rel="stylesheet" href="assets/css/gallery-grid.css">
</head>

<body>
  <!--|Preloader|
<div class="preloader">
  <div class="preloader-inner">
    <div>
      <div></div>
    </div>
    <span class="fp-meta">loading...</span>
  </div>
</div> <!--|End Preloader|-->

  <!--||Site Header||-->
  <header id="home" class="site-header overlay-black">
    <div class="overlay-inner">
      <div class="fp-navbar">
        <nav class="navbar">
          <div class="container">
            <div class="navbar-header">
              <!--|Toggle Btn|-->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu"
                aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <i class="ion-navicon"></i>
              </button>
              <!--|End Toggle Btn|-->

              <!--|Brand( Logo )|-->
              <a class="navbar-brand" href="#home">
                <img class="logo-white" alt="rhyme" src="assets/images/logo_white.png">
                <img class="logo-black" alt="rhyme" src="assets/images/logo_black.png">
              </a>
              <!--|End Brand( Logo )|-->
            </div>

            <!--|Navbar collapse|-->
            <div class="collapse navbar-collapse" id="menu">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#speakers">Speakers</a></li>
                <li><a href="#schedule">Schedule</a></li>
                <li><a href="#benefits">Benefits</a></li>
                <li><a href="#packages">Topic</a></li>
                <li><a href="#faqs">Faq</a></li>
                <li><a href="#gallery">Gallery</a></li>
                <li><a href="#blog">LePolytechnicien</a></li>
                <li><a href="#sponsor">Sponsor</a></li>
                <li><a class="btn btn-primary" href="#register">Register</a></li>
              </ul>
            </div>
            <!--|End Navbar collapse|-->
          </div>
        </nav>
      </div>

      <!--|Greeting Content|-->
      <div class="greetings-content text-center">
        <div class="container">
          <div class="row">
            <div class="col-md-10 content-center">
              <!--|Head Text|-->
              <div class="head-text">
                <p class="fp-meta">5 December, 2020 at Tunisia Polytechnic School</p>
                <h1 class="head-title">Forum EPT Entreprises <var>XX<sup>th</sup></var> edition</h1>
              </div>
              <!--|End Head Text|-->

              <!--|Event Countdown|-->
              <div class="event-countdown">
                <p>To start forum, remaining time is</p>

                <div id="countdown-timer" class="countdown-timer"></div>
              </div>
              <!--|End Event Countdown|-->
            </div>
          </div>
        </div>
      </div>
      <!--|End Greeting Content|-->
    </div>

    <!--|Animated Mouse Icon|-->
    <span class="dwon-icon ion-mouse"></span>
  </header>
  <!--||End Site Header||-->

  <!--||Overview||-->
  <div id="overview" class="overview">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <!--|Overview Box|-->
          <div class="overview-box">
            <span class="fp-icon"><i class="ion-map"></i></span>
            <div class="fp-desc">
              <h4 class="title">La Marsa</h4>
              <p>Tunisia Polytechnic School</p>
            </div>
          </div>
          <!--|End Overview Box|-->
        </div>

        <div class="col-md-3 col-sm-6">
          <!--|Overview Box|-->
          <div class="overview-box">
            <span class="fp-icon"><i class="ion-android-microphone"></i></span>
            <div class="fp-desc">
              <h4 class="title">24 Speakers</h4>
              <p>All are specialists</p>
            </div>
          </div>
          <!--|End Overview Box|-->
        </div>

        <div class="col-md-3 col-sm-6">
          <!--|Overview Box|-->
          <div class="overview-box">
            <span class="fp-icon"><i class="ion-leaf"></i></span>
            <div class="fp-desc">
              <h4 class="title">35+ Sponsor</h4>
              <p>Silver,Gold & Platinum</p>
            </div>
          </div>
          <!--|End Overview Box|-->
        </div>

        <div class="col-md-3 col-sm-6">
          <!--|Overview Box|-->
          <div class="overview-box">
            <span class="fp-icon"><i class="ion-person-stalker"></i></span>
            <div class="fp-desc">
              <h4 class="title">1420 Seats</h4>
              <p>Hurry up! Book seat</p>
            </div>
          </div>
          <!--|End Overview Box|-->
        </div>
      </div>
    </div>
  </div>
  <!--||End Overview||-->

  <!--||Speakers||-->
  <section id="speakers" class="speakers section overlay-white">
    <div class="overlay-inner">
      <div class="container">
        <!--|Section Header|-->
        <header class="section-header">
          <div class="row">
            <div class="col-md-6 content-center">
              <h2 class="section-title">
                <span class="fp-meta">The</span>
                <span class="title-text">Speakers</span>
              </h2>
              <p>Every year, we are honored to host numerous experts and specialists that represent one of the highlights of the forum. They are there to give out advice, give  speeches and feedback. Here’s the lineup of this year!</p>
            </div>
          </div>
        </header>
        <!--|End Section Header|-->

        <div class="row">
          <div class="col-md-3 col-sm-6">
            <!--|speaker|-->
            <div class="speaker">
              <figure class="avatar">
                <img src="assets/images/speaker1.jpg" alt="">

                <figcaption class="social-links">
                  <a href="#"><i class="ion-social-twitter"></i></a>
                  <a href="https://www.facebook.com/Abdellatif.mekki.62"><i class="ion-social-facebook"></i></a>
                  <a href="#"><i class="ion-social-linkedin"></i></a>
                  <a href="#"><i class="ion-social-instagram"></i></a>
                </figcaption>
              </figure>

              <div class="speaker-info">
                <h4 class="name">Abdellatif Mekki</h4>
                <cite>Former Minister of Public Health</cite>
              </div>
            </div>
            <!--|End speaker|-->
          </div>

          <div class="col-md-3 col-sm-6">
            <!--|speaker|-->
            <div class="speaker">
              <figure class="avatar">
                <img src="assets/images/speaker2.jpg" alt="">

                <figcaption class="social-links">
                  <a href="#"><i class="ion-social-twitter"></i></a>
                  <a href="#"><i class="ion-social-facebook"></i></a>
                  <a href="#"><i class="ion-social-linkedin"></i></a>
                  <a href="#"><i class="ion-social-instagram"></i></a>
                </figcaption>
              </figure>

              <div class="speaker-info">
                <h4 class="name">Nissaf Ben Alaya</h4>
                <cite>Director of the National Observatory for New and Emerging Diseases</cite>
              </div>
            </div>
            <!--|End speaker|-->
          </div>

          <div class="col-md-3 col-sm-6">
            <!--|speaker|-->
            <div class="speaker">
              <figure class="avatar">
                <img src="assets/images/speaker3.jpg" alt="">

                <figcaption class="social-links">
                  <a href="#"><i class="ion-social-twitter"></i></a>
                  <a href="#"><i class="ion-social-facebook"></i></a>
                  <a href="#"><i class="ion-social-linkedin"></i></a>
                  <a href="#"><i class="ion-social-instagram"></i></a>
                </figcaption>
              </figure>

              <div class="speaker-info">
                <h4 class="name">Mohamed Frikha</h4>
                <cite>CEO, The Telnet Group</cite>
              </div>
            </div>
            <!--|End speaker|-->
          </div>

          <div class="col-md-3 col-sm-6">
            <!--|speaker|-->
            <div class="speaker">
              <figure class="avatar">
                <img src="assets/images/speaker4.jpg" alt="">

                <figcaption class="social-links">
                  <a href="#"><i class="ion-social-twitter"></i></a>
                  <a href="#"><i class="ion-social-facebook"></i></a>
                  <a href="#"><i class="ion-social-linkedin"></i></a>
                  <a href="#"><i class="ion-social-instagram"></i></a>
                </figcaption>
              </figure>

              <div class="speaker-info">
                <h4 class="name">Fadhel Abdelkefi</h4>
                <cite>Tunisian economist</cite>
              </div>
            </div>
            <!--|End speaker|-->
          </div>
        </div>

        <div class="row">
          <div class="col-md-3 col-sm-6">
            <!--|speaker|-->
            <div class="speaker">
              <figure class="avatar">
                <img src="assets/images/speaker5.jpg" alt="">

                <figcaption class="social-links">
                  <a href="#"><i class="ion-social-twitter"></i></a>
                  <a href="#"><i class="ion-social-facebook"></i></a>
                  <a href="#"><i class="ion-social-linkedin"></i></a>
                  <a href="#"><i class="ion-social-instagram"></i></a>
                </figcaption>
              </figure>

              <div class="speaker-info">
                <h4 class="name">Nahla Ben Amor</h4>
                <cite>Larodec, ISG Tunis</cite>
              </div>
            </div>
            <!--|End speaker|-->
          </div>

          <div class="col-md-3 col-sm-6">
            <!--|speaker|-->
            <div class="speaker">
              <figure class="avatar">
                <img src="assets/images/speaker6.jpg" alt="">

                <figcaption class="social-links">
                  <a href="#"><i class="ion-social-twitter"></i></a>
                  <a href="#"><i class="ion-social-facebook"></i></a>
                  <a href="#"><i class="ion-social-linkedin"></i></a>
                  <a href="#"><i class="ion-social-instagram"></i></a>
                </figcaption>
              </figure>

              <div class="speaker-info">
                <h4 class="name">Rim Kassous</h4>
                <cite>Business Coach</cite>
              </div>
            </div>
            <!--|End speaker|-->
          </div>

          <div class="col-md-3 col-sm-6">
            <!--|speaker|-->
            <div class="speaker">
              <figure class="avatar">
                <img src="assets/images/speaker7.jpg" alt="">

                <figcaption class="social-links">
                  <a href="#"><i class="ion-social-twitter"></i></a>
                  <a href="#"><i class="ion-social-facebook"></i></a>
                  <a href="#"><i class="ion-social-linkedin"></i></a>
                  <a href="#"><i class="ion-social-instagram"></i></a>
                </figcaption>
              </figure>

              <div class="speaker-info">
                <h4 class="name">Dhiaeddine Gharsallah</h4>
                <cite>Artificial Intelligence Engineer</cite>
              </div>
            </div>
            <!--|End speaker|-->
          </div>

          <div class="col-md-3 col-sm-6">
            <!--|speaker|-->
            <div class="speaker">
              <figure class="avatar">
                <img src="assets/images/speaker8.jpg" alt="">

                <figcaption class="social-links">
                  <a href="#"><i class="ion-social-twitter"></i></a>
                  <a href="#"><i class="ion-social-facebook"></i></a>
                  <a href="#"><i class="ion-social-linkedin"></i></a>
                  <a href="#"><i class="ion-social-instagram"></i></a>
                </figcaption>
              </figure>

              <div class="speaker-info">
                <h4 class="name">Marwen Dhemaied</h4>
                <cite>Data Geek</cite>
              </div>
            </div>
            <!--|End speaker|-->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--||End Speakers||-->

  <!--||Schedule||-->
  <section id="schedule" class="schedule-wrapper section">
    <div class="container">
      <!--|Section Header|-->
      <header class="section-header">
        <div class="row">
          <div class="col-md-6 content-center">
            <h2 class="section-title">
              <span class="fp-meta">The Time</span>
              <span class="title-text">Schedule</span>
            </h2>
            <p>Our event will be divided into numerous activities all along the day. Bellow, you will find the detailed description of the schedule of our event.</p>
          </div>
        </div>
      </header>
      <!--|End Section Header|-->

      <div class="row">
        <div class="col-md-9 content-center">
          <!--|Tab Navigation|-->
          <div class="tab-navigation">
            <ul class="tabs">
              <li><a class="active" href="#" data-tab="day1">Morning</a></li>
              <li><a href="#" data-tab="day2">Afternoon</a></li>
              <!-- <li><a href="#" data-tab="day3">27 Jan, 2016</a></li>-->
            </ul>
          </div>
          <!--|End Tab Navigation|-->

          <!--|schedules|-->
          <div class="schedules">
            <ul id="day1" class="tab-content current">
              <li>
                <div class="pull-right text-right">
                  <span class="fp-meta"><span>08:30am</span><br>Hall#01</span>
                </div>
                <div class="schedule-info">
                  <h4 class="title">Opening Remarks</h4>
                  <div class="speaker">
                    <figure class="avatar">
                      <img src="assets/images/avatar01.jpg" alt="">
                    </figure>
                    <div class="fp-desc">
                      <h4 class="name">Jamie Wen</h4>
                      <p>Co-Founder &amp; CEO, Slack</p>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="pull-right text-right">
                  <span class="fp-meta"><span>09:30am</span><br>Hall#01</span>
                </div>
                <div class="schedule-info">
                  <h4 class="title">Introduction to IA</h4>
                  <div class="speaker">
                    <figure class="avatar">
                      <img src="assets/images/avatar02.jpg" alt="">
                    </figure>
                    <div class="fp-desc">
                      <h4 class="name">Maria Hall</h4>
                      <p>CEO, Google Inc.</p>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="pull-right text-right">
                  <span class="fp-meta"><span>01:00am</span><br>Hall#02</span>
                </div>
                <div class="schedule-info">
                  <h4 class="title">Getting Started with WP</h4>
                  <div class="speaker">
                    <figure class="avatar">
                      <img src="assets/images/avatar03.jpg" alt="">
                    </figure>
                    <div class="fp-desc">
                      <h4 class="name">Joe Fisher</h4>
                      <p>GM, The Boxstrap</p>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="pull-right text-right">
                  <span class="fp-meta"><span>02:00am</span><br>Hall#02</span>
                </div>
                <div class="schedule-info">
                  <h4 class="title">WP Theme &amp; Child Theme Development</h4>
                  <div class="speaker">
                    <figure class="avatar">
                      <img src="assets/images/avatar04.jpg" alt="">
                    </figure>
                    <div class="fp-desc">
                      <h4 class="name">Aaron Banks</h4>
                      <p>CEO, The Sage Group</p>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="pull-right text-right">
                  <span class="fp-meta"><span>00:30pm</span><br>Hall#03</span>
                </div>
                <div class="schedule-info">
                  <h4 class="title">Lunch Break</h4>
                </div>
              </li>
            </ul>

            <ul id="day2" class="tab-content">
              <li>
                <div class="pull-right text-right">
                  <span class="fp-meta"><span>08:30am</span><br>Hall#01</span>
                </div>
                <div class="schedule-info">
                  <h4 class="title">Plugin Development</h4>
                  <div class="speaker">
                    <figure class="avatar">
                      <img src="assets/images/avatar04.jpg" alt="">
                    </figure>
                    <div class="fp-desc">
                      <h4 class="name">Aaron Banks</h4>
                      <p>CEO, The Sage Group</p>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="pull-right text-right">
                  <span class="fp-meta"><span>09:30am</span><br>Hall#01</span>
                </div>
                <div class="schedule-info">
                  <h4 class="title">Useing SASS</h4>
                  <div class="speaker">
                    <figure class="avatar">
                      <img src="assets/images/avatar03.jpg" alt="">
                    </figure>
                    <div class="fp-desc">
                      <h4 class="name">Joe Fisher</h4>
                      <p>GM, The Boxstrap</p>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="pull-right text-right">
                  <span class="fp-meta"><span>12:00pm</span><br>Hall#03</span>
                </div>
                <div class="schedule-info">
                  <h4 class="title">Lunch Brack</h4>
                </div>
              </li>

              <li>
                <div class="pull-right text-right">
                  <span class="fp-meta"><span>01:00pm</span><br>Hall#02</span>
                </div>
                <div class="schedule-info">
                  <h4 class="title">CSS Best Practices</h4>
                  <div class="speaker">
                    <figure class="avatar">
                      <img src="assets/images/avatar02.jpg" alt="">
                    </figure>
                    <div class="fp-desc">
                      <h4 class="name">Maria Hall</h4>
                      <p>CEO, Google Inc.</p>
                    </div>
                  </div>
                </div>
              </li>

              <li>
                <div class="pull-right text-right">
                  <span class="fp-meta"><span>02:00pm</span><br>Hall#02</span>
                </div>
                <div class="schedule-info">
                  <h4 class="title">CSS Animation In-Depth Post-Conference Workshop</h4>
                  <div class="speaker">
                    <figure class="avatar">
                      <img src="assets/images/avatar01.jpg" alt="">
                    </figure>
                    <div class="fp-desc">
                      <h4 class="name">Jamie Wen</h4>
                      <p>Co-Founder &amp; CEO, Slack</p>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <!--
          <ul id="day3" class="tab-content">
            <li>
              <div class="pull-right text-right">
                <span class="fp-meta"><span>08:30am</span><br>Hall#02</span>
              </div>
              <div class="schedule-info">
                <h4 class="title">Frontend Tooling Post-Conference Workshop</h4>
                <div class="speaker">
                  <figure class="avatar">
                    <img src="assets/images/avatar02.jpg" alt="">
                  </figure>
                  <div class="fp-desc">
                    <h4 class="name">Maria Hall</h4>
                    <p>CEO, Google Inc.</p>
                  </div>
                </div>
              </div>
            </li>

            <li>
              <div class="pull-right text-right">
                <span class="fp-meta"><span>09:30am</span><br>Hall#01</span>
              </div>
              <div class="schedule-info">
                <h4 class="title">Plugin Development</h4>
                <div class="speaker">
                  <figure class="avatar">
                    <img src="assets/images/avatar04.jpg" alt="">
                  </figure>
                  <div class="fp-desc">
                    <h4 class="name">Aaron Banks</h4>
                    <p>CEO, The Sage Group</p>
                  </div>
                </div>
              </div>
            </li>

            <li>
              <div class="pull-right text-right">
                <span class="fp-meta"><span>12:00pm</span><br>Hall#03</span>
              </div>
              <div class="schedule-info">
                <h4 class="title">Lunch Brack</h4>
              </div>
            </li>

            <li>
              <div class="pull-right text-right">
                <span class="fp-meta"><span>01:30am</span><br>Hall#01</span>
              </div>
              <div class="schedule-info">
                <h4 class="title">CSS Animation In-Depth Post-Conference Workshop</h4>
                <div class="speaker">
                  <figure class="avatar">
                    <img src="assets/images/avatar03.jpg" alt="">
                  </figure>
                  <div class="fp-desc">
                    <h4 class="name">Joe Fisher</h4>
                    <p>GM, The Boxstrap</p>
                  </div>
                </div>
              </div>
            </li>

            <li>
              <div class="pull-right text-right">
                <span class="fp-meta"><span>02:00pm</span><br>Hall#02</span>
              </div>
              <div class="schedule-info">
                <h4 class="title">SMACSS Post-Conference Workshop</h4>
                <div class="speaker">
                  <figure class="avatar">
                    <img src="assets/images/avatar01.jpg" alt="">
                  </figure>
                  <div class="fp-desc">
                    <h4 class="name">Jamie Wen</h4>
                    <p>Co-Founder &amp; CEO, Slack</p>
                  </div>
                </div>
              </div>
            </li>
          </ul>
          -->
          </div>
          <!--|End schedules|-->
        </div>
      </div>
    </div>
  </section>
  <!--||End Schedule||-->

  <!--||Benefits||-->
  <section id="benefits" class="benefits section overlay-black">
    <div class="overlay-inner">
      <div class="container">
        <!--|Section Header|-->
        <header class="section-header">
          <div class="row">
            <div class="col-md-6 content-center">
              <h2 class="section-title">
                <span class="fp-meta">The Number of</span>
                <span class="title-text">Benefits</span>
              </h2>
              <p>In case you were hesitating whether or not to attend our event, here are some benefits that can come from choosing to visit our forum!</p>
            </div>
          </div>
        </header>
        <!--|End Section Header|-->

        <div class="row">
          <div class="col-md-3 col-sm-6">
            <!--|Text Box|-->
            <div class="text-box">
              <span class="fp-icon"><i class="ion-pinpoint"></i></span>
              <div class="fp-desc">
                <h4 class="title">Hunting opportunities for business purposes</h4>
                <p>Potentially, you might be able to communicate with  other attendees who can offer you interesting business opportunities.</p>
              </div>
            </div>
            <!--|End Text Box|-->
          </div>

          <div class="col-md-3 col-sm-6">
            <!--|Text Box|-->
            <div class="text-box">
              <span class="fp-icon"><i class="ion-ios-lightbulb"></i></span>
              <div class="fp-desc">
                <h4 class="title">New skills, professional opportunities or business ideas</h4>
                <p>The forum entreprise  environment is conducive to the sharing different types of informations.</p>
              </div>
            </div>
            <!--|End Text Box|-->
          </div>

          <div class="col-md-3 col-sm-6">
            <!--|Text Box|-->
            <div class="text-box">
              <span class="fp-icon"><i class="ion-university"></i></span>
              <div class="fp-desc">
                <h4 class="title">Getting an  internship</h4>
                 <p>The forum entreprise is the ultimate opportunity for hunting internership. Don’t forget to bring your CV.</p>
              </div>
            </div>
            <!--|End Text Box|-->
          </div>

          <div class="col-md-3 col-sm-6">
            <!--|Text Box|-->
            <div class="text-box">
              <span class="fp-icon"><i class="ion-network"></i></span>
              <div class="fp-desc">
                <h4 class="title">Expanding your network , get to know other people in different fields</h4>
                <p>During our forum you’ll meet different experts and colleagues which will expand your network.</p>
              </div>
            </div>
            <!--|End Text Box|-->
          </div>
        </div>

        <div class="row">
          <div class="col-md-3 col-sm-6">
            <!--|Text Box|-->
            <div class="text-box">
              <span class="fp-icon"><i class="ion-erlenmeyer-flask"></i></span>
              <div class="fp-desc">
                <h4 class="title">Hear about the latest research</h4>
                <p>This will provide you with accurate and exact information about how far the science has come and introduce you to new fields.</p>
              </div>
            </div>
            <!--|End Text Box|-->
          </div>

          <div class="col-md-3 col-sm-6">
            <!--|Text Box|-->
            <div class="text-box">
              <span class="fp-icon"><i class="ion-chatbubbles"></i></span>
              <div class="fp-desc">
                <h4 class="title">Improve your communication skills </h4>
                <p>Dealing directly with the CEO and DRH that will be present during our event will be a perfect training for internship and communication skills.</p>
              </div>
            </div>
            <!--|End Text Box|-->
          </div>

          <div class="col-md-3 col-sm-6">
            <!--|Text Box|-->
            <div class="text-box">
              <span class="fp-icon"><i class="ion-thumbsup"></i></span>
              <div class="fp-desc">
                <h4 class="title">Receiving feedback on your work</h4>
                <p>By showing your CV and talking about your projects and achievements, you will get constructive feedback from the very experts in the matter.</p>
              </div>
            </div>
            <!--|End Text Box|-->
          </div>

          <div class="col-md-3 col-sm-6">
            <!--|Text Box|-->
            <div class="text-box">
              <span class="fp-icon"><i class="ion-planet"></i></span>
              <div class="fp-desc">
                <h4 class="title">Get to know the big firms in tunisia </h4>
                <p >Attending the forum will give you a chance to get to know a lot more about the big known firms of the country and also give you the opportunity to discover new ones .</p>
              </div>
            </div>
            <!--|End Text Box|-->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--||End Benefits||-->

  <!--||Packages||-->
  <section id="packages" class="packages section">
    <div class="container">
      <!--|Section Header|-->
      <header class="section-header">
        <div class="row">
          <div class="col-md-6 content-center">
            <h2 class="section-title">
              <span class="fp-meta">Forum</span>
              <span class="title-text">Topic</span>
            </h2>
            <p>Although our forum is addressed to diverse and multidisciplinary profils, we choose every year a topic to discuss. Here’a a look at this year’s choice.</p>
          </div>
        </div>
      </header>
      <!--|End Section Header|-->

      <div class="row">
      <center><h1>Post-Pandemic Economic and Social Recovery</h1>
        <img src="assets/images/topic.jpg" style="max-height:300px;"></center>
      </div>
    </div>
  </section>
  <!--||End Packages||-->

  <!--||Register||-->
  <section id="register" class="register section overlay-black">
    <div class="overlay-inner">
      <div class="container">
        <!--|Section Header|-->
        <header class="section-header">
          <div class="row">
            <div class="col-md-6 content-center">
              <h2 class="section-title">
                <span class="fp-meta">Now</span>
                <span class="title-text">Register</span>
              </h2>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                alteration</p>
            </div>
          </div>
        </header>
        <!--|End Section Header|-->
        <!--|Register Form|-->
        <form class="register-form" method="post" id="register-form" action="index.php">
          <div class="row">
            <div class="col-md-2 col-sm-6">
              <input type="text" required="" placeholder="First Name" id="firstname" name="firstname">
            </div>
            <div class="col-md-2 col-sm-6">
              <input type="text" required="" placeholder="Last Name" id="lastname" name="lastname">
            </div>
            <div class="col-md-2 col-sm-6">
              <input type="email" required="" placeholder="Email" id="email" name="email">
            </div>
            <div class="col-md-2 col-sm-6">
              <input type="text" placeholder="Phone" id="phone" name="phone">
            </div>
            <div class="col-md-2 col-sm-6">
              <select id="option" name="university">
                <option disabled selected value="">University</option>
                <option value="ENSI">ENSI</option>
                <option value="ENSIT">ENSIT</option>
                <option value="ENIT">ENIT</option>
                <option value="EPT">EPT</option>
                <option value="IHEC">IHEC</option>
                <option value="INSAT">INSAT</option>
                <option value="IPEIEM">IPEIEM</option>
                <option value="IPEIT">IPEIT</option>
                <option value="ISG">ISG</option>
                <option value="SUPCOM">SUPCOM</option>
                <option value="Other">Other</option>
              </select>
            </div>
            <div class="col-md-2 col-sm-6">
              <button class="btn btn-block btn-primary" type="submit" name="reg_user">Register</button>
            </div>
          </div>
        </form>
        <!--|End Register Form|-->
      </div>
    </div>
  </section>
  <!--||End Register||-->

  <!--||FAQ||-->
  <section id="faqs" class="section">
    <div class="container">
      <!--|Section Header|-->
      <header class="section-header">
        <div class="row">
          <div class="col-md-6 content-center">
            <h2 class="section-title">
              <span class="fp-meta">Some</span>
              <span class="title-text">FAQ</span>
            </h2>
            <p>Below you'll find answers to the questions we get asked the most about our forum and our school.</p>
          </div>
        </div>
      </header>
      <!--|End Section Header|-->

      <div class="row">
        <div class="col-md-9 content-center">
          <!--|FAQS|-->
          <div class="faq-wrapper" id="faq-panel">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#faq-panel" href="#faqOne">
                    <i class="fa-icon ion-location"></i> How to go to the EPT from the city center?
                  </a>
                </h4>
              </div>
              <div id="faqOne" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>The school is located behind Lycée Cailloux in La Marsa Essaada, after the slope that starts from
                    Lycée Essaada.</p>
                  <p>You can take the TGM to the penultimate station (two stations after Sidi Bou Said), it is located
                    just behind the school. You can also take a shared taxi and take the specified path.</p>
                  <center><img src="assets/images/map.jpg" style="max-width: 50%;" onmouseover="zoom(this,100)"
                      onmouseout="zoom(this,50)"></center>
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#faq-panel" href="#faqTwo">
                    <i class="fa-ico ion-help" style="margin-right:15px"></i>What is the Tunisia Polytechnic School?
                  </a>
                </h4>
              </div>
              <div id="faqTwo" class="panel-collapse collapse">
                <div class="panel-body">
                  <center><img src="assets/images/logo ept.jpg" style="max-width: 50%;" onmouseover="zoom(this,100)"
                      onmouseout="zoom(this,50)"></center>
                  <p>Since its creation in 1994, the Tunisia Polytechnic School has had for simple vocation the
                    gathering of the
                    elite resulting from the national competition for entry to the engineering schools to shape it into
                    a cenacle of scientific leaders in the field.</p>
                  <p>Graduates, as stated in this creative text,
                    are intended to become engineers "of design and projects, who are able to improve technical systems,
                    to follow and master the evolutions of advanced technologies, and to assume positions of high
                    responsibility of scientific, technical character, economic and social, in the private and public
                    sectors ”</p>
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#faq-panel" href="#faqThree">
                    <i class="fa-icon ion-images"></i> What Images, Videos, Code Can I Use in my Items?
                  </a>
                </h4>
              </div>
              <div id="faqThree" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>Enim at asperiores quod velit minima officia accusamus cumque eligendi consequuntur fuga? Maiores,
                    quasi, voluptates, exercitationem fuga voluptatibus a repudiandae expedita omnis molestiae alias
                    repellat perferendis dolores dolor.</p>
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#faq-panel" href="#faqFour">
                    <i class="fa-icon ion-social-usd"></i> How does the Tuts+ Premium affiliate program work?
                  </a>
                </h4>
              </div>
              <div id="faqFour" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo, placeat, architecto rem
                    dolorem dignissimos repellat veritatis in et eos doloribus magnam aliquam ipsa alias assumenda
                    officiis quasi sapiente suscipit veniam odio voluptatum.</p>
                  <p>Enim at asperiores quod velit minima officia accusamus cumque eligendi consequuntur fuga? Maiores,
                    quasi, voluptates, exercitationem fuga voluptatibus a repudiandae expedita omnis molestiae alias
                    repellat perferendis dolores dolor.</p>
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a data-toggle="collapse" data-parent="#faq-panel" href="#faqFive">
                    <i class="fa-icon ion-alert"></i> Can I offer my items for free on a promotional basis?
                  </a>
                </h4>
              </div>
              <div id="faqFive" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae
                    minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore
                    necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex
                    expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</p>
                </div>
              </div>
            </div>
          </div>
          <!--|End FAQS|-->
        </div>
      </div>
    </div>
  </section>
  <!--||End FAQ||-->

  <!--||Gallery||-->
  <section id="gallery" class="section section-bg">
    <div class="container">
      <!--|Section Header|-->
      <header class="section-header">
        <div class="row">
          <div class="col-md-6 content-center">
            <h2 class="section-title">
              <span class="fp-meta">Forum</span>
              <span class="title-text">Gallery</span>
            </h2>
            <p>He is a selection of our favorite moments during the last forums. For each year, we make sure to immortalize this event through pictures and videos. You will later on find pictures of this year’s forum in the gallery below !</p>
          </div>
        </div>
      </header>
      <!--|End Section Header|-->

      <!--|Gallery|-->
      <div class="tz-gallery">

        <div class="row">
          <div class="col-sm-6 col-md-3">
            <a class="lightbox" href="assets/images/forum19/pic10.jpg">
              <img src="assets/images/forum19/pic10.jpg" alt="forum19-1">
            </a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a class="lightbox" href="assets/images/forum19/pic1.jpg">
              <img src="assets/images/forum19/pic1.jpg" alt="forum19-2">
            </a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a class="lightbox" href="assets/images/forum19/pic2.jpg">
              <img src="assets/images/forum19/pic2.jpg" alt="forum19-3">
            </a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a class="lightbox" href="assets/images/forum19/pic3.jpg">
              <img src="assets/images/forum19/pic3.jpg" alt="forum19-4">
            </a>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6 col-md-3">
            <a class="lightbox" href="assets/images/forum19/pic4.jpg">
              <img src="assets/images/forum19/pic4.jpg" alt="Rails">
            </a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a class="lightbox" href="assets/images/forum19/pic5.jpg">
              <img src="assets/images/forum19/pic5.jpg" alt="Traffic">
            </a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a class="lightbox" href="assets/images/forum19/pic6.jpg">
              <img src="assets/images/forum19/pic6.jpg" alt="Rocks">
            </a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a class="lightbox" href="assets/images/forum19/pic7.jpg">
              <img src="assets/images/forum19/pic7.jpg" alt="Benches">
            </a>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6 col-md-3">
            <a class="lightbox" href="assets/images/forum19/pic8.jpg">
              <img src="assets/images/forum19/pic8.jpg" alt="Sky">
            </a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a class="lightbox" href="assets/images/forum19/pic13.jpg">
              <img src="assets/images/forum19/pic13.jpg" alt="Sky">
            </a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a class="lightbox" href="assets/images/forum19/pic11.jpg">
              <img src="assets/images/forum19/pic11.jpg" alt="Sky">
            </a>
          </div>
          <div class="col-sm-6 col-md-3">
            <a class="lightbox" href="assets/images/forum19/pic12.jpg">
              <img src="assets/images/forum19/pic12.jpg" alt="Sky">
            </a>
          </div>
        </div>

        <div id="more-gallery" style="display: none;">

          <div class="row">
            <div class="col-sm-6 col-md-3">
              <a class="lightbox" href="assets/images/forum19/pic14.jpg">
                <img src="assets/images/forum19/pic14.jpg" alt="Park">
              </a>
            </div>
            <div class="col-sm-6 col-md-3">
              <a class="lightbox" href="assets/images/forum19/pic15.jpg">
                <img src="assets/images/forum19/pic15.jpg" alt="Bridge">
              </a>
            </div>
            <div class="col-sm-6 col-md-3">
              <a class="lightbox" href="assets/images/forum19/pic16.jpg">
                <img src="assets/images/forum19/pic16.jpg" alt="Tunnel">
              </a>
            </div>
            <div class="col-sm-6 col-md-3">
              <a class="lightbox" href="assets/images/forum19/pic17.jpg">
                <img src="assets/images/forum19/pic17.jpg" alt="Coast">
              </a>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 col-md-3">
              <a class="lightbox" href="assets/images/forum19/pic18.jpg">
                <img src="assets/images/forum19/pic18.jpg" alt="Park">
              </a>
            </div>
            <div class="col-sm-6 col-md-3">
              <a class="lightbox" href="assets/images/forum19/pic19.jpg">
                <img src="assets/images/forum19/pic19.jpg" alt="Bridge">
              </a>
            </div>
            <div class="col-sm-6 col-md-3">
              <a class="lightbox" href="assets/images/forum19/pic20.jpg">
                <img src="assets/images/forum19/pic20.jpg" alt="Tunnel">
              </a>
            </div>
            <div class="col-sm-6 col-md-3">
              <a class="lightbox" href="assets/images/forum19/pic21.jpg">
                <img src="assets/images/forum19/pic21.jpg" alt="Coast">
              </a>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 col-md-3">
              <a class="lightbox" href="assets/images/forum19/pic22.jpg">
                <img src="assets/images/forum19/pic22.jpg" alt="Park">
              </a>
            </div>
            <div class="col-sm-6 col-md-3">
              <a class="lightbox" href="assets/images/forum19/pic23.jpg">
                <img src="assets/images/forum19/pic23.jpg" alt="Bridge">
              </a>
            </div>
            <div class="col-sm-6 col-md-3">
              <a class="lightbox" href="assets/images/forum19/pic24.jpg">
                <img src="assets/images/forum19/pic24.jpg" alt="Tunnel">
              </a>
            </div>
            <div class="col-sm-6 col-md-3">
              <a class="lightbox" href="assets/images/forum19/pic25.jpg">
                <img src="assets/images/forum19/pic25.jpg" alt="Coast">
              </a>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 col-md-3">
              <a class="lightbox" href="assets/images/forum19/pic26.jpg">
                <img src="assets/images/forum19/pic26.jpg" alt="Park">
              </a>
            </div>
            <div class="col-sm-6 col-md-3">
              <a class="lightbox" href="assets/images/forum19/pic27.jpg">
                <img src="assets/images/forum19/pic27.jpg" alt="Bridge">
              </a>
            </div>
            <div class="col-sm-6 col-md-3">
              <a class="lightbox" href="assets/images/forum19/pic28.jpg">
                <img src="assets/images/forum19/pic28.jpg" alt="Tunnel">
              </a>
            </div>
            <div class="col-sm-6 col-md-3">
              <a class="lightbox" href="assets/images/forum19/pic29.jpg">
                <img src="assets/images/forum19/pic29.jpg" alt="Coast">
              </a>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6 col-md-3">
              <a class="lightbox" href="assets/images/forum19/pic30.jpg">
                <img src="assets/images/forum19/pic30.jpg" alt="Park">
              </a>
            </div>
            <div class="col-sm-6 col-md-3">
              <a class="lightbox" href="assets/images/forum19/pic31.jpg">
                <img src="assets/images/forum19/pic31.jpg" alt="Bridge">
              </a>
            </div>
            <div class="col-sm-6 col-md-3">
              <a class="lightbox" href="assets/images/forum19/pic32.jpg">
                <img src="assets/images/forum19/pic32.jpg" alt="Tunnel">
              </a>
            </div>
            <div class="col-sm-6 col-md-3">
              <a class="lightbox" href="assets/images/forum19/pic33.jpg">
                <img src="assets/images/forum19/pic33.jpg" alt="Coast">
              </a>
            </div>
          </div>

        </div>
      </div>
      <!--|End Gallery|-->
      <!--|Button Panel|-->
      <div class="btn-panel">
        <center><a class="btn btn-primary" onclick="more()" id="btn-more">View More</a></center>
      </div>
      <!--|End Button Panel|-->
    </div>
  </section>
  <!--||End Gallery||-->

  <!--||Blog||-->
  <section id="blog" class="blog-posts section">
    <div class="container">
      <!--|Section Header|-->
      <header class="section-header">
        <div class="row">
          <div class="col-md-6 content-center">
            <h2 class="section-title">
              <span class="fp-meta">Le</span>
              <span class="title-text">Polytechnicien</span>
            </h2>
            <p>LePolytechnicien is the press of the Tunisia Polytechnic School, which is committed to the truth, the
              facts, and the high standards for fair, accurate, ethical and equitable reporting. </p>
          </div>
        </div>
      </header>
      <!--|End Section Header|-->

      <!--|Post Wrapper|-->
      <div class="posts-wrapper">
        <div class="row">
          <div class="col-md-6">
            <!--|Post|-->
            <article class="fp-post">
              <a class="thumb-container" href="https://lepolytechnicien.tn/2020/08/12/new-product-forecasting-in-supply-chain-planning/" target="_blank">
                <img src="assets/images/posts/img1.jpg" alt="">
              </a>
              <div class="post-desc">
                <header class="post-header">
                  <div class="fp-cat post-meta"><a href="https://lepolytechnicien.tn/category/sciences-et-technologie/"
                      target="_blank">Science and Technology</a></div>
                  <h4 class="post-title"><a
                      href="https://lepolytechnicien.tn/2020/08/12/new-product-forecasting-in-supply-chain-planning/"
                      target="_blank">New product Forecastingin supply chain planning</a></h4>
                </header>
                <div class="fp-entry">
                  <p>Retailing is a significant field of research because of its effect on the economy. The retail
                    supply chain is the process [...]</p>
                  <a class="more-btn"
                    href="https://lepolytechnicien.tn/2020/08/12/new-product-forecasting-in-supply-chain-planning/"
                    target="_blank">Read More +</a>
                </div>
              </div>
            </article>
            <!--|End Post|-->
          </div>

          <div class="col-md-6">
            <!--|Post|-->
            <article class="fp-post">
              <a class="thumb-container" href="https://lepolytechnicien.tn/2020/07/29/covid-19-a-shock-doctrine-ground/" target="_blank">
                <img src="assets/images/posts/img2.jpg" alt="">
              </a>
              <div class="post-desc">
                <header class="post-header">
                  <div class="fp-cat post-meta"><a href="https://lepolytechnicien.tn/category/actualite/"
                      target="_blank">News</a> / <a href="https://lepolytechnicien.tn/category/culture/"
                      target="_blank">Culture</a></div>
                  <h4 class="post-title"><a
                      href="https://lepolytechnicien.tn/2020/07/29/covid-19-a-shock-doctrine-ground/"
                      target="_blank">COVID-19: a shock doctrine ground</a></h4>
                </header>
                <div class="fp-entry">
                  <p>The shock doctrine is a theory by Naomi Klein– a Canadian author, social activist, and filmmaker –
                    explaining the way[...]</p>
                  <a class="more-btn" href="https://lepolytechnicien.tn/2020/07/29/covid-19-a-shock-doctrine-ground/"
                    target="_blank">Read More +</a>
                </div>
              </div>
            </article>
            <!--|End Post|-->
          </div>
        </div>

        <div class="row">
          <div class="col-md-6">
            <!--|Post|-->
            <article class="fp-post">
              <a class="thumb-container" href="https://lepolytechnicien.tn/2020/08/05/toxic-masculinity-and-why-you-shouldnt-take-yourself-seriously/" target="_blank">
                <img src="assets/images/posts/img3.jpg" alt="">
              </a>
              <div class="post-desc">
                <header class="post-header">
                  <div class="fp-cat post-meta"><a href="https://lepolytechnicien.tn/category/opinion/"
                      target="_blank">Opinion</a></div>
                  <h4 class="post-title"><a
                      href="https://lepolytechnicien.tn/2020/08/05/toxic-masculinity-and-why-you-shouldnt-take-yourself-seriously/"
                      target="_blank">Toxic masculinity, and why you shouldn’t take yourself seriously</a></h4>
                </header>
                <div class="fp-entry">
                  <p>So the other day I was watching a clip from Joe Rogan’s podcast where he was talking with a guest
                    about Harvey Weinstein[...]</p>
                  <a class="more-btn"
                    href="https://lepolytechnicien.tn/2020/08/05/toxic-masculinity-and-why-you-shouldnt-take-yourself-seriously/"
                    target="_blank">Read More +</a>
                </div>
              </div>
            </article>
            <!--|End Post|-->
          </div>

          <div class="col-md-6">
            <!--|Post|-->
            <article class="fp-post">
              <a class="thumb-container" href="https://lepolytechnicien.tn/2020/05/22/did-nasa-really-discover-a-parallel-universe-where-time-goes-backward/" target="_blank">
                <img src="assets/images/posts/img4.jpg" alt="">
              </a>
              <div class="post-desc">
                <header class="post-header">
                  <div class="fp-cat post-meta"><a href="https://lepolytechnicien.tn/category/actualite/"
                      target="_blank">News</a> / <a href="https://lepolytechnicien.tn/category/sciences-et-technologie/"
                      target="_blank">Science and Technology</a></div>
                  <h4 class="post-title"><a href="https://lepolytechnicien.tn/2020/05/22/did-nasa-really-discover-a-parallel-universe-where-time-goes-backward/" target="_blank">Did NASA really discover a paralleluniverse where
                      time goes backward ?</a></h4>
                </header>
                <div class="fp-entry">
                  <p>Recently, the internet has been flooded with wild stories about NASA discovering a parallel
                    universe to ours in which [...]</p>
                  <a class="more-btn" href="https://lepolytechnicien.tn/2020/05/22/did-nasa-really-discover-a-parallel-universe-where-time-goes-backward/" target="_blank">Read More +</a>
                </div>
              </div>
            </article>
            <!--|End Post|-->
          </div>
        </div>

        <!--|Button Panel|-->
        <div class="btn-panel">
          <a class="btn btn-primary" href="https://lepolytechnicien.tn" target="_blank">View More</a>
        </div>
        <!--|End Button Panel|-->
      </div>
      <!--|End Post Wrapper|-->
    </div>
  </section>
  <!--||End Blog||-->

  <!--||Sponsor||-->
  <section id="sponsor" class="section section-bg">
    <div class="container">
      <!--|Section Header|-->
      <header class="section-header">
        <div class="row">
          <div class="col-md-6 content-center">
            <h2 class="section-title">
              <span class="fp-meta">Forum</span>
              <span class="title-text">Sponsor</span>
            </h2>
            <p>We would like to extend our sincere thanks to our family of sponsors who have played an essential role
              over the years in the success of our forum.</p>
          </div>
        </div>
      </header>
      <!--|End Section Header|-->

      <div class="sponsor-panel">
        <!--|Sponsors|-->
        <center>
          <ul class="sponsors" style="margin-bottom: 30px;">
            <li><a><img src="assets/images/sponsors/logo1.png" alt=""></a></li>
            <li><a><img src="assets/images/sponsors/logo2.png" alt=""></a></li>
            <li><a><img src="assets/images/sponsors/logo3.png" alt=""></a></li>
            <li><a><img src="assets/images/sponsors/logo4.png" alt=""></a></li>
          </ul>
          <ul class="sponsors" style="margin-bottom: 30px;">
            <li><a><img src="assets/images/sponsors/logo5.png" alt=""></a></li>
            <li><a><img src="assets/images/sponsors/logo6.png" alt=""></a></li>
            <li><a><img src="assets/images/sponsors/logo7.png" alt=""></a></li>
            <li><a><img src="assets/images/sponsors/logo8.png" alt=""></a></li>
          </ul>
          <ul class="sponsors" style="margin-bottom: 30px;">
            <li><a><img src="assets/images/sponsors/logo9.png" alt=""></a></li>
            <li><a><img src="assets/images/sponsors/logo10.png" alt=""></a></li>
            <li><a><img src="assets/images/sponsors/logo11.png" alt=""></a></li>
            <li><a><img src="assets/images/sponsors/logo12.png" alt=""></a></li>
          </ul>
          <ul class="sponsors" style="margin-bottom: 30px;">
            <li><a><img src="assets/images/sponsors/logo13.png" alt=""></a></li>
            <li><a><img src="assets/images/sponsors/logo14.png" alt=""></a></li>
            <li><a><img src="assets/images/sponsors/logo15.png" alt=""></a></li>
            <li><a><img src="assets/images/sponsors/logo16.png" alt=""></a></li>
          </ul>
          <ul class="sponsors" style="margin-bottom: 30px;">
            <li><a><img src="assets/images/sponsors/logo17.png" alt=""></a></li>
            <li><a><img src="assets/images/sponsors/logo18.png" alt=""></a></li>
          </ul>
        </center>
        <!--|End Sponsors|-->

        <div class="button-panel text-center">
          <a class="btn btn-primary" href="#">Became A Sponsor</a>
        </div>
      </div>
    </div>
  </section>
  <!--||End Sponsor||-->

  <!--||Google Map||-->
  <div class="map-container">
    <!--||End Google Map||-->
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1587.4253653638712!2d10.335286944535023!3d36.87903163735474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12e2b48f93881a11%3A0x65c08df7a3ef6533!2sTunisia%20Polytechnic%20School!5e1!3m2!1sen!2stn!4v1597708202069!5m2!1sen!2stn"
      width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
      tabindex="0"></iframe>
  </div>
  <!--||Subscribe||-->
  <div class="subscribe">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <!--|Section Header|-->
          <header class="section-header">
            <h2 class="section-title">
              <span class="fp-meta">To Stay Up to Date</span>
              <span class="title-text">Subscribe Now</span>
            </h2>
            <p>Subscribe to our newsletter. We promise, we wont spam!</p>
          </header>
          <!--|End Section Header|-->
        </div>

        <div class="col-md-8">
          <!--|Subscribe Form|-->
          <form class="subscribe-form">
            <p class="subscribe-success" style="color: #008000"></p>
            <p class="subscribe-error" style="color: #ff0000"></p>
            <div class="row">
              <div class="col-md-8"><input type="email" placeholder="Enter your email address" name="EMAIL"></div>
              <div class="col-md-4"><button type="submit" class="submit-btn"><i class="ion-paper-airplane"></i>
                  Subscribe</button></div>
            </div>
          </form>
          <!--|End Subscribe Form|-->
        </div>
      </div>
    </div>
  </div>
  <!--||End Subscribe||-->

  <!--||Footer||-->
  <footer id="footer" class="footer">
    <div class="container">
      <!--|Social Links|-->
      <div class="social-links">
        <a href="#"><i class="ion-social-instagram"></i></a>
        <a href="https://www.facebook.com/ForumEptEntreprises" target="_blank"><i class="ion-social-facebook"></i></a>
        <a href="#"><i class="ion-social-linkedin"></i></a>
        <a href="#"><i class="ion-social-pinterest"></i></a>
      </div>
      <!--|End Social Links|-->

      <!--|Copyright|-->
      <p class="copyright">&copy; 2020 <a href="#">EPT</a> . All Rights Reserved.</p>
      <!--|End Copyright|-->
    </div>
  </footer>
  <!--||Footer||-->

  <!--||Javascript||-->
  <!--|jQuery|-->
  <script src="assets/js/jquery.min.js"></script>
  <!--|Vide|-->
  <script src="assets/js/jquery.vide.js"></script>
  <!--|Countdown|-->
  <script src="assets/js/jquery.countdown.min.js"></script>
  <!--Owl Carousel-->
  <script src="assets/js/owl.carousel.min.js"></script>
  <!--|Google Map|-->
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
  <!--|Fitvids|-->
  <script src="assets/js/jquery.fitvids.js"></script>
  <!--|Validate|-->
  <script src="assets/js/jquery.validate.min.js"></script>
  <!--|Ajaxchimp|-->
  <script src="assets/js/jquery.ajaxchimp.min.js"></script>
  <!--|Bootstrap|-->
  <script src="assets/js/bootstrap.min.js"></script>
  <!--|Init|-->
  <script src="assets/js/init.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
  <script>
    baguetteBox.run('.tz-gallery');
  </script>
</body>

</html>