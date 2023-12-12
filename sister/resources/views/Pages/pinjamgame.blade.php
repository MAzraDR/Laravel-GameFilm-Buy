@extends('Partials.navbar')

<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{route('pinjamgame.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp" value="{{ auth()->user()->email }}" readonly>
                </div>
                <div class="mb-3">
                    <label for="game_id" class="form-label">Game ID</label>
                    <input name="game_id" type="text" class="form-control" id="game_id" required readonly>
                </div>
                <div class="mb-3">
                    <label for="borrowed_at" class="form-label">Borrowed At</label>
                    <input name="borrowed_at" type="date" class="form-control" id="borrowed_at" required>
                </div>
                <div class="mb-3">
                    <label for="due_date" class="form-label">Due Date</label>
                    <input name="due_date" type="date" class="form-control" id="due_date" required>
                </div>                               
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<script>
    // Mendapatkan nilai film_id dari URL (anda mungkin perlu menyesuaikan cara Anda mendapatkan nilai ini)
    const gameid = window.location.pathname.split('/').pop();

    // Mengisi nilai film_id pada input dengan id film_id
    document.getElementById('game_id').value = gameid;

    // Mendapatkan tanggal hari ini
    const today = new Date().toISOString().split('T')[0];

    // Mendapatkan tanggal seminggu setelah hari ini
    const nextWeek = new Date();
    nextWeek.setDate(nextWeek.getDate() + 7);
    const nextWeekFormatted = nextWeek.toISOString().split('T')[0];

    // Mengisi nilai pada elemen formulir
    document.getElementById('borrowed_at').value = today;
    document.getElementById('due_date').value = nextWeekFormatted;
</script>
