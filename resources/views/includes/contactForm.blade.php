<!-- contact  section -->
{{ app()->setLocale(session()->get("locale") ?? "en") }}

<div id="contact" class="contact ">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2><strong class="yellow">@lang('langs.Contact')</strong><br>@lang('langs.ContactTile')</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-8 offset-md-2">
               <form id="post_form" method="POST" action="{{ URL::to('/contactClinet') }}" class="contact_form">
               <input type="hidden" name="_token" value="{{csrf_token()}}">
                @csrf
                  <div class="row">
                     <div class="col-md-12 ">
                        <input class="contact_control" placeholder="@lang('langs.Name')" type="type" name="name">
                     </div>
                     <div class="col-md-12">
                        <input class="contact_control" placeholder="@lang('langs.Email')" type="type" name="email">
                     </div>
                     <div class="col-md-12">
                        <input class="contact_control" placeholder="@lang('langs.Phone') " type="type" name="phone">
                     </div>
                     <div class="col-md-12">
                        <textarea class="textarea" placeholder="Message" type="type" Message="Name" name="message" >@lang('langs.Message') </textarea>
                     </div>
                     <div class="col-md-12">
                        <button class="send_btn">@lang('langs.Send')</button>
                     </div>
               </form>
            </div>
         </div>
      </div>
   </div>
   </div>
   <!-- end contact  section -->