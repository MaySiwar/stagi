@extends('layouts.master')
@section('title','stagitunisie')
@section('content')
<section class="banner bg-holder bg-overlay-black-30 text-white" style="background-image: url(images/bg/banner-01.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center position-relative">
        <h1 class="text-white mb-3">Drop <span class="text-primary"> Resume & Get </span> Your Desired Traineeship</h1>
        <p class="lead mb-4 mb-lg-5 fw-normal">Find traineeships, Employment & Career Opportunities</p>
        <div class="job-search-field">
          <div class="job-search-item">
            <form class="form row">
              <div class="col-lg-5">
                <div class="form-group mb-3">
                  <div class="d-flex">
                    <label class="form-label">What</label>
                    <span class="ms-auto">e.g. traineeship company, title</span>
                  </div>
                  <div class="position-relative left-icon">
                    <input type="text" class="form-control" name="job_title" placeholder="Job title, skill or company">
                    <i class="fas fa-search"></i>
                  </div>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="form-group mb-3">
                  <div class="d-flex">
                    <label class="form-label">Where</label>
                    <span class="ms-auto">e.g. city, county or postcode</span>
                  </div>
                  <div class="position-relative left-icon">
                    <input type="text" class="form-control location-input" name="job_title" placeholder="Town, city or postcode">
                    <i class="far fa-compass"></i>
                    <a href="#">
                      <div class="detect">
                        <span class="d-none d-sm-block">Detect</span>
                        <i class="fas fa-crosshairs"></i>
                      </div>
                     </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-12">
                <div class="form-group mb-3 form-action">
                  <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-search"></i> Find traineeships</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="job-tag mt-4">
          <ul class="justify-content-center">
            <li class="text-primary">Trending Keywords :</li>
            <li><a href="#">Automotive,</a></li>
            <li><a href="#">Education,</a></li>
            <li><a href="#">Health and Care Engineering</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Banner -->
