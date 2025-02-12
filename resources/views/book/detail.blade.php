@extends('layout.bookDashboard')
@section('content')
<form action="{{route('book.detail', $book->book_id)}}">
    <center>
        <img src="{{asset('images/'.$book->image)}}" alt="" width=" 20%" style="margin-top: 20px">
    </center>
    <h2 class="mt-4" style="text-align: center;">{{$book->judul}}</h2>
    <h4 class="mt-4" style="text-align: center;">Author: {{$book->author}}</h4>
    <p class="ms-5">Desk: {{$book->desk}}</p>
    <p class="ms-5">Category: {{$book->name}}</p>
    <a href="{{route('book.edit', $book->book_id)}}"><button type="button"
            class="btn btn-warning ms-5">Edit</button></a>
</form>
@endsection 