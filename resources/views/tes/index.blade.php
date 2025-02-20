{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{route('data.detail')}}">
        @csrf

        @foreach ($data as $data)

            <div class="col-md-3" style="margin-top: 30px;">
                <div class="card" style="width: 18rem; margin-top: 20px;">
                    <img src="{{asset('images/' . $book->image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$data->}}</h5>
                        <p class="card-text">{{$book->desk}}</p>
                        <a href="{{Route('book.detail', $book->book_id)}}" class="btn btn-primary">See more</a>
                        <a href="{{route('book.destroy', $book->book_id)}}"><button type="button"
                                class="btn btn-danger">Delete</button></a>
                    </div>
                </div>
            </div>
        @endforeach

        <button>send</button>
    </form>
</body>

</html> --}}