<!--=================================
Jobs-listing -->
<section class="space-ptb">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="section-title">
          <h2 class="title">traineeships You May be Interested in</h2>
        </div>
      </div>
      <div class="col-12">
        <div class="browse-job d-flex border-0 pb-3">
          <div class="mb-4 mb-md-0">
            <ul class="nav nav-tabs justify-content-center d-flex" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Paid</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Unpaid</a>
              </li>
            </ul>
          </div>
          <div class="job-found ms-auto mb-0">
            <span class="badge badge-lg bg-primary">24123</span>
            <h6 class="ms-3 mb-0">traineeship Found</h6>
          </div>
        </div>
        <div class="tab-content" id="myTabContent">
          <!-- Hot jobs -->
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="row mt-3">
              <div class="col-lg-6 mb-4 mb-sm-0">
                <!-- Freelance -->
                <div class="job-list">
                  <div class="job-list-logo">
                    <img class="img-fluid" src="images/svg/10.svg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h5 class="mb-0"><a href="job-detail.html">Post Room Operative</a></h5>
                      </div>
                      <div class="job-list-option">
                        <ul class="list-unstyled">
                          <li>
                            <span>via</span>
                            <a href="employer-detail.html">Trout Design Ltd</a>
                          </li>
                          <li><i class="fas fa-map-marker-alt pe-1"></i>Wellesley Rd, London</li>
                          <li><i class="fas fa-filter pe-1"></i>Accountancy</li>
                          <li><a class="freelance" href="#"><i class="fas fa-suitcase pe-1"></i>Freelance</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="job-list-favourite-time">
                    <a  class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                    <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>1H ago</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4 mb-sm-0">
                <!-- Part-Time -->
                <div class="job-list">
                  <div class="job-list-logo">
                    <img class="img-fluid" src="images/svg/09.svg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h5 class="mb-0"><a href="job-detail.html">Web Developer – .net</a></h5>
                      </div>
                      <div class="job-list-option">
                        <ul class="list-unstyled">
                          <li>
                            <span>via</span>
                            <a href="employer-detail.html">Pendragon Green Ltd</a>
                          </li>
                          <li><i class="fas fa-map-marker-alt pe-1"></i>Needham, MA</li>
                          <li><i class="fas fa-filter pe-1"></i>IT & Telecoms</li>
                          <li><a class="part-time" href="#"><i class="fas fa-suitcase pe-1"></i>Part-Time</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="job-list-favourite-time">
                    <a  class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                    <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>3D ago</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4 mb-sm-0">
                <!-- Temporary -->
                <div class="job-list">
                  <div class=" job-list-logo">
                    <img class="img-fluid" src="images/svg/06.svg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h5 class="mb-0"><a href="job-detail.html">Group Marketing Manager</a></h5>
                      </div>
                      <div class="job-list-option">
                        <ul class="list-unstyled">
                          <li>
                            <span>via</span>
                            <a href="employer-detail.html">Wight Sound Hearing LLC</a>
                          </li>
                          <li><i class="fas fa-map-marker-alt pe-1"></i>New Castle, PA</li>
                          <li><i class="fas fa-filter pe-1"></i>Banking</li>
                          <li><a class="temporary" href="#"><i class="fas fa-suitcase pe-1"></i>Temporary</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="job-list-favourite-time">
                    <a  class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                    <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>2W ago</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4 mb-sm-0">
                <!-- Full time -->
                <div class="job-list">
                  <div class="job-list-logo">
                    <img class="img-fluid" src="images/svg/17.svg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h5 class="mb-0"><a href="job-detail.html">Data Entry Administrator</a></h5>
                      </div>
                      <div class="job-list-option">
                        <ul class="list-unstyled">
                          <li>
                            <span>via</span>
                            <a href="employer-detail.html">Tan Electrics Ltd</a>
                          </li>
                          <li><i class="fas fa-map-marker-alt pe-1"></i>Park Avenue, Mumbai</li>
                          <li><i class="fas fa-filter pe-1"></i>Charity & Voluntary</li>
                          <li><a class="full-time" href="#"><i class="fas fa-suitcase pe-1"></i>Full-time</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="job-list-favourite-time">
                    <a  class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                    <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>3M ago</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4 mb-sm-0">
                <!-- Freelance -->
                <div class="job-list">
                  <div class="job-list-logo">
                    <img class="img-fluid" src="images/svg/18.svg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h5 class="mb-0"><a href="job-detail.html">Stockroom Assistant</a></h5>
                      </div>
                      <div class="job-list-option">
                        <ul class="list-unstyled">
                          <li>
                            <span>via</span>
                            <a href="employer-detail.html">Bright Sparks PLC</a>
                          </li>
                          <li><i class="fas fa-map-marker-alt pe-1"></i>Canyon Village, Ramon</li>
                          <li><i class="fas fa-filter pe-1"></i>Financial Services</li>
                          <li><a class="freelance" href="#"><i class="fas fa-suitcase pe-1"></i>Freelance</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="job-list-favourite-time">
                    <a  class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                    <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>6M ago</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <!-- Part-Time -->
                <div class="job-list">
                  <div class="job-list-logo">
                    <img class="img-fluid" src="images/svg/19.svg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h5 class="mb-0"><a href="job-detail.html">Land Development Marketer</a></h5>
                      </div>
                      <div class="job-list-option">
                        <ul class="list-unstyled">
                          <li>
                            <span>via</span>
                            <a href="employer-detail.html">Carphone Warehouse</a>
                          </li>
                          <li><i class="fas fa-map-marker-alt pe-1"></i>Canyon Village, Ramon</li>
                          <li><i class="fas fa-filter pe-1"></i>IT & Telecoms</li>
                          <li><a class="part-time" href="#"><i class="fas fa-suitcase pe-1"></i>Part-Time</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="job-list-favourite-time">
                    <a  class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                    <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>1M ago</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Recent jobs -->
          <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row mt-4">
              <div class="col-lg-6 mb-4 mb-sm-0">
                <!-- Freelance -->
                <div class="job-list">
                  <div class="job-list-logo">
                    <img class="img-fluid" src="images/svg/11.svg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h5 class="mb-0"><a href="job-detail.html">Marketing and Communications</a></h5>
                      </div>
                      <div class="job-list-option">
                        <ul class="list-unstyled">
                          <li>
                            <span>via</span>
                            <a href="employer-detail.html">Fast Systems Consultants</a>
                          </li>
                          <li><i class="fas fa-map-marker-alt pe-1"></i>Wellesley Rd, London</li>
                          <li><i class="fas fa-filter pe-1"></i>Accountancy</li>
                          <li><a class="freelance" href="#"><i class="fas fa-suitcase pe-1"></i>Freelance</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="job-list-favourite-time">
                    <a  class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                    <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>1H ago</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4 mb-sm-0">
                <!-- Part-Time -->
                <div class="job-list">
                  <div class="job-list-logo">
                    <img class="img-fluid" src="images/svg/12.svg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h5 class="mb-0"><a href="job-detail.html">Senior Rolling Stock Technician</a></h5>
                      </div>
                      <div class="job-list-option">
                        <ul class="list-unstyled">
                          <li>
                            <span>via</span>
                            <a href="employer-detail.html"> Pendragon Green Ltd</a>
                          </li>
                          <li><i class="fas fa-map-marker-alt pe-1"></i>Needham, MA</li>
                          <li><i class="fas fa-filter pe-1"></i>IT & Telecoms</li>
                          <li><a class="part-time" href="#"><i class="fas fa-suitcase pe-1"></i>Part-Time</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="job-list-favourite-time">
                    <a  class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                    <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>3D ago</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4 mb-sm-0">
                <!-- Temporary -->
                <div class="job-list">
                  <div class=" job-list-logo">
                    <img class="img-fluid" src="images/svg/13.svg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h5 class="mb-0"><a href="job-detail.html">Operational Manager Part-Time</a></h5>
                      </div>
                      <div class="job-list-option">
                        <ul class="list-unstyled">
                          <li>
                            <span>via</span>
                            <a href="employer-detail.html"> Wight Sound Hearing LLC</a>
                          </li>
                          <li><i class="fas fa-map-marker-alt pe-1"></i>New Castle, PA</li>
                          <li><i class="fas fa-filter pe-1"></i>Banking</li>
                          <li><a class="temporary" href="#"><i class="fas fa-suitcase pe-1"></i>Temporary</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="job-list-favourite-time">
                    <a  class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                    <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>2W ago</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4 mb-sm-0">
                <!-- Full time -->
                <div class="job-list">
                  <div class="job-list-logo">
                    <img class="img-fluid" src="images/svg/14.svg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h5 class="mb-0"><a href="job-detail.html">Communications Trainee Scheme</a></h5>
                      </div>
                      <div class="job-list-option">
                        <ul class="list-unstyled">
                          <li>
                            <span>via</span>
                            <a href="employer-detail.html">Tan Electrics Ltd</a>
                          </li>
                          <li><i class="fas fa-map-marker-alt pe-1"></i>Park Avenue, Mumbai</li>
                          <li><i class="fas fa-filter pe-1"></i>Charity & Voluntary</li>
                          <li><a class="full-time" href="#"><i class="fas fa-suitcase pe-1"></i>Full-time</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="job-list-favourite-time">
                    <a  class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                    <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>3M ago</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4 mb-sm-0">
                <!-- Freelance -->
                <div class="job-list">
                  <div class="job-list-logo">
                    <img class="img-fluid" src="images/svg/15.svg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h5 class="mb-0"><a href="job-detail.html">Part-Time Sales Assistant</a></h5>
                      </div>
                      <div class="job-list-option">
                        <ul class="list-unstyled">
                          <li>
                            <span>via</span>
                            <a href="employer-detail.html"> Bright Sparks PLC</a>
                          </li>
                          <li><i class="fas fa-map-marker-alt pe-1"></i>Canyon Village, Ramon</li>
                          <li><i class="fas fa-filter pe-1"></i>Financial Services</li>
                          <li><a class="freelance" href="#"><i class="fas fa-suitcase pe-1"></i>Freelance</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="job-list-favourite-time">
                    <a  class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                    <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>6M ago</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <!-- Part-Time -->
                <div class="job-list">
                  <div class="job-list-logo">
                    <img class="img-fluid" src="images/svg/16.svg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h5 class="mb-0"><a href="job-detail.html">Customer Service Assistant</a></h5>
                      </div>
                      <div class="job-list-option">
                        <ul class="list-unstyled">
                          <li>
                            <span>via</span>
                            <a href="employer-detail.html">Carphone Warehouse</a>
                          </li>
                          <li><i class="fas fa-map-marker-alt pe-1"></i>Canyon Village, Ramon</li>
                          <li><i class="fas fa-filter pe-1"></i>IT & Telecoms</li>
                          <li><a class="part-time" href="#"><i class="fas fa-suitcase pe-1"></i>Part-Time</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="job-list-favourite-time">
                    <a  class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                    <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>1M ago</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Popular jobs -->
          <div class="tab-pane fade show" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="row mt-4">
              <div class="col-lg-6 mb-4 mb-sm-0">
                <!-- Freelance -->
                <div class="job-list">
                  <div class="job-list-logo">
                    <img class="img-fluid" src="images/svg/17.svg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h5 class="mb-0"><a href="job-detail.html">Anticoagulation Receptionist</a></h5>
                      </div>
                      <div class="job-list-option">
                        <ul class="list-unstyled">
                          <li>
                            <span>via</span>
                            <a href="employer-detail.html">Fast Systems Consultants</a>
                          </li>
                          <li><i class="fas fa-map-marker-alt pe-1"></i>Wellesley Rd, London</li>
                          <li><i class="fas fa-filter pe-1"></i>Accountancy</li>
                          <li><a class="freelance" href="#"><i class="fas fa-suitcase pe-1"></i>Freelance</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="job-list-favourite-time">
                    <a  class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                    <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>1H ago</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4 mb-sm-0">
                <!-- Part-Time -->
                <div class="job-list">
                  <div class="job-list-logo">
                    <img class="img-fluid" src="images/svg/18.svg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h5 class="mb-0"><a href="job-detail.html">Receptionist Office Administrator</a></h5>
                      </div>
                      <div class="job-list-option">
                        <ul class="list-unstyled">
                          <li>
                            <span>via</span>
                            <a href="employer-detail.html"> Pendragon Green Ltd</a>
                          </li>
                          <li><i class="fas fa-map-marker-alt pe-1"></i>Needham, MA</li>
                          <li><i class="fas fa-filter pe-1"></i>IT & Telecoms</li>
                          <li><a class="part-time" href="#"><i class="fas fa-suitcase pe-1"></i>Part-Time</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="job-list-favourite-time">
                    <a  class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                    <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>3D ago</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4 mb-sm-0">
                <!-- Temporary -->
                <div class="job-list">
                  <div class=" job-list-logo">
                    <img class="img-fluid" src="images/svg/19.svg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h5 class="mb-0"><a href="job-detail.html">Data Entry - Advanced Google Software</a></h5>
                      </div>
                      <div class="job-list-option">
                        <ul class="list-unstyled">
                          <li>
                            <span>via</span>
                            <a href="employer-detail.html">Wight Sound Hearing LLC</a>
                          </li>
                          <li><i class="fas fa-map-marker-alt pe-1"></i>New Castle, PA</li>
                          <li><i class="fas fa-filter pe-1"></i>Banking</li>
                          <li><a class="temporary" href="#"><i class="fas fa-suitcase pe-1"></i>Temporary</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="job-list-favourite-time">
                    <a  class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                    <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>2W ago</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4 mb-sm-0">
                <!-- Full time -->
                <div class="job-list">
                  <div class="job-list-logo">
                    <img class="img-fluid" src="images/svg/20.svg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h5 class="mb-0"><a href="job-detail.html">Payroll and Office Administrator</a></h5>
                      </div>
                      <div class="job-list-option">
                        <ul class="list-unstyled">
                          <li>
                            <span>via</span>
                            <a href="employer-detail.html">Tan Electrics Ltd</a>
                          </li>
                          <li><i class="fas fa-map-marker-alt pe-1"></i>Park Avenue, Mumbai</li>
                          <li><i class="fas fa-filter pe-1"></i>Charity & Voluntary</li>
                          <li><a class="full-time" href="#"><i class="fas fa-suitcase pe-1"></i>Full-time</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="job-list-favourite-time">
                    <a  class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                    <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>3M ago</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4 mb-sm-0">
                <!-- Freelance -->
                <div class="job-list">
                  <div class="job-list-logo">
                    <img class="img-fluid" src="images/svg/01.svg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h5 class="mb-0"><a href="job-detail.html">Research Administrator</a></h5>
                      </div>
                      <div class="job-list-option">
                        <ul class="list-unstyled">
                          <li>
                            <span>via</span>
                            <a href="employer-detail.html">Bright Sparks PLC</a>
                          </li>
                          <li><i class="fas fa-map-marker-alt pe-1"></i>Canyon Village, Ramon</li>
                          <li><i class="fas fa-filter pe-1"></i>Financial Services</li>
                          <li><a class="freelance" href="#"><i class="fas fa-suitcase pe-1"></i>Freelance</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="job-list-favourite-time">
                    <a  class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                    <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>6M ago</span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <!-- Part-Time -->
                <div class="job-list">
                  <div class="job-list-logo">
                    <img class="img-fluid" src="images/svg/02.svg" alt="">
                  </div>
                  <div class="job-list-details">
                    <div class="job-list-info">
                      <div class="job-list-title">
                        <h5 class="mb-0"><a href="job-detail.html">Personal Shopping Receptionist</a></h5>
                      </div>
                      <div class="job-list-option">
                        <ul class="list-unstyled">
                          <li>
                            <span>via</span>
                            <a href="employer-detail.html">Carphone Warehouse</a>
                          </li>
                          <li><i class="fas fa-map-marker-alt pe-1"></i>Canyon Village, Ramon</li>
                          <li><i class="fas fa-filter pe-1"></i>IT & Telecoms</li>
                          <li><a class="part-time" href="#"><i class="fas fa-suitcase pe-1"></i>Part-Time</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="job-list-favourite-time">
                    <a  class="job-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
                    <span class="job-list-time order-1"><i class="far fa-clock pe-1"></i>1M ago</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 justify-content-center d-flex mt-md-5 mt-4">
        <a class="btn btn-outline btn-lg" href="#">View More traineeships</a>
      </div>
    </div>
  </div>
