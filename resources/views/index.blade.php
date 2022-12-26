@extends('layouts.main')
@section('content')
   <!-- banner -->
   <section class="banner_main">
      <div class="container">
         <div class="row">
            <div class="col-md-7 col-lg-7">
               <div class="text-bg">
                  <h1>Trusted and <br>Professional Advisers</h1>
                  <span>for your Business</span>
                  <p>Showcase your Profile to the world using online CV builder and Get Hired Faster</p>
                  <a href="#">About us</a>
               </div>
            </div>
            <div class="col-md-5 col-lg-5">
               <div class="ban_img">
                  <figure><img src="images/ba_ing.png" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end banner -->
   @include('includes.aboutShow')
   @include('includes.servicesShow')
   <!-- portfolio -->
   <div class="portfolio">
      <div class="container">
         <div class="row">
            <div class="col-md-12 ">
               <div class="titlepage">
                  <h2><strong class="yellow">PORTFOLIO</strong><br> CHOOSE A PROFESSIONAL DESIGN</h2>
                  <span>Websites</span>
                  <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distrib</p>
               </div>
            </div>
         </div>
      </div>
      <div id="myCarousel" class="carousel slide portfolio_Carousel " data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
            <div class="carousel-item active">
               <div class="container">
                  <div class="carousel-caption ">
                     <div class="row">
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf1.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf2.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf3.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf4.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <a class="read_more" href="#">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="carousel-caption">
                     <div class="row">
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf1.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf2.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf3.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf4.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <a class="read_more" href="#">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="carousel-item">
               <div class="container">
                  <div class="carousel-caption">
                     <div class="row">
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf1.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf2.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf3.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf4.jpg" alt="#" />
                              <div class="middle">
                                 <div class="text2">View More</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12">
                           <a class="read_more" href="#">Read More</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
         </a>
         <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
         </a>
      </div>
   </div>
   <!-- end portfolio section -->
   <!-- business  section -->
   <div class="business">
      <div class="container">
         <div class="row">
            <div class="col-md-7">
               <div class="titlepage">
                  <h2><strong class="yellow">CREATE</strong><br>PERSONALISED Business</h2>
                  <p>ss normal distribution of letters, as opposed to using </p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-3 col-sm-6">
               <div id="ho_color" class="business_box">
                  <i><img src="images/business_icon1.png" alt="#" /></i>
                  <h3>23</h3>
                  <p>NOMINATIONS </p>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div id="ho_color" class="business_box">
                  <i><img src="images/business_icon2.png" alt="#" /></i>
                  <h3>31</h3>
                  <p>AGENCIES</p>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div id="ho_color" class="business_box">
                  <i><img src="images/business_icon3.png" alt="#" /></i>
                  <h3>7</h3>
                  <p>AWARDS</p>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div id="ho_color" class="business_box">
                  <i><img src="images/business_icon4.png" alt="#" /></i>
                  <h3>8</h3>
                  <p>Supported </p>
               </div>
            </div>
            <div class="col-md-12">
               <a class="read_more" href="#">Read More</a>
            </div>
         </div>
      </div>
   </div>
   <!-- end business  section -->
   @include('includes.teamShow')
   @include('includes.clinetShow')
   @include('includes.contactForm')
  @stop