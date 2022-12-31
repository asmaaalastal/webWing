   <!-- testimonial -->
   {{ app()->setLocale(session()->get("locale") ?? "en") }}

   <div id="client" class="testimonial">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2><strong class="yellow">@lang('langs.Testmonial')</strong><br>@lang('langs.TestmonialTilte')</h2>
               </div>
            </div>
         </div>
      </div>
      <div id="testimo" class="carousel slide testimonial_Carousel " data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#testimo" data-slide-to="0" class="active"></li>
            <li data-target="#testimo" data-slide-to="1"></li>
            <li data-target="#testimo" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner">
            <!-- @foreach($clinets as $clinet) -->
            <div class="carousel-item active">
               <div class="container">
                  <div class="carousel-caption ">
                     @foreach($clinets as $clinet)
                     <div class="row">
                        <div class="col-md-6 offset-md-3">
                           <div class="test_box">
                              <p>{{ session()->get("locale") == "ar" ? $clinet->description_ar : $clinet->description }}</p>
                              <i><img style="width:83% ; height:79%;" src="{{asset($clinet->img)}}" alt="#" /></i> <span>{{ session()->get("locale") == "ar" ? $clinet->name_ar :  $clinet->name }}</span>
                           </div>
                        </div>
                     </div>
                     @endforeach

                  </div>
               </div>
            </div>
            <!-- @endforeach -->
         </div>
         <a class="carousel-control-prev" href="#testimo" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
         </a>
         <a class="carousel-control-next" href="#testimo" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
         </a>
      </div>
   </div>
   <!-- end testimonial -->