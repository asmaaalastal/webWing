{{ app()->setLocale(session()->get("locale") ?? "en") }}
@extends('dashboard/layouts.main')
@section('dashboardContent')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">@lang('langs.CnTable')</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboardHome">@lang('langs.Dashboard')</a></li>
                            <li class="breadcrumb-item active">@lang('langs.CnTable')</li>
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
                                @lang('langs.CnDTable')
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>@lang('langs.id')</th>
                                            <th>@lang('langs.name')</th>
                                            <th>@lang('langs.message')</th>
                                            <th>@lang('langs.email')</th>
                                            <th>@lang('langs.phone')</th>
                                            <th>@lang('langs.modification')</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($contacts as $contact)
                                        <tr>
                                            <td>{{ $contact->id }}</td>
                                            <td>{{ $contact->name }}</td>
                                            <td>{{ $contact->message }}</td>
                                            <td>{{ $contact->email }}</td>
                                            <td>{{ $contact->phone}}</td>
                                            @if(!@empty($contact->deleted_at))
                                            <td class="actions-cell">
                                            <a href="{{URL::to('/restoreContact/' . $contact->id )}}"><button class="button-68" role="button" type="button">@lang('langs.restor')</button></a> 
                                            </td>
                                            @else
                                            <td class="actions-cell">
                                            <a href="{{URL::to('/dropContact/' . $contact->id )}}"><button class="button-68" role="button" type="button">@lang('langs.delete')</button></a> 
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
