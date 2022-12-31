
@extends('layouts.main')
@section('content')
@include('includes.servicesShow',['services' => $services])
<div>
    {{$services->links()}}
  </div>
@stop