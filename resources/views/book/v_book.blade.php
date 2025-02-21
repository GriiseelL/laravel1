@extends('layout.bookDashboard')
@section('content')
<form action="{{route('book.create')}}">
    <div class="container-fluid container">
        <div class="row">
            <h1 style="text-align: center; margin-top: 60px;">BOOK</h1>
            @foreach ($buku as $book)
                <div class="col-md-3" style="margin-top: 30px;">
                    <div class="card" style="width: 18rem; margin-top: 20px;">
                        <img src="{{asset('images/'.$book->image)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$book->judul}}</h5>
                            <p class="card-text">{{$book->desk}}</p>
                            <a href="{{Route('book.detail', $book->book_id)}}" class="btn btn-primary">See more</a>
                          <a href="{{route('book.destroy', $book->book_id)}}"><button type="button" class="btn btn-danger">Delete</button></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> <br>
        <button type="submit" class="btn btn-primary">Create</button>
    </div>
</form>
@endsection