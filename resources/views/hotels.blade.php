<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8" />
   <title>Hotelier</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />

   <!--Template style -->
   <!--Fav icon-->
   <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
   <!-- datepikar plugin -->
   <link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
   <!--animate css-->
   <link rel="stylesheet" type="text/css" href="css/animate.min.css" />
   <!--bootstrap css-->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
   <!--fonts css-->
   <link rel="stylesheet" type="text/css" href="css/fonts.css" />
   <!--font-awesome css-->
   <link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
   <!-- carousal css -->
   <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
   <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
   <!-- custom css-->
   <link rel="stylesheet" type="text/css" href="css/style.css" />
   <link rel="stylesheet" type="text/css" href="css/responsive.css" />
   <!--favicon-->
</head>

<body>
   <!-- return-to-top start-->
   <a href="javascript:" id="return-to-top"><i class="fas fa-sort-up"></i></a>
   <!-- return-to-top-end -->
   <!-- HEADER START-->
   <div class="main_wrapper sign-up-header">
      <div class="top-menu ">
          <div class="container">
              <div class="row align-items-center">
                  <div class="col-lg-5 col-md-5 col-sm-5 col-7">
                      <div class="sub-top-menu">
                          <ul class="u-list">
                              <li
                                  class="dropdown-toggle p-rel d-none d-xs-none d-sm-none d-md-none d-lg-block d-xl-block ">
                                  <a href="javascript:;"><i class="fas fa-dollar-sign"></i> &nbsp;usd</a>
                                  <ul class="top-dropdown">
                                      <li><a href="">usd</a></li>
                                      <li><a href="">uro</a></li>
                                      <li><a href="">inr</a></li>
                                  </ul>

                              </li>
                              <li
                                  class="dropdown-toggle p-rel d-none d-xs-none d-sm-none d-md-none d-lg-block d-xl-block">
                                  <a href="javascript:;"><i class="fas fa-globe"></i> &nbsp;eng</a>
                                  <ul class="top-dropdown">
                                      <li><a href="">Hindi</a></li>
                                      <li><a href="">tamil</a></li>
                                      <li><a href="">telgu</a></li>
                                  </ul>
                              </li>
                              <li class="n-border">
                                      <span>km</span>
                                      <input type="checkbox" hidden="hidden" id="username">
                                      <label class="switch" for="username"></label>
                                      <span>mile</span>
                                  
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-7 col-md-7 col-sm-7 col-5">
                      <div class="sub-top-menu s-menu">
                          <ul class="u-list">
                              <li>
                                  <ul class="social-icon">
                                      <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                                      <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                                      <li><a href="javascript:;"><i class="fab fa-linkedin-in"></i></a></li>
                                      <li><a href="javascript:;"><i class="fab fa-instagram"></i></a></li>
                                  </ul>
                              </li>
                              <li class="n-disp"><a href="javascript:;"><i class="fas fa-phone-alt"></i> &nbsp;+1808
                                      111 9999</a></li>
                              <li class="n-border res-pd"><a href="signup.html">SING In</a>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="main_menu_wrapper header-color">
          <!-- main_menu_navbar start -->
          <div class="main_menu_navbar ">
              <div class="container">
                  <div class="row align-items-center">
                      <div class="col-xl-4 col-lg-2 col-6">
                          <!-- Brand/logo -->
                          <a class="navbar-brand" href="index-01.html">
                              <img src="images/f-logo-.png" alt="">
                          </a>
                      </div>
                      <div class="col-xl-3 col-lg-2 col-6 d-block d-lg-none">
                          <div class="navbar-toggler" data-toggle="collapse" role="term"
                              data-target="#sidebar" aria-controls="sidebar" aria-expanded="false"
                              aria-label="Toggle navigation">
                              <!--just add these span here-->
                              <!-- <i class="fas fa-bars"></i> -->
                              <ul class="toggle-main-wrapper ">
                                  <li></li>
                                  <li></li>
                                  <li></li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-xl-8 col-lg-10 d-none d-xs-none d-sm-none d-md-none d-lg-block d-xl-block">
                          <nav class="navbar navbar-expand-sm  d-block">
                              <ul class="navbar-nav ">
                                  <li class="nav-item p-rel  wrap-nav-item">
                                      <a href="javascript:;" class="nav-link">
                                          Home
                                          <i class="fas fa-caret-down"></i>
                                      </a>
                                      <ul class="dropdown-items">
                                          <li><a href="index-01.html">Home 01</a></li>
                                          <li><a href="index-02.html">Home 02</a></li>
                                         
                                      </ul>
                                  </li>
                                  <li class="nav-item p-rel  wrap-nav-item">
                                      <a href="javascript:;" class="nav-link">
                                          hotel
                                          <i class="fas fa-caret-down"></i>
                                      </a>
                                      <ul class="dropdown-items">
                                          <li class="p-rel"><a href="javascript:;">Hotel Listing </a>
                                              <ul class="sub-dropdown dropdown-items">
                                                  <li><a href="listing-grid-left.html">Hotel Left Grid View</a></li>
                                                  <li><a href="listing-grid-right.html">Hotel Right Grid View</a></li>
                                                  <li><a href="grid-map-view.html">Hotel Map View</a></li>

                                              </ul>
                                          </li>
                                          <li><a href="hotel-single-page.html">Hotel Single Page</a></li>
                                          <li><a href="404-style.html">404 Error</a></li>

                                      </ul>
                                  </li>
                                  <li class="nav-item p-rel  wrap-nav-item">
                                      <a href="javascript:;" class="nav-link">
                                          shortcode
                                          <i class="fas fa-caret-down"></i>
                                      </a>
                                      <ul class="dropdown-items mega-menu">
                                          <li class="shortcode-menu">
                                              <ul>
                                                  <li><a href="accordion.html">Accordion</a></li>
                                                  <li><a href="blog.html">Blog</a></li>
                                                  <li><a href="client.html">Client</a></li>
                                                  <li><a href="counter.html">Counter</a></li>
                                                  <li><a href="element.html">Element</a></li>
                                              </ul>
                                          </li>
                                          <li class="shortcode-menu">
                                              <ul>
                                                  <li><a href="feature_with_icon.html">Feature with icon</a></li>
                                                  <li><a href="feature_with_images.html">Feature with images</a></li>
                                                  <li><a href="footer.html">Footer</a></li>
                                                  <li><a href="form.html">Form</a></li>
                                                  <li><a href="heading.html">Heading</a></li>
                                              </ul>
                                          </li>
                                          <li class="shortcode-menu">
                                              <ul>
                                                  <li><a href="image_box.html">Image Box</a></li>
                                                  <li><a href="icon.html">Icon</a></li>
                                                  <li><a href="page-header.html">Page Header</a></li>
                                                  <li><a href="portfolio.html">Portfolio</a></li>
                                                  <li><a href="pricing-table.html">Pricing Table</a></li>
                                              </ul>
                                          </li>
                                          <li class="shortcode-menu">
                                              <ul>
                                                  <li><a href="progress-skills.html">Progress Skill</a></li>
                                                  <li><a href="tab.html">Tab</a></li>
                                                  <li><a href="team.html">Team</a></li>
                                                  <li><a href="testimonials.html">testimonials</a></li>
                                                 
                                              </ul>
                                          </li>
                                      </ul>
                                  </li>
                                  <li class="nav-item p-rel  wrap-nav-item">
                                      <a href="javascript:;" class="nav-link">
                                          blog
                                          <i class="fas fa-caret-down"></i>
                                      </a>
                                      <ul class="dropdown-items">
                                          <li class="p-rel"><a href="javascript:;">Blog Single</a>
                                              <ul class="sub-dropdown dropdown-items">
                                                  <li><a href="blog-left-singal.html">Single Left Sidebar</a></li>
                                                  <li><a href="blog-right-single.html">Single Right Sidebar</a></li>
                                              </ul>
                                          </li>
                                          <li class="p-rel"><a href="javascript:;">Blog Categories </a>
                                              <ul class="sub-dropdown dropdown-items">
                                                  <li><a href="blog-left-singal.html">Blog Left Sidebar</a></li>
                                                  <li><a href="blog-right-single.html">Blog Right Sidebar</a></li>
                                              </ul>
                                          </li>
                                         

                                      </ul>
                                  </li>
                                  <li class="nav-item  wrap-nav-item">
                                      <a href="contact-form.html" class="nav-link">
                                          contact
                                      </a>
                                  </li>
                                  <li class="nav-item p-rel wrap-nav-item">
                                      <a href="javascript:;" class="nav-link">
                                          <i class="fas fa-search"></i>
                                      </a>
                                      <div class="search-box dropdown-items">
                                          <input type="text"  placeholder="Search text">
                                          <i class="fas fa-search"></i>
                                      </div>
                                  </li>
                                  <!-- <li class="nav-item wrap-nav-item">
                                      <a href="javascript:;" class="nav-link">
                                          <i class="fas fa-shopping-bag"></i>
                                      </a>
                                  </li> -->

                                  <li class="nav-item">
                                      <a href="add-hotel.html" class="btn btn-primary">Add Hotel</a>
                                  </li>
                              </ul>
                          </nav>

                      </div>
                  </div>
              </div>
          </div>
      </div>

  <!-- mobile_menu_main start -->

  <!-- mobile_menu_main end -->

  <!-- sidebar start -->
  <div id="sidebar">
      <div class="sidebar_logo">
          <a href="index-01.html"><img src="images/logo.png" alt=""></a>
      </div>
      <div id='cssmenu'>
          <div class="input-group ms-3">
              <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
              <input type="text" class="form-control" placeholder="search here..." aria-label="Username"
                  aria-describedby="basic-addon1">
          </div>
          <ul>
              <li class='has-sub'><a href="index.html">Home</a>
                  <ul>
                      <li><a href="index-01.html">Home 01</a></li>
                      <li><a href="index-02.html">Home 02</a></li>
                    
                  </ul>
              </li>
              <li class='has-sub'><a href="javascript:;">Hotel</a>
                  <ul>
                      <li class='has-sub'><a href="#" class="sub-icon">Hotel Listing</a>
                          <ul class="m-sub-dropdown">
                              <li><a href="listing-grid-left.html">Hotel Left Grid View </a>
                              </li>
                              <li><a href="listing-grid-right.html">Hotel right Grid View </a>
                              </li>
                              <li><a href="grid-map-view.html">Hotel Map View</a>
                              </li>
                          </ul>
                      </li>
                      <li><a href="hotel-single-page.html">Hotel Single Page</a>
                      </li>
                      <li><a href="404-style.html">404</a>
                      </li>
  
                  </ul>
              </li>
              <li class='has-sub'><a href="javascript:;">Shortcode</a>
                  <ul>
                      <li><a href="accordion.html">Accordion</a></li>
                      <li><a href="blog.html">Blog</a></li>
                      <li><a href="client.html">Client</a></li>
                      <li><a href="counter.html">Counter</a></li>
                      <li><a href="element.html">Element</a></li>
                      <li><a href="feature_with_icon.html">Feature with icon</a></li>
                      <li><a href="feature_with_images.html">Feature with images</a></li>
                      <li><a href="footer.html">Footer</a></li>
                      <li><a href="form.html">Form</a></li>
                      <li><a href="heading.html">Heading</a></li>
                      <li><a href="image_box.html">Image Box</a></li>
                      <li><a href="icon.html">Icon</a></li>
                      <li><a href="page-header.html">Page Header</a></li>
                      <li><a href="portfolio.html">Portfolio</a></li>
                      <li><a href="pricing-table.html">Pricing Table</a></li>
                      <li><a href="progress-skills.html">Progress Bar</a></li>
                      <li><a href="tab.html">Tab</a></li>
                      <li><a href="team.html">Team</a></li>
                      <li><a href="testimonials.html">testimonials</a></li>
                      

                  </ul>
              </li>
              <li class='has-sub'><a href="javascript:;">Blog</a>
                  <ul>
                      <li class='has-sub'><a href="#" class="sub-icon">Blog Single</a>
                          <ul class="m-sub-dropdown">
                              <li><a href="blog-left-singal.html">Single Left Sidebar</a>
                              </li>
                              <li><a href="blog-right-single.html">Single Right Sidebar</a>
                              </li>
                            
                          </ul>
                      </li>
                      <li class='has-sub'><a href="#" class="sub-icon">Blog Categories</a>
                          <ul class="m-sub-dropdown">
                              <li><a href="blog-categories-left.html">Blog Left Sidebar</a>
                              </li>
                              <li><a href="blog-categories-right.html">Blog Right Sidebar</a>
                              </li>
                            
                          </ul>
                      </li>
                  </ul>
              </li>
              <li><a href="contact-form.html">Contact</a></li>
              <li class="m-social-icons">
                  <span><i class="fab fa-facebook-f"></i></span>
                  <span><i class="fab fa-twitter"></i></span>
                  <span><i class="fab fa-linkedin-in"></i></span>
                  <span><i class="fab fa-instagram"></i></span>
              </li>
          </ul>

      </div>
  </div>