</section>
<!--=================================
Jobs-listing -->

<!--=================================
Candidates & Companies -->
<section class="space-pb">
  <div class="container">
    <div class="row">
      <!-- Featured Candidates -->
      <div class="col-lg-7 mb-4 mb-lg-0">
        <div class="section-title">
          <h2 class="title">Featured Candidates</h2>
          <p>We know this in our gut, but what can we do about it? How can we motivate ourselves?</p>
        </div>
        <div class="candidate-list">
          <div class="candidate-list-image">
            <img class="img-fluid" src="images/avatar/04.jpg" alt="" >
          </div>
          <div class="candidate-list-details">
            <div class="candidate-list-info">
              <div class="candidate-list-title">
                <h5 class="mb-0"><a href="candidate-detail.html">Melissa Doe</a></h5>
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
            <a class="candidate-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
            <span class="candidate-list-time order-1"><i class="far fa-clock pe-1"></i>6D ago</span>
          </div>
        </div>
        <div class="candidate-list">
          <div class="candidate-list-image">
            <img class="img-fluid" src="images/avatar/01.jpg" alt="" >
          </div>
          <div class="candidate-list-details">
            <div class="candidate-list-info">
              <div class="candidate-list-title">
                <h5 class="mb-0"><a href="candidate-detail.html">Paul Flavius</a></h5>
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
            <a class="candidate-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
            <span class="candidate-list-time order-1"><i class="far fa-clock pe-1"></i>3D ago</span>
          </div>
        </div>
        <div class="candidate-list">
          <div class="candidate-list-image">
            <img class="img-fluid" src="images/avatar/05.jpg" alt="" >
          </div>
          <div class="candidate-list-details">
            <div class="candidate-list-info">
              <div class="candidate-list-title">
                <h5 class="mb-0"><a href="candidate-detail.html">Felica Queen</a></h5>
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
            <a class="candidate-list-favourite order-2" href="#"><i class="far fa-heart"></i></a>
            <span class="candidate-list-time order-1"><i class="far fa-clock pe-1"></i>2D ago</span>
          </div>
        </div>
      </div>
      <div class="col-lg-1"></div>
      <!-- Top Companies -->
      <div class="col-lg-4">
        <div class="section-title">
          <h2 class="title">Top Companies</h2>
          <p>Here are some tips and methods for motivating yourself:</p>
        </div>
        <div class="owl-carousel owl-nav-bottom-center" data-nav-arrow="false" data-nav-dots="true" data-items="1" data-md-items="1" data-sm-items="2" data-xs-items="1" data-xx-items="1" data-space="15" data-autoheight="true">
          <div class="item">
            <div class="employers-grid">
              <div class="employers-list-logo">
                <img class="img-fluid" src="images/svg/09.svg" alt="">
              </div>
              <div class="employers-list-details">
                <div class="employers-list-info">
                  <div class="employers-list-title">
                    <h5 class="mb-0"><a href="employer-detail.html">Bright Sparks PLC</a></h5>
                  </div>
                  <div class="employers-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-map-marker-alt pe-1"></i>Botchergate, Carlisle</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="employers-list-position">
                <a class="btn btn-sm btn-dark" href="#">17 Open position</a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="employers-grid">
              <div class="employers-list-logo">
                <img class="img-fluid" src="images/svg/10.svg" alt="">
              </div>
              <div class="employers-list-details">
                <div class="employers-list-info">
                  <div class="employers-list-title">
                    <h5 class="mb-0"><a href="employer-detail.html">Fleet Improvements Pvt</a></h5>
                  </div>
                  <div class="employers-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-map-marker-alt pe-1"></i>Green Lanes, London</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="employers-list-position">
                <a class="btn btn-sm btn-dark" href="#">20 Open position</a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="employers-grid">
              <div class="employers-list-logo">
                <img class="img-fluid" src="images/svg/08.svg" alt="">
              </div>
              <div class="employers-list-details">
                <div class="employers-list-info">
                  <div class="employers-list-title">
                    <h5 class="mb-0"><a href="employer-detail.html">Suttons Financial Ltd</a></h5>
                  </div>
                  <div class="employers-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-map-marker-alt pe-1"></i>Paris, Île-de-France</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="employers-list-position">
                <a class="btn btn-sm btn-dark" href="#">23 Open position</a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="employers-grid">
              <div class="employers-list-logo">
                <img class="img-fluid" src="images/svg/19.svg" alt="">
              </div>
              <div class="employers-list-details">
                <div class="employers-list-info">
                  <div class="employers-list-title">
                    <h5 class="mb-0"><a href="employer-detail.html">Co-operative Funeralcare</a></h5>
                  </div>
                  <div class="employers-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-map-marker-alt pe-1"></i>Lynch Lane, Weymouth</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="employers-list-position">
                <a class="btn btn-sm btn-dark" href="#">30 Open position</a>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="employers-grid">
              <div class="employers-list-logo">
                <img class="img-fluid" src="images/svg/06.svg" alt="">
              </div>
              <div class="employers-list-details">
                <div class="employers-list-info">
                  <div class="employers-list-title">
                    <h5 class="mb-0"><a href="employer-detail.html">Altenwerth and Hamill</a></h5>
                  </div>
                  <div class="employers-list-option">
                    <ul class="list-unstyled">
                      <li><i class="fas fa-map-marker-alt pe-1"></i>Taunton, London</li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="employers-list-position">
                <a class="btn btn-sm btn-dark" href="#">35 Open position</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Candidates & Companies -->

