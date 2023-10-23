@extends('layouts.frond-end')

@section('title','Profile')
    
@section('content')
<br><br><br><br><br><br><br>
    <div class=" table ">
        <div class="container">
            <div class="container p-4">
                <x-rent-log-table :rentlog='$rent_logs'/>
            </div>
        </div>
    </div>
    
@endsection
