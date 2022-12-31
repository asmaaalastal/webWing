{{ app()->setLocale(session()->get("locale") ?? "en") }}
@extends('dashboard/layouts.main')
@section('dashboardContent')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">@lang('langs.CTable')</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboardHome">@lang('langs.Dashboard')</a></li>
                            <li class="breadcrumb-item active">@lang('langs.CTable')</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                            @lang('langs.DTableDescription') 
                                .
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                @lang('langs.CDTable') 
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>@lang('langs.id')</th>
                                            <th>@lang('langs.name')</th>
                                            <th>@lang('langs.name_ar')</th>
                                            <th>@lang('langs.description')</th>
                                            <th>@lang('langs.description_ar')</th>
                                            <th>@lang('langs.img')</th>
                                            <th>@lang('langs.modification')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($clinets as $clinet)
                                        <tr>
                                            <td>{{ $clinet->id }}</td>
                                            <td>{{ $clinet->name }}</td>
                                            <td>{{ $clinet->name_ar }}</td>
                                            <td>{{ $clinet->description }}</td>
                                            <td>{{ $clinet->description_ar }}</td>
                                            <td> <img style="width: 40%; height: 40%;" src= "{{ asset($clinet->img)}}"></td>
                                            @if(!@empty($clinet->deleted_at))
                                            <td class="actions-cell">
                                        <a href="{{URL::to('/restoreClinet/' . $clinet->id )}}"><button class="button-68" role="button" type="button">@lang('langs.restor')</button></a> 
                                        </td>
                                        @else
                                        <td class="actions-cell">
                                                <a href="{{URL::to('/editClinet/' . $clinet->id )}}"> <button class="button-68" role="button" type="button">@lang('langs.edit')</button></a>
                                                <a href="{{URL::to('/dropClinet/' . $clinet->id )}}"><button class="button-68" role="button" type="button">@lang('langs.delete')</button></a> 
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
