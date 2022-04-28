@extends('layouts.master')
@section('title','stagitunisie')
@section('content')
<!--=================================
banner -->
<section class="header-inner header-inner-big bg-holder text-white" style="background-image: url(images/bg/banner-01.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="job-search-field">
          <div class="job-search-item">
            <form class="form row">
              <div class="col-lg-5 col-md-4">
                <div class="form-group left-icon mb-md-0">
                  <input type="text" class="form-control" name="job_title" placeholder="What?">
                <i class="fas fa-search"></i> </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="form-group left-icon mb-md-0">
                  <input type="text" class="form-control" name="job_title" placeholder="Where?">
                <i class="fas fa-search"></i> </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="form-group form-action mb-0">
                  <button type="submit" class="btn btn-primary mt-0"><i class="fas fa-search-location"></i> Find Candidate</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
banner -->

<!--=================================
candidate post-box list -->
<section class="space-ptb">
  <div class="container">
    <div class="row">
      <div class="col-lg-">
        <div class="row">
          <div class="col-12">
            <div class="candidate-list">
              <div class="candidate-list-image">
                <img class="img-fluid" src="images/avatar/04.jpg" alt="" >
              </div>
              <div class="candidate-list-details">
                <div class="candidate-list-info">
                  <div class="candidate-list-title">
                    <h5 class="mb-0"><a href="/candidate-detail">Melissa Doe</a></h5>
                  </div>
                  <div class="candidate-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-filter pe-1"></i>Construction & Property</li>
                      <li><i class="fas fa-map-marker-alt pe-1"></i>Botchergate, Carlisle</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="candidate-list-favourite-time">
                <a class="candidate-list-favourite order-2" href="/candidate-detail"><i class="far fa-heart"></i></a>
                <span class="candidate-list-time order-1"><i class="far fa-clock pe-1"></i>6D ago</span>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="candidate-list">
              <div class="candidate-list-image">
                <img class="img-fluid" src="images/avatar/03.jpg" alt="" >
              </div>
              <div class="candidate-list-details">
                <div class="candidate-list-info">
                  <div class="candidate-list-title">
                    <h5 class="mb-0"><a href="/candidate-detail">Paul Flavius</a></h5>
                  </div>
                  <div class="candidate-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-filter pe-1"></i>General Insurance</li>
                      <li><i class="fas fa-map-marker-alt pe-1"></i>Ormskirk Rd, Wigan</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="candidate-list-favourite-time">
                <a class="candidate-list-favourite order-2" href="/candidate-detail"><i class="far fa-heart"></i></a>
                <span class="candidate-list-time order-1"><i class="far fa-clock pe-1"></i>3D ago</span>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="candidate-list">
              <div class="candidate-list-image">
                <img class="img-fluid" src="images/avatar/05.jpg" alt="" >
              </div>
              <div class="candidate-list-details">
                <div class="candidate-list-info">
                  <div class="candidate-list-title">
                    <h5 class="mb-0"><a href="/candidate-detail">Felica Queen</a></h5>
                  </div>
                  <div class="candidate-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-filter pe-1"></i>General Insurance</li>
                      <li><i class="fas fa-map-marker-alt pe-1"></i>Union St, New Delhi</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="candidate-list-favourite-time">
                <a class="candidate-list-favourite order-2" href="/candidate-detail"><i class="far fa-heart"></i></a>
                <span class="candidate-list-time order-1"><i class="far fa-clock pe-1"></i>2D ago</span>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="candidate-list">
              <div class="candidate-list-image">
                <img class="img-fluid" src="images/avatar/08.jpg" alt="" >
              </div>
              <div class="candidate-list-details">
                <div class="candidate-list-info">
                  <div class="candidate-list-title">
                    <h5 class="mb-0"><a href="/candidate-detail">Carolyn & Dan</a></h5>
                  </div>
                  <div class="candidate-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-filter pe-1"></i>Recruitment Consultancy</li>
                      <li><i class="fas fa-map-marker-alt pe-1"></i>Paris, Île-de-France</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="candidate-list-favourite-time">
                <a class="candidate-list-favourite order-2" href="/candidate-detail"><i class="far fa-heart"></i></a>
                <span class="candidate-list-time order-1"><i class="far fa-clock pe-1"></i>2W ago</span>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="candidate-list">
              <div class="candidate-list-image">
                <img class="img-fluid" src="images/avatar/06.jpg" alt="" >
              </div>
              <div class="candidate-list-details">
                <div class="candidate-list-info">
                  <div class="candidate-list-title">
                    <h5 class="mb-0"><a href="/candidate-detail">Sara Lisbon</a></h5>
                  </div>
                  <div class="candidate-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-filter pe-1"></i>Strategy & Consultancy</li>
                      <li><i class="fas fa-map-marker-alt pe-1"></i>Canyon Village, Ramon</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="candidate-list-favourite-time">
                <a class="candidate-list-favourite order-2" href="/candidate-detail"><i class="far fa-heart"></i></a>
                <span class="candidate-list-time order-1"><i class="far fa-clock pe-1"></i>3W ago</span>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="candidate-list">
              <div class="candidate-list-image">
                <img class="img-fluid" src="images/avatar/02.jpg" alt="" >
              </div>
              <div class="candidate-list-details">
                <div class="candidate-list-info">
                  <div class="candidate-list-title">
                    <h5 class="mb-0"><a href="/candidate-detail">John Doe</a></h5>
                  </div>
                  <div class="candidate-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-filter pe-1"></i>Strategy & Consultancy</li>
                      <li><i class="fas fa-map-marker-alt pe-1"></i>Lynch Lane, Weymouth</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="candidate-list-favourite-time">
                <a class="candidate-list-favourite order-2" href="/candidate-detail"><i class="far fa-heart"></i></a>
                <span class="candidate-list-time order-1"><i class="far fa-clock pe-1"></i>1M ago</span>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="candidate-list">
              <div class="candidate-list-image">
                <img class="img-fluid" src="images/avatar/07.jpg" alt="" >
              </div>
              <div class="candidate-list-details">
                <div class="candidate-list-info">
                  <div class="candidate-list-title">
                    <h5 class="mb-0"><a href="/candidate-detail">Reyna Chung</a></h5>
                  </div>
                  <div class="candidate-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-filter pe-1"></i>Transport & Logistics</li>
                      <li><i class="fas fa-map-marker-alt pe-1"></i>Needham, MA</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="candidate-list-favourite-time">
                <a class="candidate-list-favourite order-2" href="/candidate-detail"><i class="far fa-heart"></i></a>
                <span class="candidate-list-time order-1"><i class="far fa-clock pe-1"></i>1H ago</span>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="candidate-list">
              <div class="candidate-list-image">
                <img class="img-fluid" src="images/avatar/08.jpg" alt="" >
              </div>
              <div class="candidate-list-details">
                <div class="candidate-list-info">
                  <div class="candidate-list-title">
                    <h5 class="mb-0"><a href="/candidate-detail">Carolyn & Dan</a></h5>
                  </div>
                  <div class="candidate-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-filter pe-1"></i>Apprenticeships</li>
                      <li><i class="fas fa-map-marker-alt pe-1"></i>Botchergate, Carlisle</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="candidate-list-favourite-time">
                <a class="candidate-list-favourite order-2" href="/candidate-detail"><i class="far fa-heart"></i></a>
                <span class="candidate-list-time order-1"><i class="far fa-clock pe-1"></i>3M ago</span>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="candidate-list">
              <div class="candidate-list-image">
                <img class="img-fluid" src="images/avatar/09.jpg" alt="" >
              </div>
              <div class="candidate-list-details">
                <div class="candidate-list-info">
                  <div class="candidate-list-title">
                    <h5 class="mb-0"><a href="/candidate-detail">Michael Bean</a></h5>
                  </div>
                  <div class="candidate-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-filter pe-1"></i>Estate Agency</li>
                      <li><i class="fas fa-map-marker-alt pe-1"></i>Park Avenue, Mumbai</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="candidate-list-favourite-time">
                <a class="candidate-list-favourite order-2" href="/candidate-detail"><i class="far fa-heart"></i></a>
                <span class="candidate-list-time order-1"><i class="far fa-clock pe-1"></i>6D ago</span>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="candidate-list">
              <div class="candidate-list-image">
                <img class="img-fluid" src="images/avatar/10.jpg" alt="" >
              </div>
              <div class="candidate-list-details">
                <div class="candidate-list-info">
                  <div class="candidate-list-title">
                    <h5 class="mb-0"><a href="/candidate-detail">Jessica & Alex</a></h5>
                  </div>
                  <div class="candidate-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-filter pe-1"></i>EHealth & Medicine</li>
                      <li><i class="fas fa-map-marker-alt pe-1"></i>Wellesley Rd, London</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="candidate-list-favourite-time">
                <a class="candidate-list-favourite order-2" href="/candidate-detail"><i class="far fa-heart"></i></a>
                <span class="candidate-list-time order-1"><i class="far fa-clock pe-1"></i>2W ago</span>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="candidate-list">
              <div class="candidate-list-image">
                <img class="img-fluid" src="images/avatar/11.jpg" alt="" >
              </div>
              <div class="candidate-list-details">
                <div class="candidate-list-info">
                  <div class="candidate-list-title">
                    <h5 class="mb-0"><a href="/candidate-detail">Anne Smith</a></h5>
                  </div>
                  <div class="candidate-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-filter pe-1"></i>Marketing & PR</li>
                      <li><i class="fas fa-map-marker-alt pe-1"></i>Burry Port, Surat</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="candidate-list-favourite-time">
                <a class="candidate-list-favourite order-2" href="/candidate-detail"><i class="far fa-heart"></i></a>
                <span class="candidate-list-time order-1"><i class="far fa-clock pe-1"></i>1D ago</span>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center mt-4 mt-sm-5">
            <ul class="pagination justify-content-center mb-0">
              <li class="page-item disabled"> <span class="page-link b-radius-none">Prev</span> </li>
              <li class="page-item active" aria-current="page"><span class="page-link">1 </span> <span class="sr-only">(current)</span></li>
              <li class="page-item"><a class="page-link" href="/candidate-detail">2</a></li>
              <li class="page-item"><a class="page-link" href="/candidate-detail">3</a></li>
              <li class="page-item"><a class="page-link" href="/candidate-detail">...</a></li>
              <li class="page-item"><a class="page-link" href="/candidate-detail">25</a></li>
              <li class="page-item"> <a class="page-link" href="/candidate-detail">Next</a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
