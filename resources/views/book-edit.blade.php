@extends('layouts.mainlayouts')

@section('title','Edit Buku')
    
@section('content')

    <div class="content-wrapper my-5"> 
        
        <div class="container">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit  Buku</h3>
                        </div>
                        <form action="/book-edit/{{ $book->slug }}" method="post" enctype="multipart/form-data" >
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="code">Code</label>
                                    <input type="text" id="code" name="book_code" class="form-control" placeholder="Masukkan Kode Buku" required value="{{ $book->book_code }}">
                                </div>
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" id="title" name="title" class="form-control" placeholder="Masukkan Title Buku" required value="{{ $book->title }}">
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" class="form-control">
                                </div>

                                <div class="my-3">
                                    <label for="currentImage" class="form-label" style="display: block" >Current Image</label>
                                    @if ($book->cover!='')
                                        <img src="{{ asset('storage/cover/'.$book->cover) }}" alt="" width="300px" >
                                    @else
                                        <img src="{{ asset('image/book.jpg') }}" alt="" width="300px">
                                    @endif
                                </div>

                                <div>
                                    <label for="category" class="form-label">Category</label>
                                    <select name="categories[]" id="category" class="form-control custom-select">
                                        <option value="">Pilih Category..</option>
                                        @foreach($categories  as $item)
                                            <option value="{{ $item->id }}"> {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="my-3">
                                    <label for="currentCategory" class="form-label">Current Category</label>
                                    <ul>
                                        @foreach ($book->categories as $category)
                                            <li>{{ $category->name }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
