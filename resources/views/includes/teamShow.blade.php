   <!-- team  section -->
   {{ app()->setLocale(session()->get("locale") ?? "en") }}

   <div id="team" class="team">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2><strong class="yellow">@lang('langs.Team')</strong><br>@lang('langs.TeamTitle')</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12">
               <div id="team" class="carousel slide team_Carousel " data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#team" data-slide-to="0" class="active"></li>
                     <li data-target="#team" data-slide-to="1"></li>
                     <li data-target="#team" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="container">
                           <div class="carousel-caption ">
                              <div class="row">
                              @foreach($teams as $team)
                                 <div class="col-md-4 col-sm-6">
                                    <div id="ho_bg" class="team_img">
                                       <img style= "width:311.6% ; height:307% ;"src=" {{asset($team->img)}}" alt="#" />
                                    </div>
                                 </div>
                                 @endforeach 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#team" role="button" data-slide="prev">
                     <i class="fa fa-chevron-left" aria-hidden="true"></i>
                  </a>
                  <a class="carousel-control-next" href="#team" role="button" data-slide="next">
                     <i class="fa fa-chevron-right" aria-hidden="true"></i>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- end team  section -->