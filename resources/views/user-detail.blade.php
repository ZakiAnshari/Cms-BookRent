@extends('layouts.mainlayouts')

@section('title','Detail Users')
    
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"> Halaman User Detail</h1>
                    </div>
                </div>
                <div class="mx-2">
                    @if ($user->status == 'inactive')
                        <a href="/user-approve/{{ $user->slug }}">
                            <button type="button" class="btn btn-success ">Approve User</button>
                        </a>
                    @endif
                </div>
            </div>
        </div>
        
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                   
                    <section class="col-lg-12 ">
                        <div class="container-fluid">
                            <div class="my-2">
                                @if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
                            </div>
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Detail User</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form id="quickForm" novalidate="novalidate">
                                    
                                    <div class="card-body">
                                       
                                        <div class="form-group">
                                            <label for="">Username</label>
                                            <input type="text"  class="form-control" value="{{ $user->username }}" >
                                        </div>
                                        <div class="form-group">
                                            <label for="">Phone</label>
                                            <input type="text"  class="form-control" value="{{ $user->phone }}" >
                                        </div>
                                        <div class="form-group">
                                            <label for="">Address</label>
                                            <input type="text"  class="form-control" value="{{ $user->address }}" >
                                        </div>
                                        <div class="form-group">
                                            <label for="">Status</label>
                                            <input type="text"  class="form-control" value="{{ $user->status }}" >
                                        </div>
                                        
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </section>
        

        <div>
            <div class="container p-4">
                <x-rent-log-table :rentlog='$rent_logs'/>
            </div>
        </div>
    </div>
@endsection
