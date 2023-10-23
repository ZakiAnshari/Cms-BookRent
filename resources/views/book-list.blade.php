@extends('layouts.frond-end')

@section('title','Home')
@section('content')
		<section id="mu-book-overview">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-book-overview-area">

							<div class="mu-heading-area">
								<h2 class="mu-heading-title" style="color: antiquewhite;">BOOK LIST</h2>
								<span class="mu-header-dot"></span>
								
							</div>

                            <form action="">
                                    <div class="row">
                                        <div class="col-12 col-sm-5">
                                            <select name="category" id="category" class="form-control">
                                                <option value="">Select Category</option>
                                                @foreach ($categories as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <br>
                                        <div class="col-12 col-sm-5">
                                            <div class=" mb-3 ">
                                                <input type="text" name="title" class="form-control" placeholder="Search book">
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-12 col-sm-2 ">
                                            <button type="submit" class="mu-send-msg-btn media" style="padding: 6px;border-radius: 5px;background: crimson;"><span>SEARCH</span></button>
                                        </div>
                                    </div>
                            </form>
                            
							<!-- Start Book Overview Content -->
							<div class="mu-book-overview-content ">
								<div class="row ">
                                    @foreach ($books as $item)
                                        <div class="col-md-3 col-sm-6 " >
                                            <div class="mu-book-overview-single">
                                                <img width="80%" src="{{ $item->cover != null ? asset('storage/cover/'.$item->cover): asset ('image/book.jpg')}}" draggable="false">
                                                <br><br>
                                                <h4 class="">{{ $item->book_code }}</h4>
                                                <p>{{ $item->title }}</p>
                                                <br>
                                                <p style="font-weight: bold;font-size: 15px;" class="text-right {{ $item->status == 'in stock' ? 'text-success' : 'text-danger' }}">{{ $item->status }}</p>
                                            </div>
                                        </div>
                                    @endforeach
								</div>
							</div>
							<!-- End Book Overview Content -->

						</div>
					</div>
				</div>
			</div>
		</section>
@endsection