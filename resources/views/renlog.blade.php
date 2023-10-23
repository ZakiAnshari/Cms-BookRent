@extends('layouts.mainlayouts')

@section('title','Sewa Log')
    
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <br><br>
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Sewa Log</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <x-rent-log-table :rentlog='$rent_logs'/>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>
@endsection