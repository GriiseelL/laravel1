@extends('layout.dashboard')
@section('content')
<form action="{{Route('category.create')}}">
    <div class="container-fluid container">
        <h1 style="text-align: center; margin-top: 50px;">CATEGORY</h1>
        <table class="table table-info">
            <tr>
                <th>Id Category</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
            @forelse ($kategori as $category)
                <tr>
                    <td>{{$category->id_category}}</td>
                    <td>{{$category->name}}</td>
                    {{-- <td>{{$car->category}}</td> --}}
                    <td><a href="{{route('category.edit', $category->id_category)}}">edit</a>/<a
                            href="{{route('category.destroy', $category->id_category)}}">delete</a></td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" style="text-align: center">data in empty</td>
                </tr>
            @endforelse
        </table>
        <button type="submit" class="btn btn-primary">Primary</button>
    </div>
</form>
@endsection