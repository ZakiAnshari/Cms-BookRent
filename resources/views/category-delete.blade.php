@extends('layouts.mainlayouts')

@section('title','Delete-Kategori')
    
@section('content')
    <div class="content-wrapper p-4 "> 
        <div class="container">
            <h2>Apa anda yakin ingin menghapus category {{ $category->name }} ..?</h2>
        </div>
        <div>
            <a href="/categories-destroy/{{ $category->slug }}">
                <button type="button" class="btn btn-primary">Iyaa</button>
            </a>
            <a href="/categories">
                <button type="button" class="btn btn-danger">Tidak</button>
            </a>
        </div>
    </div>
@endsection
