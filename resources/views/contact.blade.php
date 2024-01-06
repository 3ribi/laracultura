<!DOCTYPE html>
<html lang="en">
  <!-- Basic -->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Site Metas -->
    <title>Contact - Laracultura NGO</title>
    <link rel="shortcut icon" href="images\logo01.png" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- Start header -->
    <header class="top-navbar">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="/">
            <img src="images/logo.png" alt="" />
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbars-rs-food"
            aria-controls="navbars-rs-food"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbars-rs-food">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="members">members</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="about">About</a>
              </li>

              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="dropdown-a"
                  data-toggle="dropdown"
                  >activities</a
                >
                <div class="dropdown-menu" aria-labelledby="dropdown-a">
                  <a class="dropdown-item" href="English-club"
                    >English club</a
                  >
                  <a class="dropdown-item" href="discovery-workshop"
                    >discovery workshop</a
                  >
                  <a class="dropdown-item" href="chnibanlk">chnibanlk</a>
                  <a class="dropdown-item" href="OpenMiCultural"
                    >Open MiCultural</a
                  >
                  <a class="dropdown-item" href="Philo-club">Philo Club</a>
                  <a class="dropdown-item" href="Erasmus+">Erasmus+</a>
                  <a class="dropdown-item" href="ESC">ESC</a>                  
                  <a class="dropdown-item" href="M'zora-Caravan"
                    >M'zora Caravan</a
                  >
                  <a class="dropdown-item" href="Shumis-cinema-festival"
                    >Shumis cinema festival</a
                  >
                  <a class="dropdown-item" href="Tlila-Podcast"
                    >Tlila Podcast</a
                  >
                </div>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="contact">Contact</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="dropdown-a"
                  data-toggle="dropdown"
                  >eng</a
                >
                <div class="dropdown-menu" aria-labelledby="dropdown-a">
                  <a class="dropdown-item" href="ar/index">arabic</a>
                  <a class="dropdown-item" href="fr/index">franch</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- End header -->

    <!-- Start All Pages -->
    <div class="all-page-title page-breadcrumb">
      <div class="container text-center">
        <div class="row">
          <div class="col-lg-12">
            <h1>Contact Us</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- End All Pages -->

    <!-- Start Contact -->
    <div class="full">

    <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d342.71000024324!2d-6.15266770990839!3d35.1958605121156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd0bcf2ab8e99da7%3A0x4a2ed27c15a15ef0!2sLarache!5e0!3m2!1sen!2sma!4v1701738976789!5m2!1sen!2sma" frameborder="0" style="min-height: 350px; border: 1px solid #00000078;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>    <div class="contact-box">
     </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="heading-title text-center">
              <h2>Contact</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form
              action="{{ route('activity.store') }}"
              method="POST"
            >                    @csrf

              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input
                      type="name"
                      class="form-control"
                      id="name"
                      name="name"
                      placeholder="Your Name"
                      required
                      data-error="Please enter your name"
                    /><div class="help-block with-errors">
                    @error('name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <input
                      type="email"
                      placeholder="Your Email"
                      id="email"
                      class="form-control"
                      name="email"
                      required
                      data-error="Please enter your email"
                    />

                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input
                      type="name"
                      placeholder="Subject"
                      id="name"
                      class="form-control"
                      name="subject"
                      required
                      data-error="your subject"
                    />

                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea
                      class="form-control"
                      id="message"
                      name="message"
                      placeholder="Your Message"
                      rows="4"
                      data-error="Write your message"
                      required
                    ></textarea>
                    <div class="help-block with-errors"></div>
                  </div>


                  <div class="submit-button text-center">
                    <input class="btn btn-common" id="submit"  type="submit">
                  </input>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Contact -->
    <!-- Start Contact info -->
    <div class="contact-imfo-box">
      <div class="container">
        <div class="row">
          <div class="col-md-4 arrow-right">
            <i class="fa fa-volume-control-phone"></i>
            <div class="overflow-hidden">
              <h4>Phone</h4>
              <p class="lead">+212–600 168 819</p>
            </div>
          </div>
          <div class="col-md-4 arrow-right">
            <i class="fa fa-envelope"></i>
            <div class="overflow-hidden">
              <h4>Email</h4>
              <p class="lead">contact@laracultura.com</p>
            </div>
          </div>
          <div class="col-md-4">
            <i class="fa fa-map-marker"></i>
            <div class="overflow-hidden">
              <h4>Location</h4>
              <p class="lead">Larache, Morocco</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Contact info -->

    <!-- Start Footer -->
    <footer class="footer-area bg-f">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <h3>About Us</h3>
            <p>
              LaraCultura is a Moroccan NGO dedicated to empowering young people
              and fostering cultural exchange through non-formal educational and
              artistic programs
            </p>
          </div>
          <div class="col-lg-3 col-md-6">
            <h3>Our Socials</h3>

            <ul class="list-inline f-social">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/LaraCultura.community"
                  ><i class="fa fa-facebook" aria-hidden="true"></i
                ></a>
              </li>

              <li class="list-inline-item">
                <a href="mailto:contact@laracultura.com"
                  ><i class="fa fa-google" aria-hidden="true"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.instagram.com/laracultura_ngo/"
                  ><i class="fa fa-instagram" aria-hidden="true"></i
                ></a>
              </li>
              <li class="list-inline-item">
                <a href="https://wa.me/+212600168819"
                  ><i class="fa fa-volume-control-phone" aria-hidden="true"></i
                ></a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-6">
            <h3>Contact information</h3>
            <p class="lead">Larache, Morocco</p>
            <p class="lead">
              <a href="https://wa.me/+212600168819">+212–600 168 819</a>
            </p>
            <p>
              <a href="mailto:contact@laracultura.com">
                contact@laracultura.com</a
              >
            </p>
          </div>
          <div class="col-lg-3 col-md-6">
            <h3>working hours</h3>
            <p><span class="text-color">24/24h 7/7</span></p>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none"
      ><i class="fa fa-paper-plane-o" aria-hidden="true"></i
    ></a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->

    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/jquery.mapify.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
   
  </body>
</html>
