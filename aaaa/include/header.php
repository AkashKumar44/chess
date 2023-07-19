<!DOCTYPE html>
<html class="no-js">
  <head>
    <title>Chess</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/font-awesome5.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/main.css" class="color-switcher-link">
    <!-- <link rel="stylesheet" href="css/shop.css" class="color-switcher-link"> -->
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
        <!-- template sections -->
        <!--topline section visible only on small screens|-->
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
                  <!-- <li><div class="dropdown"><a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i></a><div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton"><div class="widget widget_search"><form role="search" method="get" class="search-form" action="https://html.modernwebtemplates.com/"><label for="search-form-top2"><span class="screen-reader-text">Search for:</span></label><input type="search" id="search-form-top2" class="search-field" placeholder="Search keyword" value="" name="search"><button type="submit" class="search-submit"><span class="screen-reader-text">Search</span></button></form></div></div></div></li> -->
                </ul>
              </div>
              <div class="col-6 text-right">
                <a href="#" class="btn btn-outline-maincolor">donate</a>
              </div>
            </div>
          </div>
        </section>
        <div class="header_absolute ">
          <!-- header with two Bootstrap columns - left for logo and right for navigation -->
          <header class="page_header ds ms bg-transparent justify-nav-center s-overlay s-py-10 ">
            <div class="container">
              <div class="row align-items-center">
                <div class="col-xl-2 col-lg-3 col-md-7 col-8">
                  <a href="index.php" class="logo">
                    <!-- <h4 class="text-white">Che <span class="text-warning">s</span>s </h4> -->
                    <img class="img-fluid" src="img/logo02.png" alt="logo">
                  </a>
                </div>
                <div class="col-xl-10 col-lg-9 col-md-5 col-1">
                  <div class="nav-wrap">
                    <!-- main nav start -->
                    <nav class="top-nav justify-nav-center">
                      <ul class="nav sf-menu">
                        <li>
                          <a href="index.php">Home</a>
                        </li>
                        <li>
                          <a href="about.html">About</a>
                        </li>
                        <li>
                          <a href="gallery.html">Gallery</a>
                        </li>
                        <li>
                          <a href=".html">Services</a>
                        </li>
                        <li>
                          <a href="contact.html">Contact</a>
                        </li>
                        <!-- <li><a href="#">Features</a><div class="mega-menu"><ul class="mega-menu-row"><li class="mega-menu-col"><a href="#">Headers</a><ul><li><a href="header1.html">Header Type 1</a></li><li><a href="header2.html">Header Type 2</a></li><li><a href="header3.html">Header Type 3</a></li><li><a href="header4.html">Header Type 4</a></li><li><a href="header5.html">Header Type 5</a></li><li><a href="header6.html">Header Type 6</a></li></ul></li><li class="mega-menu-col"><a href="#">Side Menus</a><ul><li><a href="header-side.html">Push Left</a></li><li><a href="header-side-right.html">Push Right</a></li><li><a href="header-side-slide.html">Slide Left</a></li><li><a href="header-side-slide-right.html">Slide Right</a></li><li><a href="header-side-sticked.html">Sticked Left</a></li><li><a href="header-side-sticked-right.html">Sticked Right</a></li></ul></li><li class="mega-menu-col"><a href="title1.html">Title Sections</a><ul><li><a href="title1.html">Title section 1</a></li><li><a href="title2.html">Title section 2</a></li><li><a href="title3.html">Title section 3</a></li><li><a href="title4.html">Title section 4</a></li><li><a href="title5.html">Title section 5</a></li><li><a href="title6.html">Title section 6</a></li></ul></li><li class="mega-menu-col"><a href="footer1.html#footer">Footers</a><ul><li><a href="footer1.html#footer">Footer Type 1</a></li><li><a href="footer2.html#footer">Footer Type 2</a></li><li><a href="footer3.html#footer">Footer Type 3</a></li><li><a href="footer4.html#footer">Footer Type 4</a></li><li><a href="footer5.html#footer">Footer Type 5</a></li><li><a href="footer6.html#footer">Footer Type 6</a></li></ul></li><li class="mega-menu-col"><a href="copyright1.html#copyright">Copyright</a><ul><li><a href="copyright1.html#copyright">Copyright 1</a></li><li><a href="copyright2.html#copyright">Copyright 2</a></li><li><a href="copyright3.html#copyright">Copyright 3</a></li><li><a href="copyright4.html#copyright">Copyright 4</a></li><li><a href="copyright5.html#copyright">Copyright 5</a></li><li><a href="copyright6.html#copyright">Copyright 6</a></li></ul></li></ul></div></li> -->
                        <!-- eof features -->
                        <!-- blog -->
                        <!-- <li><a href="blog-right.html">Blog</a><ul><li><a href="blog-right.html">Right Sidebar</a></li><li><a href="blog-left.html">Left Sidebar</a></li><li><a href="blog-full.html">No Sidebar</a></li><li><a href="blog-single-right.html">Post</a><ul><li><a href="blog-single-right.html">Right Sidebar</a></li><li><a href="blog-single-left.html">Left Sidebar</a></li><li><a href="blog-single-full.html">No Sidebar</a></li></ul></li></ul></li> -->
                        <!-- eof blog -->
                        <!-- shop -->
                        <!-- <li><a href="shop-right.html">Shop</a><ul><li><a href="shop-account-dashboard.html">Account</a><ul><li><a href="shop-account-details.html">Account details</a></li><li><a href="shop-account-addresses.html">Addresses</a></li><li><a href="shop-account-address-edit.html">Edit Address</a></li><li><a href="shop-account-orders.html">Orders</a></li><li><a href="shop-account-order-single.html">Single Order</a></li><li><a href="shop-account-downloads.html">Downloads</a></li><li><a href="shop-account-password-reset.html">Password Reset</a></li><li><a href="shop-account-login.html">Login/Logout</a></li></ul></li><li><a href="shop-right.html">Right Sidebar</a></li><li><a href="shop-left.html">Left Sidebar</a></li><li><a href="shop-product-right.html">Product Right Sidebar</a></li><li><a href="shop-product-left.html">Product Left Sidebar</a></li><li><a href="shop-cart.html">Cart</a></li><li><a href="shop-checkout.html">Checkout</a></li><li><a href="shop-order-received.html">Order Received</a></li></ul></li> -->
                        <!-- eof shop -->
                        <!-- contacts -->
                        <!-- <li><a href="contact.html">Contact</a><ul><li><a href="contact.html">Contact 1</a></li><li><a href="contact2.html">Contact 2</a></li><li><a href="contact3.html">Contact 3</a></li><li><a href="contact4.html">Contact 4</a></li></ul></li> -->
                        <!-- eof contacts -->
                      </ul>
                    </nav>
                    <!-- eof main nav -->
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
                      <!-- <li><div class="dropdown"><a href="#" class="dropdown-toggle" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i></a><div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2"><div class="widget widget_search"><form role="search" method="get" class="search-form" action="https://html.modernwebtemplates.com/"><label for="search-form-top"><span class="screen-reader-text">Search for:</span></label><input type="search" id="search-form-top" class="search-field" placeholder="Search keyword" value="" name="search"><button type="submit" class="search-submit"><span class="screen-reader-text">Search</span></button></form></div></div></div></li> -->
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