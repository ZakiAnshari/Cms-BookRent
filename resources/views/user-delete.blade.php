@extends('layouts.mainlayouts')

@section('title','Delete-User')
    
@section('content')
    <div class="content-wrapper p-4 "> 
        <div class="container">
            <h2>Apa anda yakin ingin menghapus category {{ $user->username }} ..?</h2>
        </div>
        <div>
            <a href="/user-destroy/{{ $user->slug }}">
                <button type="button" class="btn btn-primary">Iyaa</button>
            </a>
            <a href="/users">
                <button type="button" class="btn btn-danger">Tidak</button>
            </a>
        </div>
    </div>
@endsection
