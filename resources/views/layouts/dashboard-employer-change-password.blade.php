@extends('layouts.master')
@section('title','stagitunisie')
@section('content')
<!--=================================
header -->
<header class="header bg-dark">
  <nav class="navbar navbar-static-top navbar-expand-lg header-sticky">
    <div class="container-fluid">
      <button id="nav-icon4" type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
          <span></span>
          <span></span>
          <span></span>
      </button>
      <a class="navbar-brand" href="index-2.html">
        <img class="img-fluid" src="images/logo.svg" alt="logo">
      </a>
      <div class="navbar-collapse collapse justify-content-start">
        <ul class="nav navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home<i class="fas fa-chevron-down fa-xs"></i></a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="index-2.html">index Default</a></li>
              <li><a class="dropdown-item" href="index-02.html">index 02</a></li>
              <li><a class="dropdown-item" href="index-03.html">index 03</a></li>
              <li><a class="dropdown-item" href="index-map.html">index map</a></li>
              <li><a class="dropdown-item" href="index-slider.html">index Slider</a></li>
              <li><a class="dropdown-item" href="index-bg-video.html">index bg video</a></li>
              <li><a class="dropdown-item" href="index-splash.html">index splash</a></li>
            </ul>
          </li>
          <li class="dropdown nav-item">
            <a href="properties.html" class="nav-link" data-bs-toggle="dropdown">Pages<i class="fas fa-chevron-down fa-xs"></i></a>
            <ul class="dropdown-menu megamenu dropdown-menu-lg">
              <li>
                <div class="row">
                  <div class="col-sm-4 mb-2 mb-sm-0">
                    <h6 class="mb-3 nav-title">Pages</h6>
                    <ul class="list-unstyled mt-lg-3">
                      <li><a href="about.html">About</a></li>
                      <li><a href="services.html">Services</a></li>
                      <li><a href="pricing.html">Pricing</a></li>
                      <li><a href="career.html">Career</a></li>
                      <li><a href="advertising.html">Advertising</a></li>
                      <li><a href="contact-us.html">Contact Us</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-4 mb-2 mb-sm-0">
                    <h6 class="mb-3 nav-title">Pages</h6>
                    <ul class="list-unstyled mt-lg-3">
                      <li><a href="blog.html">Blog</a></li>
                      <li><a href="blog-detail.html">Blog Detail</a></li>
                      <li><a href="post-a-job.html">Post a Job</a></li>
                      <li><a href="faqs.html">Faq</a></li>
                      <li><a href="browse-categories.html">Browse Categories</a></li>
                      <li><a href="browse-locations.html">Browse Locations</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-4">
                    <h6 class="mb-3 nav-title">Pages</h6>
                    <ul class="list-unstyled mt-lg-3">
                      <li><a href="login.html">Login</a></li>
                      <li><a href="register.html">Register</a></li>
                      <li><a href="coming-soon.html">Coming soon</a></li>
                      <li><a href="404-error.html">404 Error</a></li>
                      <li><a href="terms-and-conditions.html">T&C</a></li>

                    </ul>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <div class="agency-logo pt-4 pb-3">
                      <h6 class="mb-3 nav-title">Top Agency</h6>
                      <ul class="list-unstyled">
                        <li>
                          <div class="job-list">
                            <div class="job-list-logo">
                              <img class="img-fluid" src="images/svg/07.svg" alt="">
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="job-list">
                            <div class="job-list-logo">
                              <img class="img-fluid" src="images/svg/06.svg" alt="">
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="job-list">
                            <div class="job-list-logo">
                              <img class="img-fluid" src="images/svg/05.svg" alt="">
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="job-list">
                            <div class="job-list-logo">
                              <img class="img-fluid" src="images/svg/04.svg" alt="">
                            </div>
                          </div>
                        </li>
                        <li>
                          <div class="job-list">
                            <div class="job-list-logo">
                              <img class="img-fluid" src="images/svg/03.svg" alt="">
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Listing <i class="fas fa-chevron-down fa-xs"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="job-grid.html">Job Grid</a></li>
              <li><a class="dropdown-item" href="job-listing.html">Job Listing</a></li>
              <li><a class="dropdown-item" href="job-detail.html">Job Detail</a></li>
              <li><a class="dropdown-item" href="job-listing-map.html">Job Listing Map</a></li>
            </ul>
          </li>
          <li class="dropdown nav-item mega-menu">
            <a href="javascript:void(0)" class="nav-link" data-bs-toggle="dropdown">Elements<i class="fas fa-chevron-down fa-xs"></i></a>
            <ul class="dropdown-menu megamenu">
              <li>
                <div class="row">
                  <div class="col-sm-6 col-lg-5 mb-3 mb-lg-0">
                    <h6 class="mb-3 nav-title">Search Types</h6>
                    <ul class="list-unstyled mt-lg-3">
                      <li><a href="search-style-under-banner.html">Search style under banner</a></li>
                      <li><a href="search-style-above-banner.html">Search style above banner</a></li>
                      <li><a href="search-style-below-banner.html">Search style below banner</a></li>
                      <li><a href="search-style-advanced.html">Advanced Search style</a></li>
                      <li><a href="search-style-classic.html">Search style classic</a></li>
                      <li><a href="search-style-with-filter.html">Search style with filter</a></li>
                      <li><a href="search-style-advanced-02.html">Advanced Search style 02 </a></li>
                      <li><a href="search-style-advanced-03.html">Advanced Search style 03 </a></li>
                    </ul>
                  </div>
                  <div class="col-sm-6 col-lg-3 mb-3 mb-sm-0">
                    <h6 class="mb-3 nav-title">Elements</h6>
                    <ul class="list-unstyled mt-lg-3">
                      <li><a href="element-feature-box.html">Feature box</a></li>
                      <li><a href="element-testimonials.html">Testimonials</a></li>
                      <li><a href="element-accordion.html">Accordion</a></li>
                      <li><a href="element-tabs.html">Tabs</a></li>
                      <li><a href="element-typography.html">Typography</a></li>
                      <li><a href="element-counter.html">counter</a></li>
                      <li><a href="element-countdown.html">Countdown</a></li>
                      <li><a href="element-category.html">Category</a></li>
                    </ul>
                  </div>
                  <div class="col-sm-6 col-lg-4">
                    <div class="menu-banner bg-dark p-3 pt-4 text-center border-radius h-100 d-none d-lg-block">
                        <h5 class="text-primary mb-3 pt-2">Advertise your job with us</h5>
                        <span class="text-light"> Starting from</span>
                        <h3 class="text-white my-3">$99 <small>/mo</small></h3>
                        <p class="text-primary p-2 small text-white">Save 30% for new customer</p>
                        <a class="btn btn-light btn-sm" href="post-a-job.html">Post a job now!</a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown active">
            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Employer <i class="fas fa-chevron-down fa-xs"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="employer-grid.html">Employer Grid</a></li>
              <li><a class="dropdown-item" href="employer-listing.html">Employer list</a></li>
              <li><a class="dropdown-item" href="employer-detail.html">Employer detail</a></li>
              <li><a class="dropdown-item" href="employer-listing-map.html">Employer Listing Map</a></li>
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="javascript:void(0)">Dashboard <i class="fas fa-chevron-right fa-xs"></i></a>
                  <ul class="dropdown-menu left-side">
                    <li><a class="dropdown-item" href="dashboard-employer.html">Dashboard</a></li>
                    <li><a class="dropdown-item" href="dashboard-employer-my-profile.html">Profile</a></li>
                    <li class="active"><a class="dropdown-item" href="dashboard-employer-change-password.html">Change Password </a></li>
                    <li><a class="dropdown-item" href="dashboard-employer-manage-candidates.html">Manage Candidates</a></li>
                    <li><a class="dropdown-item" href="dashboard-employer-manage-jobs.html">Manage Jobs</a></li>
                    <li><a class="dropdown-item" href="dashboard-employer-post-new-job.html">Post New Job</a></li>
                    <li><a class="dropdown-item" href="dashboard-employer-pricing.html">Pricing</a></li>
                  </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Candidates <i class="fas fa-chevron-down fa-xs"></i>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="candidates-grid.html">Candidates Grid</a></li>
              <li><a class="dropdown-item" href="candidates-listing.html">Candidates list</a></li>
              <li><a class="dropdown-item" href="candidate-detail.html">Candidates detail</a></li>
              <li><a class="dropdown-item" href="candidates-listing-map.html">Candidates Listing Map</a></li>
              <li class="dropdown-submenu">
                <a class="dropdown-item dropdown-toggle" href="javascript:void(0)">Dashboard <i class="fas fa-chevron-right fa-xs"></i></a>
                  <ul class="dropdown-menu left-side">
                    <li><a class="dropdown-item" href="dashboard-candidates.html">Dashboard</a></li>
                    <li><a class="dropdown-item" href="dashboard-candidates-my-profile.html">Profile</a></li>
                    <li><a class="dropdown-item" href="dashboard-candidates-change-password.html">Change Password </a></li>
                    <li><a class="dropdown-item" href="dashboard-candidates-my-resume.html">My Resume</a></li>
                    <li><a class="dropdown-item" href="dashboard-candidates-manage-jobs.html">Manage Jobs</a></li>
                    <li><a class="dropdown-item" href="dashboard-candidates-saved-jobs.html">Saved Jobs</a></li>
                    <li><a class="dropdown-item" href="dashboard-candidates-pricing.html">Pricing</a></li>
                  </ul>
              </li>
              <li><a class="dropdown-item" href="my-resume.html">My Resume <span class="badge bg-danger ms-2">CV</span></a></li>
            </ul>
          </li>
        </ul>
      </div>
      <div class="add-listing">
          <div class="login d-inline-block me-4">
            <a href="login.html" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class="far fa-user pe-2"></i>Sign in</a>
          </div>
          <a class="btn btn-white btn-md" href="post-a-job.html"> <i class="fas fa-plus-circle"></i>Post a job</a>
        </div>
    </div>
  </nav>
