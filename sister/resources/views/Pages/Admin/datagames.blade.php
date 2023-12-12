@extends('Partials.navbar')

<body class="d-flex align-items-center justify-content-center" style="height: 100vh;">
    <div class="container mt-5 pt-5">      
        <table id="filmsTable" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Genre</th>
                    <th>Year</th>
                    <th>Rating</th>
                    <th>Sinopsis</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data_body['games'] as $data) : ?>
                <tr>
                    <td>
                        <?= $data['title']; ?>
                    </td>
                    <td>
                        <?= $data['genre']; ?>
                    </td>
                    <td>
                        <?= $data['year']; ?>
                    </td>
                    <td>
                        <?= $data['rating']; ?>
                    </td>
                    <td>
                        <?= $data['sinopsis']; ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Referensi DataTables Initialization -->
    <script>
        $(document).ready( function () {
    $('.table').DataTable();
} );
    </script>
</body>