{{ app()->setLocale(session()->get("locale") ?? "en") }}
@extends('dashboard/layouts.main')
@section('dashboardContent')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">@lang('langs.STable')</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboardHome">@lang('langs.Dashboard')</a></li>
                            <li class="breadcrumb-item active">@lang('langs.STable')</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                            @lang('langs.DTableDescription') 
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
                                            <th>@lang('langs.modification')</th>

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
                                            @if(!@empty($service->deleted_at))
                                            <td class="actions-cell">
                                        <a href="{{URL::to('/restoreServices/' . $service->id )}}"><button class="button-68" role="button" type="button">@lang('langs.restor')</button></a> 
                                        </td>
                                        @else
                                        <td class="actions-cell">
                                            <a href="{{URL::to('/editServices/' . $service->id )}}"> <button class="button-68" role="button" type="button">@lang('langs.edit')</button></a>
                                            <a href="{{URL::to('/dropServices/' . $service->id )}}"><button class="button-68" role="button" type="button">@lang('langs.delete')</button></a> 
                                            </td>
                                        @endif
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
@stop
