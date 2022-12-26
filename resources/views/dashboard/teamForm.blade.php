@extends('dashboard/layouts.main')
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
            <span>Log Out</span>
          </a>
        </div>
      </div>
    </div>
</nav>

<section class="is-title-bar">
  <div class="flex flex-col md:flex-row items-center justify-between space-y-6 md:space-y-0">
    <ul>
      <li>Dashboard</li>
      <li>Forms</li>
    </ul>
  </div>
</section>

  <section class="section main-section">
    <div class="card mb-6">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-ballot"></i></span>
          Forms
        </p>
      </header>
      <div class="card-content">
        <form method="post" enctype="multipart/form-data" action="{{ URL::to('/storeTeam') }}">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
        @csrf
            <label class="label">From</label>       
          <hr>
        <div class="field">
          <label class="label">File</label>
          <div class="field-body">
            <div class="field file">
              <label class="upload control">
                <a class="button blue">
                  Upload
                </a>
                <input type="file" name="img">
              </label>
            </div>
          </div>
        </div>
        <hr>
          <div class="field grouped">
            <div class="control">
              <button type="submit" class="button green">
                Submit
              </button>
            </div>
            <div class="control">
              <button type="reset" class="button red">
                Reset
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

@stop