@extends('layout')
@section('content')
<h1 class="h3 mb-2 text-gray-800">Table Data</h1>
                <div class="card shadow mb-4 text-light">
                        <div class="card-header py-3 text-light">
                            <div class="btn btn-primary ">
                                <i class="fas fa-user-plus"></i>
                                <a href="/data-siswa/create" class="btn btn-prifmary text-light">Add Data User</a>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $item)
                                        <tr>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->username}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->role}}</td>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection