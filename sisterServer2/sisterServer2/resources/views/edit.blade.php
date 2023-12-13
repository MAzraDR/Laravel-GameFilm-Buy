<!-- resources/views/novel
    /edit.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Film

    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <main class="container">
        <h1 class="mt-5">Edit Film

        </h1>

        <!-- Formulir untuk mengedit novel-->
        <form method="post" action="{{ route('filmsserver.update', ['id' => $film->id]) }}">

            @csrf
            @method('put')

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
                <label for="image_url" class="col-sm-2 col-form-label">image_url:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="image_url" required>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </div>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>