<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid container">
        <h1 style="text-align: center">CAR</h1>
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
                    <td><a href="{{route ('viewEdit', $car->id_car)}}">edit</a>/<a href="">delete</a></td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" style="text-align: center">data in empty</td>
                </tr>
            @endforelse
        </table>
        <button type="button" class="btn btn-primary">Primary</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>