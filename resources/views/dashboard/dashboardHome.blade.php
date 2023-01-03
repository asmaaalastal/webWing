{{ app()->setLocale(session()->get("locale") ?? "en") }}
@extends('dashboard/layouts.main')
@section('dashboardContent')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">@lang('langs.Dashboard')</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">@lang('langs.Dashboard')</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">@lang('langs.CTable')</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{URL::to('/clinetTable')}}">@lang('langs.View')</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">@lang('langs.STable')</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{URL::to('/servicesTable')}}">@lang('langs.View')</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">@lang('langs.TTable')</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{ URL::to('/teamTable') }}">@lang('langs.View')</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">@lang('langs.CnTable')</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{ URL::to('/contactTable') }}">@lang('langs.View')</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="card mb-4">
                        <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                @lang('langs.SDTable')
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>                                       
                                            <th>@lang('langs.id')</th>
                                            <th>@lang('langs.name')</th>
                                            <th>@lang('langs.name_ar')</th>
                                            <th>@lang('langs.img')</th>
                                            <th>@lang('langs.description')</th>
                                            <th>@lang('langs.description_ar')</th>
                                            <th>@lang('langs.body')</th>
                                            <th>@lang('langs.body_ar')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($services as $service)
                                        <tr>
                                            <td>{{$service->id}}</td>
                                            <td>{{$service->name}}</td>
                                            <td>{{$service->name_ar}}</td>
                                            <td> <img style="width: 40%; height: 40%;" src= "{{ asset($service->img)}}"></td>
                                            <td>{{$service->description}}</td>
                                            <td>{{$service->description_ar}}</td>
                                            <td>{{$service->body}}</td>
                                            <td>{{$service->body_ar}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        <hr>

                    </div>
                </main>
@stop