</header>
<!--=================================
header -->

<!--=================================
inner banner -->
<div class="header-inner bg-light">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="jobber-user-info">
            <div class="profile-avatar">
              <img class="img-fluid " src="images/svg/01.svg" alt="">
              <i class="fas fa-pencil-alt"></i>
            </div>
            <div class="profile-avatar-info ms-4">
               <h3>Fleet Improvements Pvt</h3>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
<!--=================================
inner banner -->

<!--=================================
Dashboard Nav -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sticky-top secondary-menu-sticky-top">
          <div class="secondary-menu">
            <ul>
              <li><a href="dashboard-employer.html">Dashboard</a></li>
              <li><a href="dashboard-employer-my-profile.html">My Profile</a></li>
              <li><a  class="active" href="dashboard-employer-change-password.html">Change Password</a></li>
              <li><a href="dashboard-employer-manage-candidates.html">Manage Candidates</a></li>
              <li><a href="dashboard-employer-manage-jobs.html">Manage Jobs</a></li>
              <li><a href="dashboard-employer-post-new-job.html">Post New Job</a></li>
              <li><a href="dashboard-employer-pricing.html">Pricing Plan</a></li>
              <li><a href="login.html">Log Out</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Dashboard Nav -->

<!--=================================
Change Password -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box">
          <div class="section-title-02 mb-4">
            <h4>Change Password</h4>
          </div>
          <div class="row">
            <div class="col-12">
              <form class="row">
                <div class="form-group mb-3 col-md-12">
                  <label class="form-label">Current Password</label>
                  <input type="password" class="form-control" value="">
                </div>
                <div class="form-group mb-3 col-md-12">
                  <label class="form-label">New Password</label>
                  <input type="password" class="form-control" value="">
                </div>
                <div class="form-group col-md-12 mb-0">
                  <label class="form-label">Confirm Password</label>
                  <input type="password" class="form-control" value="">
                </div>
              </form>
            </div>
          </div>
        </div>
        <a class="btn btn-lg btn-primary" href="#">Change Password</a>
      </div>
    </div>
  </div>
