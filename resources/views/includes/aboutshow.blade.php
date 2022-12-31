<!-- about section -->
{{ app()->setLocale(session()->get("locale") ?? "en") }}

<div id="about" class="about">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12 col-lg-7">
               <div class="about_box">
                  <div class="titlepage">
                     <h2><strong class="yellow">@lang('langs.AboutUs')</strong><br>@lang('langs.AboutServiceTitle')</h2>
                  </div>
                  <h3>@lang('langs.AboutSubTitle')</h3>
                  <span>@lang('langs.AboutHeading')<br>@lang('langs.AboutHeadingTwo')</span>
                  <p>@lang('langs.AboutDescription')</p>
                  <span class="try">@lang('langs.AboutFooter')</span>
                  <a class="read_morea" href="#">@lang('langs.Start')<i class="fa fa-angle-right" aria-hidden="true"></i></a>
               </div>
            </div>
            <div class="col-md-12 col-lg-5">
               <div class="about_img">
                  <figure><img src="images/about_img2.jpg" alt="#" /></figure>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- about section -->