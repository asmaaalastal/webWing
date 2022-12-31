{{ app()->setLocale(session()->get("locale") ?? "en") }}

<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>webwing</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->

   <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
   <!-- style css -->
   <link rel="stylesheet" href="{{asset('css/style.css')}}">
   <!-- Responsive-->
   <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
   <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#" /></div>
   </div>
   <!-- end loader -->
   <!-- header -->
   <header>
      <!-- header inner -->
      <div class="header">
         <div class="header_to d_none">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 col-sm-6">
                     <ul class="lan">
                        <li><i class="fa fa-globe" aria-hidden="true"></i>@lang('langs.Language')</li>
                     </ul>
                     <form method="POST" action="/language">
                        @csrf
                        <select name="locale" onchange="this.form.submit()">
                           <option value="en" {{ session()->get("locale") === 'en' ? 'selected' : '' }}>English</option>
                           <option value="ar" {{ session()->get("locale")  === 'ar' ? 'selected' : '' }}>Arabic</option>
                        </select>
                     </form>
                  </div>
                  <div class="col-md-6 col-sm-6 ">
                     <ul class="social_icon1">
                        <li>@lang('langs.FollowUs')
                        </li>
                        <li> <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>
                           </a>
                        </li>
                        <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                        <div>
                        </div>
                        <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li> <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="header_midil">
            <div class="container">
               <div class="row d_flex">
                  <div class="col-md-4 col-sm-4 d_none">
                     <ul class="conta_icon">
                        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> @lang('langs.CallUs') : +01 1234567890</a> </li>
                        <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> demo@gmail.com</a> </li>
                     </ul>
                  </div>
                  <div class="col-md-4 col-sm-4 ">
                     <a class="logo" href="#"><img src="images/logo.png" alt="#" /></a>
                  </div>
                  <div class="col-md-4 col-sm-4 d_none">
                     <ul class="conta_icon ">
                        <il>
                           <form class="example" method="post" action="{{URL::to('/Search')}}" style="margin:auto;max-width:300px">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                              <input type="text" placeholder=" @lang('langs.Search') " name="name" style="font-size: 14px; border-radius: 5px; padding: 5px 2px 5px 2px; ">
                              <button type="submit" style="background-color: #f2db18; border-radius: 5px; padding: 6.5px 10px 6.5px 10px; "><i class="fa fa-search"></i></button>
                           </form>
                        </il>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <div class="header_bo">
            <div class="container">
               <div class="row">
                  <div class="col-md-9 col-sm-7">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="{{URL::to('/Index')}}">@lang('langs.Home') </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{URL::to('/About')}}">@lang('langs.About')</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{URL::to('/Service')}}">@lang('langs.Service')</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{URL::to('/Team')}}">@lang('langs.Team') </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{URL::to('/Clinet')}}">@lang('langs.Clinet')</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="{{URL::to('/Contact')}}"> @lang('langs.Contact') </a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
                  <div class="col-md-3 col-sm-5 d_none">
                     <ul class="sign">
                        <li style="margin-left: 10px;"><a class="sign_btn" href="{{URL::to('/dashboardHome')}}">@lang('langs.Sign')</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </header>
   <!-- end header inner -->
   <!-- end header -->

   @yield('content')

   <!--  footer -->
   <footer>
      <div class="footer">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <a class="logo2" href="#"><img src="images/loogo2.png" alt="#" /></a>
               </div>
               <div class="col-lg-5 col-md-6 col-sm-6">
                  <h3>@lang('langs.Contact')</h3>
                  <ul class="location_icon">
                     <li><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i></a> @lang('langs.LocationCity')
                        <br> @lang('langs.LocationCountry')
                     </li>
                     <li><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>demo@gmail.com<br> demo@gmail.com</li>
                     <li><a href="#"><i class="fa fa-volume-control-phone" aria-hidden="true"></i></a>+01 1234567890<br>+01 1234567889</li>
                  </ul>
                  <ul class="social_icon">
                     <li> <a href="#"><i class="fa fa-facebook-f"></i></a></li>
                     <li> <a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li> <a href="#"> <i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                     <li> <a href="#"><i class="fa fa-instagram"></i></a></li>
                  </ul>
               </div>
               <div class="col-lg-2 col-md-6 col-sm-6">
                  <h3>@lang('langs.Menu')</h3>
                  <ul class="link_icon">
                     <li class="active"> <a href="index.html"> @lang('langs.Home')</a></li>
                     <li>
                        <a href="about.html">
                           </i>@lang('langs.Aboutus')
                     </li>
                     <li> <a href="service.html"> </i>@lang('langs.Service')</a></li>
                     <li> <a href="team.html"></i>@lang('langs.Team')</a></li>
                     <li> <a href="client.html"></i>@lang('langs.Clinet')</a></li>
                     <li> <a href="contact.html"></i>@lang('langs.Contact')</a></li>
                  </ul>
               </div>
               <div class="col-lg-2 col-md-6 col-sm-6">
                  <h3>@lang('langs.Recent')</h3>
                  <ul class="link_icon">
                     <li> <a href="#"> @lang('langs.Participate') </a></li>
                     <li>
                        <a href="#">
                           @lang('langs.Meet')
                     </li>
                     <li> <a href="#"> @lang('langs.Dedicated') </a></li>
                     <li> <a href="#"> @lang('langs.Markting')</a></li>
                     <li> <a href="#"> @lang('langs.Date')</a></li>
                  </ul>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-6">
                  <h3>@lang('langs.News')</h3>
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <input class="news" placeholder="@lang('langs.Email')" type="type" name="Your Email">
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">@lang('langs.Send')</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="copyright">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <p>@lang('langs.Rights')<a href="https://html.design/">@lang('langs.Template')</a></p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </footer>
   <!-- end footer -->
   <!-- Javascript files-->
   <script src="{{asset('js/jquery.min.js')}}"></script>
   <script src="{{asset('js/popper.min.js')}}"></script>
   <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
   <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
   <script src="{{asset('js/owl.carousel.min.js')}}"></script>
   <!-- sidebar -->
   <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
   <script src="{{asset('js/custom.js')}}"></script>
</body>

</html>