<!DOCTYPE html>
<html class="no-js">
  <head>
    <title>Chess</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/font-awesome5.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/main.css" class="color-switcher-link">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
  </head>
  <body>
    <div class="preloader">
      <div class="preloader_image"></div>
    </div>
    <!-- search modal -->

    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
      <div class="widget widget_search">
        <form method="get" class="searchform search-form" action="https://html.modernwebtemplates.com/">
          <div class="form-group">
            <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input2">
          </div>
          <button type="submit" class="btn">Search</button>
        </form>
      </div>
    </div>
    <!-- Login Modal -->
    <div class="modal fade" id="login-form" tabindex="-1" role="dialog" aria-labelledby="login-form" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-lg modal-sm" role="document">
        <div class="modal-content cs container-px-0">
          <div class="container ">
            <div class="row align-items-center c-gutter-0">
              <div class="col-lg-6 d-none d-lg-block">
                <img src="images/gallery/full/05.jpg" alt="">
              </div>
              <div class="col-lg-6">
                <div class="form-wrapper p-lg-40 p-20">
                  <form class="contact-form" method="post" action="https://html.modernwebtemplates.com/">
                    <div class="row c-mb-20">
                      <div class="col-12 form-title  text-center">
                        <h5>Login Form</h5>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group has-placeholder">
                          <label for="name3334">Your Login <span class="required">*</span>
                          </label>
                          <input type="text" aria-required="true" size="30" value="" name="name" id="name3334" class="form-control" placeholder="Your Login">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group has-placeholder">
                          <label for="pass12111">Your Password <span class="required">*</span>
                          </label>
                          <input type="password" id="pass12111" class="form-control" name="pass" aria-required="true" placeholder="Your Password">
                        </div>
                      </div>
                      <div class="col-sm-12 mt-lg-40 mt-15 mb-0 text-center">
                        <div class="form-group">
                          <input class="btn btn-maincolor" type="submit" value="Login">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact Us Modal -->
    <div class="modal fade" id="contact-form" tabindex="-1" role="dialog" aria-labelledby="contact-form" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-xl modal-lg modal-sm" role="document">
        <div class="modal-content cs container-px-0">
          <div class="container ">
            <div class="row align-items-center c-gutter-0">
              <div class="col-lg-6 d-none d-lg-block">
                <img src="images/gallery/full/06.jpg" alt="">
              </div>
              <div class="col-lg-6">
                <div class="form-wrapper p-lg-40 p-20">
                  <form class="contact-form content-center" method="post" action="https://html.modernwebtemplates.com/">
                    <div class="row c-mb-20">
                      <div class="col-12 form-title  text-center">
                        <h5>Contact Form</h5>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group has-placeholder">
                          <label for="name33232">Your Name <span class="required">*</span>
                          </label>
                          <input type="text" aria-required="true" size="30" value="" name="name" id="name33232" class="form-control" placeholder="Your Name">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group has-placeholder">
                          <label for="phone22">Phone Number <span class="required">*</span>
                          </label>
                          <input type="tel" id="phone22" class="form-control" pattern="^[0-9-+\s()]*$" name="phone" aria-required="true" placeholder="Phone Number">
                        </div>
                      </div>
                      <div class="col-sm-12 ">
                        <div class="form-group has-placeholder">
                          <label for="message3333">Message</label>
                          <textarea aria-required="true" rows="2" cols="45" name="message" id="message3333" class="form-control" placeholder="Comment"></textarea>
                        </div>
                      </div>
                      <div class="col-sm-12 mt-lg-40 mt-15 mb-0 text-center">
                        <div class="form-group">
                          <input class="btn btn-maincolor" type="submit" value="Contact us">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- wrappers for visual page editor and boxed version of template -->

    <div id="canvas">
      <div id="box_wrapper">
        <section class="page_topline c-gutter-0 s-py-15 s-borderbottom  d-xl-none">
          <div class="container-fluid">
            <div class="row align-items-center">
              <div class="col-6 text-left">
                <ul class="top-includes">
                  <li>
                    <a class="login-form-btn" href="#" data-toggle="modal" data-target="#login-form">
                      <i class="far fa-user"></i>
                    </a>
                  </li>
                  <li>
                    <a class="contact-form-btn" href="#" data-toggle="modal" data-target="#contact-form">
                      <i class="far fa-envelope"></i>
                    </a>
                  </li>
                    </ul>
              </div>
              <div class="col-6 text-right">
                <a href="#" class="btn btn-outline-maincolor">donate</a>
              </div>
            </div>
          </div>
        </section>
        <div class="header_absolute ">
          <header class="page_header ds ms bg-transparent justify-nav-center s-overlay s-py-10 " style="background-color: #fbfbfba6 !important;">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-xl-2 col-lg-3 col-md-7 col-8">
                  <a href="index.php" class="logo">
                    <img class="img-fluid" src="img/logo02.png" alt="logo">
                  </a>
                </div>
                <div class="col-xl-10 col-lg-9 col-md-5 col-1">
                  <div class="nav-wrap">
                    <nav class="top-nav justify-nav-center">
                      <ul class="nav sf-menu">
                        <li>
                          <a href="index.php">Home</a>
                        </li>
                        <li>
                          <a href="about.php">About</a>
                        </li>
                        <li>
                          <a href="gallery.php">Gallery</a>
                        </li>
                        <li>
                          <a href=".html">Services</a>
                        </li>
                        <li>
                          <a href="contact.php">Contact</a>
                        </li>
                      </ul>
                    </nav>
                    <span class=" text-left text-md-right d-none d-xl-block">
                      <a href="#" class="btn btn-outline-maincolor">donate</a>
                    </span>
                    <ul class="top-includes d-none d-xl-block text-right">
                      <li>
                        <a class="login-form-btn" href="#" data-toggle="modal" data-target="#login-form">
                          <i class="far fa-user"></i>
                        </a>
                      </li>
                      <li>
                        <a class="contact-form-btn" href="#" data-toggle="modal" data-target="#contact-form">
                          <i class="far fa-envelope"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- header toggler -->
            
            <span class="toggle_menu">
              <span></span>
            </span>
          </header>
        </div>