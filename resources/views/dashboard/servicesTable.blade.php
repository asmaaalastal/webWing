@extends('dashboard/layouts.main')
@section('dashboardContent')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Services Table</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboardHome">Dashboard</a></li>
                            <li class="breadcrumb-item active">Services Table</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Services DataTable
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>                                       
                                            <th>id</th>
                                            <th>name</th>
                                            <th>img</th>
                                            <th>description</th>
                                            <th>edit</th>
                                            <th>delete</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>name</th>
                                            <th>img</th>
                                            <th>description</th>
                                            <th>edit</th>
                                            <th>delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($services as $service)
                                        <tr>
                                            <td>{{$service->id}}</td>
                                            <td>{{$service->name}}</td>
                                            <td>{{$service->img}}</td>
                                            <td>{{$service->description}}</td>
                                            <td class="actions-cell">
                                            <a href="{{URL::to('/editServices')}}"><button class="button-68" role="button" type="button">edit</button></a>
                                        </td>
                                        <td class="actions-cell">
                                        <a href="{{URL::to('/dropServices')}}"><button class="button-68" role="button" type="button">delete</button></a>
                                        </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
@stop