</section>
<!--=================================
Change Password -->

<!--=================================
footer -->

<!--=================================
footer -->

<!--=================================
Back To Top-->
   <div id="back-to-top" class="back-to-top">
     <i class="fas fa-angle-up"></i>
   </div>
<!--=================================
Back To Top-->

<!--=================================
Signin Modal Popup -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header p-4">
        <h4 class="mb-0 text-center">Login to Your Account</h4>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="login-register">
          <fieldset>
            <legend class="px-2">Choose your Account Type</legend>
            <ul class="nav nav-tabs nav-tabs-border d-flex" role="tablist">
              <li class="nav-item me-4">
                <a class="nav-link active"  data-bs-toggle="tab" href="#candidate" role="tab" aria-selected="false">
                  <div class="d-flex">
                    <div class="tab-icon">
                      <i class="flaticon-users"></i>
                    </div>
                    <div class="ms-3">
                      <h6 class="mb-0">Candidate</h6>
                      <p class="mb-0">Log in as Candidate</p>
                    </div>
                  </div>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  data-bs-toggle="tab" href="#employer" role="tab" aria-selected="false">
                  <div class="d-flex">
                    <div class="tab-icon">
                      <i class="flaticon-suitcase"></i>
                    </div>
                    <div class="ms-3">
                      <h6 class="mb-0">Employer</h6>
                      <p class="mb-0">Log in as Employer</p>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </fieldset>
          <div class="tab-content">
            <div class="tab-pane active" id="candidate" role="tabpanel">
              <form class="mt-4">
                <div class="row">
                  <div class="form-group col-12 mb-3">
                    <label class="form-label" for="Email2">Username / Email Address:</label>
                    <input type="text" class="form-control" id="Email22">
                  </div>
                  <div class="form-group col-12 mb-3">
                    <label class="form-label" for="password2">Password*</label>
                    <input type="password" class="form-control" id="password32">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <a class="btn btn-primary d-grid" href="#">Sign In</a>
                  </div>
                  <div class="col-md-6">
                    <div class="ms-md-3 mt-3 mt-md-0 forgot-pass">
                      <a href="#">Forgot Password?</a>
                      <p class="mt-1">Don't have account? <a href="register.html">Sign Up here</a></p>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="tab-pane fade" id="employer" role="tabpanel">
              <form class="mt-4">
                <div class="row">
                  <div class="form-group col-12 mb-3">
                    <label class="form-label" for="Email2">Username / Email Address:</label>
                    <input type="text" class="form-control" id="Email2">
                  </div>
                  <div class="form-group col-12 mb-3">
                    <label class="form-label" for="password2">Password*</label>
                    <input type="password" class="form-control" id="password2">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <a class="btn btn-primary d-grid" href="#">Sign In</a>
                  </div>
                  <div class="col-md-6">
                    <div class="ms-md-3 mt-3 mt-md-0">
                      <a href="#">Forgot Password?</a>
                      <div class="form-check mt-2">
                        <input class="form-check-input" type="checkbox" value="" id="Remember-02">
                        <label class="form-check-label" for="Remember-02">Remember Password</label>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="mt-4">
            <fieldset>
              <legend class="px-2">Login or Sign up with</legend>
              <div class="social-login">
                <ul class="list-unstyled d-flex mb-0">
                  <li class="facebook text-center">
                    <a href="#"> <i class="fab fa-facebook-f me-3 me-md-4"></i>Login with Facebook</a>
                  </li>
                  <li class="twitter text-center">
                    <a href="#"> <i class="fab fa-twitter me-3 me-md-4"></i>Login with Twitter</a>
                  </li>
                  <li class="google text-center">
                    <a href="#"> <i class="fab fa-google me-3 me-md-4"></i>Login with Google</a>
                  </li>
                  <li class="linkedin text-center">
                    <a href="#"> <i class="fab fa-linkedin-in me-3 me-md-4"></i>Login with Linkedin</a>
                  </li>
                </ul>
              </div>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--=================================
Signin Modal Popup -->

<!--=================================
Javascript -->

    <!-- JS Global Compulsory (Do not remove)-->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="js/custom.js"></script>

</body>


<!-- Mirrored from themes.potenzaglobalsolutions.com/html/jobber/dashboard-employer-change-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Mar 2022 19:22:47 GMT -->
</html>