<!--=================================
Feature-info -->
<section class="space-pb">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 mb-lg-0 mb-4">
        <div class="feature-info feature-info-02 p-4 p-md-5 bg-primary">
          <div class="feature-info-icon mb-3 text-dark">
            <i class="flaticon-team"></i>
          </div>
          <div class="feature-info-content ps-sm-4 ps-0">
            <h5 class="text-white">Looking For Job?</h5>
            <p class="text-white">Your next role could be with one of these top leading organizations.</p>
            <a href="#">Apply now<i class="fas fa-long-arrow-alt-right"></i> </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="feature-info feature-info-02 p-4 p-md-5 bg-dark">
          <div class="feature-info-icon mb-3 text-primary">
            <i class="flaticon-job-3"></i>
          </div>
          <div class="feature-info-content ps-sm-4 ps-0">
            <h5 class="text-white">Are You Recruiting?</h5>
            <p class="text-white">Five million searchable CVs in one place with our linked CV database.</p>
            <a href="#">Post a job<i class="fas fa-long-arrow-alt-right"></i> </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Feature-info -->

<!--=================================
Clients Say About Us -->
<section class="space-pb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10">
        <div class="section-title center">
          <h2 class="title">Clients Say About Us</h2>
          <p>Focus is having the unwavering attention to complete what you set out to do.</p>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <div class="owl-carousel owl-nav-top-center" data-nav-arrow="true"  data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="0">
          <div class="item">
            <div class="testimonial-item text-center">
              <div class="avatar">
                <img class="img-fluid rounded-circle" src="images/avatar/04.jpg" alt="">
              </div>
              <div class="testimonial-content">
                <p>Their turnaround time for fixing any issue is just a few minutes, and that is appreciable. Their Business Development Team is always there to help at any point in time. Thank you so much for all your effort.</p>
              </div>
              <div class="testimonial-name">
                <i class="fas fa-quote-left quotes"></i>
                <h6 class="mb-1">Felica Queen</h6>
                <span>Product Designer</span>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="testimonial-item text-center">
              <div class="avatar">
                <img class="img-fluid rounded-circle" src="images/avatar/02.jpg" alt="">
              </div>
              <div class="testimonial-content">
                <p>Jobber is an excellent traineeship portal. We value the resumes received through this channel. Magic Search and Power search are handy tools. We are delighted with their service.</p>
              </div>
              <div class="testimonial-name">
                <i class="fas fa-quote-left quotes"></i>
                <h6 class="mb-1">John Doe</h6>
                <span>Graphic Designer</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Clients Say About Us -->

