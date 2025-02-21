@extends('layout.bookDashboard')
@section('content')
<form action="{{route('book.update', $book->book_id)}}" method="POST">
    @csrf

    @method('put')
    <div class="container">
        <h1 style="text-align: center; padding-top: 50px">EDIT BUKU</h1>
        <!-- Content here -->
        <div class="input-group mt-5 mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Judul</span>
            <input type="text" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default" name="judul" value="{{$book->judul}}">
        </div>
        <div class="input-group mt-5 mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Author</span>
            <input type="text" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default" name="author" value="{{$book->author}}">
        </div>
        <div class="input-group mt-5 mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Desk</span>
            <input type="text" class="form-control" aria-label="Sizing example input"
                aria-describedby="inputGroup-sizing-default" name="desk" value="{{$book->desk}}">
        </div>
        <br>
        <button type="submit" class="btn btn-success">Success</button>

</form>
@endsection