candidate post-box list -->

<!--=================================
feature info section -->
<section class="feature-info-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-lg-0 mb-4">
        <div class="feature-info feature-info-02 p-4 p-lg-5 bg-primary">
          <div class="feature-info-icon mb-3 mb-sm-0 text-dark">
            <i class="flaticon-team"></i>
          </div>
          <div class="feature-info-content text-white ps-sm-4 ps-0">
            <p>Jobseeker</p>
            <h5 class="text-white">Looking For Job?</h5>
          </div>
          <a class="ms-auto align-self-center" href="/candidate-detail">Apply now<i class="fas fa-long-arrow-alt-right"></i> </a>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="feature-info feature-info-02 p-4 p-lg-5 bg-dark">
          <div class="feature-info-icon mb-3 mb-sm-0 text-primary">
            <i class="flaticon-job-3"></i>
          </div>
          <div class="feature-info-content text-white ps-sm-4 ps-0">
            <p>Recruiter</p>
            <h5 class="text-white">Are You Recruiting?</h5>
          </div>
          <a class="ms-auto align-self-center" href="/candidate-detail">Post a job<i class="fas fa-long-arrow-alt-right"></i> </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
feature info section -->


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
                <a class="nav-link active"  data-bs-toggle="tab" href="/candidate-detailcandidate" role="tab" aria-selected="false">
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
                <a class="nav-link"  data-bs-toggle="tab" href="/candidate-detailemployer" role="tab" aria-selected="false">
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
                    <a class="btn btn-primary d-grid" href="/candidate-detail">Sign In</a>
                  </div>
                  <div class="col-md-6">
                    <div class="ms-md-3 mt-3 mt-md-0 forgot-pass">
                      <a href="/candidate-detail">Forgot Password?</a>
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
                    <a class="btn btn-primary d-grid" href="/candidate-detail">Sign In</a>
                  </div>
                  <div class="col-md-6">
                    <div class="ms-md-3 mt-3 mt-md-0">
                      <a href="/candidate-detail">Forgot Password?</a>
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
                    <a href="/candidate-detail"> <i class="fab fa-facebook-f me-3 me-md-4"></i>Login with Facebook</a>
                  </li>
                  <li class="twitter text-center">
                    <a href="/candidate-detail"> <i class="fab fa-twitter me-3 me-md-4"></i>Login with Twitter</a>
                  </li>
                  <li class="google text-center">
                    <a href="/candidate-detail"> <i class="fab fa-google me-3 me-md-4"></i>Login with Google</a>
                  </li>
                  <li class="linkedin text-center">
                    <a href="/candidate-detail"> <i class="fab fa-linkedin-in me-3 me-md-4"></i>Login with Linkedin</a>
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

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="js/select2/select2.full.js"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="js/custom.js"></script>

</body>

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/jobber/candidates-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Mar 2022 19:22:52 GMT -->
</html>
