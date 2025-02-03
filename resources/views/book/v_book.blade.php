@extends('layout.bookDashboard')
@section('content')
<form action="">
    <div class="container-fluid container">
        <div class="row">
            <h1 style="text-align: center; margin-top: 60px;">BOOK</h1>
            @foreach ($buku as $book)
                <div class="col-md-3" style="margin-left: 20px; margin-top: 30px;">
                    <div class="card" style="width: 18rem; margin-top: 20px;">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$book->judul}}</h5>
                            <p class="card-text">{{$book->desk}}</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div> <br>
        <button type="button" class="btn btn-info">Create</button>
    </div>
</form>
@endsection