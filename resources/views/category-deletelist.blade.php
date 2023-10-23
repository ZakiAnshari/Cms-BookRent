@extends('layouts.mainlayouts')

@section('title','Deleted Kategori')
    
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Deleted Kategori List</h1>
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
                                    <h3 class="card-title">Sewa Log</h3>
                                </div>
                                <br>
                                <div >
                                    <a href="/categories">
                                        <button type="button" class="btn btn-danger mx-3">Kembali</button>
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
                                            <th style="width: 50%">Name</th>
                                            <th style="width: 5%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($deletedCategories as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>
                                                <a href="categories-restore/{{$item->slug}}">
                                                    <button type="button" class="btn btn-primary">Restore</button>
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
