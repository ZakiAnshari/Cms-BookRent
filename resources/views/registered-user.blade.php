@extends('layouts.mainlayouts')

@section('title','Users')
    
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Halaman User Registered</h1>
                    </div>
                    
                </div>
            </div>
        </div>
        
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <section class="col-lg-12 ">
                        <div class="container-fluid">
                            <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">New Registered User</h3>
                                </div>
                                <br>
                                <div class="mx-4" >
                                    <a href="/users">
                                        <button type="button" class="btn btn-info ">Approved User List</button>
                                    </a>
                                </div>
                                
                                <div class="my-2">
                                    @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 5%">No</th>
                                            <th style="width: 20%">Username</th>
                                            <th style="width: 20%">Phone</th>
                                            <th style="width: 10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($registeredUser as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->username }}</td>
                                                <td>
                                                    @if($item->phone)
                                                        {{ $item->phone }}
                                                    @else
                                                        -
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="/user-detail/{{ $item->slug }}">
                                                        <button type="button" class="btn btn-success ">detail</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer clearfix">
                                <ul class="pagination pagination-sm m-0 float-right">
                                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                </ul>
                                </div>
                            </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
        
    </div>
@endsection
