{{ app()->setLocale(session()->get("locale") ?? "en") }}
@extends('dashboard/layouts.main')
@section('dashboardContent')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">@lang('langs.TTable')</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboardHome">@lang('langs.Dashboard')</a></li>
                            <li class="breadcrumb-item active">@lang('langs.TTable')</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                            @lang('langs.DTableDescription')                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                @lang('langs.TDTable')
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th> @lang('langs.id')</th>
                                            <th> @lang('langs.img')</th>
                                            <th>@lang('langs.modification')</th>
                                        </tr>
                                    </thead>
                                    <tbody>   
                                    @foreach($teams as $team)
                                        <tr>
                                            <td>{{$team->id}}</td>
                                            <td> <img style="width: 20%; height: 20%;" src= "{{ asset($team->img)}}"></td>
                                        @if(!@empty($team->deleted_at))
                                        <td class="actions-cell">
                                        <a href="{{URL::to('/restoreTeam/' . $team->id )}}"><button class="button-68" role="button" type="button">@lang('langs.restor')</button></a> 
                                        </td>
                                        @else
                                            <td class="actions-cell">
                                            <a href="{{URL::to('/editTeam/' . $team->id )}}"> <button class="button-68" role="button" type="button">@lang('langs.edit')</button></a>
                                            <a href="{{URL::to('/dropTeam/' . $team->id )}}"><button class="button-68" role="button" type="button">@lang('langs.delete')</button></a> 
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