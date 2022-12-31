{{ app()->setLocale(session()->get("locale") ?? "en") }}
@extends('dashboard/layouts.main')
@extends('dashboard/includes.errors')
@extends('dashboard/includes.UpdatedMessage')
@section('dashboardContent')

<div id="app">
  <head>
  <link rel="stylesheet" href="{{asset('css/main.css?v=1628755089081')}}">
         <script async src="https://www.googletagmanager.com/gtag/js?id=UA-130795909-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
             function gtag(){dataLayer.push(arguments);}
                 gtag('js', new Date());
                 gtag('config', 'UA-130795909-1');
         </script>
  </head>
<nav id="navbar-main" class="navbar is-fixed-top">
  <div class="navbar-menu" id="navbar-menu">
    <div class="navbar-end">
      <div class="navbar-item dropdown has-divider">
          <a class="navbar-item">
            <span class="icon"><i class="mdi mdi-logout"></i></span>
            <span>@lang('langs.logout')</span>
          </a>
        </div>
      </div>
    </div>
</nav>

<section class="is-title-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <ul>
      <li>@lang('langs.Dashboard')</li>
      <li>@lang('langs.form')</li>
    </ul>
  </div>
</section>

  <section class="section main-section">
    <div class="card mb-6">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-ballot"></i></span>
          @lang('langs.form')
        </p>
      </header>
      <div class="card-content">
        <form method="post" enctype="multipart/form-data" action="{{ URL::to('/updateClinet') }}" > 
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="id" value="{{ $clinet->id }}">
          @csrf
        
          <div class="field">
            <div class="field-body">
              <div class="field">
              <label class="label">@lang('langs.name')</label>
                <div class="control icons-left">
                  <input class="input" type="text"  name="name" placeholder="Name" value="{{ $clinet->name }}">
                  <span class="icon left"><i class="mdi mdi-account"></i></span>
                </div>
              </div>
              <div class="field">
                <label class="label">@lang('langs.name_ar')</label>
                <div class="control icons-left">
                  <input name="name" class="input" type="text" placeholder="Name"value="{{ $clinet->name_ar }}">
                  <span class="icon left"><i class="mdi mdi-account"></i></span>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="field">
            <label class="label">@lang('langs.description')</label>
            <div class="control">
              <textarea class="textarea" name="description" placeholder="{{ $clinet->description }}"></textarea>
            </div>
          </div>
          <div class="field">
            <label class="label">@lang('langs.description_ar')</label>
            <div class="control">
              <textarea name="description" class="textarea" placeholder="{{ $clinet->description_ar }}"></textarea>
            </div>
          </div>
          <hr>
        <div class="field">
          <div class="field-body">
          <div class="field">
          <label class="label">@lang('langs.img')</label>
          <div class="field-body">
            <div class="field file">
              <input type="file" name="image">
            </div>
          </div>
        </div>
          </div>
        </div>
        <hr>
          <div class="field grouped">
            <div class="control">
              <button type="submit" class="button green">
              @lang('langs.submit')
              </button>
            </div>
            <div class="control">
              <button type="reset" class="button red">
              @lang('langs.reset')
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

@stop