{{ app()->setLocale(session()->get("locale") ?? "en") }}


@extends('layouts.main')
@section('content')
   <!-- banner -->
   <section class="banner_main">
      <div class="container">
         <div class="row">
            <div class="col-md-7 col-lg-7">
               <div class="text-bg">
                  <h1>@lang('langs.Title') <br>@lang('langs.TitleTwo')</h1>
                  <span>@lang('langs.SubTitle')</span>
                  <p>@lang('langs.Description')</p>
                  <a href="#">@lang('langs.Aboutus')</a>
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
                  <h2><strong class="yellow">@lang('langs.Portfolio')</strong><br>@lang('langs.PortfolioTitle')</h2>
                  <span>@lang('langs.PortfolioType')</span>
                  <p>@lang('langs.PortfolioDescription')</p>
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
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf2.jpg" alt="#" />
                              <div class="middle">
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf3.jpg" alt="#" />
                              <div class="middle">
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                           <div class="portfolio_img">
                              <img src="images/potf4.jpg" alt="#" />
                              <div class="middle">
                              </div>
                           </div>
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
                  <h2><strong class="yellow">@lang('langs.Create')</strong><br>@lang('langs.CreateTitle')</h2>
                  <p>@lang('langs.CreateDescription')</p>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-3 col-sm-6">
               <div id="ho_color" class="business_box">
                  <i><img src="images/business_icon1.png" alt="#" /></i>
                  <h3>@lang('langs.NominationsNumber')</h3>
                  <p>@lang('langs.Nominations') </p>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div id="ho_color" class="business_box">
                  <i><img src="images/business_icon2.png" alt="#" /></i>
                  <h3>@lang('langs.AgenciesNumber')</h3>
                  <p>@lang('langs.Agencies')</p>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div id="ho_color" class="business_box">
                  <i><img src="images/business_icon3.png" alt="#" /></i>
                  <h3>@lang('langs.AwardsNumber')</h3>
                  <p>@lang('langs.Awards')</p>
               </div>
            </div>
            <div class="col-md-3 col-sm-6">
               <div id="ho_color" class="business_box">
                  <i><img src="images/business_icon4.png" alt="#" /></i>
                  <h3>@lang('langs.SupportedNumber')</h3>
                  <p>@lang('langs.Supported') </p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end business  section -->
   @include('includes.teamShow')
   @include('includes.clinetShow')
   @include('includes.contactForm')
  @stop