<!--=================================
Blog and Career Advice -->
<section class="space-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 col-md-10">
        <div class="section-title center">
          <h2 class="title">Blog and Career Advice</h2>
          <p>Data trends and insights, tips for employers, product updates and best practices</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 mb-md-0 mb-4">
        <div class="blog-post justify-content-center text-center">
          <div class="blog-post-image">
            <img class="img-fluid" src="images/blog/03.jpg" alt="">
          </div>
          <div class="blog-post-content">
            <div class="blog-post-details pb-0">
              <div class="blog-post-time">
                <a href="#">February 4, 2019</a>
              </div>
              <div class="blog-post-title">
                <h5><a href="#">How to sell yourself in a traineeship interview</a></h5>
              </div>
               <div class="justify-content-center mt-2 d-flex">
                <a class="btn btn-link p-0" href="#">Read More <i class="fas fa-long-arrow-alt-right ps-2"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-md-0 mb-4">
        <div class="blog-post text-center">
          <div class="blog-post-image">
            <img class="img-fluid" src="images/blog/04.jpg" alt="">
          </div>
          <div class="blog-post-content">
            <div class="blog-post-details pb-0">
              <div class="blog-post-time">
                <a href="#">March 10, 2019</a>
              </div>
              <div class="blog-post-title">
                <h5><a href="#">Hype or Helpful to the traineeships Market?</a></h5>
              </div>
               <div class="justify-content-center mt-2 d-flex">
                <a class="btn btn-link p-0" href="#">Read More <i class="fas fa-long-arrow-alt-right ps-2"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="blog-post text-center">
          <div class="blog-post-image">
            <img class="img-fluid" src="images/blog/05.jpg" alt="">
          </div>
          <div class="blog-post-content">
            <div class="blog-post-details pb-0">
              <div class="blog-post-time">
                <a href="#">May 15, 2020</a>
              </div>
              <div class="blog-post-title">
                <h5><a href="#">How to become an Account Manager</a></h5>
              </div>
             <div class="justify-content-center mt-2 d-flex">
                <a class="btn btn-link p-0" href="#">Read More <i class="fas fa-long-arrow-alt-right ps-2"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
Blog and Career Advice -->

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
                      <p class="mt-1">Don't have account? <a href="/register">Sign Up here</a></p>
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

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="js/jquery.appear.js"></script>
    <script src="js/counter/jquery.countTo.js"></script>
    <script src="js/owl-carousel/owl-carousel.min.js"></script>
    <script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="js/custom.js"></script>

<@endsection
