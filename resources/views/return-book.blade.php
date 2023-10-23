@extends('layouts.mainlayouts')

@section('title','Book_return')
    
@section('content')
<div class="content-wrapper my-5">
    <div class="container">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">PENGEMBALIAN BUKU</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="book-return" method="post">

                @csrf
                <div class="card-body">
                    <div class="my-2">
                        @if (session('message'))
                            <div class="alert {{ session('alert-class') }}">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="user">User</label>
                        <select name="user_id" id="user" class="form-control userbox">
                            <option value="">Select User</option>
                            @foreach ($users as $item)
                                <option value="{{ $item->id }}">{{ $item->username }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="book">Book</label>
                        <select name="book_id" id="book" class="form-control userbox">
                            <option value="">Select Book</option>
                            @foreach ($books as $item)
                                <option value="{{ $item->id }}">{{ $item->book_code }}{{ $item->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <!-- /.card-body -->
    
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
