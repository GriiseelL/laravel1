@extends('layout.bookDashboard')
@section('content')
    <form action="{{Route('book.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <h1 style="text-align: center; padding-top: 50px">Category</h1>
            <!-- Content here -->
            <div class="input-group mt-5 mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Judul</span>
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="judul">
            </div>
            <div class="input-group mt-5 mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Author</span>
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="author">
            </div>
            <div class="input-group mt-5 mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Desk</span>
                <input type="text" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="desk">
            </div>
            <div class="input-group mt-5 mb-3">
                <span class="input-group-text" id="inputGroup-sizing-default">Image</span>
                <input type="file" class="form-control" aria-label="Sizing example input"
                    aria-describedby="inputGroup-sizing-default" name="img">
            </div> <br>
            <div class="mb-3">
                <label for="disabledSelect" class="form-label">Category</label>
                <select id="" class="form-select" name="ctg">
                    @foreach ($kategori as $category)
                        <option value="{{$category->id_category}}">{{$category->name}}</option> 
                    @endforeach
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Success</button>

    </form>
@endsection