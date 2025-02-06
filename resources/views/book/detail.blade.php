@extends('layout.bookDashboard')
@section('content')
<form action="{{route('book.detail', $book->book_id)}}">
    @foreach ($buku as $book)
    <center>
        <img src="" alt="" width=" 20%" style="margin-top: 20px">
    </center>
    <h2 class="mt-4" style="text-align: center;">{{$book->judul}}</h2>
    <h4 class="mt-4" style="text-align: center;"></h4>
    <p class="ms-5">fhjkdhgk</p>
    <button type="button" class="btn btn-warning ms-5">Edit</button>
    @endforeach
</form>
@endsection