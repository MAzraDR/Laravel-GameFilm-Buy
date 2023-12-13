<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Film</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
    
</head>
<body class="bg-light">
    <main class="container">
        <h1 class="mt-5">Films</h1>

        <!-- Formulir untuk menambah novel -->
        <form method="post" action="{{ route('filmsserver.store') }}">
            @csrf
            <div class="mb-3 row">
                <label for="title" class="col-sm-2 col-form-label">title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="genre" class="col-sm-2 col-form-label">genre</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="genre" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="year" class="col-sm-2 col-form-label">year</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="year" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="rating" class="col-sm-2 col-form-label">rating</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="rating" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="sinopsis" class="col-sm-2 col-form-label">sinopsis</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="sinopsis" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="image_url" class="col-sm-2 col-form-label">image_url</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="image_url" required>
                </div>
            </div>
    
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </div>
        </form>

        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="col-md-1">No</th>
                        <th class="col-md-1">title</th>
                        <th class="col-md-1">genre</th>
                        <th class="col-md-2">year</th>
                        <th class="col-md-2">rating</th>
                        <th class="col-md-2">sinopsis</th>
                        <th class="col-md-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $count = 1; // Inisialisasi variabel hitung
                    @endphp
                    @foreach($films as $films)
                        <tr>
                            <td>{{ $count }}</td>
                            <td>{{ $films->title }}</td>
                            <td>{{ $films->genre }}</td>
                            <td>{{ $films->year }}</td>
                            <td>{{ $films->rating }}</td>
                            <td>{{ $films->sinopsis }}</td>                                                        
                            <td>
                                <a href='{{ url("/films/{$films->id}/edit") }}' class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ url("/films/{$films->id}") }}" method="post" style="display: inline-block;">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @php
                            $count++; // Tingkatkan nilai hitung setiap iterasi
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>