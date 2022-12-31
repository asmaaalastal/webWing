{{ app()->setLocale(session()->get("locale") ?? "en") }}
@extends('layouts.main')
@section('content')
<div id="service" class="service">
      <div class="container">
         <div class="row">
            <div class="col-md-7">
               <div class="titlepage">
                  <h2><strong class="yellow">@lang('langs.Service')</strong><br>@lang('langs.AboutServiceTitle')</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-4 col-sm-6">
               <div id="ho_color" class="service_box">
               <img style = "width:20% ; height:20%;" src="{{asset($service->img)}}" alt="#" />
                  <h3>{{ session()->get("locale") == "ar" ? $service->name_ar :  $service->name }}</h3>
                  <p>{{ session()->get("locale") == "ar" ? $service->description_ar :  $service->description }}</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   </div>
  @stop