@extends('dashboard/layouts.main')
@section('dashboardContent')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Clinet Table</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="dashboardHome">Dashboard</a></li>
                            <li class="breadcrumb-item active">Clinet Table</li>
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
                               Clinet DataTable 
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>name</th>
                                            <th>description</th>
                                            <th>img</th>
                                            <th>email</th>
                                            <th>phone_number</th>
                                            <th>edit</th>
                                            <th>delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>id</th>
                                            <th>name</th>
                                            <th>description</th>
                                            <th>img</th>
                                            <th>email</th>
                                            <th>phone_number</th>
                                            <th>edit</th>
                                            <th>delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($clinets as $clinet)
                                        <tr>
                                            <td>{{ $clinet->id }}</td>
                                            <td>>{{ $clinet->name }}</td>
                                            <td>>{{ $clinet->description }}h</td>
                                            <td>>{{ $clinet->img }}</td>
                                            <td>>{{ $clinet->email }}</td>
                                            <td>>{{ $clinet->phone_number }}</td>
                                            <td class="actions-cell">
                                            <a href="{{URL::to('/editClinet')}}"><button class="button-68" role="button" type="button">edit</button></a>
                                        </td>
                                        <td class="actions-cell">
                                        <a href="{{URL::to('/dropClinet')}}"><button class="button-68" role="button" type="button">delete</button></a>
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