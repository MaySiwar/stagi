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
                <div class="form-group left-icon mb-md-0 mb-3">
                  <input type="text" class="form-control" name="job_title" placeholder="What?">
                <i class="fas fa-search"></i> </div>
              </div>
              <div class="col-lg-4 col-md-4">
                <div class="form-group left-icon mb-md-0 mb-3">
                  <input type="text" class="form-control" name="job_title" placeholder="Where?">
                <i class="fas fa-search"></i> </div>
              </div>
              <div class="col-lg-3 col-md-4 col-sm-12">
                <div class="form-group form-action mb-0">
                  <button type="submit" class="btn btn-primary mt-0"><i class="fas fa-search-location"></i> Find Employer</button>
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

<section class="space-ptb">
  <div class="container">
    <div class="row">
     
        <div class="employers-list">
          <div class="employers-list-logo">
            <img class="img-fluid" src="images/svg/01.svg" alt="">
          </div>
          <div class="employers-list-details">
            <div class="employers-list-info">
              <div class="employers-list-title">
                <h5 class="mb-0"><a href="/employer-detail">Fast Systems Consultants</a></h5>
              </div>
              <div class="employers-list-option">
                <ul class="list-unstyled">
                  <li><i class="fas fa-filter pe-1"></i>Accountancy</li>
                  <li><i class="fas fa-map-marker-alt pe-1"></i>Wellesley Rd, London</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="employers-list-position">
            <a class="btn btn-sm btn-dark" href="#">17 Open position</a>
          </div>
        </div>
        <div class="employers-list">
          <div class="employers-list-logo">
            <img class="img-fluid" src="images/svg/02.svg" alt="">
          </div>
          <div class="employers-list-details">
            <div class="employers-list-info">
              <div class="employers-list-title">
                <h5 class="mb-0"><a href="/employer-detail">Pendragon Green Ltd</a></h5>
              </div>
              <div class="employers-list-option">
                <ul class="list-unstyled">
                  <li><i class="fas fa-filter pe-1"></i>Accountancy (Qualified)</li>
                  <li><i class="fas fa-map-marker-alt pe-1"></i>Needham, MA</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="employers-list-position">
            <a class="btn btn-sm btn-dark" href="#">20 Open position</a>
          </div>
        </div>
        <div class="employers-list">
          <div class="employers-list-logo">
            <img class="img-fluid" src="images/svg/03.svg" alt="">
          </div>
          <div class="employers-list-details">
            <div class="employers-list-info">
              <div class="employers-list-title">
                <h5 class="mb-0"><a href="/employer-detail">Wight Sound Hearing LLC</a></h5>
              </div>
              <div class="employers-list-option">
                <ul class="list-unstyled">
                  <li><i class="fas fa-filter pe-1"></i>Admin, Secretarial</li>
                  <li><i class="fas fa-map-marker-alt pe-1"></i>New Castle, PA</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="employers-list-position">
            <a class="btn btn-sm btn-dark" href="#">23 Open position</a>
          </div>
        </div>
        <div class="employers-list">
          <div class="employers-list-logo">
            <img class="img-fluid" src="images/svg/04.svg" alt="">
          </div>
          <div class="employers-list-details">
            <div class="employers-list-info">
              <div class="employers-list-title">
                <h5 class="mb-0"><a href="/employer-detail">Tan Electrics Ltd</a></h5>
              </div>
              <div class="employers-list-option">
                <ul class="list-unstyled">
                  <li><i class="fas fa-filter pe-1"></i>Apprenticeships</li>
                  <li><i class="fas fa-map-marker-alt pe-1"></i>Park Avenue, Mumbai</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="employers-list-position">
            <a class="btn btn-sm btn-dark" href="#">25 Open position</a>
          </div>
        </div>
        <div class="employers-list">
          <div class="employers-list-logo">
            <img class="img-fluid" src="images/svg/05.svg" alt="">
          </div>
          <div class="employers-list-details">
            <div class="employers-list-info">
              <div class="employers-list-title">
                <h5 class="mb-0"><a href="/employer-detail">Fleet Improvements Pvt</a></h5>
              </div>
              <div class="employers-list-option">
                <ul class="list-unstyled">
                  <li><i class="fas fa-filter pe-1"></i>Banking</li>
                  <li><i class="fas fa-map-marker-alt pe-1"></i>Green Lanes, London</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="employers-list-position">
            <a class="btn btn-sm btn-dark" href="#">28 Open position</a>
          </div>
        </div>
        <div class="employers-list">
          <div class="employers-list-logo">
            <img class="img-fluid" src="images/svg/06.svg" alt="">
          </div>
          <div class="employers-list-details">
            <div class="employers-list-info">
              <div class="employers-list-title">
                <h5 class="mb-0"><a href="/employer-detail">Northwood (Torbay) Ltd</a></h5>
              </div>
              <div class="employers-list-option">
                <ul class="list-unstyled">
                  <li><i class="fas fa-filter pe-1"></i>Charity & Voluntary</li>
                  <li><i class="fas fa-map-marker-alt pe-1"></i>Ormskirk Rd, Wigan</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="employers-list-position">
            <a class="btn btn-sm btn-dark" href="#">30 Open position</a>
          </div>
        </div>
        <div class="employers-list">
          <div class="employers-list-logo">
            <img class="img-fluid" src="images/svg/19.svg" alt="">
          </div>
          <div class="employers-list-details">
            <div class="employers-list-info">
              <div class="employers-list-title">
                <h5 class="mb-0"><a href="/employer-detail">Bright Sparks PLC</a></h5>
              </div>
              <div class="employers-list-option">
                <ul class="list-unstyled">
                  <li><i class="fas fa-filter pe-1"></i>Construction & Property</li>
                  <li><i class="fas fa-map-marker-alt pe-1"></i>Taunton, London</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="employers-list-position">
            <a class="btn btn-sm btn-dark" href="#">34 Open position</a>
          </div>
        </div>
        <div class="employers-list">
          <div class="employers-list-logo">
            <img class="img-fluid" src="images/svg/08.svg" alt="">
          </div>
          <div class="employers-list-details">
            <div class="employers-list-info">
              <div class="employers-list-title">
                <h5 class="mb-0"><a href="/employer-detail">NameThe Raj Douth</a></h5>
              </div>
              <div class="employers-list-option">
                <ul class="list-unstyled">
                  <li><i class="fas fa-filter pe-1"></i>Customer Service</li>
                  <li><i class="fas fa-map-marker-alt pe-1"></i>Botchergate, Carlisle</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="employers-list-position">
            <a class="btn btn-sm btn-dark" href="#">40 Open position</a>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center mt-4 mt-sm-5">
            <ul class="pagination justify-content-center mb-0">
              <li class="page-item disabled"> <span class="page-link b-radius-none">Prev</span> </li>
              <li class="page-item active" aria-current="page"><span class="page-link">1 </span> <span class="sr-only">(current)</span></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">...</a></li>
              <li class="page-item"><a class="page-link" href="#">25</a></li>
              <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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
          <a class="ms-auto align-self-center" href="#">Apply now<i class="fas fa-long-arrow-alt-right"></i> </a>
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
          <a class="ms-auto align-self-center" href="#">Post a job<i class="fas fa-long-arrow-alt-right"></i> </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
feature info section -->

<!--=================================
footer -->


    <!-- JS Global Compulsory (Do not remove)-->
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="js/select2/select2.full.js"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="js/custom.js"></script>

</body>

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/jobber/employer-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 23 Mar 2022 19:22:28 GMT -->
</html>
