
  @extends('layouts.main')
  @section('content')
  @include('includes.teamShow',['teams' => $teams])

  <div>
    {{$teams->links()}}
  </div>

 @stop