</div>
   <!-- sidebar end -->
   <!--HEADER END-->
   <!-- sign up banner start-->
   <div class="s-banner-wrapper">
      <div class="container">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
               <div class="s-heading-section">
                  <h2><a href="javascript:;">Hotel Listing Grid View</a></h2>
                  <ul>
                     <li><a href="index-01.html">Home</a></li>
                     <li><a href="javascript:;"><i class="fas fa-chevron-right"></i></a></li>
                     <li><a href="javascript:;">Categories View</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- grid section start -->
   <div class="sb-grid-main-wrapper">
      <div class="container">
         <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-12">
               '
               <div class="find-us-wrapper">
                  <h4><a href="javascript:;">find Us</a></h4>
                  <ul>
                     <li>
                        <input type="text" placeholder="Your Destination?">
                        <svg version="1.2" baseProfile="tiny-ps" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 22 22"
                           width="22" height="22">
                           <title>Icon</title>
                           <style>
                              tspan {
                                 white-space: pre
                              }

                              .shp0 {
                                 fill: #1b72ea
                              }
                           </style>
                           <path id="Icon2" class="shp0"
                              d="M11.5 13.59C12.65 13.59 13.59 12.65 13.59 11.5C13.59 10.34 12.65 9.4 11.5 9.4C10.34 9.4 9.41 10.34 9.41 11.5C9.41 12.65 10.34 13.59 11.5 13.59ZM11.5 10.23C12.2 10.23 12.77 10.8 12.77 11.5C12.77 12.2 12.2 12.76 11.5 12.76C10.8 12.76 10.23 12.2 10.23 11.5C10.23 10.8 10.8 10.23 11.5 10.23ZM20.59 11.08L18.94 11.08C18.74 7.3 15.7 4.26 11.91 4.05L11.91 2.41C11.91 2.18 11.73 2 11.5 2C11.27 2 11.09 2.18 11.09 2.41L11.09 4.46C11.09 4.68 11.27 4.87 11.5 4.87C15.15 4.87 18.13 7.84 18.13 11.5C18.13 15.15 15.15 18.13 11.5 18.13C7.84 18.13 4.87 15.15 4.87 11.5C4.87 8.96 6.35 6.61 8.64 5.51C8.85 5.42 8.94 5.17 8.84 4.96C8.74 4.76 8.49 4.67 8.28 4.77C7.03 5.37 5.97 6.3 5.22 7.47C4.53 8.55 4.13 9.8 4.06 11.08L2.41 11.08C2.19 11.08 2 11.27 2 11.5C2 11.73 2.19 11.91 2.41 11.91L4.05 11.91C4.26 15.7 7.3 18.74 11.09 18.94L11.09 20.58C11.09 20.81 11.27 21 11.5 21C11.73 21 11.91 20.81 11.91 20.58L11.91 18.94C15.7 18.74 18.74 15.7 18.94 11.91L20.59 11.91C20.81 11.91 21 11.73 21 11.5C21 11.27 20.81 11.08 20.59 11.08Z" />
                        </svg>
                     </li>
                     <li>
                        <input type="text"  class="datepicker" placeholder="09-04-2020">
                        <svg version="1.2" baseProfile="tiny-ps" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 20"
                           width="19" height="20">
                           <title>Icon </title>
                           <style>
                              tspan {
                                 white-space: pre
                              }

                              .shp0 {
                                 fill: #1b72ea
                              }
                           </style>
                           <path id="Icon1" class="shp0"
                              d="M17.94 5.32C17.83 4.78 17.57 4.3 17.2 3.93C17.08 3.82 16.95 3.7 16.8 3.61L16.78 3.59C16.77 3.57 16.75 3.57 16.73 3.56C16.67 3.52 16.62 3.48 16.56 3.46L16.54 3.46C16.15 3.26 15.72 3.15 15.23 3.15L14.07 3.15L14.07 2.35C14.07 2.17 13.93 2 13.72 2C13.53 2 13.36 2.15 13.36 2.35L13.36 3.11L6.65 3.11L6.65 2.35C6.65 2.17 6.49 2 6.3 2C6.11 2 5.94 2.15 5.94 2.35L5.94 3.11L4.78 3.11C4.43 3.11 4.07 3.18 3.76 3.31C3.4 3.46 3.08 3.67 2.82 3.93C2.67 4.08 2.54 4.24 2.43 4.41C2.32 4.59 2.22 4.78 2.15 4.98C2.11 5.09 2.07 5.21 2.06 5.32C2.02 5.5 2 5.69 2 5.87L2 7.73L2 16.27C2 17.03 2.32 17.72 2.8 18.2C3.31 18.7 4 19 4.75 19L15.25 19C16.02 19 16.71 18.68 17.2 18.2C17.7 17.7 18 17.01 18 16.27L18 7.73L18 5.87C18 5.69 17.98 5.5 17.94 5.32ZM2.73 5.85C2.73 5.71 2.75 5.58 2.77 5.45C2.78 5.32 2.84 5.19 2.88 5.06C2.95 4.89 3.05 4.74 3.14 4.61C3.2 4.54 3.25 4.48 3.31 4.41C3.42 4.3 3.55 4.2 3.68 4.11C4 3.93 4.35 3.82 4.75 3.82L5.91 3.82L5.91 4.57C5.91 4.76 6.06 4.93 6.26 4.93C6.45 4.93 6.62 4.78 6.62 4.57L6.62 3.82L13.42 3.82L13.42 4.57C13.42 4.76 13.57 4.93 13.78 4.93C13.96 4.93 14.13 4.78 14.13 4.57L14.13 3.82L15.29 3.82C15.68 3.82 16.06 3.93 16.36 4.11C16.49 4.2 16.62 4.3 16.73 4.41C17.01 4.69 17.21 5.04 17.29 5.45C17.31 5.58 17.33 5.72 17.33 5.85L17.33 7.37L2.73 7.37L2.73 5.85ZM17.35 16.25C17.35 16.83 17.12 17.35 16.75 17.72C16.37 18.09 15.85 18.31 15.29 18.31L4.78 18.31C4.22 18.31 3.7 18.09 3.33 17.72C2.95 17.35 2.73 16.83 2.73 16.27L2.73 8.06L17.35 8.06L17.35 16.25L17.35 16.25Z" />
                        </svg>
                     </li>
                     <li>
                        <input type="text"  class="datepicker" placeholder="09-04-2020">
                        <svg version="1.2" baseProfile="tiny-ps" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 19 20"
                           width="19" height="20">
                           <title>Icon </title>
                           <style>
                              tspan {
                                 white-space: pre
                              }

                              .shp0 {
                                 fill: #1b72ea
                              }
                           </style>
                           <path id="Icon" class="shp0"
                              d="M17.94 5.32C17.83 4.78 17.57 4.3 17.2 3.93C17.08 3.82 16.95 3.7 16.8 3.61L16.78 3.59C16.77 3.57 16.75 3.57 16.73 3.56C16.67 3.52 16.62 3.48 16.56 3.46L16.54 3.46C16.15 3.26 15.72 3.15 15.23 3.15L14.07 3.15L14.07 2.35C14.07 2.17 13.93 2 13.72 2C13.53 2 13.36 2.15 13.36 2.35L13.36 3.11L6.65 3.11L6.65 2.35C6.65 2.17 6.49 2 6.3 2C6.11 2 5.94 2.15 5.94 2.35L5.94 3.11L4.78 3.11C4.43 3.11 4.07 3.18 3.76 3.31C3.4 3.46 3.08 3.67 2.82 3.93C2.67 4.08 2.54 4.24 2.43 4.41C2.32 4.59 2.22 4.78 2.15 4.98C2.11 5.09 2.07 5.21 2.06 5.32C2.02 5.5 2 5.69 2 5.87L2 7.73L2 16.27C2 17.03 2.32 17.72 2.8 18.2C3.31 18.7 4 19 4.75 19L15.25 19C16.02 19 16.71 18.68 17.2 18.2C17.7 17.7 18 17.01 18 16.27L18 7.73L18 5.87C18 5.69 17.98 5.5 17.94 5.32ZM2.73 5.85C2.73 5.71 2.75 5.58 2.77 5.45C2.78 5.32 2.84 5.19 2.88 5.06C2.95 4.89 3.05 4.74 3.14 4.61C3.2 4.54 3.25 4.48 3.31 4.41C3.42 4.3 3.55 4.2 3.68 4.11C4 3.93 4.35 3.82 4.75 3.82L5.91 3.82L5.91 4.57C5.91 4.76 6.06 4.93 6.26 4.93C6.45 4.93 6.62 4.78 6.62 4.57L6.62 3.82L13.42 3.82L13.42 4.57C13.42 4.76 13.57 4.93 13.78 4.93C13.96 4.93 14.13 4.78 14.13 4.57L14.13 3.82L15.29 3.82C15.68 3.82 16.06 3.93 16.36 4.11C16.49 4.2 16.62 4.3 16.73 4.41C17.01 4.69 17.21 5.04 17.29 5.45C17.31 5.58 17.33 5.72 17.33 5.85L17.33 7.37L2.73 7.37L2.73 5.85ZM17.35 16.25C17.35 16.83 17.12 17.35 16.75 17.72C16.37 18.09 15.85 18.31 15.29 18.31L4.78 18.31C4.22 18.31 3.7 18.09 3.33 17.72C2.95 17.35 2.73 16.83 2.73 16.27L2.73 8.06L17.35 8.06L17.35 16.25L17.35 16.25Z" />
                        </svg>
                     </li>
                     <li>
                        <select >
                           <option value="">1 Adult - 0 Child</option>
                           <option value="">1 Adult - 1 Child</option>
                           <option value="">2 Adult - 0 Child</option>
                           <option value="">1 Adult - 0 Child</option>
                           <option value="">1 Adult - 0 Child</option>
                        </select>
                     </li>
                     <li>
                        <button type="button" class="btn btn-primary">search</button>
                     </li>
                  </ul>
               </div>
               <!-- find us section over -->
               <div class="top-deals-wrapper">
                  <h4><a href="javascript:;">top deals</a></h4>
                  <ul>
                     <li>
                        <input type="checkbox" class="checkbox" >
                        <label >Flat 10 - 20% OFF</label>
                     </li>
                     <li>
                        <input type="checkbox" class="checkbox" >
                        <label >Flat 20 - 35% OFF</label>
                     </li>
                     <li>
                        <input type="checkbox" class="checkbox" >
                        <label >Flat 40 - 50% OFF</label>
                     </li>
                     <li>
                        <input type="checkbox" checked class="checkbox" >
                        <label >Flat 50 - 65% OFF</label>
                     </li>
                     <li>
                        <input type="checkbox" class="checkbox" >
                        <label >Flat 70 - 75% OFF</label>
                     </li>
                     <li>
                        <input type="checkbox" class="checkbox" >
                        <label >Best Package Offers</label>
                     </li>
                  </ul>
               </div>
               <!-- r5ating section -->
               <div class="rating-wrapper">
                  <h4><a href="javascript:;">Star Rating</a></h4>
                  <ul>
                     <li class="p-rel">
                        <input type="checkbox" class="checkbox" >
                        <label ><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                              class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></label>
                        <span>12</span>
                     </li>
                     <li class="p-rel">
                        <input type="checkbox" class="checkbox" >
                        <label ><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                              class="fas fa-star"></i><i class="fas fa-star"></i><i class="far fa-star"></i></label>
                        <span>25</span>
                     </li>
                     <li class="p-rel">
                        <input type="checkbox" class="checkbox" >
                        <label ><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                              class="fas fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></label>
                        <span >15</span>
                     </li>
                     <li class="p-rel">
                        <input type="checkbox" class="checkbox" >
                        <label ><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                              class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></label>
                        <span>24</span>
                     </li>
                     <li class="p-rel">
                        <input type="checkbox" class="checkbox" >
                        <label ><i class="fas fa-star"></i><i class="far fa-star"></i><i
                              class="far fa-star"></i><i class="far fa-star"></i><i class="far fa-star"></i></label>
                        <span >14</span>
                     </li>
                  </ul>
               </div>
               <div class="r-type-wrapper">
                  <h4><a href="javascript:;">Rooms Types</a></h4>
                  <ul>
                     <li>
                        <input type="checkbox" class="checkbox" >
                        <label >Duplex</label>
                     </li>
                     <li>
                        <input type="checkbox" class="checkbox" >
                        <label >Standart</label>
                     </li>
                     <li>
                        <input type="checkbox" checked class="checkbox" >
                        <label >Studio</label>
                     </li>
                     <li>
                        <input type="checkbox" class="checkbox" >
                        <label >Sweets</label>
                     </li>
                  </ul>
               </div>
               <!-- instagram feed -->
               <div class="feed-wrapper">
                  <h4><a href="javascript:;">Instagram</a></h4>
                  <ul class="footer-feed">
                     <li>
                        <a href="javascript:;" class="p-rel"><img src="images/f-image-1.jpg" class="p-rel" alt="">
                           <span><i class="fab fa-instagram"></i></span>
                        </a>
                        <a href="javascript:;" class="p-rel"><img src="images/f-image-2.jpg" class="p-rel" alt="">
                           <span> <i class="fab fa-instagram"></i></span>
                        </a>
                        <a href="javascript:;" class="p-rel"><img src="images/f-image-3.jpg" class="p-rel" alt="">
                           <span> <i class="fab fa-instagram"></i></span>
                        </a>
                        <a href="javascript:;" class="p-rel"><img src="images/f-image-4.jpg" class="p-rel" alt="">
                           <span><i class="fab fa-instagram"></i></span>
                        </a>
                        <a href="javascript:;" class="p-rel"><img src="images/f-image-5.jpg" class="p-rel" alt="">
                           <span> <i class="fab fa-instagram"></i></span>
                        </a>
                        <a href="javascript:;" class="p-rel"><img src="images/f-image-6.jpg" class="p-rel" alt="">
                           <span> <i class="fab fa-instagram"></i></span>
                        </a>
                     </li>
                  </ul>
               </div>
               <!-- holiday section -->
               <div class="holiday-section p-rel">
                  <img src="images/l-sidebar.jpg" alt="" class="">
                  <div>
                     <h3><a href="javascript:;">Summar<br>Holiday<br>20% OFF</a></h3>
                     <button type="button" class="btn btn-light">get code</button>
                  </div>
               </div>
            </div>
            <!-- room types -->
            <div class="col-lg-9 col-md-12 col-sm-12 col-12">
               <div class="grid-view-wrapper">
                  <div class="row">
                     <div class="col-lg-7 col-md-12 col-sm-12 col-12">
                        <div class="fliter-sec">
                           <div>
                              <select >
                                 <option value="">Sort by</option>
                                 <option value="">Sort by</option>
                                 <option value="">Sort by</option>
                                 <option value="">Sort by</option>
                                 <option value="">Sort by</option>
                              </select>
                           </div>
                           <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                              <li class="nav-item ms-3" role="presentation">
                                 <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false">
                                    <i class="fas fa-grip-horizontal"></i>
                                 </button>
                              </li>
                              <li class="nav-item ms-3" role="presentation">
                                 <button class="nav-link" id="pills-profile-tab1" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false">
                                    <i class="fas fa-list-ul"></i>
                                 </button>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="col-lg-5 col-md-12 col-sm-12 col-12">
                        <ul id="show-item">
                           <li>
                              <a href="javascript:;">
                                 <span>Showing 1-18</span> of 256 results
                              </a>
                           </li>
                           <li>
                              <a href="grid-map-view.html" class="btn btn-light ms-4">Map View</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="tab-content" id="pills-tabContent">
                     <div class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                        aria-labelledby="pills-profile-tab">
                        <div class="row">
                           <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="sub-main">
                                 <div class="img-sec p-rel">
                                    <div class="hover-img p-rel">
                                       <a href="javascript:;"> <img src="images/blog-1.jpg" alt=""></a>
                                    </div>
                                    <span>$67 / Night</span>
                                 </div>
                                 <div class="slider-content">
                                    <span>
                                       <a href="javascript:;"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                             class="fas fa-star"></i>
                                          <i class="far fa-star"></i><i class="far fa-star"></i> &nbsp;|&nbsp; 88+
                                          Review</a>
                                    </span>
                                    <h5><a href="hotel-single-page.html">hotel sayaji indore</a></h5>
                                    <a href="javascript:;"> <span class="clr-text"><i class="fas fa-map-marker-alt"></i>
                                          Republic of Cuba,
                                          USA</span></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="sub-main">
                                 <div class="img-sec p-rel">
                                    <div class="hover-img p-rel">
                                       <a href="javascript:;"> <img src="images/blog-3.jpg" alt=""></a>
                                    </div>
                                    <span>$30 / Night</span>
                                 </div>
                                 <div class="slider-content">
                                    <span>
                                       <a href="javascript:;"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                             class="fas fa-star"></i>
                                          <i class="far fa-star"></i><i class="far fa-star"></i> &nbsp;|&nbsp; 88+
                                          Review</a>
                                    </span>
                                    <h5><a href="hotel-single-page.html">Hotel in JPS</a></h5>
                                    <a href="javascript:;"> <span class="clr-text"><i class="fas fa-map-marker-alt"></i>
                                          Republic of Cuba,
                                          USA</span></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="sub-main">
                                 <div class="img-sec p-rel">
                                    <div class="hover-img p-rel">
                                       <a href="javascript:;"> <img src="images/blog-3.jpg" alt=""></a>
                                    </div>
                                    <span>$77 / Night</span>
                                 </div>
                                 <div class="slider-content">
                                    <span>
                                       <a href="javascript:;"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                             class="fas fa-star"></i>
                                          <i class="far fa-star"></i><i class="far fa-star"></i> &nbsp;|&nbsp; 88+
                                          Review</a>
                                    </span>
                                    <h5><a href="hotel-single-page.html">The Peninsula</a></h5>
                                    <a href="javascript:;"> <span class="clr-text"><i class="fas fa-map-marker-alt"></i>
                                          Republic of Cuba,
                                          USA</span></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="sub-main">
                                 <div class="img-sec p-rel">
                                    <div class="hover-img p-rel">
                                       <a href="javascript:;"> <img src="images/blog-2.jpg" alt=""></a>
                                    </div>
                                    <span>$67 / Night</span>
                                 </div>
                                 <div class="slider-content">
                                    <span>
                                       <a href="javascript:;"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                             class="fas fa-star"></i>
                                          <i class="far fa-star"></i><i class="far fa-star"></i> &nbsp;|&nbsp; 88+
                                          Review</a>
                                    </span>
                                    <h5><a href="hotel-single-page.html">hotel sayaji indore</a></h5>
                                    <a href="javascript:;"> <span class="clr-text"><i class="fas fa-map-marker-alt"></i>
                                          Republic of Cuba,
                                          USA</span></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="sub-main">
                                 <div class="img-sec p-rel">
                                    <div class="hover-img p-rel">
                                       <a href="javascript:;"> <img src="images/blog-4.jpg" alt=""></a>
                                    </div>
                                    <span>$30 / Night</span>
                                 </div>
                                 <div class="slider-content">
                                    <span>
                                       <a href="javascript:;"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                             class="fas fa-star"></i>
                                          <i class="far fa-star"></i><i class="far fa-star"></i> &nbsp;|&nbsp; 88+
                                          Review</a>
                                    </span>
                                    <h5><a href="hotel-single-page.html">Hotel in JPS</a></h5>
                                    <a href="javascript:;"> <span class="clr-text"><i class="fas fa-map-marker-alt"></i>
                                          Republic of Cuba,
                                          USA</span></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="sub-main">
                                 <div class="img-sec p-rel">
                                    <div class="hover-img p-rel">
                                       <a href="javascript:;"> <img src="images/blog-2.jpg" alt=""></a>
                                    </div>
                                    <span>$77 / Night</span>
                                 </div>
                                 <div class="slider-content">
                                    <span>
                                       <a href="javascript:;"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                             class="fas fa-star"></i>
                                          <i class="far fa-star"></i><i class="far fa-star"></i> &nbsp;|&nbsp; 88+
                                          Review</a>
                                    </span>
                                    <h5><a href="hotel-single-page.html">The Peninsula</a></h5>
                                    <a href="javascript:;"> <span class="clr-text"><i class="fas fa-map-marker-alt"></i>
                                          Republic of Cuba,
                                          USA</span></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="sub-main">
                                 <div class="img-sec p-rel">
                                    <div class="hover-img p-rel">
                                       <a href="javascript:;"> <img src="images/blog-1.jpg" alt=""></a>
                                    </div>
                                    <span>$67 / Night</span>
                                 </div>
                                 <div class="slider-content">
                                    <span>
                                       <a href="javascript:;"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                             class="fas fa-star"></i>
                                          <i class="far fa-star"></i><i class="far fa-star"></i> &nbsp;|&nbsp; 88+
                                          Review</a>
                                    </span>
                                    <h5><a href="hotel-single-page.html">hotel sayaji indore</a></h5>
                                    <a href="javascript:;"> <span class="clr-text"><i class="fas fa-map-marker-alt"></i>
                                          Republic of Cuba,
                                          USA</span></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="sub-main">
                                 <div class="img-sec p-rel">
                                    <div class="hover-img p-rel">
                                       <a href="javascript:;"> <img src="images/blog-3.jpg" alt=""></a>
                                    </div>
                                    <span>$30 / Night</span>
                                 </div>
                                 <div class="slider-content">
                                    <span>
                                       <a href="javascript:;"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                             class="fas fa-star"></i>
                                          <i class="far fa-star"></i><i class="far fa-star"></i> &nbsp;|&nbsp; 88+
                                          Review</a>
                                    </span>
                                    <h5><a href="hotel-single-page.html">The Peninsula</a></h5>
                                    <a href="javascript:;"> <span class="clr-text"><i class="fas fa-map-marker-alt"></i>
                                          Republic of Cuba,
                                          USA</span></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="sub-main">
                                 <div class="img-sec p-rel">
                                    <div class="hover-img p-rel">
                                       <a href="javascript:;"> <img src="images/blog-4.jpg" alt=""></a>
                                    </div>
                                    <span>$77 / Night</span>
                                 </div>
                                 <div class="slider-content">
                                    <span>
                                       <a href="javascript:;"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                             class="fas fa-star"></i>
                                          <i class="far fa-star"></i><i class="far fa-star"></i> &nbsp;|&nbsp; 88+
                                          Review</a>
                                    </span>
                                    <h5><a href="hotel-single-page.html">Hotel in JPS</a></h5>
                                    <a href="javascript:;"> <span class="clr-text"><i class="fas fa-map-marker-alt"></i>
                                          Republic of Cuba,
                                          USA</span></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="sub-main">
                                 <div class="img-sec p-rel">
                                    <div class="hover-img p-rel">
                                       <a href="javascript:;"> <img src="images/blog-1.jpg" alt=""></a>
                                    </div>
                                    <span>$67 / Night</span>
                                 </div>
                                 <div class="slider-content">
                                    <span>
                                       <a href="javascript:;"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                             class="fas fa-star"></i>
                                          <i class="far fa-star"></i><i class="far fa-star"></i> &nbsp;|&nbsp; 88+
                                          Review</a>
                                    </span>
                                    <h5><a href="hotel-single-page.html">Mandarin Oriental</a></h5>
                                    <a href="javascript:;"> <span class="clr-text"><i class="fas fa-map-marker-alt"></i>
                                          Republic of Cuba,
                                          USA</span></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="sub-main">
                                 <div class="img-sec p-rel">
                                    <div class="hover-img p-rel">
                                       <a href="javascript:;"> <img src="images/blog-3.jpg" alt=""></a>
                                    </div>
                                    <span>$30 / Night</span>
                                 </div>
                                 <div class="slider-content">
                                    <span>
                                       <a href="javascript:;"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                             class="fas fa-star"></i>
                                          <i class="far fa-star"></i><i class="far fa-star"></i> &nbsp;|&nbsp; 88+
                                          Review</a>
                                    </span>
                                    <h5><a href="hotel-single-page.html">hotel sayaji indore</a></h5>
                                    <a href="javascript:;"> <span class="clr-text"><i class="fas fa-map-marker-alt"></i>
                                          Republic of Cuba,
                                          USA</span></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="sub-main">
                                 <div class="img-sec p-rel">
                                    <div class="hover-img p-rel">
                                       <a href="javascript:;"> <img src="images/blog-3.jpg" alt=""></a>
                                    </div>
                                    <span>$77 / Night</span>
                                 </div>
                                 <div class="slider-content">
                                    <span>
                                       <a href="javascript:;"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                             class="fas fa-star"></i>
                                          <i class="far fa-star"></i><i class="far fa-star"></i> &nbsp;|&nbsp; 88+
                                          Review</a>
                                    </span>
                                    <h5><a href="hotel-single-page.html">Hotel in JPS</a></h5>
                                    <a href="javascript:;"> <span class="clr-text"><i class="fas fa-map-marker-alt"></i>
                                          Republic of Cuba,
                                          USA</span></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="sub-main">
                                 <div class="img-sec p-rel">
                                    <div class="hover-img p-rel">
                                       <a href="javascript:;"> <img src="images/blog-1.jpg" alt=""></a>
                                    </div>
                                    <span>$67 / Night</span>
                                 </div>
                                 <div class="slider-content">
                                    <span>
                                       <a href="javascript:;"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                             class="fas fa-star"></i>
                                          <i class="far fa-star"></i><i class="far fa-star"></i> &nbsp;|&nbsp; 88+
                                          Review</a>
                                    </span>
                                    <h5><a href="hotel-single-page.html">hotel sayaji indore</a></h5>
                                    <a href="javascript:;"> <span class="clr-text"><i class="fas fa-map-marker-alt"></i>
                                          Republic of Cuba,
                                          USA</span></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="sub-main">
                                 <div class="img-sec p-rel">
                                    <div class="hover-img p-rel">
                                       <a href="javascript:;"> <img src="images/blog-3.jpg" alt=""></a>
                                    </div>
                                    <span>$30 / Night</span>
                                 </div>
                                 <div class="slider-content">
                                    <span>
                                       <a href="javascript:;"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                             class="fas fa-star"></i>
                                          <i class="far fa-star"></i><i class="far fa-star"></i> &nbsp;|&nbsp; 88+
                                          Review</a>
                                    </span>
                                    <h5><a href="hotel-single-page.html">Mandarin Oriental</a></h5>
                                    <a href="javascript:;"> <span class="clr-text"><i class="fas fa-map-marker-alt"></i>
                                          Republic of Cuba,
                                          USA</span></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="sub-main">
                                 <div class="img-sec p-rel">
                                    <div class="hover-img p-rel">
                                       <a href="javascript:;"> <img src="images/blog-1.jpg" alt=""></a>
                                    </div>
                                    <span>$77 / Night</span>
                                 </div>
                                 <div class="slider-content">
                                    <span>
                                       <a href="javascript:;"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                             class="fas fa-star"></i>
                                          <i class="far fa-star"></i><i class="far fa-star"></i> &nbsp;|&nbsp; 88+
                                          Review</a>
                                    </span>
                                    <h5><a href="hotel-single-page.html">The Peninsula</a></h5>
                                    <a href="javascript:;"> <span class="clr-text"><i class="fas fa-map-marker-alt"></i>
                                          Republic of Cuba,
                                          USA</span></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="sub-main">
                                 <div class="img-sec p-rel">
                                    <div class="hover-img p-rel">
                                       <a href="javascript:;"> <img src="images/blog-1.jpg" alt=""></a>
                                    </div>
                                    <span>$67 / Night</span>
                                 </div>
                                 <div class="slider-content">
                                    <span>
                                       <a href="javascript:;"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                             class="fas fa-star"></i>
                                          <i class="far fa-star"></i><i class="far fa-star"></i> &nbsp;|&nbsp; 88+
                                          Review</a>
                                    </span>
                                    <h5><a href="hotel-single-page.html">Hotel in JPS</a></h5>
                                    <a href="javascript:;"> <span class="clr-text"><i class="fas fa-map-marker-alt"></i>
                                          Republic of Cuba,
                                          USA</span></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="sub-main">
                                 <div class="img-sec p-rel">
                                    <div class="hover-img p-rel">
                                       <a href="javascript:;"> <img src="images/blog-3.jpg" alt=""></a>
                                    </div>
                                    <span>$30 / Night</span>
                                 </div>
                                 <div class="slider-content">
                                    <span>
                                       <a href="javascript:;"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                             class="fas fa-star"></i>
                                          <i class="far fa-star"></i><i class="far fa-star"></i> &nbsp;|&nbsp; 88+
                                          Review</a>
                                    </span>
                                    <h5><a href="hotel-single-page.html">Mandarin Oriental</a></h5>
                                    <a href="javascript:;"> <span class="clr-text"><i class="fas fa-map-marker-alt"></i>
                                          Republic of Cuba,
                                          USA</span></a>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">
                              <div class="sub-main">
                                 <div class="img-sec p-rel">
                                    <div class="hover-img p-rel">
                                       <a href="javascript:;"> <img src="images/blog-1.jpg" alt=""></a>
                                    </div>
                                    <span>$77 / Night</span>
                                 </div>
                                 <div class="slider-content">
                                    <span>
                                       <a href="javascript:;"> <i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                             class="fas fa-star"></i>
                                          <i class="far fa-star"></i><i class="far fa-star"></i> &nbsp;|&nbsp; 88+
                                          Review</a>
                                    </span>
                                    <h5><a href="hotel-single-page.html">hotel sayaji indore</a></h5>
                                    <a href="javascript:;"> <span class="clr-text"><i class="fas fa-map-marker-alt"></i>
                                          Republic of Cuba,
                                          USA</span></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- second tab sections -->
                     <div class="tab-pane fade" id="pills-contact" role="tabpanel" >
                        <div class="row">
                           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                              <div class="list-type">
                                 <div class="list-sub-main list-width-type">
                                    <div class="img-sec p-rel">
                                       <div class="hover-img p-rel">
                                          <a href="javascript:;"> <img src="images/blog-1.jpg" alt=""></a>
                                       </div>
                                       <span>$77 / Night</span>
                                    </div>
                                    <div class="slider-content">
                                       <span>
                                          <a href="javascript:;"> <i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i>
                                             <i class="far fa-star"></i><i class="far fa-star"></i>
                                             &nbsp; | &nbsp; 88+
                                             Review</a>
                                       </span>
                                       <h5><a href="hotel-single-page.html">hotel sayaji indore</a></h5>
                                       <a href="javascript:;"> <span class="clr-text"><i
                                                class="fas fa-map-marker-alt"></i> Republic of Cuba,
                                             USA</span></a>
                                       <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                          rem a quis bibendum auctor, nisi elit consequat ipsum, nec
                                          sagittis sem nibh id elit. Dssed odio sit amet nibh vulputate.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                              <div class="list-type">
                                 <div class="list-sub-main list-width-type">
                                    <div class="img-sec p-rel">
                                       <div class="hover-img p-rel">
                                          <a href="hotel-single-page.html"> <img src="images/blog-2.jpg" alt=""></a>
                                       </div>
                                       <span>$77 / Night</span>
                                    </div>
                                    <div class="slider-content">
                                       <span>
                                          <a href="javascript:;"> <i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i>
                                             <i class="far fa-star"></i><i class="far fa-star"></i>
                                             &nbsp; | &nbsp; 88+
                                             Review</a>
                                       </span>
                                       <h5><a href="hotel-single-page.html">Hotel in JPS</a></h5>
                                       <a href="javascript:;"> <span class="clr-text"><i
                                                class="fas fa-map-marker-alt"></i> Republic of Cuba,
                                             USA</span></a>
                                       <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                          rem a quis bibendum auctor, nisi elit consequat ipsum, nec
                                          sagittis sem nibh id elit. Dssed odio sit amet nibh vulputate.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                              <div class="list-type">
                                 <div class="list-sub-main list-width-type">
                                    <div class="img-sec p-rel">
                                       <div class="hover-img p-rel">
                                          <a href=""> <img src="images/blog-3.jpg" alt=""></a>
                                       </div>
                                       <span>$77 / Night</span>
                                    </div>
                                    <div class="slider-content">
                                       <span>
                                          <a href="javascript:;"> <i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i>
                                             <i class="far fa-star"></i><i class="far fa-star"></i>
                                             &nbsp; | &nbsp; 88+
                                             Review</a>
                                       </span>
                                       <h5><a href="hotel-single-page.html">The Peninsula</a></h5>
                                       <a href="javascript:;"> <span class="clr-text"><i
                                                class="fas fa-map-marker-alt"></i> Republic of Cuba,
                                             USA</span></a>
                                       <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                          rem a quis bibendum auctor, nisi elit consequat ipsum, nec
                                          sagittis sem nibh id elit. Dssed odio sit amet nibh vulputate.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                              <div class="list-type">
                                 <div class="list-sub-main list-width-type">
                                    <div class="img-sec p-rel">
                                       <div class="hover-img p-rel">
                                          <a href="javascript:;"> <img src="images/blog-1.jpg" alt=""></a>
                                       </div>
                                       <span>$77 / Night</span>
                                    </div>
                                    <div class="slider-content">
                                       <span>
                                          <a href="javascript:;"> <i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i>
                                             <i class="far fa-star"></i><i class="far fa-star"></i>
                                             &nbsp; | &nbsp; 88+
                                             Review</a>
                                       </span>
                                       <h5><a href="hotel-single-page.html">Hotel in JPS</a></h5>
                                       <a href="javascript:;"> <span class="clr-text"><i
                                                class="fas fa-map-marker-alt"></i> Republic of Cuba,
                                             USA</span></a>
                                       <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                          rem a quis bibendum auctor, nisi elit consequat ipsum, nec
                                          sagittis sem nibh id elit. Dssed odio sit amet nibh vulputate.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                              <div class="list-type">
                                 <div class="list-sub-main list-width-type">
                                    <div class="img-sec p-rel">
                                       <div class="hover-img p-rel">
                                          <a href="javascript:;"> <img src="images/blog-2.jpg" alt=""></a>
                                       </div>
                                       <span>$77 / Night</span>
                                    </div>
                                    <div class="slider-content">
                                       <span>
                                          <a href="javascript:;"> <i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i>
                                             <i class="far fa-star"></i><i class="far fa-star"></i>
                                             &nbsp; | &nbsp; 88+
                                             Review</a>
                                       </span>
                                       <h5><a href="hotel-single-page.html">Mandarin Oriental</a></h5>
                                       <a href="javascript:;"> <span class="clr-text"><i
                                                class="fas fa-map-marker-alt"></i> Republic of Cuba,
                                             USA</span></a>
                                       <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                          rem a quis bibendum auctor, nisi elit consequat ipsum, nec
                                          sagittis sem nibh id elit. Dssed odio sit amet nibh vulputate.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                              <div class="list-type">
                                 <div class="list-sub-main list-width-type">
                                    <div class="img-sec p-rel">
                                       <div class="hover-img p-rel">
                                          <a href="javascript:;"> <img src="images/blog-3.jpg" alt=""></a>
                                       </div>
                                       <span>$77 / Night</span>
                                    </div>
                                    <div class="slider-content">
                                       <span>
                                          <a href="javascript:;"> <i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i>
                                             <i class="far fa-star"></i><i class="far fa-star"></i>
                                             &nbsp; | &nbsp; 88+
                                             Review</a>
                                       </span>
                                       <h5><a href="hotel-single-page.html">The Peninsula</a></h5>
                                       <a href="javascript:;"> <span class="clr-text"><i
                                                class="fas fa-map-marker-alt"></i> Republic of Cuba,
                                             USA</span></a>
                                       <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                          rem a quis bibendum auctor, nisi elit consequat ipsum, nec
                                          sagittis sem nibh id elit. Dssed odio sit amet nibh vulputate.
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                              <div class="list-type">
                                 <div class="list-sub-main list-width-type">
                                    <div class="img-sec p-rel">
                                       <div class="hover-img p-rel">
                                          <a href="javascript:;"> <img src="images/blog-1.jpg" alt=""></a>
                                       </div>
                                       <span>$77 / Night</span>
                                    </div>
                                    <div class="slider-content">
                                       <span>
                                          <a href="javascript:;"> <i class="fas fa-star"></i><i
                                                class="fas fa-star"></i><i class="fas fa-star"></i>
                                             <i class="far fa-star"></i><i class="far fa-star"></i>
                                             &nbsp; | &nbsp; 88+
                                             Review</a>
                                       </span>
                                       <h5><a href="hotel-single-page.html">The Peninsula</a></h5>
                                       <a href="javascript:;"> <span class="clr-text"><i
                                                class="fas fa-map-marker-alt"></i> Republic of Cuba,
                                             USA</span></a>
                                       <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin,
                                          rem a quis bibendum auctor, nisi elit consequat ipsum, nec
                                          sagittis sem nibh id elit. Dssed odio sit amet nibh vulputate.
                                       </p>
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
      </div>
      <!-- pagination start -->
      <nav>
         <ul class="pagination pagination-lg justify-content-center">
             <li class="page-item">
                 <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="fas fa-arrow-left"></i></a>
             </li>
             <li class="page-item res-d-none"><a class="page-link" href="#">1</a></li>
             <li class="page-item active res-d-none" aria-current="page">
                 <a class="page-link" href="#">2</a>
             </li>
             <li class="page-item res-d-none"><a class="page-link" href="#">3</a></li>
             <li class="page-item res-d-none"><a class="page-link" href="#">...</a></li>
             <li class="page-item res-d-none"><a class="page-link" href="#">5</a></li>
             <li class="page-item  active ">
                 <a class="page-link" href="#"><i class="fas fa-arrow-right"></i></a>
             </li>
         </ul>
     </nav>
      <!-- pagination end -->
   </div>

   <!-- grid section end -->
   <div class="contact-main-wrapper">
      <div class="row align-items-center">
          <div class="col-lg-6 col-md-12 col-sm-12 col-12 p-0">
              <div class="form">
                  <h5><a href="javascript:;">sign up for newsletter</a></h5>
                  <p>Sign up for our mailing list to get latest updates and offers</p>
                  <form>
                      <div class="input-box p-rel">
                          <span><i class="far fa-envelope"></i></span>
                          <input type="text" placeholder="type your email address">
                          <button>subscribe</button>
                      </div>
                  </form>
              </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 col-12 p-0">
              <div class="offer-tag">
                  <h5><a href="javascript:;">Summer Holidays 20% OFF</a></h5>
                  <p>Offer valid for stays now through December 2021</p>
                  <a class="btn btn-light">Get code</a>
              </div>
          </div>
         
      </div>
  </div>
   <!-- footer section start -->
   <footer class="footer-main-wrapper">
      <div class="container">
         <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
               <div class="sb-footer-logo">
                  <a href="javascript:;" class="f-pd"><img src="images/f-logo-.png" alt=""></a>
                  <p>Travelers are always discoverers,<br> esy those who travel by air. </p>
                  <ul class="footer-social-icon">
                     <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                     <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                     <li><a href="javascript:;"><i class="fab fa-linkedin-in"></i></a></li>
                     <li><a href="javascript:;"><i class="fab fa-instagram"></i></a></li>
                  </ul>
                  <p><a href="javascript:;"><span><i class="fas fa-phone-alt"></i></span> &nbsp; Toll free <br>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;808 111 9999</a>
                  </p>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
               <div class="footer-menu">
                  <h5><a href="javascript:;" class="f-pd">Our company</a></h5>
                  <ul>
                     <li><i class="fas fa-caret-right"></i><a href="javascript:;">&nbsp; About</a></li>
                     <li><i class="fas fa-caret-right"></i><a href="javascript:;"> &nbsp;Services</a></li>
                     <li><i class="fas fa-caret-right"></i><a href="javascript:;">&nbsp; Terms</a></li>
                     <li><i class="fas fa-caret-right"></i><a href="javascript:;">&nbsp; FAQ</a></li>
                     <li><i class="fas fa-caret-right"></i><a href="contact-form.html">&nbsp; Contact us</a></li>
                  </ul>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
               <div class="footer-feed">
                  <h5><a href="javascript:;" class="f-pd">Instagram feed</a></h5>
                  <div class="row gutter">
                     <div class="col-lg-4 col-md-4 col-sm-4 col-4 p-0">
                        <a href="javascript:;" class="p-rel"><img src="images/f-image-1.jpg" class="p-rel" alt="">
                           <span><i class="fab fa-instagram"></i></span>
                        </a>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4 col-4 p-0">
                        <a href="javascript:;" class="p-rel"><img src="images/f-image-2.jpg" class="p-rel" alt="">
                           <span> <i class="fab fa-instagram"></i></span>
                        </a>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4 col-4 p-0">
                        <a href="javascript:;" class="p-rel"><img src="images/f-image-3.jpg" class="p-rel" alt="">
                           <span> <i class="fab fa-instagram"></i></span>
                        </a>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4 col-4 p-0">
                        <a href="javascript:;" class="p-rel"><img src="images/f-image-4.jpg" class="p-rel" alt="">
                           <span><i class="fab fa-instagram"></i></span>
                        </a>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4 col-4 p-0">
                        <a href="javascript:;" class="p-rel"><img src="images/f-image-5.jpg" class="p-rel" alt="">
                           <span> <i class="fab fa-instagram"></i></span>
                        </a>
                     </div>
                     <div class="col-lg-4 col-md-4 col-sm-4 col-4 p-0">
                        <a href="javascript:;" class="p-rel"><img src="images/f-image-6.jpg" class="p-rel" alt="">
                           <span> <i class="fab fa-instagram"></i></span>
                        </a>
                     </div>
                     <div class="col-12 col-md-12 col-sm-12 col-12">
                        <a href="javascript:;" class="more-feed">view all</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
               <div class="footer-menu">
                  <h5><a href="javascript:;" class="f-pd">Download App</a></h5>
                  <p>Free App Download for best<br>
                     Tour Experience
                  </p>
                  <a href="javascript:;"><img src="images/play-store.jpg" alt=""></a>
                  <a href="javascript:;"><img src="images/app-store-1.jpg" alt=""></a>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- bottom footer -->
 <!-- bottom footer -->
 <div class="bottom-footer">
   <div class="container">
       <div class="row align-items-center">
           <div class="col-lg-6 col-md-12 col-sm-12 col-12">
               <p>© 2021-22 Webstrot | All Rights Reserved. Design by <a href="http://www.webstrot.com/">Webstrot</a></p>
           </div>
           <div class="col-lg-6 col-md-12 col-sm-12 col-12">
               <ul>
                   <li>
                      <a href=""> <img src="images/icon-logo-1.jpg" alt=""></a>
                   </li>
                   <li>
                       <a href=""><img src="images/icon-logo-2.jpg" alt=""></a>
                   </li>
                   <li>
                       <a href=""><img src="images/icon-logo-3.jpg" alt=""></a>
                   </li>
                   <li>
                       <a href=""><img src="images/icon-logo-4.jpg" alt=""></a>
                   </li>
                   <li>
                     <a href="">  <img src="images/icon-logo-5.jpg" alt=""></a>
                   </li>
               </ul>
           </div>
       </div>
   </div>
</div>
   <script src="js/jquery-3.6.0.min.js"></script>
   <script src="js/jquery-ui.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/jquery.magnific-popup.js"></script>
   <script src="js/shortcode.js"></script>
   <script src="js/custom.js"></script>
</body>

</html>