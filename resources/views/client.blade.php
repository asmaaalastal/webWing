
@extends('layouts.main')
@section('content')
@include('includes.clinetShow',['clinets' => $clinets])
<div>
{{$clinets->links()}}
  </div>
 @stop