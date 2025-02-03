@extends('layout.dashboard')
@section('content')

<form action="{{Route('input')}}">
    <div class="container-fluid container">
        <h1 style="text-align: center; margin-top: 50px;">CAR</h1>
        <table class="table table-info">
            <tr>
                <th>Merk</th>
                <th>Image</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
            @forelse ($mobil as $car)
                <tr>
                    <td>{{$car->merk}}</td>
                    <td>{{$car->image}}</td>
                    <td>{{$car->category}}</td>
                    <td><a href="{{route('viewEdit', $car->id_car)}}">edit</a>/<a
                            href="{{route('actionDelete', $car->id_car)}}">delete</a></td>
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