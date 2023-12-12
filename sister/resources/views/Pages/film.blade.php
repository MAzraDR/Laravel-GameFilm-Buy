@extends('Partials.navbar')
<div class="container mt-5 pt-5">
    <div class="row">
        <h1>Films</h1>
        <?php foreach ($data_body['films'] as $data) : ?>
            <div class="col-4">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-4">
                            <img src="<?= $data['image_url']; ?>" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title h6"><?= $data['title']; ?></h5>
                                <p class="card-text small mb-1"><?= $data['genre']; ?> | <?= $data['year']; ?> | <?= $data['rating']; ?></p>
                                <p class="card-text text-start"><?= $data['sinopsis']; ?></p>
                                <a href="{{ route('pinjamfilm.create', ['id' => $data['id']]) }}" class="btn btn-primary">Buy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
        </div>
</div>