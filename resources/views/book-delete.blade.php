@extends('layouts.mainlayouts')

@section('title','Delete-Book')
    
@section('content')
    <div class="content-wrapper p-4 "> 
        <div class="container">
            <h2>Apa anda yakin ingin menghapus Book {{ $book -> title }} ..?</h2>
        </div>
        <div>
            <a href="/book-destroy/{{ $book->slug }}">
                <button type="button" class="btn btn-primary">Iyaa</button>
            </a>
            <a href="/books">
                <button type="button" class="btn btn-danger">Tidak</button>
            </a>
        </div>
    </div>
@endsection
